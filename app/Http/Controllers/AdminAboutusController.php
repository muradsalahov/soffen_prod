<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AdminAboutusController extends Controller
{
    public function index()
    {
        $data = Aboutus::all();
        $pgname = 'about_us';
        return view('admin.about.about_us.index_about_us', compact('pgname', 'data'));
    }

    public function create(Request $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_bg')) {

            $name1 = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/about_image', $name1);

            $input['photo_bg'] = $name1;
        }
        if ($file = $request->file('photo_about')) {

            $name1 = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/about_image', $name1);

            $input['photo_about'] = $name1;
        }
        Aboutus::create($input);
        return redirect()->action([AdminAboutusController::class, 'index']);
    }

    public function update(Request $request, $id)
    {
        $data = Aboutus::find($id);
        $input = $request->all();

        if($file = $request->file('photo_bg')){
            if($data->photo_bg){
                if (file_exists(public_path() . '/assets_admin/about_image/' . $data->photo_bg)) {
                    unlink(public_path() . "/assets_admin/about_image/" . $data->photo_bg);
                }
            }
            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/about_image', $name);

            $input['photo_bg'] = $name;
        }
        if($file = $request->file('photo_about')){
            if($data->photo_about){
                if (file_exists(public_path() . '/assets_admin/about_image/' . $data->photo_about)) {
                    unlink(public_path() . "/assets_admin/about_image/" . $data->photo_about);
                }
            }
            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/assets_admin/about_image', $name);

            $input['photo_about'] = $name;
        }
        $data->update($input);
        return redirect()->action([AdminAboutusController::class, 'index']);
    }
}
