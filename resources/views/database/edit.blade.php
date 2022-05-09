
    @extends('layouts.app')


    @section('content')
    <form method="POST" action="{{route('update.article', $article->id)}}">
        @csrf             
          <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$article->title}}">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">内容</label>
            <textarea class="form-control" name="content" rows="10">{{$article->content}}</textarea> 
          </div>
          <button type="submit" class="btn" style="float: right;">UPDATE</button>
    </form>
    <button class="btn">
      <a href="{{route('private')}}">BACK</a>
    </button>
    
    @endsection
    
