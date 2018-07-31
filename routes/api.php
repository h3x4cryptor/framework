<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/', [
    'as' => 'api.index', 'uses' => 'DataController@ApiIndex'
]);



Route::middleware('api')->get('/root', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->get('/master', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/admin', function (Request $request) {
    return $request->user();
});

    Route::group(['middleware' => ['api']], function () {
        Route::get('/test', function (Request $request) {
             return response()->json(['name' => 'test']);
        });
    });


// Route::get('/', function () {
//     return response()->json([
//         'name' => 'h3x4',
//         'age' => '19',
//         'hoppies' => '420',
//         'OS' => 'w10',
//         'url' => 'http://master.iechosys.com:813/api'


//         ]);
// });

Route::post('foo/bar', function () {
    return response()->json([
        'name' => 'h3x4',
        'age' => '19',
        'hoppies' => '420',
        'OS' => 'w10',
        'url' => 'http://master.iechosys.com:813/api'


        ]);
});

Route::put('foo/bar', function () {
    return 'Hello World';

});

Route::delete('foo/bar', function () {
    //
});









Route::match(['get', 'post'], '/h3x4', function () {
    return 'Hello World';
});





//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});



Route::get('user/{id}', function ($id) {
     return 'User '.$id;
})
->where('id', '[0-9]+');



Route::get('users/{name?}', function ($name = null) {
    return $name;
});



Route::get('user/{id}/{name}', function ($id, $name) {
    return  $id .  $name;
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//Route::get('user/profile', ['as' => 'profile', function () {
    //
//}]);




Route::get('user/profile', [
    'as' => 'user.index', 'uses' => 'DataController@getIndex'
]);




// Slack integration service

Route::get('/slack', [
    'as' => '0x01.index', 'uses' => 'SlackController@slackIndex'
]);

Route::get('/slack/commands', [
    'as' => 'slack.commands', 'uses' => 'SlackController@getCommands'
]);

Route::get('/slack/channels', [
    'as' => 'slack.channels', 'uses' => 'SlackController@getChannels'
]);

Route::get('/slack/get-help', [
    'as' => 'slack.help', 'uses' => 'SlackController@getHelp'
]);
