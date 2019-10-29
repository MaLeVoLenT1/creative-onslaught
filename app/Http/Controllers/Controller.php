<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Dashboard\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\User;
use Carbon\Carbon;
use DateTime;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $dashboard;
    protected $user;

    public function __construct() {
        $this -> middleware(function ($request, $next) {
            $this -> user = Auth::user();
            $dash = new Dashboard($this -> user);    $this -> dashboard = $dash -> get();
            return $next($request);
        });
    }
}
