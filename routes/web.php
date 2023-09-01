<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Property Routes
Route::get('/createProperty', [PropertyController::class, 'create'])->name('createProperty')->middleware('isLoggedIn');

Route::post('/storeProperty', [PropertyController::class, 'storeProperty'])->name('storeProperty')->middleware('isLoggedIn');

Route::get('/showProperty', [PropertyController::class, 'showProperty'])->name('showProperty')->middleware('isLoggedIn');

Route::get('/editProperty/{property}', [PropertyController::class, 'edit'])->name('editProperty')->middleware('isLoggedIn');

// Route::get('/{post:slug}', [BlogController::class, 'singleBlog'])->name('singleBlogs')->middleware('isLoggedIn');

Route::put('/updateProperty/{property}', [PropertyController::class, 'updateProperty'])->name('updateProperty')->middleware('isLoggedIn');

Route::delete('/{post:slug}/deleteProperty', [PropertyController::class, 'destroy'])->name('deleteProperty')->middleware('isLoggedIn');
//end Property Routes


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/properties', [UserController::class, 'properties'])->name('properties');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/agents', [UserController::class, 'agents'])->name('agents');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');

Route::get('/blog-single/{blogId}', [UserController::class, 'blog_single'])->name('blog-single');
Route::get('/agent', [UserController::class, 'agent'])->name('agent')->name('agent');
Route::get('/properties-single/{propertyId}', [UserController::class, 'prop_single'])->name('properties-single');


//admin routes
Route::get('/dashboard', [AdminController::class, 'kenbras'])->name('admin')->middleware('isLoggedIn');
Route::get('/forms', [AdminController::class, 'forms'])->name('forms')->middleware('isLoggedIn');
Route::get('/tables', [AdminController::class, 'tables'])->name('tables')->middleware('isLoggedIn');

// Route::get('/create_blog', [BlogController::class, 'create'])->name('create_blog')->middleware('isLoggedIn');
// Route::get('/create_category', [CategoryController::class, 'createCategory'])->name('create_category')->middleware('isLoggedIn');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');

// Auth Routes
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('loginUser');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('registerUser');

// Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
// Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
// Route::get('/blogs', [AdminController::class, 'blog'])->name('blog');



//Category Routes
Route::get('/create_category', [CategoryController::class, 'createCategory'])->name('create_category')->middleware('isLoggedIn');

Route::post('/storeCategory', [CategoryController::class, 'storeCategory'])->name('storeCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::get('/showCategory', [CategoryController::class, 'showCategory'])->name('showCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::get('/editCategory/{category}', [CategoryController::class, 'editCategory'])->name('editCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::put('/updateCategory/{category}', [CategoryController::class, 'updateCategory'])->name('updateCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::delete('/deleteCategory/{category}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');
//end Category Routes

//Blog Routes
Route::get('/createBlogs', [BlogController::class, 'create'])->name('createBlogs')->middleware('isLoggedIn');

Route::post('/storeBlogs', [BlogController::class, 'store'])->name('storeBlogs')->middleware('isLoggedIn');

Route::get('/showBlogs', [BlogController::class, 'showBlogs'])->name('showBlogs')->middleware('isLoggedIn');

Route::get('/editBlog/{blog}', [BlogController::class, 'edit'])->name('editBlogs')->middleware('isLoggedIn');

// Route::get('/{post:slug}', [BlogController::class, 'singleBlog'])->name('singleBlogs')->middleware('isLoggedIn');

Route::put('/updateBlog/{blog}', [BlogController::class, 'updateBlog'])->name('updateBlogs')->middleware('isLoggedIn');

Route::delete('/{post:slug}/deleteBlog', [BlogController::class, 'destroy'])->name('deleteBlogs')->middleware('isLoggedIn');
//end Blog Routes


//Property Routes
Route::get('/createProperty', [PropertyController::class, 'create'])->name('createProperty')->middleware('isLoggedIn');

Route::post('/storeProperty', [PropertyController::class, 'storeProperty'])->name('storeProperty')->middleware('isLoggedIn');

Route::get('/showProperty', [PropertyController::class, 'showProperty'])->name('showProperty')->middleware('isLoggedIn');

Route::get('/editProperty/{Property}', [PropertyController::class, 'edit'])->name('editProperty')->middleware('isLoggedIn');

// Route::get('/{post:slug}', [BlogController::class, 'singleBlog'])->name('singleBlogs')->middleware('isLoggedIn');

Route::put('/updateProperty/{Property}', [PropertyController::class, 'updateProperty'])->name('updateProperty')->middleware('isLoggedIn');

Route::delete('/{post:slug}/deleteProperty', [PropertyController::class, 'destroy'])->name('deleteProperty')->middleware('isLoggedIn');
//end Property Routes
