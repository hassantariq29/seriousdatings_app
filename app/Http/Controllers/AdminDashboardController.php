<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AdminDashboardController extends Controller {

 

    public function getIndex()
    {
        return View::make('admin.includes.dashboard');
    }

}