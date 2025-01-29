<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // show all
    public function index()
    {
        $menus = Menu::all();
        return response()->json($menus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    //  store new menu
    public function store(MenuRequest $request)
    {
        Menu::create($request->all());
        return response()->json(['message' => 'Menu created successfully'], 201);
    }

    //  show spesific menu
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    //  remove menu
    public function destroy(Menu $menu)
    {
        //
    }
}
