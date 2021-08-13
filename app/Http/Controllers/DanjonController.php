<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Stage\Repositories\StageRepositoryInterface;
use Stage\Repositories\EnglishWordsRepositoryInterface;
use User\Repositories\UserRepositoryInterface;

class DanjonController extends Controller
{

  public function __construct(
    StageRepositoryInterface $stageRepository,
    UserRepositoryInterface $userRepository,
    EnglishWordsRepositoryInterface $englishWordsRepository
    )
   {
      $this->stageRepository = $stageRepository;
      $this->userRepository = $userRepository;
      $this->englishWordsRepository = $englishWordsRepository;
   }

  public function danjon1(Request $request) {

    // $url = $this->userRepository->getUserInfomation();
    // var_dump($url);
    // exit();
    // $url = user_chara()[0]->image;
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $page = $_SERVER['REQUEST_URI'];
    $name = explode("/", $page);
    $stage_max = $this->userRepository->getUserStage()[0][$name[1]];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain($name[1]);
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = $user_ex/$lv_ex;
    $flag = "english";


    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max", "flag"));
  }

  public function danjon2(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $page = $_SERVER['REQUEST_URI'];
    $name = explode("/", $page);
    $stage_max = $this->userRepository->getUserStage()[0][$name[1]];
    $stage = $this->stageRepository->getEnglishStageArray($stage_max);
    $main = $this->stageRepository->getMain($name[1]);
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = $user_ex/$lv_ex;
    $flag = "english";


    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max", "flag"));
  }

  public function danjon3(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    // $page = $_SERVER['REQUEST_URI'];
    // $name = explode("/", $page);
    $en_stage_max = $this->userRepository->getUserStage()[0]["english"];
    $en_stage = $this->stageRepository->getEnglishStageArray($en_stage_max);
    $en_main = $this->stageRepository->getMain("english");
    $stage_max = $this->userRepository->getUserStage()[0]["math"];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain("math");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = $user_ex/$lv_ex;
    $flag = "experience";


    return view('hello.danjon2', compact("sql", "url", "tech", "damage", "stage","en_stage", "main", "en_main", "ex_value", "stage_max", "en_stage_max", "flag"));
  }

  public function last(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();

    $stage_max = $this->userRepository->getUserStage()[0]["last"];
    $stage = $this->stageRepository->getLastStageArray($stage_max);
    $main = $this->stageRepository->getMain("last");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = $user_ex/$lv_ex;
    $flag = "english";

    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max", "flag"));
  }

  public function wordsIndex(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $en_stage_max = $this->userRepository->getUserStage()[0]["english"];
    $en_stage = $this->stageRepository->getEnglishStageArray($en_stage_max);
    $en_main = $this->stageRepository->getMain("english");
    $stage_max = $this->userRepository->getUserStage()[0]["math"];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain("math");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = $user_ex/$lv_ex;
    $englishWords = $this->englishWordsRepository->getWords();
    $flag = "wordsIndex";

    return view('words.word', compact("sql", "url", "tech", "damage", "stage","en_stage", "main", "en_main", "ex_value", "stage_max", "en_stage_max", "englishWords", "flag"));
  }

  public function experience(Request $request) {
    if (Auth::check()) {
      return redirect('/math');
    }
    return view('hello.experience');
  }

  public function csvImport(Request $request) {
    // アップロードファイルのファイルパスを取得
    $file_path = $request->file('csv')->path();
    // CSV取得
    $file = new \SplFileObject($file_path);
    $file->setFlags(
        \SplFileObject::READ_CSV |           // CSV 列として行を読み込む
        \SplFileObject::READ_AHEAD |       // 先読み/巻き戻しで読み出す。
        \SplFileObject::SKIP_EMPTY |         // 空行は読み飛ばす
        \SplFileObject::DROP_NEW_LINE    // 行末の改行を読み飛ばす
      );
    // 一行ずつ処理
    $words = [];
    $i = 0;
    foreach($file as $line)
    {
        $data = [
            "en"     => $line[0],
            "jp"   => $line[1],
            "level" => $line[2]
        ];
        $words[$i] = $data;
        $i++;
    }

    $this->englishWordsRepository->importWords($words);
    return redirect('/');
  }
}
