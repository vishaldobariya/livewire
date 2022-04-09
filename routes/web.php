<?php

use App\Http\Controllers\Admin\ContactCompanyController;
use App\Http\Controllers\Admin\ContactContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTagController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuestionOptionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TestAnswerController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\TestResultController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Company
    Route::resource('contact-companies', ContactCompanyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Contacts
    Route::resource('contact-contacts', ContactContactController::class, ['except' => ['store', 'update', 'destroy']]);

    // Courses
    Route::post('courses/media', [CourseController::class, 'storeMedia'])->name('courses.storeMedia');
    Route::resource('courses', CourseController::class, ['except' => ['store', 'update', 'destroy']]);

    // Lessons
    Route::post('lessons/media', [LessonController::class, 'storeMedia'])->name('lessons.storeMedia');
    Route::resource('lessons', LessonController::class, ['except' => ['store', 'update', 'destroy']]);

    // Tests
    Route::resource('tests', TestController::class, ['except' => ['store', 'update', 'destroy']]);

    // Questions
    Route::post('questions/media', [QuestionController::class, 'storeMedia'])->name('questions.storeMedia');
    Route::resource('questions', QuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Question Options
    Route::resource('question-options', QuestionOptionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Test Results
    Route::resource('test-results', TestResultController::class, ['except' => ['store', 'update', 'destroy']]);

    // Test Answers
    Route::resource('test-answers', TestAnswerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product Category
    Route::post('product-categories/media', [ProductCategoryController::class, 'storeMedia'])->name('product-categories.storeMedia');
    Route::resource('product-categories', ProductCategoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product Tag
    Route::resource('product-tags', ProductTagController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product
    Route::post('products/media', [ProductController::class, 'storeMedia'])->name('products.storeMedia');
    Route::resource('products', ProductController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
