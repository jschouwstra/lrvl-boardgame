<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  {!! HTML::script('_asset/js/jquery-1.11.3.min.js') !!}
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Boardgame Collection</title>
{!! HTML::style('_asset/css/bootstrap.css') !!} 
{!! HTML::style('_asset/css/font-awesome.css') !!} 
{!! HTML::style('_asset/js/morris/morris-0.4.3.min.css') !!} 
{!! HTML::style('_asset/css/custom.css') !!} 
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: left;
      font-size: 16px;"> 
      <span style="margin-right: 49px;">Boardgame collection</span>
{{--       <div id="" class="btn-group">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="margin-left:10px;margin-right:5px;">
        Boardgame Gamegroups &nbsp;<span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Manage Gamegroup</a></li>
          <li><a href="#">New Gamegroup</a></li>
        </ul>
      </div> --}}

    <div style="color: white;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;">  
      @if(!Auth::check())
        <a href="{{ url('auth/login') }}"><span style="height:22px;" class="label label-primary">Login</span></a>
        <a href="{{ url('auth/register') }}"><span style="height:22px;" class="label label-primary">Register</span></a>
      @else
        <a href="{{ url('auth/logout') }}"><span style="height:22px;" class="label label-primary">Logout</span></a>
      @endif



    </div>
</nav>   
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
        <li>
          <a style="background-color: black;" href="{{ url('/') }}"><i class="glyphicon glyphicon-home fa-1x"></i> 
            <b>Home</b></a>
        </li>        <li>
          <a style="background-color: #0b62a4;" href="#"><i class="glyphicon glyphicon-play fa-1x"></i> 
            <b>Gamegroups</b></a>
        </li>
        <li>
          <a  href="{{ url('gamegroups') }}"><i class="glyphicon glyphicon-list-alt fa-6x"></i>Manage Gamegroups</a>
        </li>
        <li>
          <a  href="{{ url('gamegroups/create') }}"><i class="glyphicon glyphicon-plus fa-6x"></i> New Gamegroup</a>
        </li>
        <li>
          <a style="background-color: #0b62a4;" href="#"><i class="glyphicon glyphicon-tower fa-1x"></i> 
            <b>Games</b></a>
          </li>
          <li>
            <a  href="{{ url('games') }}"><i class="glyphicon glyphicon-list-alt fa-6x"></i>Manage Games</a>
          </li>
          <li>
            <a  href="{{ url('games/create') }}"><i class="glyphicon glyphicon-plus fa-6x"></i> New Game</a>
          </li>
        </ul>
      </div>
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >

      <div id="page-inner">
        <div class="container">
          @yield('pageTitle')
{{--           @if(Auth::check())
            Welcome, <span style="text-transform: capitalize;">{{ $currentUser->name }}</span>
          @endif --}}
          @yield('content')  
        </div>
        <!-- /. PAGE INNER  -->
      </div>

      <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
  {!! HTML::script('_asset/js/jquery-1.10.2.js') !!}
  {!! HTML::script('_asset/js/bootstrap.min.js') !!}
  {!! HTML::script('_asset/js/jquery.metisMenu.js') !!}
{{--   {!! HTML::script('_asset/js/morris/raphael-2.1.0.min.js') !!}
  {!! HTML::script('_asset/js/morris/morris.js') !!} --}}
  {!! HTML::script('_asset/js/custom.js') !!}
  </body>
  </html>
