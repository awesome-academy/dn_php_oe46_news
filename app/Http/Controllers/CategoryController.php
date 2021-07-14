<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Categorypost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorypost::orderBy('created_at')->paginate(config('app.paginateCategory'));

        return view('admins.category.categories_post', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.category.add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Categorypost();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index');
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
    public function edit($category)
    {
        $category = Categorypost::find($category);
        return view('admins.category.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $category)
    {
        $category = Categorypost::find($category);
        try {
            $category->name = $request->name;
            $category->save();
            session()->flash('success', trans('task.update1'));
            
            return redirect()->route('categories.index');
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
    public function destroy($id)
    {
        $category = Categorypost::find($id);
        DB::beginTransaction();
        try {
            $category->posts()->delete();
            $category->delete();
            DB::commit();
            session()->flash('success', trans('task.delete1'));
            
            return redirect()->route('categories.index');
        } catch (Exception $ex) {
            DB::rollback();
            session()->flash('error', $ex->getMessage());
            return redirect()->back();
        }
    }
}
