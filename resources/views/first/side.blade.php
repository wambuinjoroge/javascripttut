@extends('layouts.layout')
@section('content')
<header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">SideNav</a></div>
        </div>
      </nav>
     
 
      <ul id="nav-mobile" class="side-nav fixed">
         <div class="container"><a href="#" data-activates="nav-mobile" class="top-nav full hide-on-large-only"><i class="material-icons">Milele Afrique</i></a></div>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">Dashboard</a></li>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">Shops</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Shopkeepers</a></li>
        <li class="bold"><a href="mobile.html" class="waves-effect waves-teal">Airtime</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Payments</a></li>
        <li class="bold"><a href="themes.html" class="waves-effect waves-teal">Commissions<span class="new badge"></span></a></li>
      </ul>
    </header>
    <script type="text/javascript">
    	$('.button-collapse').sideNav({
      menuWidth: 300, 
      edge: 'right',
      closeOnClick: true,
      draggable: true, 
      // onOpen: function(el),
      // onClose:function()
    }
  );
    </script>
    
@stop