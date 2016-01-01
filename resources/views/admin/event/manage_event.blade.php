<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Serious Dating |</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
<!-- Site main  CSS -->
<!-- Custom Fonts -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="css/admin-style.css" rel="stylesheet" type="text/css">
<link href="plugins/summernote/summernote.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="admin-body">
<div id="wrapper">
  <nav class="navbar navbar-inverse navbar-static-top">
    <?php include('includes/header.php'); ?>
    <?php include('includes/sidebar.php'); ?>
  </nav>
  <!-- Navigation -->
  
  <div id="page-wrapper" class="clearfix">
    <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Manage Event  <a href="add-event.php" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Add Event</a></h3>
          </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-white">
            <div class="panel-body">
              <table class="table table-bordered table-hover admin-table">
                <thead>
                  <tr>
                    <th width="5%" class="center"> <div class="table-checkbox">
                        <label>
                          <input id="selectAll" type="checkbox">
                        </label>
                      </div></th>
                    <th >Title</th>
                    <th >Picture</th>
                    <th >Location</th>
                    <th >Start date</th>
                    <th >End date</th>
                    <th width="80px" class"text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="center "><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>
                    <td>Birthday </td>
                    <td><div class="table-img"><img src="images/events_medium.png" class="img-thumbnail img-responsive" alt="" /></div></td>
                    <td>File Manager</td>
                    <td>6 Nov, 2015</td>
                    <td>10 Nov, 2015</td>
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                        <li><a href="view-event.php"> <i class="fa fa-eye"></i> View</a></li>
                          <li><a href="edit-event.php"> <i class="fa fa-pencil"></i> Edit</a></li>
                          <li><a href="#"><i class="fa fa-trash-o"></i> Delete </a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="center"><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>
                    <td>Birthday </td>
                    <td><div class="table-img"><img src="images/events_medium.png" class="img-thumbnail img-responsive" alt="" /></div></td>
                    <td>File Manager</td>
                    <td>6 Nov, 2015</td>
                    <td>10 Nov, 2015</td>
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                        <li><a href="view-event.php"> <i class="fa fa-eye"></i> View</a></li>
                          <li><a href="edit-event.php"> <i class="fa fa-pencil"></i> Edit</a></li>
                          <li><a href="#"><i class="fa fa-trash-o"></i> Delete </a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="center "><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>
                    <td>Birthday </td>
                    <td><div class="table-img"><img src="images/events_medium.png" class="img-thumbnail img-responsive" alt="" /></div></td>
                    <td>File Manager</td>
                    <td>6 Nov, 2015</td>
                    <td>10 Nov, 2015</td>
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                        <li><a href="view-event.php"> <i class="fa fa-eye"></i> View</a></li>
                          <li><a href="edit-event.php"> <i class="fa fa-pencil"></i> Edit</a></li>
                          <li><a href="#"><i class="fa fa-trash-o"></i> Delete </a></li>
                        </ul>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-wrapper --> 
</div>
<!-- /#page-wrapper --> 
<!-- /#wrapper --> 
<!-- jQuery --> 
<script src="plugins/jquery/jquery.min.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Metis Menu Plugin JavaScript --> 
<script src="plugins/metisMenu/dist/metisMenu.js"></script> 
<script src="plugins/summernote/summernote.min.js"></script> 

<!-- Custom Theme JavaScript --> 
<script src="plugins/perfect-scrollbar/jquery.mousewheel.js"></script> 
<script src="plugins/perfect-scrollbar/perfect-scrollbar.js"></script> 
<script src="js/admin.js"></script> 
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
