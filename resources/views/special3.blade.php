@extends('layouts.admin')

@section('content')


<style>
    #picture{
        display:none
    }
    #picture2{
        margin-top:55px;
    }
    .container{
        max-width:100%
    }

@media screen and (max-height: 1020px), screen and (max-width: 760px) {
    #picture2{
        margin-top:40px;
        zoom: 180%
    }
}
@media screen and (max-height: 990px), screen and (max-width: 530px) {
    #picture2{
        margin-top:30px;
        zoom: 170%
    }
}
@media screen and (max-height: 930px), screen and (max-width: 500px) {
    #picture2{
        margin-top:40px;
        zoom: 160%
    }
}
@media screen and (max-height: 880px), screen and (max-width: 465px) {
    #picture2{
        margin-top:40px;
        zoom: 150%
    }
}
@media screen and (max-height: 820px), screen and (max-width: 440px) {
    #picture2{
        margin-top:40px;
        zoom: 140%
    }
}
@media screen and (max-height: 770px), screen and (max-width: 410px) {
    #picture2{
        margin-top:40px;
        zoom: 130%
    }
}
@media screen and (max-height: 725px), screen and (max-width: 385px) {
    #picture2{
        margin-top:45px;
        zoom: 120%
    }
}
@media screen and (max-height: 675px), screen and (max-width: 350px) {
    #picture2{
        margin-top:50px;
        zoom: 110%
    }
}

@media screen and (max-height: 620px), screen and (max-width: 315px) {
    #picture2{
        margin-top:60px;
        zoom: 100%
    }
}
@media screen and (max-height: 565px), screen and (max-width: 290px) {
    #picture2{
        margin-top:60px;
        zoom: 90%
    }
}
@media screen and (max-height: 515px), screen and (max-width: 260px) {
    #picture2{
        margin-top:70px;
        zoom: 80%
    }
}
@media screen and (max-height: 465px), screen and (max-width: 230px) {
    #picture2{
        margin-top:85px;
        zoom: 70%
    }
}
@media screen and (max-height: 415px), screen and (max-width: 205px) {
    #picture2{
        margin-top:95px;
        zoom: 60%
    }
}
@media screen and (max-height: 365px), screen and (max-width: 175px) {
    #picture2{
        margin-top:110px;
        zoom: 50%
    }
}
@media screen and (max-height: 325px){
    #picture2{
        margin-top:110px;
        zoom: 40%
    }
    .outer{
        margin-top:10px
    }
}
@media screen and (max-height: 265px){
    #picture2{
        margin-top:110px;
        zoom: 30%
    }
    .outer{
        margin-top:15px
    }
}

</style>




<div id="picture2" class="container" style="font-family: fantasy; @if(isset($cimage)) background: url(storage/images/{{$user['id']}}{{$user['name']}}/backgrounds/{{$cimage['cimage']}}), url(storage/images/templates/{{$cimage['cimage']}}); @endif background-position: center; background-size:cover; width:281.25px; height:500px; box-shadow:-10px -10px 10px 10px darkslategray, 10px 10px 10px 10px darkslategray">
    <div class="container" style="min-width: 100%">
        @isset($matches2)
            <div id="cvh" class="container" style="width:100%; padding-top:30px; max-height:90%;">
                    <div class="container" style="text-align: center; width: 100%; border: 2px white solid; padding-top: 10px">
                        <p style="font-size:18px; color:white; width:100%; height:30%; text-align:center; padding:15px"> {{ __('text.matchoftheday') }} </p>
    
                        <div class="container" style="float: left; height:20%; width:100%; margin-bottom: 93px;margin-top: 93px">
                            <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['homelogo']}}" style="width: 40.5px; height: 40.5px; float:left">
                            <div class="container" style="@if($matches2[0]['homelogo']===0 && $matches2[0]['awaylogo']===0) width:100%; @elseif($matches2[0]['homelogo']===0 || $matches2[0]['awaylogo']===0) width:79.4%; @else width: 59.4%; @endif float:left; height:75px; padding:5px">
                                <p style="font-size:8px; color:white;text-align:center; padding:0; margin-bottom:0; text-transform: uppercase;"><strong>{{$matches2[0]['hometeam']}}</strong></p>
                                <p style="font-size:8px; color:white;text-align:center; padding:0; text-transform: uppercase;"><strong>{{$matches2[0]['awayteam']}}</strong></p>
                            </div>
                            <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['awaylogo']}}"  style="width: 40.5px; height: 40.5px; float:right">
                        </div>
    
                        <div class="row" style="font-size: 18px; width:100%"><b style="width:60%; margin-left:55px; margin-top:67px; margin-bottom:30px; background-color:orange; text-transform: uppercase"> {{$m2}}  {{$matches2[0]['time']}} </b></div>
                    </div>
            </div>
            @else
            <div style="height:500px"></div>
            @endif
            </div>
    </div>  
    
    


    <div id="picture" class="container" style="font-family: fantasy; margin-top:100%; margin-left:100%; position:absolute; @if(isset($cimage)) background: url(storage/images/{{$user['id']}}{{$user['name']}}/backgrounds/{{$cimage['cimage2']}}),url(storage/images/templates/{{$cimage['cimage2']}}) @endif background-position: center; background-size:cover; transform:scale({{$scale}}, {{$scale}}); width:281.25px; height:500px;">
        <div class="container" style="min-width: 100%">
            @if(isset($matches2[0]))
                <div id="cvh" class="container" style="width:100%; padding-top:30px; max-height:90%;">
                        <div class="container" style="text-align: center; width: 100%; border: 2px white solid; padding-top: 10px">
                            <p style="font-size:18px; color:white; width:100%; height:30%; text-align:center; padding:15px"> {{ __('text.matchoftheday') }} </p>
        
                            <div class="container" style="float: left; height:20%; width:100%; margin-bottom: 93px;margin-top: 93px">
                                <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['homelogo']}}" style="width: 40.5px; height: 40.5px; float:left">
                                <div class="container" style="@if($matches2[0]['homelogo']===0 && $matches2[0]['awaylogo']===0) width:100%; @elseif($matches2[0]['homelogo']===0 || $matches2[0]['awaylogo']===0) width:79.4%; @else width: 59.4%; @endif float:left; height:75px; padding:5px">
                                    <p style="font-size:8px; color:white;text-align:center; padding:0; margin-bottom:0; text-transform: uppercase;"><strong>{{$matches2[0]['hometeam']}}</strong></p>
                                    <p style="font-size:8px; color:white;text-align:center; padding:0; text-transform: uppercase;"><strong>{{$matches2[0]['awayteam']}}</strong></p>
                                </div>
                                <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['awaylogo']}}"  style="width: 40.5px; height: 40.5px; float:right">
                            </div>
        
                            <div class="row" style="font-size: 18px; width:100%"><b style="width:60%; margin-left:55px; margin-top:67px; margin-bottom:30px; background-color:orange; text-transform: uppercase"> {{$m2}}  {{$matches2[0]['time']}} </b></div>
                        </div>
                </div>
                @else
                <div style="height:500px"></div>
                @endif
                </div>
        </div> 
    
@endsection