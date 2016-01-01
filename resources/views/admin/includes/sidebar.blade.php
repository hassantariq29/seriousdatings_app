<div class="sidebar clearfix">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a> </li>
      <li> <a href="#"><i class="fa fa-file-image-o fa-fw"></i> Slide Management <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="{{ url('/') }}/admin/slide">Manage slide</a></li>
          <li><a href="{{ url('/') }}/admin/slide/create">Create new slide</a></li>
         
        </ul>
        <!-- /.nav-second-level --> 
      </li>
       <!-- /for active 1 st lavel in list add class="active" -->
       <!-- /for active 2 st lavel in ul add[nav-second-level] in list add class="active" --> 
       <!-- /for active 3 st lavel in ul add[nav-third-level] in list add class="active" -->
      <li><a href="#"><i class="fa fa-file-image-o fa-fw"></i> Event Management <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
         <li><a href="{{ url('/') }}/admin/events">Manage event</a></li>
          <li><a href="{{ url('/') }}/admin/events/create">Add new event</a></li>
         
        </ul>
    
      </li>
      <li><a href="#"><i class="fa fa-file-image-o fa-fw"></i> Template Management <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
         <li><a href="{{ url('/') }}/admin/templates">Manage Template</a></li>
        <li><a href="{{ url('/') }}/admin/templates/create">Add Template</a></li>
         
        </ul>
    
      </li>
      <li> <a href="#"><i class="fa fa-edit fa-fw"></i> Gift Card Management <span class="fa arrow"></span></a>
      <ul class="nav nav-second-level">
          <li> <a href="{{ url('/') }}/admin/gift_cards">Manage Gift Card</a> </li>
          <li> <a href="{{ url('/') }}/admin/gift_cards/create">Add New Gift Card</a> </li>
        </ul>
      
      
       </li>
      <li> <a href="#"><i class="fa fa-edit fa-fw"></i> User Management<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ url('/') }}/admin/users">Manage User</a> </li>
         
        </ul>
        <!-- /.nav-second-level --> 
      </li>
      <li> <a href="#"><i class="fa fa-edit fa-fw"></i>Video Management <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ url('/') }}/admin/videos">Manage Videos</a> </li>
          <li> <a href="{{ url('/') }}/admin/videos/create">Add Video</a> </li>
        </ul>
        <!-- /.nav-second-level --> 
      </li>
      <li> <a href="#"><i class="fa fa-edit fa-fw"></i> Banner Management<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ url('/') }}/admin/banners">Manage Banner</a> </li>
          <li> <a href="{{ url('/') }}/admin/banners/create">Add Banner</a> </li>
        </ul>
        <!-- /.nav-second-level --> 
      </li>
      <li> <a href="#"><i class="fa fa-edit fa-fw"></i>Dating Plan Management<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ url('/') }}/admin/dating_plans">Manage Plan</a> </li>
		  <li> <a href="{{ url('/') }}/admin/dating_plans/create">Add Plan</a> </li>
          
        </ul>
        <!-- /.nav-second-level --> 
      </li>
      <li> <a href="#"><i class="fa fa-edit fa-fw"></i> Content Management<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ url('/') }}/admin/pages">Manage Website Content</a> </li>
		  <li> <a href="{{ url('/') }}/admin/pages/create">Add Website Content</a> </li>
         
        </ul>
        <li> <a href="change-password.php"><i class="fa fa-sign-out fa-fw"></i> Change Password</a></li>
      <li> <a href="index.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
      <!-- /.nav-second-level -->
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse --> 
</div>
<!-- /.navbar-static-side --> 
