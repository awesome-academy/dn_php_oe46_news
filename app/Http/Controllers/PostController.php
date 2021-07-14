<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\Categorypost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $posts;
    public function __construct(PostRepositoryInterface $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->getAll();
        return view('admins.post.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorypost::all();
        return view('admins.post.add-posts', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($image=$request->file('img')) {
            $data['img'] = $this->posts->uploadFileImage($image);
        }
        $post = $this->posts->create($request, $data);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post = $this->posts->find($post);
        $categories = Categorypost::all();
        return view('admins.post.edit-post', compact('post', 'categories'));
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
        $data = $request->all();
        if ($newimage = $request->file('img')) {
            $post = $this->posts->find($id);
            $img_now= $post->img;
            if (File::exists(public_path('images/'."$img_now"))) {
                File::delete(public_path('images/'."$img_now"));
            }
            $data['img'] = $this->posts->uploadFileImage($newimage);
        }
        $post = $this->posts->update($id, $data);
        try {
            session()->flash('success', trans('task.update1'));

            return redirect()->route('posts.index');
        } catch (Exception $ex) {
            session()->flash('error', $ex->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('destroy', $post);
        $this->posts->delete($post->id);
        try {
            session()->flash('success', trans('task.delete1'));

            return redirect()->route('posts.index');
        } catch (Exception $ex) {
            session()->flash('error', $ex->getMessage());

            return redirect()->back();
        }
    }
}
