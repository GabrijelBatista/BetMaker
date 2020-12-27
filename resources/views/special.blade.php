@extends('layouts.admin')



@section('content')

<style>
    .container{
        max-width:100%
    }
    #picture{
        display:none
    }

    @media screen and (max-width: 520px), screen and (max-height:  565px){
        #picture2{
            margin-top: 63px;
            zoom: 90%;
        }
    }
    @media screen and (max-width: 460px), screen and (max-height:  515px){
        #picture2{
            margin-top: 68px;
            zoom: 80%;
        }
    }

    @media screen and (max-width: 410px), screen and (max-height:  470px){
        #picture2{
            margin-top: 90px;
            zoom: 70%;
        }
        .outer{
            margin-top: 10px;
        }
    }

    @media screen and (max-width: 360px), screen and (max-height:  415px){
        #picture2{
            margin-top: 90px;
            zoom: 60%;
        }
        .outer{
            margin-top: 15px;
        }
    }
    @media screen and (max-width: 305px), screen and (max-height:  365px){
        #picture2{
            margin-top: 110px;
            zoom: 50%;
        }
    }
    @media screen and (max-width: 255px), screen and (max-height:  315px){
        #picture2{
            margin-top: 140px;
            zoom: 40%;
        }
        .outer{
            margin-top: 20px;
        }
    }
    @media screen and (max-width: 205px), screen and (max-height:  265px){
        #picture2{
            margin-top: 190px;
            zoom: 30%;
        }
    }


</style>


<div id="picture2" class="container" style="margin-top: 70px;font-family: fantasy; @if(isset($cimage)) background: url(storage/images/backgrounds/{{$cimage['cimage']}}); @endif background-position: center; background-size:cover; width:500px; height:500px; box-shadow:-10px -10px 10px 10px darkslategray, 10px 10px 10px 10px darkslategray">
    <div class="container" style="min-width: 100%; min-height:100%; ">
        @if(isset($matches2[0]))
        <div id="cvh" class="container" style="min-width:100%; padding-top:25px; min-height:100%;">
            <div class="container" style="text-align: center; min-width: 100%; border: 2px white solid; padding-top: 25px">
                <p style="font-size:38px; color:white; width:100%; height:110px; text-align:center; padding-top:35px"> {{ __('text.matchoftheday') }} </p>

                <div class="wrapper" style="float: left; height:85px; width:100%; margin-bottom: 60px;margin-top: 35px">
                    <img src="storage/images/teams/{{$matches2[0]['homelogo']}}" style="width: 87px; height: 87px; float:left">
                    <div class="container" style="float:left; width: 60%; height:75px; padding:5px">
                        <p style="font-size:22px; color:white;text-align:center; padding:0; margin-bottom:0; text-transform: uppercase;">{{$matches2[0]['hometeam']}}</p>
                        <p style="font-size:22px; color:white;text-align:center; padding:0; text-transform: uppercase;">{{$matches2[0]['awayteam']}}</p>
                    </div>
                    <img src="storage/images/teams/{{$matches2[0]['awaylogo']}}"  style="width: 87px; height: 87px; float:right">
                </div>

                <div class="row" style="font-size: 28px; width:100%"><b style="width:50%; margin-left:120px; margin-top:25px; margin-bottom:50px; background-color:orange; text-transform: uppercase"> {{$m2}}  {{$matches2[0]['time']}} </b></div>
            </div>
    </div>
            @else
            <div style="height:500px"></div>
            @endif
        </div>
</div>  
    
    

    <div id="picture" class="container" style="font-family: fantasy;margin-left:100%; position:absolute; margin-top:100%; @if(isset($cimage)) background: url(storage/images/backgrounds/{{$cimage['cimage2']}}); @endif transform:scale({{$scale}}, {{$scale}}); background-position: center; background-size:cover; width:500px; height:500px">
        <div class="container" style="min-width: 100%; min-height:100%; ">
            @if(isset($matches2[0]))
                <div id="cvh" class="container" style="min-width:100%; padding-top:25px; min-height:100%;">
                        <div class="container" style="text-align: center; min-width: 100%; border: 2px white solid; padding-top: 25px">
                            <p style="font-size:38px; color:white; width:100%; height:110px; text-align:center; padding-top:35px"> {{ __('text.matchoftheday') }} </p>
        
                            <div class="wrapper" style="float: left; height:85px; width:100%; margin-bottom: 60px;margin-top: 35px">
                                <img src="storage/images/teams/{{$matches2[0]['homelogo']}}" style="width: 87px; height: 87px; float:left">
                                <div class="container" style="float:left; width: 60%; height:75px; padding:5px">
                                    <p style="font-size:22px; color:white;text-align:center; padding:0; margin-bottom:0; text-transform: uppercase;">{{$matches2[0]['hometeam']}}</p>
                                    <p style="font-size:22px; color:white;text-align:center; padding:0; text-transform: uppercase;">{{$matches2[0]['awayteam']}}</p>
                                </div>
                                <img src="storage/images/teams/{{$matches2[0]['awaylogo']}}"  style="width: 87px; height: 87px; float:right">
                            </div>
        
                            <div class="row" style="font-size: 28px; width:100%"><b style="width:50%; margin-left:120px; margin-top:25px; margin-bottom:50px; background-color:orange; text-transform: uppercase"> {{$m2}}  {{$matches2[0]['time']}} </b></div>
                        </div>
                </div>
                @else
                <div style="height:500px"></div>
                @endif
                </div>
        </div>
    
@endsection