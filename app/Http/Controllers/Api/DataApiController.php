<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Stage\Repositories\MessagesRepositoryInterface;
use User\Repositories\SkillsRepositoryInterface;
use User\Repositories\UserRepositoryInterface;

class DataApiController extends Controller
{
  public function __construct(
    MessagesRepositoryInterface $messageRepository,
    UserRepositoryInterface $userRepository,
    SkillsRepositoryInterface $skillsRepository
  ) {
    $this->messageRepository = $messageRepository;
    $this->userRepository = $userRepository;
    $this->skillsRepository = $skillsRepository;
  }

  public function messageList(Request $request, $stage) {
    $messageList = $this->messageRepository->getMessages($stage);
    $messageList = json_decode(json_encode($messageList), true);
    return response()->json($messageList);
  }

  public function skillGacha() {
    $magic_stone = $this->userRepository->getUserInfomation()[0]->magic_stone;
    if ($magic_stone < 3) {
      return response()->json(["lack" => true]);
    }
    $magic_stone = $this->userRepository->updateUserMagicStone(-3);
    $skill_lists = $this->skillsRepository->getAllSkills();
    $skill_lists_length = count($skill_lists) - 1;
    $rand_int = rand(0, $skill_lists_length);

    $gacha_skill = $skill_lists[$rand_int];
    $skill_images = $this->skillsRepository->getSkillImageLists($rand_int);
    $uid = Auth::user()->id;
    $sid = $gacha_skill->id;

    $this->skillsRepository->addUserSkill($uid, $sid);

    $box = "img/parts/box";
    $path= public_path($box);
    $files = \File::files($path);
    $image_list = [];
    $i = 0;
    foreach ($files as $v) {
      $image_list[$i] = $v->getfileName();
      $i++;
   }


   return response()->json([$gacha_skill, $image_list, $skill_images]);
  }

  public function setSkill(Request $request) {
    $data = $request->all();
    $magic_stone = $this->userRepository->updateUserSkill($data["skill_id"]);
    return response()->json($data);
  }
}
