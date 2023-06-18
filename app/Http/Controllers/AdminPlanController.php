<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Pricing;
use Illuminate\Http\Request;

class AdminPlanController extends Controller
{
    public function index()
    {
        $data = Plan::join('pricings','plans.pricing_id','=','pricings.id')
            ->select('plans.*', 'pricings.name as pricing_name')
            ->get();
        //$data = Plan::all();
        $pgname='plan';
        return view('admin.pricing.plan.index_plan', compact('pgname','data'));
    }
    public function edit($id)
    {
        $data = Plan::find($id);
        $pricing_data = Pricing::all();
        $pgname='plan';
        return view('admin.pricing.plan.edit_plan', compact('pgname','data', 'pricing_data'));
    }
    public function update(Request $request,$id)
    {
        $data = Plan::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect()->back();
    }
    public function create()
    {
        $pgname='pricing';
        $pricing_plan=Pricing::all();
        return view('admin.pricing.plan.create_plan', compact('pgname','pricing_plan'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Plan::create($input);
        return redirect('/plan_index');
    }
    public function delete($id)
    {
        $data = Plan::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
