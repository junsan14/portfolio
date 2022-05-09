@extends('layouts.app')

@section('content')

<div class="row private">

    <h2 class="content-title">編集画面</h2>
    <div class="col-sm-12">
        <button class="new-button btn ">
            <a href="{{route('new.article')}}">NEW</a>
        </button>
    </div>
    @foreach($articles as $article)
        <div class="col-sm-10 article row">
            <div class="article-info col-sm-9">
                <div class="info-title col-sm-3">
                    {{$article['title']}}
                </div>
                <div class="info-content col-sm-6">
                    {{Str::limit($article->content, 100, '...')}}
                </div> 
                <div class="info-date col-sm-3"> 
                    <div class="info-created-date">
                     作成日時: {{$article['created_at']}} 
                    </div> 
                    <div class="info-update-date">
                     更新日時: {{$article['updated_at']}} 
                    </div>
                </div>
                           
            </div>
            <div class="btn-area col-sm-3">
                <button class="edit-button btn">
                    <a href="{{route('edit.article', $article->id)}}">EDIT</a>
                </button>
                
                 <button type="submit" class="confirm-btn btn delete-button">
                        <a href="{{route('delete.article', $article->id)}}">
                        DELETE</a>
                 </button>


            </div>
            

        </div>
    

    @endforeach
    


{{ $articles->links() }}    




</div>




@endsection