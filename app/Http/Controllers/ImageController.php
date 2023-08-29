<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store( Request $request){
        foreach ($request->file('archivo') as $file) {
            $filename= 'collection_'.time().$file->getClientOriginalName();
            $file->move('../resources/imagenes', $filename);
            $filemodel=new Image;
            $filemodel->name=$filename;
            if ($filemodel->save()) {
                              $response['success'] = 'true';
                              $response['message'] = 'images Added Successfully!';
                          } else {
                              $response['success'] = 'false';
                              $response['message'] = 'Error in saving data try again!';
                          }
        }

    }


}
