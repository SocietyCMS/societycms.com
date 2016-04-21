<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PagesController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Pages Controller
    |--------------------------------------------------------------------------
    */

    /**
     * Show the home page.
     *
     * @return Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the features page.
     *
     * @return Response
     */
    public function features()
    {
        return view('features', ['title' => 'Features']);
    }

    /**
     * Show the features page.
     *
     * @return Response
     */
    public function demo()
    {
        return view('demo', ['title' => 'Demo']);
    }

    /**
     * Show the features page.
     * @return Response
     * @throws \Exception
     */
    public function modules()
    {
        if(! File::exists(base_path('resources/modules.json'))) {
            throw new \Exception('Can not load modules.');
        }
        $modules_json = json_decode(File::get(base_path('resources/modules.json')));
        $modules_sorted = array_values(array_sort($modules_json, function ($value) {
            return $value->name;
        }));

        return view('modules', ['title' => 'Modules', 'modules' => $modules_sorted]);
    }
}
