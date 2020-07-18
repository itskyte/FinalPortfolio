<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Post;
use Illuminate\Http\Request;
use DB;
class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=> ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('dashboard.posts.post')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'location_link'=>'required',

            'area'=>'required',
            'address'=>'required',
            'cover_image'=>'image|nullable|max:1999 ',
            'floorplan_image'=>'image|nullable|max:1999 '

        ]);
        if ($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to strore
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.png';
        }
        if ($request->hasFile('floorplan_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('floorplan_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('floorplan_image')->getClientOriginalExtension();
            //Filename to strore
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('floorplan_image')->storeAs('public/floorplan_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.png';
        }
        $post= new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->location_link = $request->input('location_link');
        $post->type = $request->input('type');
        $post->status = $request->input('status');
        $post->area = $request->input('area');
        $post->address = $request->input('address');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->floorplan_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Property Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        //Check User ID
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        return view('dashboard.posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'location_link'=>'required',

            'area'=>'required',
            'address'=>'required',

        ]);
        if ($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to strore
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        if ($request->hasFile('floorplan_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('floorplan_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('floorplan_image')->getClientOriginalExtension();
            //Filename to strore
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('floorplan_image')->storeAs('public/floorplan_image',$fileNameToStore);
        }
        $post= Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->location_link = $request->input('location_link');
        $post->type = $request->input('type');
        $post->status = $request->input('status');
        $post->area = $request->input('area');
        $post->address = $request->input('address');
        if ($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        if ($request->hasFile('floorplan_image')){
            $post->floorplan_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Property Updated <hr>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        if($post->cover_image != 'noimage.png'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/floorplan_images/'.$post->floorplan_image);
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Property Removed ');
    }
}
