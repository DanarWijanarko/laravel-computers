<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Http\Requests\StoreLaptopRequest;
use App\Http\Requests\UpdateLaptopRequest;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.laptop.edit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLaptopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaptopRequest $request, Laptop $laptop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
        //
    }
}
