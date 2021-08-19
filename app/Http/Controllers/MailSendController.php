<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; //追記
use App\Mail\ContactMail; //追記

class MailSendController extends Controller
{
  public function send(Request $request){

    $data =  $request->all();
    try {
      Mail::send(new ContactMail($data));
      return redirect()->route('contact')->with(['message' => '送信に成功しました。ありがとうございました。']);
    } catch (\Exception $e) {
      return redirect()->route('contact')->with(['message' => '送信に失敗しました。もう一度お試しください。']);
    }
  }
}
