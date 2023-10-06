<?php

use App\Http\Controllers\Features\EventController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::view('/home', 'home')->name('home');
Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/Landing_page', 'layout.master')->name('Guest');
        // Route::view('/register','dashboard.user.register')->name('register');
        Route::view('/reset_password', 'dashboard.user.reset_password')->name('reset_password');
        Route::post('/check_user', [UserController::class, 'Check_User'])->name('check_user');
    });
    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        Route::view('/home', 'components.home')->name('home');
        Route::middleware(['redirect_role:Admin'])->group(function () {
            //View Admin Dashboard with Menu
            Route::view('/admin_dashboard', 'dashboards.admin_dashboard')->name('admin_dashboard');
            //View User Table
            Route::view('/user_table', 'components.tables.user_table')->name('user_table');
            //Get all Users Except it's own Data from Database
            Route::get('/user_table', [UserController::class, 'GetData'])->name('user_table');
            // Create User
            Route::post('/create_user', [UserController::class, 'CreateUser'])->name('create_user');
            //Update User
            Route::put('/update_user', [UserController::class, 'UpdateUser'])->name('update_user');
            //Delete User
            Route::delete('/delete-user', [UserController::class, 'deleteUser'])->name('delete.user');
            //View Events Table
            Route::view('/events_table', 'dashboard.user.admin.admin_tables.events_table')->name('events_table');
            //View User Table
            Route::get('/events_table', [EventController::class, 'index'])->name('events_table');
            // Create Event
            Route::post('/create_event', [EventController::class, 'create'])->name('create_event');
        });

        Route::middleware(['redirect_role:Principal'])->group(function () {
            Route::view('/event_table', 'dashboard.user.admin.admin_tables.events_table')->name('event_table');
            Route::view('/principal_dashboard', 'dashboard.user.principal.principal_dashboard')->name('principal_dashboard');
        });

        Route::view('/events_table', 'try.tables.events')->name('events_table');
        Route::view('/news_table', 'try.tables.news')->name('news_table');
        //Route::post('/update_password', [UserController::class, 'Update_Password'])->name('update_password');







    });
});
