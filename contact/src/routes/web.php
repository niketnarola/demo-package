<?php
use Ssn\Contact\Http\Controllers\ContactController;
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'send']);
?>