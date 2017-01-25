@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <p>{{ $message->content }}</p>

@endsection
