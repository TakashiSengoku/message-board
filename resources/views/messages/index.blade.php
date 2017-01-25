@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <ul>
            @foreach ($messages as $message)
                <li>{{ $message->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection
