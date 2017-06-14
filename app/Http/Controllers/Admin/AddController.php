<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    protected $addobj;

    public function __construct()
    {

        $this->addobj = new \App\Pets;
    }

    public function index()
    {

        $data['ads'] = $this->addobj->get();
        return view('vendor.voyager.ad.showall', $data);

        // return view('welcome',$data);
    }

    public function edit($id)
    {
        $data['ad'] = $this->addobj->where('id', $id)->with('category', 'image','provinces.cities')->firstOrFail()->toArray();
        $data['provinces'] = \App\Province::get()->toArray();
        $data['cities'] = \App\City::get()->toArray();
        return view('vendor.voyager.ad.edit', $data);
    }

    public function deleteimage($id)
    {
        \App\PetImage::where('id', $id)->delete();
        return redirect()->back()->with('message', 'photo deleted sucessfully');
    }

    public function postEdit($id=0,Request $request)
    {

        $request->request->remove('_token');
        $this->addobj->where('id',$id)->update($request->all());
        return redirect()->back()->with('message', 'Updated Sucessfully');


    }
}

