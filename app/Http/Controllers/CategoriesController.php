<?php
/** @noinspection ALL */


namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Categories::class);
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
    public function create(Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        $this->authorize('create', Categories::class);
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Categories::class);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->storePublicly('categories');
        }


        $categories = Categories::create($data);
        $data = $categories->toArray();
        $data = ['data' => $data, 'message' => __("controller.success.created")];
        if($request->expectsJson()) {
            return response()->json($data, 201);
        }
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories, Request $request)
    {
        $this->authorize('view', $categories);
        $categories = $categories->load(['courses'])->paginate()->toArray();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories, Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        $this->authorize('update', $categories);
        return view('categories.edit', compact('categories'));
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
        $this->authorize('update', $categories);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            if($categories->image) Storage::delete($categories->image);
            $data['image'] = $request->file('image')->storePublicly('categories');
        }

        $categories->update($data);
        $data = $categories->toArray();
        $data = ['data' => $data, 'message' => __("controller.success.updated")];
        if($request->expectsJson()) {
            return response()->json($data, 200);
        }
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        $this->authorize('delete', $categories);
        if($categories->image) Storage::delete($categories->image);
        $categories->delete();
        $data = ['message' => __("controller.success.deleted")];
        if(request()->expectsJson()) {
            return response()->json($data, 200);
        }
        return redirect()->route('categories.index');
    }
}
