<?php


use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoriesController;

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
    $categories = Category::tree()->get()->toTree();
   
    return view('welcome', ['categories' => $categories]);
});

Route::post('/', function() {
    category::create([
        'title' => request('name'),
        'parent_id' => request('Prt_id')

    ]);
    return redirect('/');
});


    Route::get('delete/{id}',[CategoriesController::class,'delete']);
    Route::get('edit/{id}',[CategoriesController::class,'showData']);
    Route::get('edit',[CategoriesController::class,'update']);