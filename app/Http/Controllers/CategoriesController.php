<?php
/** @noinspection ALL */


namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Categories::all()->toArray();
        $data = ['data' => $data];
        $data['message'] = __("controller.success.get", ["data" => trans_choice("data.categories", count($data['data']))]);
        if ($request->expectsJson()) {
            return response()->json($data, 200);
        }
        return view('categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories, Request $request)
    {
        $categories = $categories->load(['courses'])->paginate()->toArray();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
