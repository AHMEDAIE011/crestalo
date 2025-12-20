<?php

namespace App\Http\Controllers\Admin\PagesManage;

use App\Http\Requests\HeaderIndexRequest;
use App\Models\Category;
use App\Utils\ImageManger;
use App\Models\HeaderImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;

class HeaderController extends Controller

{

    public function index()
    {
         $hraderIndex = HeaderImage::get();

        return view('admin.hraderIndex.index', compact('hraderIndex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeaderIndexRequest $request)
    {
        $request->validated();

         $item = HeaderImage::create($request->except('_token','image'));
         ImageManger::uploadImages($request , null, $item);

         if(!$item){
            Session::flash('error', ' Try again latter!');
            return redirect()->route('admin.hraderIndex.index');
         }
         Session::flash('success', 'item Created Suuccessfully!');
         return redirect()->route('admin.hraderIndex.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(HeaderIndexRequest $request, string $id)
    {
                $request->validated();

        $item = HeaderImage::findOrFail($id);
         $item->update($request->except(['_token' , '_method' ,'image']));
         ImageManger::uploadImages($request , null, $item);

        if(!$item){
            Session::flash('error', ' Try Again Latter!');
            return redirect()->route('admin.hraderIndex.index');
        }

        Session::flash('success', 'item Deleted Suuccessfully!');
        return redirect()->route('admin.hraderIndex.index');
    }


    public function changeStatus($id)
    {
        $category = HeaderImage::findOrFail($id);

        if ($category->status == 1) {
            $category->update([
                'status' => 0,
            ]);
            Session::flash('success', 'category Blocked Suuccessfully!');
        } else {
            $category->update([
                'status' => 1,
            ]);
            Session::flash('success', 'category Active Suuccessfully!');
        }
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $category = HeaderImage::findOrFail($id);
        $category->delete();

        Session::flash('success', 'Category Deleted Suuccessfully!');
        return redirect()->route('admin.hraderIndex.index');
    }
}
