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


<div id="picture2" class="container" style="margin-top: 70px;font-family: fantasy; @if(isset($cimage)) background: url(storage/images/{{$user['id']}}{{$user['name']}}/backgrounds/{{$cimage['cimage']}}), url(storage/images/templates/{{$cimage['cimage']}}); @endif background-position: center; background-size:cover; width:500px; height:500px; box-shadow:-10px -10px 10px 10px darkslategray, 10px 10px 10px 10px darkslategray">
    <form id="formaddbackground" action="{{ action('FormController@addpdf') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p><input type="file"  name="ppdf" class="pdf" id="pdf" ></p>
    @if ($errors->has('ppdf')) <p><small class="help-block" style= " color:red;">{{ $errors->first('ppdf') }}</small></p> @endif
    <button class="modalbtn" type="submit">Upload</button>
    </form>
</div>  
    
    

    <div id="picture" class="container" style="font-family: fantasy;margin-left:100%; position:absolute; margin-top:100%; @if(isset($cimage)) background: url(storage/images/{{$user['id']}}{{$user['name']}}/backgrounds/{{$cimage['cimage']}}),url(storage/images/templates/{{$cimage['cimage2']}});@endif transform:scale({{$scale}}, {{$scale}}); background-position: center; background-size:cover; width:500px; height:500px">
        <iframe src="storage/images/lang/sample.pdf" width="500px" height="500px" style="display:inline-block; position:relative">
        </iframe>
        </div>
    
@endsection