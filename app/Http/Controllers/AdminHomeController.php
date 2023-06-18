<?php

namespace App\Http\Controllers;

use App\Models\ContactHeaderPhoto;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $data = Home::all();
        $contact_header = ContactHeaderPhoto::all();
        $pgname = 'home';
        return view('admin.home.index_home', compact('pgname', 'data','contact_header'));
    }

    public function create(Request $request)
    {
        $input = $request->all();

        if ($file = $request->file('site_logo')) {

            $name1 = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/home_image', $name1);

            $input['site_logo'] = $name1;
        }
        Home::create($input);

        $pgname = 'home';
        $data = Home::all();
        //return view('admin.home.index_home', compact('pgname', 'data'));
        return redirect()->action([AdminHomeController::class, 'index']);
    }

    public function update(Request $request, $id)
    {
        $data = Home::find($id);
        $input = $request->all();

        if ($file = $request->file('site_logo')) {
            if ($data->site_logo) {
                if (file_exists(public_path() . '/assets_admin/home_image/' . $data->site_logo)) {
                    unlink(public_path() . "/assets_admin/home_image/" . $data->site_logo);
                }
            }
            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/home_image', $name);

            $input['site_logo'] = $name;
        }
        $data->update($input);
        $pgname = 'home';
        $data = Home::all();
        return redirect()->action([AdminHomeController::class, 'index']);
    }

    public function create_contact_header_photo(Request $request){
        $input = $request->all();
        if($file = $request->file('header_photo')){
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/contact_image', $name);
            $input['header_photo'] = $name;
        }
        ContactHeaderPhoto::create($input);
        $pgname='contact';
        return redirect()->action([AdminHomeController::class, 'index']);
    }
    public function update_contact_header_photo(Request $request,$id){
        $data = ContactHeaderPhoto::find($id);
        $input = $request->all();
        if($file = $request->file('header_photo')){
            if($data->header_photo){
                if (file_exists(public_path() . '/assets_admin/contact_image/' . $data->header_photo)) {
                    unlink(public_path() . "/assets_admin/contact_image/" . $data->header_photo);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/contact_image', $name);
            $input['header_photo'] = $name;
        }
        $data->update($input);
        return redirect()->action([AdminHomeController::class, 'index']);
    }
}
