<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

use App\image_duas;

class ImageController extends Controller
{
    /* 1. This method relates to the "images list" view */
      public function index()
      {
         $images = image_duas::paginate(10);
         /*return view('image/image-list')->with('images', $images);*/
       return view('image/index')->with('images', $images);
           
      }

/* 2. This method relates to the "add new image" view */
      public function create()
      {
         return view('/image/add-new-image');
      }

/* 3. This method relates to the "image detail" view */
      public function show($id)
      {
         $image = image_duas::find($id);
         return view('image/image-detail')->with('image', $image);
      }

/* 4. This method relates to the "edit image" view */
      public function edit($id)
      {
         $image = image_duas::find($id);
         return view('image/edit-image')->with('image', $image);
      }

       public function store(Request $request)
   {
      // Validation //
        $validation = Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
           
            'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:200'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $image = new image_duas;

        $file = $request->file('userfile');//"/tmp/php50arCc" 

        $destination_path = 'uploads/';
        
        $filename = str_random(6).'_'.$file->getClientOriginalName(); //TXQBlA_naruto.jpeg" 
        
        $file->move($destination_path, $filename);///tmp/phpnU6X1a
        
        $image->file = $destination_path . $filename;
        $image->caption = $request->input('caption');
        
        $image->save();

        return redirect('/image')->with('message','You just uploaded an image!');
   }

   public function update(Request $request, $id)
   {
      // Validation //
        $validation = \Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            
            'userfile'    => 'sometimes|image|mimes:jpeg,png|min:1|max:200'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $image = image_duas::find($id);

        if( $request->hasFile('userfile') ){
           $file = $request->file('userfile');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $image->file = $destination_path . $filename;
        }
        
        $image->caption = $request->input('caption');
        
        $image->save();

        return redirect('/image')->with('message','You just updated an image!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      $image = image_duas::find($id);
      $image->delete();
      return redirect('/image')->with('message','You just deleted an image!');
   }


}
