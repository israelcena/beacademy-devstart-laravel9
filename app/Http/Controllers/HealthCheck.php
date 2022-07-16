<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthCheck extends Controller
{
    public function healthCheck(): string
    {
        return "Health Check!";
    }
}