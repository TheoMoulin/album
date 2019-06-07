<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeImageRequest;
use App\Models\TypeImage;
use App\Repositories\TypeImageRepository;

class TypeImageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('typeimages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("typeimages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TypeImageRequest $request
     * @param TypeImageRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function store(TypeImageRequest $request, TypeImageRepository $repository)
    {
        $repository->store($request->all ());

        return redirect ()->route ('home')->with ('ok', __ ("Le type d'image a bien été enregistrée"));

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
     * @param TypeImage $typeImage
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeImage $typeimage)
    {
        return view("typeimages.edit", compact('typeimage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TypeImageRequest $typeImageRequest
     * @param TypeImage $typeImage
     * @return void
     */
    public function update(TypeImageRequest $request, TypeImage $typeimage)
    {
        $typeimage->update($request->all());

        return redirect()->route('home')->with('ok', __("Le type d'image a bien été modifiée"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TypeImage $typeimage
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(TypeImage $typeimage)
    {
        $typeimage->delete();

        return response()->json();
    }
}
