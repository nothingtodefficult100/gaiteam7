<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use Illuminate\Http\Request;
use DB;
use Image;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    //========= code with blog category===========


    public function blogCategoryShow(){
        $postcategory=DB::table('post_category')->get();
        return view('admin.blog.addcategory',compact('postcategory'));
    }


    public function storecategorydata  (Request $request) {
        $request->validate([
            'category_name_en'=>'required',
            'category_name_bn'=>'required'
        ]);

        $data=array();
    	$data['category_name_en']=$request->category_name_en;
        $data['category_name_bn']=$request->category_name_bn;
        DB::table('post_category')->insert($data);
        $notification=array(
            'messege'=>'Successfully category added',
            'alert-type'=>'success'
           );
        return Redirect()->back()->with($notification);



    }


    public function editpostcategory ($id) {
        $editcategoryvalue = DB::table('post_category')->where('id',$id)->first();
        return view('admin.blog.editcategory',compact('editcategoryvalue')) ;
    }


    public function updatepostcategory (Request $request,$id){
        $request->validate([
            'category_name_en'=>'required',
            'category_name_bn'=>'required'
        ]);
        $data=array();
        $data['category_name_en']=$request->category_name_en;
    	$data['category_name_bn']=$request->category_name_bn;
        DB::table('post_category')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Successfully Post category updated ',
            'alert-type'=>'success'
           );
       return Redirect()->route('add.blogcategory')->with($notification);
    }


    public function deletepostcategory ($id) {
        DB::table('post_category')->where('id',$id)->delete();
    	$notification=array(
                     'messege'=>'Successfully Post category Deleted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    }



    //=========end code with blog category



    public function create()
    {
    	$category=DB::table('post_category')->get();
    	//return response()->json($category);
    	return view('admin.blog.create',compact('category'));
    }









    public function store(Request $request)
    {
    	$data=array();
    	$data['post_title_en']=$request->post_title_en;
    	$data['post_title_bn']=$request->post_title_bn;
    	$data['category_id']=$request->category_id;
    	$data['details_en']=$request->details_en;
    	$data['details_bn']=$request->details_bn;

    	$post_image=$request->file('post_image');
    	if ($post_image) {
    		    $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('media/post/'.$image_one_name);
                $data['post_image']='media/post/'.$image_one_name;
                DB::table('posts')->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);

    	}else{
    		 $data['post_image']='';
              DB::table('posts')->insert($data);
               $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    	}
    }

    public function index()
    {
    	$post=DB::table('posts')->join('post_category','posts.category_id','post_category.id')
    	      ->select('posts.*','post_category.category_name_en')->get();
    	return view('admin.blog.index',compact('post'));
    }

    public function destroy($id)
    {
    	$post=DB::table('posts')->where('id',$id)->first();
    	$image=$post->post_image;
    	unlink($image);
    	DB::table('posts')->where('id',$id)->delete();
    	$notification=array(
                     'messege'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$post=DB::table('posts')->where('id',$id)->first();
    	return view('admin.blog.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
    	$oldimage=$request->old_image;
    	$data=array();
    	$data['post_title_en']=$request->post_title_en;
    	$data['post_title_bn']=$request->post_title_bn;
    	$data['category_id']=$request->category_id;
    	$data['details_en']=$request->details_en;
    	$data['details_bn']=$request->details_bn;
    	$post_image=$request->file('post_image');
    	 if ($post_image) {
    		    unlink($oldimage);
    		    $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('media/post/'.$image_one_name);
                $data['post_image']='media/post/'.$image_one_name;
                DB::table('posts')->where('id',$id)->update($data);
                $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);

    	 }else{
    		   $data['post_image']=$oldimage;
               DB::table('posts')->where('id',$id)->update($data);
               $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);
    	}
    }



    public function postDeteilsview  ($id) {
        $post=DB::table('posts')->where('id',$id)->first();
    	return view('pages.blog_deteils',compact('post'));
    }


}
