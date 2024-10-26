<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth', [AuthController::class, 'authenticate']);

use App\Http\Controllers\Api\GroupController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/group/create', [GroupController::class, 'create']); // ایجاد گروه
    Route::get('/groups', [GroupController::class, 'index']); // لیست همه گروه‌ها
    Route::get('/groups/{id}', [GroupController::class, 'show']); // مشاهده گروه
    Route::put('/groups/{id}', [GroupController::class, 'update']); // ویرایش گروه
    Route::delete('/groups/{id}', [GroupController::class, 'destroy']); // حذف گروه
});


use App\Http\Controllers\Api\GroupMemberController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/groups/{groupId}/members', [GroupMemberController::class, 'addMember']); // افزودن فرد به گروه
    Route::delete('/groups/{groupId}/members/{memberId}', [GroupMemberController::class, 'removeMember']); // حذف فرد از گروه
    Route::get('/groups/{groupId}/members/{memberId}', [GroupMemberController::class, 'showMember']); // مشاهده فرد
    Route::post('/groups/{groupId}/members/{memberId}/accept', [GroupMemberController::class, 'acceptMembership']); // قبول درخواست عضویت
});


use App\Http\Controllers\Api\OrderController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/orders', [OrderController::class, 'create']); // ایجاد خرید
    Route::get('/orders', [OrderController::class, 'index']); // لیست همه خریدها
    Route::get('/orders/{id}', [OrderController::class, 'show']); // مشاهده خرید
    Route::put('/orders/{id}', [OrderController::class, 'update']); // ویرایش خرید
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']); // حذف خرید
});
