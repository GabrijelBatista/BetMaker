<!DOCTYPE html>
<html>


  <style>

    #conftext{
      font-size: 60px
    }
    .btn.btn-primary{
      background-color:rgb(10, 10, 51)
    }
    #mc2{
      background-color:darkslategray;
      color:white;
    }
    #likem{
      background-color:darkgray; color:whitesmoke
    }
    #btnress{
      border:1px white solid; color:white; border-radius:15px; background-color:darkslategray; margin-bottom:5px
    }
    #fmgrid{
      display:grid; grid-template-columns: repeat(2, 1fr);overflow-x: hidden
    }
    #fmgrid2{
      display:grid; grid-template-columns: repeat(2, 1fr);overflow-x: hidden
    }
    .nav-link, .nav-item{
      border:1px white solid; color:white; border-radius:15px; background-color:darkslategray; margin-bottom:5px
    }
    #listhide{
      display:none;
    }
        #fs2{
      display:none;
    }
    #menubutton{
      color:white; font-size:0px; padding:0; margin-right: 1vw; display:none; width:0
    }
    #btn22{
      color:white; font-size: 0px; padding:0; margin-right: 1vw; display:none; width:0
    }
    .outer {
  display: table;
  position: absolute;
  top: 0;
  left: 20%;
  height: 100%;
  width: 80%;
}

.middle {
  display: table-cell;
  vertical-align: middle;
}
    #resnav{
      position: absolute; 
            left: 50%; 
            transform: translatex(-50%); 
    }
    #navmain{
margin-left:18vw;
width:82vw;
    }

    body{
      overflow-x: hidden;
      overflow-y: hidden;
      vertical-align:middle;
    }
    #mc{
      background-color:rgb(78, 73, 73);
      color:white;
    }
    #cvh{
    display: -webkit-flexbox;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    justify-content: center;
    }
    #ddvv{
    display: -webkit-flexbox;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    justify-content: center;
    margin-top: 2.2%
    }
    #aside{
      height: 100%;
      position: fixed;
      overflow-y:auto;
      overflow-x:hidden;
      width:18vw;
    }
    #aside2{
      display:none; z-index:9999; width:0
    }
    #fm{
      min-width: 60vw;
      background-color:rgb(78, 73, 73);
      color:white;
    }
    #modalb{
      background-color:darkslategray;
      color:white;
      border: 1px white solid
    }
    #bb{
      width: 150px;
      height:150px;
      margin-bottom: 7%; padding-top: 80%; color:white; 
    }

    @media screen and (max-width: 910px) {
      #resnav{
        left:45%;
      }
    }
    @media screen and (max-width: 830px) {
      #resnav{
        left:43%;
      }
    }
    @media screen and (max-width: 800px) {
      #resnav{
        left:42%;
      }
    }
    @media screen and (max-width: 800px) {
      #resnav{
        font-size: 80%
      }
    }

    @media screen and (max-width: 767px) {
      #resnav{
        font-size: 100%
      }
      #btn22{
      font-size: 20px; width:20px
    }
      #menubutton{
      display:list-item;
      font-size:20px;
      width:20px
    }

    .outer {
      left: 0;
      width:100%;
    }
    #navmain{
      margin-left:0;
      width:100vw;
      
    }
    #aside2{
     position:fixed; width:50%; min-height:100%; z-index:10
    }
    #fs{
      display:none;
    }
    #fs2{
      display:inline-block;
    }
    #imagetm{
      display:none;
    }

}

@media screen and (max-width: 670px) {
  #conftext{
      font-size: 30px
    }
  #likem2{
    zoom:70%
  }
  #fmgrid{
    grid-template-columns: repeat(1, 1fr)
  }

    #resnav{
      display:none;
    }
    #loglog{
      display:none;
    }
    #listhide{
      display:inline-block;
    }
}
@media screen and (max-width: 500px) {
  #fmgrid2{
    grid-template-columns: none;
  }
  #bb{
    padding-top: 0;
  }
}
@media screen and (max-width: 230px) {
  #bb{
    width:100px;
    height:100px;
  }
}
@media screen and (max-height: 370px) {
  #asas2{
    zoom:80%
  }
}
@media screen and (max-height: 310px) {
  #asas2{
    zoom:70%
  }
}
@media screen and (max-height: 250px) {
  #asas2{
    zoom:60%
  }
}
@media screen and (max-height: 225px) {
  #asas2{
    zoom:50%
  }
}
@media screen and (max-width: 245px) {
  #conftext{
      font-size: 20px
    }
  #asas2{
    zoom:40%
  }
  #likem2{
    zoom:50%
  }
  #aside2{
    font-size:30px
  }
}
  </style>

   

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BetMaker</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://rawgit.com/select2/select2/4.0.5/dist/css/select2.min.css" rel="stylesheet">     
</head>
<body class="hold-transition sidebar-mini layout-relative;" style="background-color:rgb(129, 121, 121)">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hr_HR/sdk.js#xfbml=1&version=v9.0&appId=379553860008353&autoLogAppEvents=1" nonce="7HR0mkiV"></script>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-dark" id="navmain">  

     <!-- Left navbar links -->
    <ul class="nav navbar-nav navbar-center">
      <button type="button" id="btn22" onclick="hidemenu()" class="btn">
        &#9776;
      </button>
      <button type="button" id="menubutton" onclick="showmenu()" class="btn">
        &#9776;
      </button>
    <li class="dropdown" id="fs">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-list nav-icon" style="margin-right:0.3vw"></i> {{ __('text.filtersort') }}
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="likem">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#filterModal">
            {{ __('text.byattribute') }}
          </a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#filterModal2">
            {{ __('text.bychoice') }}
        </a>
      </div>
  </li>
  <li class="dropdown" id="fs2">
    <a id="likem2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ __('text.filter') }}
    </a>

    <div id="likem" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#filterModal">
          {{ __('text.byattribute') }}
        </a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#filterModal2">
          {{ __('text.bychoice') }}
      </a>
    </div>
