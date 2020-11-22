@extends('layouts.admin')

@section('content')


<style>
    #picture{
        display:none
    }
    #picture2{
        margin-top:45px;
    }
    .container{
        max-width:100%
    }

@media screen and (max-width: 1130px), screen and (max-height: 580px) {
    #picture2{
        margin-top:50px;
        zoom: 90%
    }
}
@media screen and (max-width: 1030px), screen and (max-height: 530px) {
    #picture2{
        margin-top:60px;
        zoom: 80%
    }
}
@media screen and (max-width: 910px), screen and (max-height: 480px) {
    #picture2{
        margin-top:60px;
        zoom: 70%
    }
    .outer{
            margin-top: 10px;
        }
}
@media screen and (max-width: 790px), screen and (max-height: 430px) {
    #picture2{
        margin-top:70px;
        zoom: 60%
    }
}
@media screen and (max-width: 550px), screen and (max-height: 375px) {
    #picture2{
        margin-top:110px;
        zoom: 50%
    }
}
@media screen and (max-width: 450px), screen and (max-height: 315px) {
    #picture2{
        margin-top:130px;
        zoom: 40%
    }
}
@media screen and (max-width: 360px), screen and (max-height: 265px) {
    #picture2{
        margin-top:180px;
        zoom: 30%
    }
    .outer{
            margin-top: 7px;
        }
}
@media screen and (max-width: 320px), screen and (max-height: 225px) {
    #picture2{
        margin-top:230px;
        zoom: 25%
    }
    .outer{
            margin-top: 4px;
        }
}
@media screen and (max-width: 230px), screen and (max-height: 190px) {
    #picture2{
        margin-top:300px;
        zoom: 20%
    }
}

</style>




<div id="picture2" class="container" style="font-family: fantasy; @if(isset($cimage)) background: url(storage/images/{{$user['id']}}{{$user['name']}}/backgrounds/{{$cimage['cimage']}}), url(storage/images/templates/{{$cimage['cimage']}}); @endif background-position: center; background-size:cover; width:888.888889px; height:500px; box-shadow:-10px -10px 10px 10px darkslategray, 10px 10px 10px 10px darkslategray">
    <div class="container" style="min-width: 100%">
        @if(isset($matches2[0]))
            <div id="cvh" class="container" style="width:100%; padding-top:30px; max-height:90%;">
                    <div class="container" style="text-align: center; width: 100%; border: 2px white solid; padding-top: 10px">
                        <p style="font-size:52px; color:white; width:100%; height:30%; text-align:center; padding:15px"> {{ __('text.matchoftheday') }} </p>
    
                        <div class="container" style="float: left; height:20%; width:100%; margin-bottom: 20px;margin-top: 20px">
                            <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['homelogo']}}" style="width: 15%; height: 60%; float:left">
                            <div class="container" style="@if($matches2[0]['homelogo']===0 && $matches2[0]['awaylogo']===0) width:100%; @elseif($matches2[0]['homelogo']===0 || $matches2[0]['awaylogo']===0) width:80%; @else width: 60%; @endif float:left; height:75px; padding:5px">
                                <p style="font-size:36px; color:white;text-align:center; padding:0; margin-bottom:0; text-transform: uppercase;">{{$matches2[0]['hometeam']}}</p>
                                <p style="font-size:36px; color:white;text-align:center; padding:0; text-transform: uppercase;">{{$matches2[0]['awayteam']}}</p>
                            </div>
                            <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['awaylogo']}}"  style="width: 15%; height: 60%; float:right">
                        </div>
    
                        <div class="row" style="font-size: 42px; width:100%"><b style="width:50%; margin-left:220px; margin-top:40px; margin-bottom:30px; background-color:orange; text-transform: uppercase"> {{$m2}}  {{$matches2[0]['time']}} </b></div>
                    </div>
            </div>
            @else
            <div style="height:500px"></div>
            @endif
            </div>
    </div>  
    
    


    <div id="picture" class="container" style="font-family: fantasy; margin-top:100%; margin-left:100%; position:absolute; @if(isset($cimage)) background: url(storage/images/{{$user['id']}}{{$user['name']}}/backgrounds/{{$cimage['cimage2']}}),url(storage/images/templates/{{$cimage['cimage2']}}) @endif background-position: center; background-size:cover; transform:scale({{$scale}}, {{$scale}}); width:888.888889px; height:500px">
        <div class="container" style="min-width: 100%">
            @if(isset($matches2[0]))
                <div id="cvh" class="container" style="width:100%; padding-top:30px; max-height:90%;">
                        <div class="container" style="text-align: center; width: 100%; border: 2px white solid; padding-top: 10px">
                            <p style="font-size:52px; color:white; width:100%; height:30%; text-align:center; padding:15px"> {{ __('text.matchoftheday') }} </p>
        
                            <div class="container" style="float: left; height:20%; width:100%; margin-bottom: 20px;margin-top: 20px">
                                <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['homelogo']}}" style="width: 15%; height: 60%; float:left">
                                <div class="container" style="@if($matches2[0]['homelogo']===0 && $matches2[0]['awaylogo']===0) width:100%; @elseif($matches2[0]['homelogo']===0 || $matches2[0]['awaylogo']===0) width:80%; @else width: 60%; @endif float:left; height:75px; padding:5px">
                                    <p style="font-size:36px; color:white;text-align:center; padding:0; margin-bottom:0; text-transform: uppercase;">{{$matches2[0]['hometeam']}}</p>
                                    <p style="font-size:36px; color:white;text-align:center; padding:0; text-transform: uppercase;">{{$matches2[0]['awayteam']}}</p>
                                </div>
                                <img onerror="this.style.display='none'" src="storage/images/{{$user['id']}}{{$user['name']}}/teams/{{$matches2[0]['awaylogo']}}"  style="width: 15%; height: 60%; float:right">
                            </div>
        
                            <div class="row" style="font-size: 42px; width:100%"><b style="width:50%; margin-left:220px; margin-top:40px; margin-bottom:30px; background-color:orange; text-transform: uppercase"> {{$m2}}  {{$matches2[0]['time']}} </b></div>
                        </div>
                </div>
                @else
                <div style="height:500px"></div>
                @endif
                </div>
        </div>    
    
@endsection