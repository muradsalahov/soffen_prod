<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class AdminPricingController extends Controller
{
    public function index()
    {
        $data = Pricing::all();
        $pgname='pricing';
        return view('admin.pricing.index_pricing', compact('pgname','data'));
    }
    public function edit($id)
    {
        $data = Pricing::find($id);
        $pgname='pricing';
        return view('admin.pricing.edit_pricing', compact('pgname','data'));
    }
    public function update(Request $request,$id)
    {
        $data = Pricing::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect()->back();
    }
    public function create()
    {
        $pgname='pricing';
        return view('admin.pricing.create_pricing', compact('pgname'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Pricing::create($input);
        return redirect('/pricing_index');
    }
    public function delete($id)
    {
        $data = Pricing::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
