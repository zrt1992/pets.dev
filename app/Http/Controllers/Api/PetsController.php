<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $pets;

    public function __construct()
    {
        $this->pets = new \App\Pets;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\PetAddRequest $request)
    {
        $request->request->add([
            'updated_at' => new DateTime()
        ]);
        $request->request->add([
            'created_at' => new DateTime()
        ]);
        $request->request->add([
            'image' => $request->image
        ]);
        $this->pets->fill($request->all());
        $this->pets->save();
        return response()->json($request->all());
    }
}
