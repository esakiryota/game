<?php

namespace App\Http\Middleware;

use Closure;
use User\Repositories\UserRepositoryInterface;

class CheckUserInformation
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

      if (count($user) == 0) {
        return redirect('/account')->with(['message_id' => '8']);
      }
      return $next($request);
    }
}
