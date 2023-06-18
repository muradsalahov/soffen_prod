<?php

namespace App\Http\Controllers;

use App\Models\Whychoose;
use Illuminate\Http\Request;

class AdminWhychooseController extends Controller
{
    public function index()
    {
        $data = Whychoose::all();
        $pgname = 'about_us';
        return view('admin.about.whychoose.index_whychoose', compact('pgname', 'data'));
    }

    public function create(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo1')) {
            $name1 = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/whychoose_image', $name1);
            $input['photo1'] = $name1;
        }
        if ($file = $request->file('photo2')) {
            $name1 = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/whychoose_image', $name1);
            $input['photo2'] = $name1;
        }
        if ($file = $request->file('photo3')) {
            $name1 = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/whychoose_image', $name1);
            $input['photo3'] = $name1;
        }
        Whychoose::create($input);
        return redirect()->action([AdminWhychooseController::class, 'index']);
    }

    public function update(Request $request, $id)
    {
        $data = Whychoose::find($id);
        $input = $request->all();
        if($file = $request->file('photo1')){
            if($data->photo1){
                if (file_exists(public_path() . '/assets_admin/whychoose_image/' . $data->photo1)) {
                    unlink(public_path() . "/assets_admin/whychoose_image/" . $data->photo1);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/whychoose_image', $name);
            $input['photo1'] = $name;
        }
        if($file = $request->file('photo2')){
            if($data->photo2){
                if (file_exists(public_path() . '/assets_admin/whychoose_image/' . $data->photo2)) {
                    unlink(public_path() . "/assets_admin/whychoose_image/" . $data->photo2);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/whychoose_image', $name);
            $input['photo2'] = $name;
        }
        if($file = $request->file('photo3')){
            if($data->photo3){
                if (file_exists(public_path() . '/assets_admin/about_image/' . $data->photo3)) {
                    unlink(public_path() . "/assets_admin/about_image/" . $data->photo3);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/about_image', $name);
            $input['photo3'] = $name;
        }
        $data->update($input);
        return redirect()->action([AdminWhychooseController::class, 'index']);
    }
}
