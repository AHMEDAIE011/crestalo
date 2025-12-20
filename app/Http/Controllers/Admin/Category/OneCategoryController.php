<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use App\Models\OneCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;

class OneCategoryController extends Controller

{
    public function __construct()
    {
        $this->middleware('can:oneCategories');
    }
    public function index()
    {
        $order_by = request()->order_by ?? 'desc';
        $sort_by = request()->sort_by ?? 'id';
        $limit_by = request()->limit_by ?? 5;

        $categories = OneCategory::withCount('categories')->when(request()->keyword, function ($query) {
            $query->where('name', 'LIKE', '%' . request()->keyword . '%');
        })->when(!is_null(request()->status), function ($query) {
            $query->where('status', request()->status);
        });

        $categories = $categories->orderBy($sort_by, $order_by)->paginate($limit_by);

        return view('admin.oneCategories.index', compact('categories'));
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
    public function store(CategoryRequest $request)
    {
        $request->validated();

         $category = OneCategory::create($request->except('_token'));
         if(!$category){
            Session::flash('error', ' Try again latter!');
            return redirect()->route('admin.oneCategories.index');
         }
         Session::flash('success', 'Category Created Suuccessfully!');
         return redirect()->route('admin.oneCategories.index');
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

    public function update(CategoryRequest $request, string $id)
    {
        $request->validated();

        $category = OneCategory::findOrFail($id);
        $category = $category->update($request->except(['_token' , '_method']));
        if(!$category){
            Session::flash('error', ' Try Again Latter!');
            return redirect()->route('admin.oneCategories.index');
        }

        Session::flash('success', 'Category Deleted Suuccessfully!');
        return redirect()->route('admin.oneCategories.index');
    }


    public function changeStatus($id)
    {
        $category = OneCategory::findOrFail($id);

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
        $category = OneCategory::findOrFail($id);
        $category->delete();

        Session::flash('success', 'Category Deleted Suuccessfully!');
        return redirect()->route('admin.oneCategories.index');
    }
}
