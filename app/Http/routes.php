<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', 'master');

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
get('demo', ['as' => 'demo', 'uses' => 'PagesController@demo']);
get('modules', ['as' => 'modules', 'uses' => 'PagesController@modules']);

get('docs', ['as' => 'docs', 'uses' => 'DocsController@showRootPage']);
get('docs/{version}/{page?}', ['as' => 'docsShow', 'uses' =>  'DocsController@show']);
