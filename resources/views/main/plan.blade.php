@extends('layouts.app')

@section('content')
<div id="work" class="content show">
	<div class="row work">
		<h1 class="content-title">WORKS</h1>
        
        <div class="col-sm-8">
                  	<div class="slider js-slider content show">
						<div class="slider-item js-slider-item show">
							<img src="{{asset('images/work01_01.png')}}">
						</div>
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work01_02.png')}}">
						</div>
						
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work01_03.png')}}">
						</div>
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work01_04.png')}}">
						</div>
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work01_04.png')}}">
						</div>
					</div>
        </div>
        <div class="col-sm-4">
         			<div class="desc">
                        <h2 class="title">韓国惣菜BANCHAN様</h2>
                        <h6 class="text">百合ヶ丘にあるアットホームな韓国料理屋さん</h6>
                    	<table>

			           		<tr class="dot-line"><td rowspan="4">実装ページ</td>
			           			<td colspan="2">ABOUT</td></tr>
			           			<tr class="dot-line"><td colspan="2">MENU</td></tr>
			           			<tr class="dot-line"><td colspan="2">LOCATION</td></tr>
			           			<tr class="solid-line"><td colspan="2">CONTACT</td></tr>
			           		<tr class="solid-line"><td>依頼価格</td><td>約¥50,000</td></tr> 
			           		<tr class="solid-line"><td>制作時間</td><td colspan="2">2日</td></tr> 
	           			</table> 
                    </div>
                	 <div class="view-details">
		                <a href="{{route('work','01')}}">
		                 View Details→
		                </a>
    				</div>
        </div>
    </div> 

    <div class="row work" style="flex-direction:row-reverse;">
        
        <div class="col-sm-8">
                  	<div class="slider js-slider content show">
						<div class="slider-item js-slider-item show">
							<img src="{{asset('images/work02_01.png')}}">
						</div>
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work02_02.png')}}">
						</div>
						
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work02_03.png')}}">
						</div>
						<div class="slider-item js-slider-item">
							<img src="{{asset('images/work02_04.png')}}">
						</div>
				
					</div>
        </div>
        <div class="col-sm-4">
         			<div class="desc">
                        <h2 class="title">長崎珈琲様</h2>
                        <h6 class="text">河口湖のほとりの珈琲屋さん</h6>
                        <table>
			           		<tr class="dot-line"><td rowspan="4">実装ページ</td>
			           			<td colspan="2">ご案内</td></tr>
			           			<tr class="dot-line"><td colspan="2">ギャラリー</td></tr>
			           			<tr class="dot-line"><td colspan="2">お知らせ</td></tr>
			           			<tr class="solid-line"><td colspan="2">お問合せフォーム</td></tr>
			           		<tr class="solid-line"><td>依頼価格</td><td>約¥50,000</td></tr> 
			           		<tr class="solid-line"><td>制作時間</td><td colspan="2">3日</td></tr> 
	           			</table>  
                    </div>
                	 <div class="view-details">
		                <a href="{{route('work', '02')}}">
		                 View Details→
		                </a>
    				</div>
        </div>
    </div>    
  
</div>






<div id="simple" class="content show">
    <h1 class="content-title">PLAN MODEL</h1>

	    <div class="row work-content">
	        <div class="col-sm-6">
	            <img class="work-img" src=""><br><br>
	        </div>
	        <div class="col-sm-8 work-desc">
	           	<table>
	           		<tr class="dot-line"><td rowspan="4">価格</td>
	           			<td>1ページ</td><td>¥10,000-</td></tr>
	           			<tr class="dot-line"><td>1ページスクロール型</td><td>¥30,000-</td></tr>
	           			<tr class="dot-line"><td>お知らせやブログ実装</td><td>¥30,000-</td></tr>
	           			<tr class="solid-line"><td>ランニングコスト</td><td>¥2,000/月</td></tr>
	           	
	           		<tr class="solid-line"><td>制作時間</td><td colspan="2">1週間ほど</td></tr> 
	           		
	           	</table>        	      
	        </div>
	    </div>
</div>












@endsection