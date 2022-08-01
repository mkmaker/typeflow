<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceChatbotTemplatesController extends Controller
{
    public function creditCardApplication()
    {
        return view('pages.templates.finance.credit-card-application');        
    }

    public function autoLoanLeads()
    {
        return view('pages.templates.finance.auto-loan-leads');        
    }
}
