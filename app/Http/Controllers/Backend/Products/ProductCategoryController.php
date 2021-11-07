<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Http\Recursives\ProductCategoryRecursive;
use App\Http\Traits\DestroyModelTrait;
use App\Http\Traits\UpdateStatusModelTrait;
use App\Models\Products\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    use DestroyModelTrait, UpdateStatusModelTrait;
    private $category;
    private $productCategoryRecursive;

    public function __construct(Category $category, ProductCategoryRecursive $productCategoryRecursive)
    {
        $this->category = $category;
        $this->productCategoryRecursive = $productCategoryRecursive;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->with('subcategory')->where('parent_id', 0)->latest('id')->get();
        return view('backend.pages.product.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = $this->productCategoryRecursive->categoryRecursiveCreate($parentId = '');
        return view('backend.pages.product.category.create', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'image' => $request->image,
            'title_seo' => $request->title_seo,
            'keyword_seo' => $request->keyword_seo,
            'description_seo' => $request->description_seo,
            'slug' => Str::slug($request->name, '-'),
            'status' => $request->has('status')
        ]);

        return redirect()->route('admin.product.category.index')->with([
            'message' => ' Thêm danh mục thành công',
            'alert-type' => 'success'
        ]);
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
    public function edit($id)
    {
        $category = $this->category->findOrFail($id);
        $options = $this->productCategoryRecursive->categoryRecursiveEdit($category->parent_id);
        return view('backend.pages.product.category.edit', compact('category', 'options'));
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
        $old_image = $request->old_image;
        // dd($request->image);

        if ($request->file('images')) {
            unlink($old_image);
            $this->category->findOrFail($id)->update([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'image' => $request->image,
                'title_seo' => $request->title_seo,
                'keyword_seo' => $request->keyword_seo,
                'description_seo' => $request->description_seo,
                'slug' => Str::slug($request->name, '-'),
                'status' => $request->has('status')
            ]);

            return redirect()->route('admin.product.category.index')->with([
                'message' => 'Sửa danh mục thành công',
                'alert-type' => 'success'
            ]);
        } else {
            $this->category->findOrFail($id)->update([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'image' => $request->image,
                'title_seo' => $request->title_seo,
                'keyword_seo' => $request->keyword_seo,
                'description_seo' => $request->description_seo,
                'slug' => Str::slug($request->name, '-'),
                'status' => $request->has('status')
            ]);

            return redirect()->route('admin.product.category.index')->with([
                'message' => 'Sửa danh mục thành công',
                'alert-type' => 'success'
            ]);
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
        return $this->destroyModelTrait($id, $this->category);
    }

    public function updateStatus(Request $request)
    {
        $category = $this->category->findOrFail($request->id);
        // $status = $category->status;
        if ($category->status == 1) {
            $category->status = 0;
            $category->save();
            return response()->json(['success' => 'Thay đổi thành công !']);
        } else {
            $category->status = 1;
            $category->save();
            return response()->json(['success' => 'Thay đổi thành công !']);
        }
        // try {
        //     // $category =  $this->category->findOrFail($id);
        //     if ($request->status == 1) {
        //         $this->category->findOrFail($id)->update([
        //             'status' => 0
        //         ]);
        //     } else {
        //         $this->category->findOrFail($id)->update([
        //             'status' => 1
        //         ]);
        //     }
        //     // $category->save();
        //     return response()->json([
        //         'code' => 200,
        //         'message' => 'success'
        //     ], 200);
        // } catch (\Throwable $th) {
        //     Log::error('Message error : ' . $th->getMessage() . ' --- at line ' . $th->getLine());
        //     return response()->json([
        //         'code' => 500,
        //         'message' => 'error'
        //     ], 500);
        // }
    }
}
