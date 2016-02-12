<?php namespace App\Http\Controllers;

class PagesController extends Controller {

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
     *
     * @return Response
     */
    public function modules()
    {
        return view('modules', ['title' => 'Modules']);
    }

}
