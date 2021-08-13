<?php

namespace App\Http\Middleware;

use Closure;
use User\Repositories\UserRepositoryInterface;


class CheckStage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function __construct(UserRepositoryInterface $userRepository)
      {
         $this->userRepository = $userRepository;
      }


    public function handle($request, Closure $next)
    {
      $user_stage = $this->userRepository->getUserStage();
      if ($user_stage[0]["english"] == 20) {
        return redirect()->action("TextController@update")->with(['init' => 'init']);
      }
      return $next($request);
    }
}
