
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Route //
Route::get('/', 'HomeController@index')->name('index');

//Create Video route //
Route::get('create', 'VideoController@create')->name('create');

// Edit Video route //
Route::get('edit', 'VideoController@edit')->name('edit');

// All Videos route //
Route::get('video', 'VideoController@video')->name('video');

// Create Playlist
Route::get('create_play', 'PlaylistController@play')->name('create_play');

// All Playlists
Route::get('playlist', 'PlaylistController@playlist')->name('playlist');

// Playlist Details Route //
Route::get('playlist_detail', 'PlaylistController@details')->name('playlist_detail');

// Video Details route //
Route::get('video_detail', 'VideoController@detail')->name('video_detail');

// Settings Route //
Route::get('setting', 'SettingController@setting')->name('setting');


