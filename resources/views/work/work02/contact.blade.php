@extends('layouts.work02')

@section('content')

<div class="info row">
	<h2 class="content-title">お問い合わせ</h2>
	<form method="POST" action="{{ route('contact.confirm') }}">
	    @csrf
	    	<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">TITLE</label>
			  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{old('title')}}">
			</div>
	    	<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email address</label>
			  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{old('email')}}">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">内容</label>
			  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{old('body')}}</textarea>
			</div>
			<div class="col-auto">
			    <button type="submit" class="btn mb-3" style="float: right;">内容を確認</button>
			 </div>
	    </form>
</div>



@endsection