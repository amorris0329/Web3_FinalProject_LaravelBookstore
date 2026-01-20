<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Featured;

class FeaturedController extends Controller
{
    //
    public function featured() {
        $featureds = Featured::all();

        return view('featured', ['featureds' => $featureds]);
    }

    public function createFeatured(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:30',
            'date' => 'required|date|after:today',
            'description' => 'required|string|min:10|max:500',
            'image' => ['required', 'string', 'regex:/\.(png|jpeg)$/i'],
            'imageAlt' => 'required|string|min:10|max:250'
        ]);

        Featured::create($validated);

        return redirect()->route('login.employee');
    }

    public function delete(Featured $featured) {
        $featured->delete();

        return redirect()->route('login.employee');
    }
}
