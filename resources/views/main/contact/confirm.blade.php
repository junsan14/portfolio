@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <label>タイトル</label>
    {{ $inputs['title'] }}
    <div class="mb-3">
    <input
        class="form-control" 
        name="title"
        value="{{ $inputs['title'] }}"
        type="hidden">
    </div>

    <label>メールアドレス</label>
    {{ $inputs['email'] }}
    <div class="mb-3">
    <input  
        class="form-control" 
        name="email"
        value="{{ $inputs['email'] }}"
        type="hidden">
    </div>

    


    <label>お問い合わせ内容</label>
    {!! nl2br(e($inputs['body'])) !!}
    <div class="mb-3">
    <input
         class="form-control" 
        name="body"
        value="{{ $inputs['body'] }}"
        type="hidden">
    </div>

    <button type="submit" name="action" value="back" class="btn btn-danger">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit" class="btn btn-primary">
        送信する
    </button>
</form>
@endsection