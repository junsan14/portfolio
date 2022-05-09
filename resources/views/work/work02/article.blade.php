
@extends('layouts.work02')


@section('content')

<div class="article row">
	<h2 class="content-title">{{ $article->title}}</h2>
	<div class="col-sm-10 article-content">
	 
	 	{{ $article->content}}
	 </div>
	 <img src="{{asset('storage/'.$article->img_path)}}" alt="">
</div>


<a href="{{route('articles', '02')}}">back</a> 


@endsection