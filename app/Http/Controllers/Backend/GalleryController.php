<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class GalleryController extends Controller
{

    public function __construct(){
    $this->middleware('auth');
  }

  
    public function PhotoGallery(){
    	$photo = DB::table('photos')->orderBy('id','desc')->paginate(5);
    	return view('backend.gallery.photos',compact('photo'));
    }


    public function AddPhoto(){
    	return view('backend.gallery.createphoto');
    }



   public function StorePhoto(Request $request){
   	 
   	 $data = array();
  	 $data['title'] = $request->title;
  	 $data['type'] = $request->type;
  	 

  	 $image = $request->photo;
  	 	if ($image) {
  	 		$image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
  	 		Image::make($image)->resize(500,300)->save('image/photogallery/'.$image_one);
  	 		$data['photo'] = 'image/photogallery/'.$image_one;
  	 		// image/photogallery/343434.png
  	 		DB::table('photos')->insert($data);

  	 		$notification = array(
    	 	'message' => 'Photo Inserted Successfully',
    	 	'alert-type' => 'success'
    	 );

    	 return Redirect()->route('photo.gallery')->with($notification);
  	 	
  	 	}else{
  	 		return Redirect()->back();
  	 	} // End Condition

   }// END Methods 



   public function VideoGallery(){
   	$video = DB::table('videos')->orderBy('id','desc')->paginate(5);
   	return view('backend.gallery.video',compact('video'));
   }// END Methods 


   public function AddVideo(){
   	return view('backend.gallery.videocreate');
   }// END Methods 


  public function StoreVideo(Request $request){

  	 $data = array();
  	 $data['title'] = $request->title;
  	 $data['embed_code'] = $request->embed_code;
  	 $data['type'] = $request->type;
  	 DB::table('videos')->insert($data);

  	 $notification = array(
    	 	'message' => 'Video Inserted Successfully',
    	 	'alert-type' => 'info'
    	 );

    	 return Redirect()->route('video.gallery')->with($notification);

  }// END Methods 
 

}
 