<?php

namespace App\Http\Controllers\Admin\PagesManage;

use App\Models\Team;
use App\Models\Category;
use App\Utils\ImageManger;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\HeaderIndexRequest;

class TeamController extends Controller

{

    public function index()
    {
         $team = Team::get();

        return view('admin.team.index', compact('team'));
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
    public function store(TeamRequest $request)
    {
                $request->validated();

         $item = Team::create($request->except('_token','image'));
         ImageManger::uploadImages($request , null, $item);

         if(!$item){
            Session::flash('error', ' Try again latter!');
            return redirect()->route('admin.team.index');
         }
         Session::flash('success', 'item Created Suuccessfully!');
         return redirect()->route('admin.team.index');
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

    public function update(TeamRequest $request, string $id)
    {
                $request->validated();

        $item = Team::findOrFail($id);
         $item->update($request->except(['_token' , '_method' ,'image']));
         ImageManger::uploadImages($request , null, $item);

        if(!$item){
            Session::flash('error', ' Try Again Latter!');
            return redirect()->route('admin.team.index');
        }

        Session::flash('success', 'item Deleted Suuccessfully!');
        return redirect()->route('admin.team.index');
    }


    public function changeStatus($id)
    {
        $category = Team::findOrFail($id);

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
        $category = Team::findOrFail($id);
        $category->delete();

        Session::flash('success', 'Category Deleted Suuccessfully!');
        return redirect()->route('admin.team.index');
    }
}
