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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
Route::get('/home', function () {
    return view('home');
});

Route::get('/courses', function () {
    return view('courses');
<<<<<<< Updated upstream
})-> middleware ('authenticated') ;
=======
}) -> middleware ('authenticated'); 
>>>>>>> Stashed changes

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/htmlcss', function () {
    return view('htmlcss');
<<<<<<< Updated upstream
})-> middleware ('authenticated') ;

Route::get('/java', function () {
    return view('java');
})-> middleware ('authenticated') ;

Route::get('/cpp', function () {
    return view('cpp');
})-> middleware ('authenticated') ;
=======
})-> middleware ('authenticated');

Route::get('/java', function () {
    return view('java');
})-> middleware ('authenticated');

Route::get('/cpp', function () {
    return view('cpp');
})-> middleware ('authenticated');
>>>>>>> Stashed changes
