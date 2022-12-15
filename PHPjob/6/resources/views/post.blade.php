{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')
{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="card mb-2 p-4">
        <form class="" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="d-flex justify-content-between">
                        <input type="text" class="form-control" name="body" value="{{ old('body') }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                {{ csrf_field() }}
                <div class="ml-4">
                <input type="submit" class="btn btn-primary" value="つぶやく">
                </div>
            </div>
          </form>
    </div>
    
    @foreach($posts as $post)
    <div class="card mb-2 p-4">
    @foreach($users as $user)
            @if ($user->id == $post->user_id)
            <div class="d-flex justify-content-between">
                <div class="font-weight-bold h5">{{ $user->name }}</div>
                <div>{{ $post->created_at }}</div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div>{{ $post->body }}</div>
                @if (Auth::user()->id == $post->user_id)
                <a href="{{ action('PostController@delete', ['id'=>$post->id]) }}">削除</a>
                @endif
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
  @endsection