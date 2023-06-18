<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class AdminFeaturesController extends Controller
{
    public function index()
    {
        $data = Features::all();
        $pgname='features';
        return view('admin.home.features.index_features', compact('pgname','data'));
    }
    public function edit($id)
    {
        $data = Features::find($id);
        $pgname='features';
        return view('admin.home.features.edit_features', compact('pgname','data'));
    }
    public function update(Request $request,$id)
    {
        $data = Features::find($id);

        $input = $request->all();

        if($file = $request->file('photo')){
            if (file_exists(public_path() . '/assets_admin/features_image/' . $data->photo)) {
                unlink(public_path() . "/assets_admin/features_image/" . $data->photo);
            }

            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/features_image', $name);

            $input['photo'] = $name;
        }
        $data->update($input);
        return redirect()->back();
    }
    public function create()
    {
        $pgname='features';
        return view('admin.home.features.create_features', compact('pgname'));
    }
    public function store(Request $request)
    {
        $input = $request->all();


        if($file = $request->file('photo')){

            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/features_image', $name);

            $input['photo'] = $name;
        }
        Features::create($input);

        $pgname='features';
        return redirect('/features_index');
    }
    public function delete($id)
    {
        $data = Features::findOrFail($id);
        if (file_exists(public_path() . '/assets_admin/features_image/' . $data->photo)) {
            unlink(public_path() . "/assets_admin/features_image/" . $data->photo);
        }
        $data->delete();
        return redirect()->back();
    }
}
