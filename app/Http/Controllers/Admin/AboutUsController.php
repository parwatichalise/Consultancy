<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function show()
    {
        $about=AboutUs::first();
        return view('Admin.AboutUs.show',compact('about'));
    }
    public function edit()
    {
        $about=AboutUs::first();
        return view('Admin.AboutUs.edit',compact('about'));
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'description'=>'required|string'
        ]);
        $about=AboutUs::first();
        $about->update($validated);
        return to_route('admin.about-us.show')->with('success', 'Data has been saved successfully!');
    }
}
