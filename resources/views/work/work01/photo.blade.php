@extends('layouts.work01')

@section('content')

<div class="row photo">
	<h2 class="col-title"> PHOTOS </h2><br>
	<h5 class="col-sub-title">店内</h5>
	<div class="col-sm-3 image">
		<img class="gallery-image" src="{{asset('images/work01/menutop01.jpg')}}" alt="">
	</div>
	<div class="col-sm-3 image">
		<img class="gallery-image" src="{{asset('images/work01/menutop01.jpg')}}" alt="">
	</div>
	<div class="col-sm-3 image">
		<img class="gallery-image" src="{{asset('images/work01/menutop01.jpg')}}" alt="">
	</div>
	<div class="col-sm-3 image">
		<img class="gallery-image" src="{{asset('images/work01/menutop01.jpg')}}" alt="">
	</div>


</div>


@endsection