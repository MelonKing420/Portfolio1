<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects', [\App\Http\Controllers\ProjectsController::class, 'index']);
Route::get('/projects/{project}', [\App\Http\Controllers\ProjectsController::class, 'show'])->name('project.show');

Route::get('/admin/projects', [\App\Http\Controllers\AdminProjectController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.projects.list');

Route::get('/admin/projects/edit/{project}', [\App\Http\Controllers\AdminProjectController::class, 'edit'])
    ->middleware(['auth'])
    ->name('admin.projects.edit');

Route::post('/admin/projects/edit/{project}', [\App\Http\Controllers\AdminProjectController::class, 'update'])
    ->middleware(['auth']);

Route::get('/admin/projects/create', [\App\Http\Controllers\AdminProjectController::class, 'create'])
    ->middleware(['auth'])
    ->name('admin.projects.create');

Route::post('/admin/projects/create', [\App\Http\Controllers\AdminProjectController::class, 'store'])
    ->middleware(['auth']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])
    ->name('contact.list');
Route::get('/contact/create', [\App\Http\Controllers\ContactController::class, 'create'])
    ->name('contact.create');
Route::post('/contact/create', [\App\Http\Controllers\ContactController::class, 'store']);
Route::delete('/contact/destroy/{contact}', [\App\Http\Controllers\ContactController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('contact.destroy');


Route::delete('/admin/projects/destroy/{project}', [\App\Http\Controllers\AdminProjectController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('admin.projects.destroy');

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', [\App\Http\Controllers\AdminProjectController::class, 'index'])->middleware(['auth'])->name('admin.projects.index');

Route::get('/dashboard', function () {
    $contact = \App\Models\Contact::all();
    return view('dashboard',[
        'contacts' => $contact,
    ]);

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


