<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Message;

class MessagesController extends Controller
{

  public function index()
  {
    $messages = Message::all();

    return view('messages.index', [
      'messages' => $messages,
    ]);
  }

  public function show($id)
  {
    $message = Message::find($id);

    return view('messages.show', [
        'message' => $message,
    ]);
  }

  public function create()
  {
      $message = new Message;

      return view('messages.create', [
          'message' => $message,
      ]);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
        'content' => 'required|max:15',
      ]);

      $message = new Message;
      $message->content = $request->content;
      $message->save();

      return redirect('/');
  }

  public function edit($id)
  {
      $message = Message::find($id);

      return view('messages.edit', [
          'message' => $message,
      ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
        'content' => 'required|max:15',
      ]);

      $message = Message::find($id);
      $message->content = $request->content;
      $message->save();

      return redirect('/');
  }

  public function destroy($id)
  {
      $message = Message::find($id);
      $message->delete();

      return redirect('/');
  }
}
