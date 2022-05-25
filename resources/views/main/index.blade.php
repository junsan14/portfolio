@extends('layouts.app')


@section('content')




<div id="top" class="row show top">
    <div class="top-content">
        <h2 class="top-title"> JUNSAN14</h2>
        <h5 class="top-desc">A WEB DESIGNER & CREATER <br>
                             AS FORMER HOTEL MAN
        </h5>
    </div>
</div>

<div id="about" class="content js-fadeIn">
    <h1 class="content-title">ABOUT ME & SKILLS</h1>

    <div class="row aboutme">
        <h4 class="content-subtitle">ABOUT ME</h4>
        <div class="col-sm-8 aboutme-desc">
            1992年大阪府生まれ<br>
            イギリスロンドン大学留学に,NPO法人<br>
            「 Japanese Language Cultural Excgange」設立<br>
            2018年帰国後,星野リゾートマネジメント入社<br>
            フロントマネージャ-,社内システムエンジニアに従事<br>
            <br>


        </div>
        <div class="col-sm-4">
            <br><br>
           <img class="aboutme-img" src="{{asset('/images/profile.jpg')}}"><br><br>
           元ホテルシステムエンジニア<br>
           「ホスピタリティをITで支える」<br>
        </div>
    </div>

    <div class="row skills">
            <h4 class="content-subtitle">SKILLS</h4>     
                <div class="col-sm-4 skills-content">                               
                            <div class="skills-main"> HTML</div>
                            <div class="skills-main"> CSS
                                <div class="skills-sub js-slide-content">Sass</div>
                                <div class="skills-sub js-slide-content">Bootstrap5</div>
                                 <div class="skills-sub js-slide-content">Tailwind CSS</div>
                            </div>
                            <div class="skills-main"> JavaScript
                                 <div class="skills-sub js-slide-content">Vue.js</div>
                                 <div class="skills-sub js-slide-content">Google Apps Script</div>
                                 <div class="skills-sub js-slide-content">jQuery</div>
                            </div>
                            <div class="skills-main"> PHP
                                <div class="skills-sub js-slide-content">Laravel PHP</div>
                            </div>
                </div> 

    

    </div>

</div>


    


    














       

       



@endsection