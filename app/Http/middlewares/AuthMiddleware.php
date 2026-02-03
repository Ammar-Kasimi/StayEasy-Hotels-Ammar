<?php
namespace App\Http\middlewares;

use App\Http\interfaces\Middleware;
use Illuminate\Http\Request;
use Closure;

class AuthMiddleware implements Middleware {
    public function handle(Request $req, Closure $handler)
    {
        if(isset($_SESSION['user_id'])) redirect('');

        
    }
}