<?php

namespace App\Http\Controllers;

use App\Models\ServiceHeaderPhoto;
use App\Models\Services;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index()
    {
        $data = Services::all();
        $data_header = ServiceHeaderPhoto::all();
        $pgname='services';
        return view('admin.services.index_services', compact('pgname','data','data_header'));
    }
    public function edit($id)
    {
        $data = Services::find($id);
        $pgname='services';
        return view('admin.services.edit_services', compact('pgname','data'));
    }
    public function update(Request $request,$id)
    {
        $data = Services::find($id);

        $input = $request->all();

        if($file = $request->file('photo')){
            if (file_exists(public_path() . '/assets_admin/services_image/' . $data->photo)) {
                unlink(public_path() . "/assets_admin/services_image/" . $data->photo);
            }

            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/services_image', $name);

            $input['photo'] = $name;
        }
        if($file = $request->file('bg_photo')){
            if (file_exists(public_path() . '/assets_admin/services_image/' . $data->bg_photo)) {
                unlink(public_path() . "/assets_admin/services_image/" . $data->bg_photo);
            }

            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/services_image', $name);

            $input['bg_photo'] = $name;
        }
        $data->update($input);
        return redirect()->back();
    }
    public function create()
    {
        $pgname='services';
        return view('admin.services.create_services', compact('pgname'));
    }
    public function store(Request $request)
    {
        $input = $request->all();


        if($file = $request->file('photo')){

            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/services_image', $name);

            $input['photo'] = $name;
        }
        if($file = $request->file('bg_photo')){

            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/services_image', $name);

            $input['bg_photo'] = $name;
        }
        Services::create($input);

        $pgname='services';
        return redirect('/services_index');
    }
    public function delete($id)
    {
        $data = Services::findOrFail($id);
        if (file_exists(public_path() . '/assets_admin/services_image/' . $data->photo)) {
            unlink(public_path() . "/assets_admin/services_image/" . $data->photo);
        }
        if (file_exists(public_path() . '/assets_admin/services_image/' . $data->bg_photo)) {
            unlink(public_path() . "/assets_admin/services_image/" . $data->bg_photo);
        }
        $data->delete();
        return redirect()->back();
    }


    public function create_header_photo(Request $request){
        $input = $request->all();
        if($file = $request->file('header_photo')){
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/services_image', $name);
            $input['header_photo'] = $name;
        }
        ServiceHeaderPhoto::create($input);
        $pgname='services';
        return redirect()->action([AdminServicesController::class, 'index']);
    }
    public function update_header_photo(Request $request,$id){
        $data = ServiceHeaderPhoto::find($id);
        $input = $request->all();
        if($file = $request->file('header_photo')){
            if($data->header_photo){
                if (file_exists(public_path() . '/assets_admin/services_image/' . $data->header_photo)) {
                    unlink(public_path() . "/assets_admin/services_image/" . $data->header_photo);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/services_image', $name);
            $input['header_photo'] = $name;
        }
        $data->update($input);
        return redirect()->action([AdminServicesController::class, 'index']);
    }
}