</li>
</ul>
<ul id="resnav" class="navbar-nav">
  <div>
        <a href="#" data-toggle="modal" data-target="#resolutionModal" class="nav-link" style="border: 1px solid white; color:white; padding:5px;">
          @if(isset($resolution)){{$resolution['width']}}x{{$resolution['height']}}@else {{ __('text.widthxheight') }} @endif
        </a>
  </div>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="dropdown">
        <a id="likem2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase">
          <i class="fas fa-camera"></i>
        </a>
        <div id="likem" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#" onclick="screenshot()">
      <img src="storage/images/share/download.png" style="margin-bottom:3px" alt=""> {{ __('text.download') }}</a>
    <a class="dropdown-item" href="#" onclick="fb()">
      <img src="storage/images/share/facebook.png" style="margin-bottom:3px" alt=""> {{ __('text.shareonfacebook') }}</a>
        </div>
      </li>
    <li class="dropdown">
      <a id="likem2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase">
        <img src="storage/images/lang/{{App::getLocale()}}.png" style="margin-bottom:3px" alt="">
          {{App::getLocale()}}
      </a>

      <div id="likem" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form id="formaddmatch" action="{{ action('FormController@lang') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="lang" value="en">
          <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit()">
            <img src="storage/images/lang/en.png" style="margin-bottom:3px" alt="">
              EN
          </a>
        </form>
        <form id="formaddmatch" action="{{ action('FormController@lang') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="lang" value="hr">
        <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit()">
          <img src="storage/images/lang/hr.png" style="margin-bottom:3px" alt="">
           HR
       </a>
        </form>
      </div>
  </li>
    @guest
    <li class="dropdown" id="loglog">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ __('text.myaccount') }}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="likem">
        <a class="nav-link" href="{{ route('login') }}">{{ __('text.login') }}</a>
        <a class="nav-link" href="{{ route('register') }}">{{ __('text.register') }}</a>
      </div>
    </li>
