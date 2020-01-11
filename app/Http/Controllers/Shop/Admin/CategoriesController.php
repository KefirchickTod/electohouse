<?php

namespace App\Http\Controllers\Shop\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shop\BaseController;
use App\Models\ShopCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoriesController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination  = ShopCategory::paginate(5);

        return view('shop.admin.categories.index', ['pagination' =>$pagination]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $item = ShopCategory::findOrFail($id);
        $categoryList =  ShopCategory::all();
        return view('shop.admin.categories.edit',compact('item', 'categoryList'));
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
        $item = ShopCategory::find($id);
        if(empty($item)){
            return  back()->withErrors(['msg' => 'None note '.$id])->withInput();
        }
        $data = $request->all();
        foreach ($data as $var => $value){
            if(isset($item->$var)){
                $item->$var = $value;
            }
        }
        $result = $item->save();

        if($result){
            return redirect()->route('shop.admin.categories.edit', $item->id)->with(['success' => 'Success']);
        }
        return  back()->withErrors(['msg' => 'Error save'])->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
