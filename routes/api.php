<?php
use App\Http\Controllers\MobileApp\AccountController;
use App\Http\Controllers\MobileApp\AIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AccountController::class, 'login']);
Route::post('verifyMobile', [AccountController::class, 'verifyMobile']);
Route::post('resendOtp', [AccountController::class, 'resendOtp']);

Route::post('/newChatroom', [AIController::class, 'createChatroom']);

Route::get('/chatrooms', [AIController::class, 'chatrooms']);

Route::get('/chatrooms/{chatroomId}', [AIController::class, 'chatroom']);

Route::post('/renameChatroom/{chatroomId}', [AIController::class, 'renameChatroom']);

Route::delete('/chatrooms/{chatroomId}', [AIController::class, 'deleteChatroom']);


/*
|--------------------------------------------------------------------------
| Messages
|--------------------------------------------------------------------------
*/

Route::get('/chatrooms/{chatroomId}/messages', [AIController::class, 'messages']);

Route::post('/chatrooms/{chatroomId}/messages', [AIController::class, 'sendMessage']);