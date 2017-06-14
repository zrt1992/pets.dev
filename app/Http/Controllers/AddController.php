<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Mail;
use DB;

class AddController extends Controller
{
    protected $adobject;

    function __construct()
    {

        $this->adobject = new \App\Pets;
    }

    function index()
    {

        $data['provinces'] = \App\Province::get()->toArray();
        $data['cities'] = \App\City::get()->toArray();
        $data['categories'] = \App\Category::where('parent_id', NULL)->orderBy('name', 'ASC')->get();
        return view('post_add', $data);
    }

    public function editRefferal($refferal)
    {
        //dd('refferal');
        $data['ad'] = $this->adobject->where('refferal_key',$refferal)->with('category', 'image', 'provinces.cities')->firstOrFail()->toArray();
        $data['provinces'] = \App\Province::get()->toArray();
        $data['cities'] = \App\City::get()->toArray();
        return view('ad.edit', $data);

    }
public function posteditRefferal(Request $request,$id){
    $request->request->remove('_token');
    $this->adobject->where('id',$id)->update($request->all());
    return redirect()->back()->with('message', 'Updated Sucessfully');
}

    public function postAdPost(Request $request)
    {

        $refferalurl = base64_encode(session()->getId() + microtime());

        \Mail::to('zulfiqar_tariq@hotmail.com')->send(new \App\Mail\AddRegister("game", $refferalurl));
        die;
        $request->request->remove('_token');
//        $request->session()->push('add', ['heello'=>'developers','lol'=>'developers']);
//        dd($request->session()->all());
        if ($request->step == 1) {
//            $request->session()->push('add',
//                [
//                    'heello'=>'developers',
//                    'lol'=>'developers',
//                    'lol'=>'developers',
//
//                ]);
            $request->session()->put('is_pedigree', $request->is_pedigree);
            $request->session()->put('category_id', $request->category_id);
            $request->session()->put('kcp_number', $request->kcp_number);
            $request->session()->put('description', $request->description);
            $request->session()->put('is_vaccinated', $request->is_vaccinated);
            $request->session()->put('age', $request->age);

        }
        if ($request->step == 2) {
            $request->session()->put('full_name', $request->full_name);
            $request->session()->put('email', $request->email);
            $request->session()->put('province_id', $request->province_id);
            $request->session()->put('city_id', $request->city_id);
            $request->session()->put('phone_no', $request->phone_no);
        }
        if ($request->step == 3) {
            // dd($request->session()->all());

            $this->adobject->is_vaccinated = \Session::get('is_vaccinated');
            $this->adobject->is_pedigree = \Session::get('is_pedigree');
            $this->adobject->category_id = \Session::get('category_id');
            $this->adobject->kcp_number = \Session::get('kcp_number');
            $this->adobject->full_name = \Session::get('full_name');
            $this->adobject->email = \Session::get('email');
            $this->adobject->province_id = \Session::get('province_id');
            $this->adobject->city_id = \Session::get('city_id');
            $this->adobject->phone_no = \Session::get('phone_no');
            $this->adobject->save();
            $petid = $this->adobject->id;


            if ($request->hasFile('adimages1')) {
                $files = uploadInputs($request->adimages1, 'category_images');
                DB::table('image_pets')->insert(
                    [
                        'image_url' => $files,
                        'pet_id' => $petid
                    ]
                );

            }

            if ($request->hasFile('adimages2')) {
                $files = uploadInputs($request->adimages2, 'category_images');
                DB::table('image_pets')->insert(
                    [
                        'image_url' => $files,
                        'pet_id' => $petid
                    ]
                );
            }
            if ($request->hasFile('adimages3')) {
                $files = uploadInputs($request->adimages3, 'category_images');
                DB::table('image_pets')->insert(
                    [
                        'image_url' => $files,
                        'pet_id' => $petid
                    ]
                );
            }
            if ($request->hasFile('adimages4')) {
                $files = uploadInputs($request->adimages4, 'category_images');
                DB::table('image_pets')->insert(
                    [
                        'image_url' => $files,
                        'pet_id' => $petid
                    ]
                );
            }

        }


        return response()->json();
    }

    public function getChildCats()
    {
        $parentSlug = Input::get('term');
        //$parentId = \App\Category::where('slug', $parentSlug)->firstOrFail()->id;
        $breeds = \App\Category::where('parent_id', $parentSlug)->orderBy('name', 'ASC')->get();
        return response()->json($breeds);
    }

}
