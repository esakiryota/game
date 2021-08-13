<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Stage\Repositories\MessagesRepositoryInterface;

class DataApiController extends Controller
{
  public function __construct(MessagesRepositoryInterface $messageRepository) {
    $this->messageRepository = $messageRepository;
  }

  public function messageList(Request $request, $stage) {
    $messageList = $this->messageRepository->getMessages($stage);
    $messageList = json_decode(json_encode($messageList), true);
    return response()->json($messageList);
  }
}
