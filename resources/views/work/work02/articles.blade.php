@extends('layouts.work02')

@section('content')

<div class="info row">
	<h2 class="content-title">お知らせ</h2>


	@foreach($articles as $article)
	<a href="{{route('article', ['02',$article->id])}}">
		<div class="col-sm-10 info-content">
			<h5 class="info-title">{{$article['title']}}</h5>
			<h6 class="info-date">{{$article['created_at']}} </h6>
		</div>
	</a>
	@endforeach
	


{{ $articles->links() }}	
</div>




@endsection