<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\ChatbotTemplatesController;
use App\Http\Controllers\FinanceChatbotTemplatesController;

Route::get('/', [GenericController::class, 'home'])->name('home');

Route::get('features', [GenericController::class, 'features'])->name('features');

Route::prefix('chatbot-templates')->group(function () {
    
    Route::get('/', [ChatbotTemplatesController::class, 'templates'])->name('templates'); 

    Route::prefix('finance-banking')->group(function () {

        Route::get('credit-card-application', [FinanceChatbotTemplatesController::class, 'creditCardApplication'])->name('templates.credit-card-application');

        Route::get('auto-loan-leads', [FinanceChatbotTemplatesController::class, 'autoLoanLeads'])->name('templates.auto-loan-leads');

    });
});
