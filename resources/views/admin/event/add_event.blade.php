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
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<!-- Site main  CSS -->
<!-- Custom Fonts -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="css/admin-style.css" rel="stylesheet">
<link href="plugins/summernote/summernote.css" rel="stylesheet">

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
            <h3>Add New Event </h3>
          </div>
        
      </div>
    <form action="#" role="form" id="form2">
      <div class="form-horizontal">
      <div class="">
          <div class="successHandler alert alert-success no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
          <div class="errorHandler alert alert-danger no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Title <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="titlename" placeholder="Enter your title" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Location <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="eventlocation" name="eventlocation" placeholder="Enter Event Location" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Date <span class="symbol required"></span></label>
          <div class="col-sm-9">
          <div class="row">
          <div class="col-sm-6">
           <input type="text" class="form-control frm_datepicker" placeholder="From" id="fromdate" name="fromdate" required>
            </div>
            <div class="col-sm-6">
          <input type="text" class="form-control frm_datepicker" placeholder="To" id="enddate" name="enddate" required>
             </div>
             </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Upload Picture <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <div class="file-upload">
                <input type="file" class="file-input ImgeInput" name="uploadpicture" id="uploadpicture" accept="image/*" required/>
                <img class="targetImage" src="images/targetImage.png" alt="" />
                <div class="img">File size should be 686 x 547</div>
             </div>
          
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Age <span class="symbol required"></span></label>
          <div class="col-sm-9">
          <div class="row">
          <div class="col-sm-6">
           <input type="text" class="form-control" placeholder="From" name="fromage" id="fromage" required>
            </div>
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="To" name="toage" id="toage" required>
             </div>
             </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea  class="form-control summernote" name="descr"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Submit" class="btn btn-success">
            <input type="button" value="Cancel" class="btn btn-danger">
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- /#page-wrapper --> 
</div>
<!-- /#page-wrapper --> 
<!-- /#wrapper --> 
<!--for modal-->

<!-- jQuery --> 

<script src="plugins/jquery/jquery.min.js"></script> 
<script src="plugins/jquery/jquery-ui.custom.min.js"></script> 
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Metis Menu Plugin JavaScript --> 
<script src="plugins/metisMenu/dist/metisMenu.js"></script> 
<script src="plugins/summernote/summernote.min.js"></script> 
<script src="js/form-validation.js"></script> 
<!-- jquery-validation --> 
<script src="js/bootstrap-datepicker.js"></script> 
<!-- Custom Theme JavaScript --> 
<script src="plugins/perfect-scrollbar/jquery.mousewheel.js"></script> 
<script src="plugins/perfect-scrollbar/perfect-scrollbar.js"></script> 
<script src="js/admin.js"></script> 

<script>
jQuery(document).ready(function(){
	siteDashBoard.init();
	
	FormValidator.init();
	 $('#form2 .summernote').summernote({
            height: 150
        });
	$('.frm_datepicker').datepicker();
});
</script>
</body>
</html>
