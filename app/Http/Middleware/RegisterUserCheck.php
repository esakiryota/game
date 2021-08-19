<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User\Repositories\UserRepositoryInterface;

class RegisterUserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function __construct(
       UserRepositoryInterface $userRepository
       )
      {
         $this->userRepository = $userRepository;
      }


    public function handle($request, Closure $next)
    {
      $user = $this->userRepository->getUserInfomation();
      if (count($user) != 0) {
        return redirect('/english');
      }
      return $next($request);
    }
}
