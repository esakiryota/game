<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_info;
use Auth;
use Stage\Repositories\MessagesRepositoryInterface;

class DataController extends Controller
{

  public function __construct(MessagesRepositoryInterface $messageRepository) {
    $this->messageRepository = $messageRepository;
  }

    public function index() {
      return view('hello.account');
    }

    public function store(Request $request) {
      $user_info = new User_info;
      $user = Auth::user();
      $email = $user->email;
      $user_info->name = $request->name;
      $user_info->level = 1;
      $user_info->atack = 50;
      $user_info->defense = 50;
      $user_info->character = $request->character;
      $user_info->experience = 0;
      $user_info->email = $email;
      $user_info->save();
      app('db')->table('user_stage')->insert(['email'=>$email, 'math'=>'1', 'english'=>'1', 'last'=>'1']);
      return redirect(route('english'))->with(['message_id' => '1']);
    }

    public function explain(Request $request) {
      $stage = 'explain';
      $messageList = $this->messageRepository->getMessages($stage);
      return view('hello.explain', compact("messageList"));
    }

    public function explainpost(Request $request) {
      return redirect('/english');
    }

    public function pipoAnimation(Request $request) {

      $photo = $request->file('img');
      $filename = $request->input('filename');
      $height = $request->input('height');
      $width = $request->input('width');

      $rand_num = rand();
      $p = public_path('img/atack_animation/').$filename;
      \File::makeDirectory($p);

      $img = \Image::make($photo);

      $img_width = $img->width();
      $img_height = $img->height();

      $x_num = $img_width / $width;
      $y_num = $img_height / $height;

      $x = 0;
      $y = 0;

      for ($i = 0; $i < $y_num; $i++) {
        for ($j = 0; $j < $x_num; $j++) {
          $img = \Image::make($photo);
          $cropped_img = $img->crop($width, $height, $x, $y);
          $save_path = public_path("img/atack_animation/{$filename}/{$i}-{$j}.png");
          $cropped_img->save($save_path);
          $x += $width;
        }
        $y += $height;
        $x = 0;
      }


     return redirect(route('pipo_animation'))->with(['success' => '成功しました']);

    }
}
