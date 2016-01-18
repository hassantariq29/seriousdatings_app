<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Serious Dating |</title>
<!-- jQuery --> 
{!! HTML::script('plugins/jquery/jquery.min.js') !!}
<!-- Bootstrap Core JavaScript --> 
{!! HTML::script('js/bootstrap.min.js') !!}
<!-- Metis Menu Plugin JavaScript --> 
{!! HTML::script('plugins/metisMenu/dist/metisMenu.js') !!}
{!! HTML::script('plugins/summernote/summernote.min.js') !!}
<!-- Custom Theme JavaScript --> 
{!! HTML::script('plugins/perfect-scrollbar/jquery.mousewheel.js') !!}
{!! HTML::script('plugins/perfect-scrollbar/perfect-scrollbar.js') !!}
{!! HTML::script('js/admin.js') !!}

<!-- Bootstrap Core CSS -->
{!! HTML::style('css/bootstrap.css') !!}
<!-- dashboard  CSS -->
<!-- Custom Fonts -->
{!! HTML::style('css/font-awesome.css') !!}
<!-- dashboard -->
<!-- Custom CSS -->
{!! HTML::style('css/admin-style.css') !!}

{!! HTML::style('plugins/summernote/summernote.css') !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="admin-body">
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-static-top">
    @include('admin.includes.header')
    @include('admin.includes.sidebar')
  </nav>  
<div id="page-wrapper" class="clearfix">
   @yield('content')
  <!-- /#page-wrapper --> 
</div>
<!-- /#wrapper --> 
</div>


<script>
jQuery(document).ready(function(){
siteDashBoard.init();
$('.summernote').summernote({
	  height: 200,   //set editable area's height
	});
});
</script>

</body>
</html>
