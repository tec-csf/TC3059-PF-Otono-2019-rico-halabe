<?php

namespace App\Http\Middleware;

use Closure;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if($token = $request->header('Authorization')){
        if ($token != "&yBR31Z6a8jgppw6oK9si|If~nLiT{xdq)JeHS@qO/I<~7bxG(Uv25cih4m4bsK") {
          return response()->json([
            'Error' => '401',
            'ErrorMessage' => 'Unauthorized(401). API Token is incorrect.',
          ]);
        }
        return $next($request);
      }
      return response()->json([
        'Error' => '401',
        'ErrorMessage' => 'Unauthorized(401). API Token is missing.',
      ]);
    }
}