@else
    <li class="dropdown" id="loglog">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="likem">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                {{ __('text.logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Backgrounds List Modal -->

<div class="modal fade" id="backgroundslistModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <b> {{ __('text.backgrounds') }} </b>
      </div>
      <div id="fmgrid" class="modal-body">
      @isset($backgrounds)
      @foreach($backgrounds as $background)
      <div class="form-group" style="margin-left:40px">
        <form id="formaddmatch" action="{{ action('FormController@addcimage') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="cimage" value="{{ $background['image'] }}">
          <button id="bb" type="submit" style="color:white; text-align:center; background: url(storage/images/backgrounds/{{$background['image']}}); background-size:cover">{{ $background['name'] }}</button>
        </form>
        <form id="formremoveone" method="POST" action="{{ action('FormController@deleteoneb') }}" enctype="multipart/form-data">
          <input type="hidden" name="bn" value="{{ $background['name']}}">
          <input type="hidden" name="bi" value="{{ $background['image'] }}">
          <input type="hidden" name="bi2" value="{{ $background['image2'] }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn" style="margin-top:-145px; margin-left: 110px; position:absolute; float:right; font-size:12px; width:10%; padding:0;">
          <span class="badge badge-danger">
         X
          </span>
          </button>
        </form>  
      </div>
      @endforeach
      @endisset
      </div>
      <div class="modal-footer">
        <button type="button" id="modalb" class="btn btn-bbb2" data-toggle="modal" data-target="#backgroundModal">
          <i class="fas fa-plus nav-icon"></i>
          {{ __('text.addbackground') }}
        </button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </div>
    </div>
  </div>


  <!-- Choose template Modal -->

<div class="modal fade" id="choosetemplateModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <b> {{ __('text.choosetemplate') }} </b>
      </div>
      <div class="modal-body" id=fmgrid2>
      @isset($templates)
      @foreach($templates as $template)
      <div class="form-group" style="margin-left:40px">
        <form id="formaddmatch" action="{{ action('FormController@addctemplate') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="ctemplate" value="{{ $template['name'] }}">
          <input type="hidden" name="cmax" value="{{ $template['max_matches'] }}">
          <button id="bb" type="submit" style="background: url(storage/images/templates/examples/{{$template['example']}}); background-position: center; background-size:cover;float:left; color:rgb(27, 26, 26); text-align:center"><b id="bbins" style="background-color: rgba(17, 63, 57, 0.658); color:white">{{ $template['name'] }}</b></button>
        </form> 
        @if(Auth::check())
        @if(auth()->user()->superadmin == true)
        <div class="modal fade" id="edit{{$template['id']}}" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div id="mc" class="modal-content">
              <div class="modal-header">
                  <li class="nav-item d-none d-sm-inline-block">{{$template['name']}}</li>
              </div>
              <form id="formaddcompetition" action="{{ action('FormController@edittemp') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="tempid" value="{{$template['id']}}">
              <div class="modal-body">
                <label>{{ __('text.name') }}:</label>
                <input type="text"  class="form-control name_c" id="name" name="ename" placeholder="{{ __('text.name') }}">
                <label>{{ __('text.maximumnumberofmatches') }}:</label>
                <input type="text"  class="form-control name_c" id="name" name="emax" placeholder="{{ __('text.maximumnumberofmatches') }}">
                <label id="ci">{{ __('text.addexampleimage') }}:</label>
                <p><input type="file"  name="eexample" class="edefault" id="default_background" ></p>
              </div>
              <div class="modal-footer">
                <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.submit') }}</button>
                <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
              </div> 
              </form>
              </div>
            </div>
          </div>
          <button type="button"  data-toggle="modal" data-target="#edit{{$template['id']}}" class="btn" style="margin-left: -145px; position:absolute; float:right; font-size:12px; width:5%; padding:0">
          <span class="badge badge-warning">
            <i class="fas fa-brush"></i>
          </span>
          </button> 
        <form id="formremoveone" method="POST" action="{{ action('FormController@deleteonetemp') }}" enctype="multipart/form-data">
          <input type="hidden" name="tempid" value="{{ $template['id']}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn" style="margin-left: -25px; position:absolute; float:right; font-size:12px; width:5%; padding:0">
          <span class="badge badge-danger">
         X
          </span>
          </button> 
        </form>
        @endif @endif
      </div>
      @endforeach
      @endisset
      </div>
      <div class="modal-footer">
        @if(Auth::check())
        @if(auth()->user()->superadmin == true)
        <button type="button" id="modalb" class="btn btn-bbb2" data-toggle="modal" data-target="#templateModal">
          <i class="fas fa-plus nav-icon"></i>
          {{ __('text.addtemplate') }}
        </button>
        @endif @endif
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </div>
    </div>
  </div>

   <!-- Competitions List Modal -->

<div class="modal fade" id="competitionslistModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <b>{{ __('text.competitions') }} </b>
      </div>
      <div class="modal-body">
        <ul class="nav nav-treeview">
      @isset($competitions)
          @foreach($competitions as $competition)
          @isset($competition['logo'])<img id="imagetm" src="storage/images/competitions/{{$competition['logo']}}" style="margin-bottom:5px; margin-right:0.2vw; float:left; width: 30px; height:30px" alt="">@endisset
          <li class="nav-item" style="margin-bottom:5px; color:rgb(255, 255, 255); width:88%; height: 30px; float:left; padding:2px">{{$competition['name']}}</li>
              <form id="formremoveone" method="POST" action="{{ action('FormController@deleteonec') }}" enctype="multipart/form-data">
                <input type="hidden" name="cn" value="{{ $competition['name']}}">
                @isset($competition['logo'])<input type="hidden" name="ci" value="{{ $competition['logo']}}">@endisset
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn" style="float:right; font-size:12px; width:10%; padding:0; margin-top:0.5vw">
                <span class="badge badge-danger">
               X
                </span>
                </button>
              </form> 
          @endforeach
          @endisset
      </ul>
      </div>
      <div class="modal-footer">
        @isset($competitions)
        <button style="float:left" type="button" data-toggle="modal" data-target="#confirmModal3" class="btn btn-danger">Delete all competitions</button>
        @endisset
        <button type="button" id="modalb" class="btn btn-bbb2" data-toggle="modal" data-target="#competitionModal">
          <i class="fas fa-plus nav-icon"></i>
          {{ __('text.addcompetition') }}
        </button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </div>
    </div>
  </div>

  <!-- Teams List Modal -->

<div class="modal fade" id="teamslistModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <b> {{ __('text.teams') }} </b>
      </div>
      <div class="modal-body">
        <ul class="nav nav-treeview">
      @isset($teams)
          @foreach($teams as $team)
          @isset($team['logo'])<img id="imagetm" src="storage/images/teams/{{$team['logo']}}" style="margin-bottom:5px; margin-right:0.2vw; float:left; width: 30px; height:30px" alt="">@endisset
          <li class="nav-item" style="margin-bottom:5px; color:rgb(255, 255, 255); width:88%; height: 30px; float:left; padding:2px">{{$team['name']}}</li>
              <form id="formremoveone" method="POST" action="{{ action('FormController@deleteonet') }}" enctype="multipart/form-data">
                <input type="hidden" name="tn" value="{{ $team['name']}}">
                @isset($team['logo'])<input type="hidden" name="ti" value="{{ $team['logo'] }}">@endisset
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn" style="float:right; font-size:12px; width:10%; padding:0; margin-top:5px">
                <span class="badge badge-danger">
               X
                </span>
                </button>
              </form> 
          @endforeach
          @endisset
        </ul>
      </div>
      <div class="modal-footer">
        @isset($teams)
        <button style="float:right" type="button" data-toggle="modal" data-target="#confirmModal2" class="btn btn-danger">Delete all teams</button>
          @endisset
        <button type="button" id="modalb" class="btn btn-bbb2" data-toggle="modal" data-target="#teamModal">
          <i class="fas fa-plus nav-icon"></i>
          {{ __('text.addteam') }}
        </button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </div>
    </div>
  </div>

    <!-- Matches List Modal -->

<div class="modal fade" id="matcheslistModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <b> {{ __('text.matches') }} </b>
      </div>
      <div class="modal-body">
        <ul class="nav nav-treeview">
      @isset($matches)
          @foreach($matches as $match)
          <li class="nav-item" style="font-size:14px; margin-bottom:0.2vw; color:rgb(255, 255, 255); width:90%; height: 50px; float:left; padding:0.2vw">{{$match['hometeam']}} - {{$match['awayteam']}}<br>{{$match['mn']}}, {{$match['date']}}</li>
              <form id="formremoveone" method="POST" action="{{ action('FormController@deleteone') }}" enctype="multipart/form-data">
                <input type="hidden" name="key" value="{{$match['name']}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn" style="margin-top:12px; float:right; font-size:12px; width:10%; padding:0">
                <span class="badge badge-danger">
               X
                </span>
                </button>
              </form>  
          @endforeach          
          @endisset
        </ul>
      </div>
      <div class="modal-footer">
        @isset($matches)
        <button style="float:left" type="button" data-toggle="modal" data-target="#confirmModal" class="btn btn-danger">Delete all matches</button>
        @endisset
        <button type="button" id="modalb" class="btn btn-bbb2" data-toggle="modal" data-target="#matchModal">
          <i class="fas fa-plus nav-icon"></i>
          {{ __('text.addmatch') }}
        </button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </div>
    </div>
  </div>


<!-- Confirm Modal -->

<div class="modal fade" id="confirmModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <form id="formconfirm" action="{{ action('FormController@deleteall') }}">
      <div class="modal-body" id="conftext">>
        {{ __('text.areyousure') }}
      </div>
      <div class="modal-footer">
        <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.confirm') }}</button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </form>
      </div>
    </div>
  </div>

  <!-- Confirm Modal2 -->

<div class="modal fade" id="confirmModal2" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <form id="formconfirm" action="{{ action('FormController@deleteallt') }}">
      <div class="modal-body" id="conftext">>
        {{ __('text.areyousure') }}
      </div>
      <div class="modal-footer">
        <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.confirm') }}</button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </form>
      </div>
    </div>
  </div>

  <!-- Confirm Modal3 -->

<div class="modal fade" id="confirmModal3" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <form id="formconfirm" action="{{ action('FormController@deleteallc') }}">
      <div class="modal-body" id="conftext">
        {{ __('text.areyousure') }}
      </div>
      <div class="modal-footer">
        <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.confirm') }}</button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
      </div> 
      </form>
      </div>
    </div>
  </div>



  <!-- Add Resolution Modal -->

  <div class="modal fade" id="resolutionModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b>{{ __('text.chooseresolution') }}</b>
        </div>
        <div class="modal-body" style="text-align:center; color:white">
          <form id="formaddcompetition" action="{{ action('FormController@addresolution') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="width" value="1080">
            <input type="hidden" name="height" value="1080">
          <button type="submit" id="btnress"  class="btn">1080x1080</button>
          </form>
          <form id="formaddcompetition" action="{{ action('FormController@addresolution') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="width" value="1200">
            <input type="hidden" name="height" value="1200">
          <button type="submit" id="btnress"  class="btn">1200x1200</button>
          </form>
          <form id="formaddcompetition" action="{{ action('FormController@addresolution') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="width" value="1920">
            <input type="hidden" name="height" value="1080">
          <button type="submit" id="btnress"  class="btn">1920x1080</button>
          </form>
          <form id="formaddcompetition" action="{{ action('FormController@addresolution') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="width" value="1080">
            <input type="hidden" name="height" value="1920">
          <button type="submit" id="btnress"  class="btn">1080x1920</button>
          </form>
          <form id="formaddcompetition" action="{{ action('FormController@addresolution') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="width" value="1920">
            <input type="hidden" name="height" value="1920">
          <button type="submit" id="btnress"  class="btn">1920x1920</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </div>
      </div>
    </div>


    <!-- Add Competition Modal -->

  <div class="modal fade" id="competitionModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b class="nav-item d-none d-sm-inline-block">{{ __('text.addnewcompetition') }}</b>
        </div>
        <form id="formaddcompetition" action="{{ action('FormController@addcompetition') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">
          <label>{{ __('text.name') }}:</label>
          <input type="text"  class="form-control name_c" id="name" name="competition_name" placeholder="{{ __('text.name') }}">
          @if ($errors->has('competition_name')) <p><small class="help-block" style= " color:red;">{{ $errors->first('competition_name') }}</small></p> @endif
          @if(\Session::has('err3')) <p><small class="help-block" style= " color:red;">{{\Session::get('err3')}}</small></p> @endif
          <label id="ci">{{ __('text.choosecompetitionlogo') }}:</label> <p style="font-size: 12px; color:green">*{{ __('text.optional') }}</p>
          <p><input type="file"  name="complogo" class="default_background" id="default_background" ></p>
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.addcompetition') }}</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </form>
        </div>
      </div>
    </div>

    <!-- Add Template Modal -->

  <div class="modal fade" id="templateModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b class="nav-item d-none d-sm-inline-block">{{ __('text.addnewtemplate') }}</b>
        </div>
        <form id="formaddcompetition" action="{{ action('FormController@addtemplate') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">
          <label>{{ __('text.name') }}:</label>
          <input type="text"  class="form-control name_c" id="name" name="template_name" placeholder="{{ __('text.name') }}">
          @if ($errors->has('template_name')) <p><small class="help-block" style= " color:red;">{{ $errors->first('template_name') }}</small></p> @endif
          <label>{{ __('text.maximumnumberofmatches') }}:</label>
          <input type="text"  class="form-control name_c" id="name" name="max" placeholder="{{ __('text.maximumnumberofmatches') }}">
          @if ($errors->has('max')) <p><small class="help-block" style= " color:red;">{{ $errors->first('max') }}</small></p> @endif        
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.addtemplate') }}</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </form>
        </div>
      </div>
    </div>

    <!--Filter Modal 2-->

  <div class="modal fade" id="filterModal2" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b>{{ __('text.filtersort') }}</b>
        </div>
        <form id="formaddcompetition" action="{{ action('FormController@filter2') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">

          <div class="form-group">
            <label id="category">{{ __('text.sortby') }}:</label>
            <select name="sort" id="sc" >
              <option id="choose" value="">{{ __('text.sortby') }}</option>
              <option value="scompetition">{{ __('text.competition') }}</option>
              <option value="sdate">{{ __('text.datetime') }}</option>
              <option value="shome">{{ __('text.hometeam') }}</option>
              <option value="saway">{{ __('text.awayteam') }}</option>
            </select>
          </div></div>
        <div class="container">
          <div class="form-group">
        <p style="height: 1vw"><label>{{ __('text.choosematches') }}:</label></p>
        <p>
          <div class="container" style="width:100%; max-height: 150px; border: 1px solid white; overflow-y:scroll;">
          @isset($matches)
          @foreach($matches as $key=>$value)
          <p style="margin-bottom:0">
          <input type="checkbox" name="matchesfilter[]" value="{{$value['name']}}">{{$value['hometeam']}} - {{$value['awayteam']}} ({{$value['mn']}}, {{$value['date']}}) 
        </p>
          @endforeach
          @endisset
          </div>
          </div>
        
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.submit') }}</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </form>
        </div>
      </div>
    </div>

     <!-- Add Background Image Modal -->

  <div class="modal fade" id="backgroundModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b class="nav-item d-none d-sm-inline-block">{{ __('text.addnewbackgroundimage') }}</b>
        </div>
        <form id="formaddbackground" action="{{ action('FormController@addbackground') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="mbc" class="modal-body">
          <label>{{ __('text.name') }}:</label>
          <input type="text"  class="form-control name_c" id="background_name" name="background_name" placeholder="{{ __('text.name') }}">
          @if ($errors->has('background_name')) <p><small class="help-block" style= " color:red;">{{ $errors->first('background_name') }}</small></p> @endif
          @if(\Session::has('err')) <p><small class="help-block" style= " color:red;">{{\Session::get('err')}}</small></p> @endif
          <div id="inp" class="form-group">
            <label id="ci">{{ __('text.choosebackgroundimage') }}:</label>
            <p><input type="file"  name="background_image" class="background_image" id="background_image" ></p>
             @if ($errors->has('background_image')) <p><small class="help-block" style= " color:red;">{{ $errors->first('background_image') }}</small></p> @endif
          </div>
          <select name="ef">
            <option value="none">{{ __('text.choosefilter') }}</option>
            <option value="blur">Blur</option>
            <option value="brightness">Brightness</option>
            <option value="contrast">Contrast</option>
            <option value="darkness">Darkness</option>
            <option value="greyscale">Greyscale</option>
            <option value="invert">Invert</option>
            <option value="pixelate">Pixelate</option>
            <option value="sharpen">Sharpen</option>
          </select> <b style="font-size: 12px; color:green">*{{ __('text.optional') }}</b>
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.addbackground') }}</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </form>
        </div>
      </div>
    </div>

    <!-- Filter Modal -->

  <div class="modal fade" id="filterModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="fm" class="modal-content">
        <div class="modal-header">
            <b>{{ __('text.filtersort') }}</b>
        </div>
          <form id="formfilter" action="{{action('FormController@filter')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="modal-body" id="fmgrid">
          <div class="container" style="float:left"><p>
            <div class="form-group" style="border-bottom: 0.2vw solid black">
            <label id="category">{{ __('text.from') }}:</label>
            <input type="text" id="datepicker2" autocomplete="off">
            <input type="hidden" id="alt_date2" name="datesend" value="">
          </div>
            <div id ="roll" class="form-group" style="border-bottom: 0.2vw solid black">
              <label id="category">{{ __('text.to') }}:</label>                     
              <input type="text" id="datepicker3" autocomplete="off">
              <input type="hidden" id="alt_date3" name="datesend2" value="">
            </div>
              <div class="form-group">
              <label id="category">{{ __('text.sortby') }}:</label>
              <select name="sort" id="sc" >
                <option id="choose" value="">{{ __('text.sortby') }}</option>
                <option value="scompetition">{{ __('text.competition') }}</option>
                <option value="sdate">{{ __('text.datetime') }}</option>
                <option value="shome">{{ __('text.hometeam') }}</option>
                <option value="saway">{{ __('text.awayteam') }}</option>
              </select>
            </div></p></div>
          <div id="filterchoices"class="container" style="border-left: 0.2vw solid black">
            <div class="form-group">
          <p style="height: 1vw"><label>{{ __('text.choosecompetitions') }}:</label></p>
          <p>
              <div class="container" style="width:100%; max-height: 50px; border: 1px solid white; overflow-y:scroll;">
            @isset($competitions)
            @foreach($competitions as $competition)
            <p style="margin-bottom:0">
            <input type="checkbox" name="competition2[]" value="{{$competition['name']}}">{{$competition['name']}} 
            </p>
            @endforeach
            @endisset
          </div></p>
            </div>
            <div class="form-group">
          <p style="height: 1vw"><label>{{ __('text.choosehometeams') }}:</label></p>
          <p>
            <div class="container" style="width:100%; max-height: 50px; border: 1px solid white; overflow-y:scroll;">
          @isset($teams)
          @foreach($teams as $team)
          <p style="margin-bottom:0">
          <input type="checkbox" name="hometeam2[]" value="{{$team['name']}}">{{$team['name']}} 
          </p>
          @endforeach
          @endisset
        </div></p>
            </div>
            <div class="form-group">
          <p style="height: 1vw"><label>{{ __('text.chooseawayteams') }}:</label></p>
          <p>
            <div class="container" style="width:100%; max-height: 50px; border: 1px solid white; overflow-y:scroll;">
          @isset($teams)
          @foreach($teams as $team)
          <p style="margin-bottom:0">
          <input type="checkbox" name="awayteam2[]" value="{{$team['name']}}">{{$team['name']}} 
          </p>
          @endforeach
          @endisset
        </div></p></div></div></div>
          <div class="modal-footer">
            <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.submit') }}</button>
            <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
          </div> 
        </form>
      </div>
        </div>
      </div>
    </div>


    <!-- Add team Modal -->

  <div class="modal fade" id="teamModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b class="nav-item d-none d-sm-inline-block">{{ __('text.addnewteam') }}</b>
        </div>
        <form id="formaddteam" action="{{ action('FormController@addteam') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">
          <label>{{ __('text.name') }}:</label>
          <input type="text"  class="form-control name_c" id="name" name="team_name" placeholder="{{ __('text.name') }}">
          @if ($errors->has('team_name')) <p><small class="help-block" style= " color:red;">{{ $errors->first('team_name') }}</small></p> @endif
          @if(\Session::has('err2')) <p><small class="help-block" style= " color:red;">{{\Session::get('err2')}}</small></p> @endif
        </div>
        <div id="inp" class="form-group">
          <label id="ci">{{ __('text.chooseteamlogo') }}:</label> <p style="font-size: 12px; color:green">*{{ __('text.optional') }}</p>
          <p><input type="file"  name="logo" class="logo" id="logo" ></p>
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.addteam') }}</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </form>
        </div>
      </div>
    </div>


    <!-- Add match Modal -->
  <div class="modal fade" id="matchModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div id="mc" class="modal-content">
        <div class="modal-header">
            <b class="nav-item d-none d-sm-inline-block">{{ __('text.addnewmatch') }}</b>
        </div>
        <form id="formaddmatch" action="{{ action('FormController@addmatch') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">
          <div id ="roll" class="form-group">
            <label id="category">{{ __('text.choosehometeam') }}:</label>
            <select name="home_team" id="sc" class="js-example-basic-single">
              <option id="choose" value="">{{ __('text.choosehometeam') }}</option>
              @isset($teams)
              @foreach($teams as $team)
              <option value="{{$team['name']}}">{{$team['name']}}</option>
              @endforeach
              @endisset
            </select>
            @if ($errors->has('home_team')) <p><small class="help-block" style= " color:red;">{{ $errors->first('home_team') }}</small></p> @endif
          </div>
          <div id ="roll" class="form-group">
            <label id="category">{{ __('text.chooseawayteam') }}:</label>
            <select name="away_team" id="sc" class="js-example-basic-single">
              <option id="choose" value="">{{ __('text.chooseawayteam') }}</option>
              @isset($teams)
              @foreach($teams as $team)
              <option value="{{$team['name']}}">{{$team['name']}}</option>
              @endforeach
              @endisset
            </select>
            @if ($errors->has('away_team')) <p><small class="help-block" style= " color:red;">{{ $errors->first('away_team') }}</small></p> @endif
          </div>
          <div id ="roll" class="form-group">
            <label id="category">{{ __('text.choosecompetition') }}:</label>
            <select name="competition" id="sc" class="js-example-basic-single">
              <option id="choose" value="">{{ __('text.choosecompetition') }}</option>
              @isset($competitions)
              @foreach($competitions as $competition)
              <option value="{{$competition['name']}}">{{$competition['name']}}</option>
              @endforeach
              @endisset
            </select>
            @if ($errors->has('competition')) <p><small class="help-block" style= " color:red;">{{ $errors->first('competition') }}</small></p> @endif
          </div>
          <div id ="roll" class="form-group">
            <label id="category">{{ __('text.date') }}:</label>
            <input type="text" id="datepicker" autocomplete="off" placeholder="{{ __('text.date') }}">
            <input type="hidden" id="alt_date" name="date" value="">
            @if ($errors->has('date')) <p><small class="help-block" style= " color:red;">{{ $errors->first('date') }}</small></p> @endif
          </div>
          <div id="inp" class="form-group">
            <label>{{ __('text.time') }}:</label>
            <input type="time" class="timepicker" id="time" name="time" autocomplete="off">
            @if ($errors->has('time')) <p><small class="help-block" style= " color:red;">{{ $errors->first('time') }}</small></p> @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb">{{ __('text.addmatch') }}</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">{{ __('text.close') }}</button>
        </div> 
        </form>
        </div>
      </div>
    </div>

    <aside id="aside2" class="sidebar-dark-primary">
  
        <!-- Sidebar Menu -->
        <nav>
          <div style="padding-top:30px" id="asas2"> 
            <a href="#" data-toggle="modal" data-target="#choosetemplateModal" class="nav-link">
              {{ __('text.templates!') }}
            </a>
            <a href="#" data-toggle="modal" data-target="#backgroundslistModal" class="nav-link">
              {{ __('text.backgrounds!') }}
            </a>
             <a href="#" data-toggle="modal" data-target="#competitionslistModal" class="nav-link">
              {{ __('text.competitions!') }}
            </a>
            <a href="#" data-toggle="modal" data-target="#teamslistModal" class="nav-link">
              {{ __('text.teams!') }}
            </a>
            <a href="#" data-toggle="modal" data-target="#matcheslistModal" class="nav-link">
              {{ __('text.matches!') }}
            </a>
            <a href="#" style="width:100%" id="listhide" data-toggle="modal" data-target="#resolutionModal" class="nav-link">
              {{ __('text.resolution!') }}
            </a>
            <p>
              @guest
              <a class="nav-link" href="{{ route('login') }}">{{ __('text.login') }}</a>
              <a class="nav-link" href="{{ route('register') }}">{{ __('text.register') }}</a>
              @else
            <a href="#" class="nav-link" style="background-color:red" id="listhide" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
             {{ __('text.logout') }}
            </a>
            @endguest
            </p>
          </div>    
         </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>





  <!-- Main Sidebar Container -->
  <aside id="aside" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">BetMaker</span>
    </a>   

      <!-- Sidebar Menu -->
      @if(Auth::check()) <img src="/image/{{Auth::user()->id}}{{ Auth::user()->email }}.png" id="imgfb" style="display:none"/> @endif
        <ul class="nav nav-sidebar flex-column" id="rolemenu" data-widget="treeview" role="menu" data-accordion="false" style="font-size: 1.5vw; margin-top: 30px"> 
          <a href="#" data-toggle="modal" data-target="#choosetemplateModal" class="nav-link">
            {{ __('text.templates!') }}
          </a>
          <a href="#" data-toggle="modal" data-target="#backgroundslistModal" class="nav-link">
            {{ __('text.backgrounds!') }}
          </a>
           <a href="#" data-toggle="modal" data-target="#competitionslistModal" class="nav-link">
            {{ __('text.competitions!') }}
          </a>
          <a href="#" data-toggle="modal" data-target="#teamslistModal" class="nav-link">
            {{ __('text.teams!') }}
          </a>
          <a href="#" data-toggle="modal" data-target="#matcheslistModal" class="nav-link">
            {{ __('text.matches!') }}
          </a>
        </ul>    
       </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="outer">
    <div class="middle">
    @yield('content')
    </div>
  </div>


<script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="https://rawgit.com/select2/select2/4.0.5/dist/js/select2.full.min.js"></script>

@if(App::getLocale()=='hr')
 <script src="{{ asset('dist/js/datepicker-hr.js') }}"></script> 
@endif

<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

</body>


<script>
  $("#btn22").hide();
</script>
<script>
    $("#aside2").hide();
</script>

<script>
  function showmenu(){
    $("#aside2").show();
    $("#btn22").show();
    $("#menubutton").hide();
    }
</script>
<script>
  function hidemenu(){
    $("#aside2").hide();
    $("#btn22").hide();
    $("#menubutton").show();
    }
</script>


<script>
  $( function() {
    //$.datepicker.setDefaults($.datepicker.regional['hr']);
    $( "#datepicker" ).datepicker({ dateFormat: 'dd. MM, yy.',
    altField: '#alt_date',
    altFormat: 'dd,DD,mm,MM,yy.',}).val();
  } );
  </script>
  <script>
    $( function() {
      //$.datepicker.setDefaults($.datepicker.regional['hr']);
      $( "#datepicker2" ).datepicker({ dateFormat: 'dd. MM, yy.',
      altField: '#alt_date2',
      altFormat: 'dd,DD,mm,MM,yy.',}).val();
    } );
    </script>
    <script>
      $( function() {
        //$.datepicker.setDefaults($.datepicker.regional['hr']);
        $( "#datepicker3" ).datepicker({ dateFormat: 'dd. MM, yy.',
        altField: '#alt_date3',
        altFormat: 'dd,DD,mm,MM,yy.',}).val();
      } );
      </script>



@if($errors->has('competition_name'))
    <script>
        $( document ).ready(function() {
            $('#competitionModal').modal('show');
        });
    </script>
    @elseif($errors->has('team_name') || $errors->has('logo'))
    <script>
        $( document ).ready(function() {
            $('#teamModal').modal('show');
        });
    </script>
     @elseif($errors->has('background_name') || $errors->has('background_image'))
     <script>
         $( document ).ready(function() {
             $('#backgroundModal').modal('show');
         });
     </script>
     @elseif($errors->has('template_name') || $errors->has('aspect') || $errors->has('max'))
     <script>
         $( document ).ready(function() {
             $('#templateModal').modal('show');
         });
     </script>
@elseif($errors->has('home_team') || $errors->has('away_team') || $errors->has('competition') || $errors->has('date') || $errors->has('time'))
<script>
  $( document ).ready(function() {
      $('#matchModal').modal('show');
  });
</script>
@endif


<script>
$("#picture").hide();
</script>
@isset($resolution)
<script>
  function screenshot(){
    var w= <?php echo $resolution['width'] ;?>;
    var h= <?php echo $resolution['height'] ;?>;
     $("#picture").show();
html2canvas($('#picture'), {
width: w,
height: h
}).then(function(canvas) {
  var a = document.createElement('a');
  a.href = canvas.toDataURL("image/png");
  a.download = 'myfile.png';
  a.click(); 
  $("#picture").hide();
})};
</script>

<script language="javascript">
  function fb(){
    var id = "<?php echo $user['id'] ?>";
    var email = "<?php echo $user['email'] ?>";
    var w= <?php echo $resolution['width'] ;?>;
    var h= <?php echo $resolution['height'] ;?>;
     $("#picture").show();
html2canvas($('#picture'), {
width: w,
height: h
}).then(function(canvas) {
  var imgData = canvas.toDataURL('image/png');   



    var url = 'export.php';
        $.ajax({ 
            type: "POST", 
            url: url,
            dataType: 'text',
            data: {
                base64data : imgData,
                userid : id,
                useremail : email
            } 
}); 
var imgsrc=document.getElementById("imgfb").src;
  var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(imgsrc), "pop", "width=600, height=400, scrollbars=no");
  return false;
})}
</script>


@endisset
@if(\Session::has('err'))
<script>
$('#backgroundModal').modal('show');
</script>
@endif
@if(\Session::has('err2'))
<script>
$('#teamModal').modal('show');
</script>
@endif
@if(\Session::has('err3'))
<script>
$('#competitionModal').modal('show');
</script>
@endif
@if(\Session::has('succ'))
<script>
$('#competitionslistModal').modal('show');
</script>
@endif
@if(\Session::has('sucb'))
<script>
$('#backgroundslistModal').modal('show');
</script>
@endif
@if(\Session::has('suct'))
<script>
$('#teamslistModal').modal('show');
</script>
@endif
@if(\Session::has('suctemp'))
<script>
$('#choosetemplateModal').modal('show');
</script>
@endif
@if(\Session::has('sucm'))
<script>
$('#matcheslistModal').modal('show');
</script>
@endif
@if(\Session::has('logged'))
<script>
$('#choosetemplateModal').modal('show');
</script>
@endif
</html>
