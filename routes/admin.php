<?php

use App\Http\Controllers\Admin\{
    CategoryController,
    DashboardController,
    PermissionController,
    ProductController,
    RoleController,
    SizeController,
    SubCategoryController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Permissions
Route::delete('permissions/massDestroy', [PermissionController::class, 'massDestroy']);
Route::resource('permissions', PermissionController::class);

//Roles
Route::delete('roles/massDestroy', [RoleController::class, 'massDestroy']);
Route::resource('roles', RoleController::class);

//Users 
Route::delete('users/massDestroy', [UserController::class, 'massDestroy']);
Route::resource('users', UserController::class);

//Categories
Route::resource('categories', CategoryController::class);

//Sub Categories
Route::resource('sub_categories', SubCategoryController::class);

//Sizes
Route::resource('sizes', SizeController::class);

//products
Route::resource('products', ProductController::class);
