
    @extends('layouts.app')


    @section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('create.new.article')}}">
        @csrf             
          <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">内容</label>
            <textarea class="form-control" name="content" rows="10"></textarea> 
          </div>
          <input type="file" name="imgpath" class="btn">
          <button type="submit" class="btn" style="float: right;">SUBMIT</button>
    </form>
    <button class="btn">
      <a href="{{route('private')}}">BACK</a>
    </button>
    @endsection
    
