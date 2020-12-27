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



    
@endsection