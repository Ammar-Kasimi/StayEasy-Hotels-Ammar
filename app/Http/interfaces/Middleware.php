<?php
namespace App\Http\interfaces;

use Closure;
use Illuminate\Http\Request;

interface Middleware {
    function handle(Request $req, Closure $handler);
}