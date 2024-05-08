<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Error;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * catch resourcekomcatHome.
     */
    public function catchAbout(Request $request)
    {
        if ($request->has('about')) {
            return redirect()->route('about');
        }
        return self::catchAbout($request);
    }

    /**
     * Display the specified resource.
     */
    public function getAbout(){
        return view('aboutKomcad');
    }
}
