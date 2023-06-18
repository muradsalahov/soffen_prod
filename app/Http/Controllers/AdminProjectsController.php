<?php

namespace App\Http\Controllers;

use App\Models\ProjectHeaderPhoto;
use App\Models\Projects;
use App\Models\Services;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function index()
    {
        $data = Projects::join('services','services.id','=','projects.project_service_id')
            ->select('projects.*', 'services.name as service_name')
            ->get();
        $data_header = ProjectHeaderPhoto::all();
        $pgname='projects';
        return view('admin.projects.index_projects', compact('pgname','data','data_header'));
    }
    public function edit($id)
    {
        $data = Projects::find($id);
        $services=Services::all();
        $pgname='projects';
        return view('admin.projects.edit_projects', compact('pgname','data','services'));
    }
    public function update(Request $request,$id)
    {
        $data = Projects::find($id);
        $input = $request->all();
        if($file = $request->file('photo1')){
            if (file_exists(public_path() . '/assets_admin/projects_image/' . $data->photo1)) {
                unlink(public_path() . "/assets_admin/projects_image/" . $data->photo1);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/projects_image', $name);
            $input['photo1'] = $name;
        }
        if($file = $request->file('photo2')){
            if (file_exists(public_path() . '/assets_admin/projects_image/' . $data->photo2)) {
                unlink(public_path() . "/assets_admin/projects_image/" . $data->photo2);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/projects_image', $name);
            $input['photo2'] = $name;
        }
        $data->update($input);
        return redirect()->back();
    }
    public function create()
    {
        $pgname='projects';
        $services=Services::all();
        return view('admin.projects.create_projects', compact('pgname','services'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('photo1')){
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/projects_image', $name);
            $input['photo1'] = $name;
        }
        if($file = $request->file('photo2')){
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/projects_image', $name);
            $input['photo2'] = $name;
        }
        Projects::create($input);
        $pgname='projects';
        return redirect('/projects_index');
    }
    public function delete($id)
    {
        $data = Projects::findOrFail($id);
        if (file_exists(public_path() . '/assets_admin/projects_image/' . $data->photo1)) {
            unlink(public_path() . "/assets_admin/projects_image/" . $data->photo1);
        }
        if (file_exists(public_path() . '/assets_admin/projects_image/' . $data->photo2)) {
            unlink(public_path() . "/assets_admin/projects_image/" . $data->photo2);
        }
        $data->delete();
        return redirect()->back();
    }

    public function create_header_photo(Request $request){
        $input = $request->all();
        if($file = $request->file('header_photo')){
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/projects_image', $name);
            $input['header_photo'] = $name;
        }
        ProjectHeaderPhoto::create($input);
        $pgname='projects';
        return redirect()->action([AdminProjectsController::class, 'index']);
    }
    public function update_header_photo(Request $request,$id){
        $data = ProjectHeaderPhoto::find($id);
        $input = $request->all();
        if($file = $request->file('header_photo')){
            if($data->header_photo){
                if (file_exists(public_path() . '/assets_admin/projects_image/' . $data->header_photo)) {
                    unlink(public_path() . "/assets_admin/projects_image/" . $data->header_photo);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets_admin/projects_image', $name);
            $input['header_photo'] = $name;
        }
        $data->update($input);
        return redirect()->action([AdminProjectsController::class, 'index']);
    }
}
