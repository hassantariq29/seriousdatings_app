

  @include('header_new')
  @include('header_bottom')


<!-- Attach our CSS -->
	  	<link rel="stylesheet" type="text/css" href="css/reveal.css"/>
        
        <!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>

		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #06f; }
		</style>
        
        
        
        
        <div id="myModal" class="reveal-modal" style="background: none;">
		
			<div class="popup-bg">
	<div class="popup-inner">
   
    	<div class="popup-content-bg new-dating-bg">
        <div class="popup-header">
        	<h2 class="text-shedow new-dating-icon">Fill details to join Group </h2>
         </div>
         
         <div class="new-dating">
         	<h4>After joining you can participate in group events.</h4>
          </div>
         
         
            <div class="clear"></div>
		
        <div class="new-dating-content">
        
        <form>
        
        <div class="form-group">
        <label for="exampleInputName2">Your Name</label>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Name"/>
        </div>
        
       <div class="form-group">
       <label for="exampleInputEmail1">Your Email</label>
       <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"/>
       </div>
       
       <div class="form-group">
        <label for="exampleInputName2">Contact</label>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Contact no."/>
        </div>
      
        <div class="form-group">
        <label for="exampleInputName2">Address</label>
        <textarea class="form-control" rows="3"  placeholder="Type your address here"></textarea>
        </div>
        
      <button type="submit" class="btn btn-default">Submit</button>
   </form>
          
        </div>
        </div>
    </div>
</div>
 <a class="close-reveal-modal">&#215;</a>
</div>
        
<!-- /header -->

<div class="middle inner-middle">

	<div class="inner-header upcoming-banner">
    <div class="container">
      <h1><i class="calendar-event-icon"><img src="images/upcoming-event-icon.png"  alt=""></i>Groups</h1>
    </div>
  </div>
  
  <div class="inner-contendbg">
  
  <div class="container">
  
  <div class="row">
  @if($groups != null)
    @if($groups['0'] -> logged_in != 0)
      @include('new_leftsidebar')
    @endif
  @endif
    
    <div class="col-md-9" style="padding:0px">
    
    <div class="middle-content-section">
    
    <div class="groups_cntent">
    
    <div class="row">
    <div class="col-md-7">
    <h2> About Group</h2>
    @if($groups != null)
        @if($groups['0'] -> groupType == "Public")
            <p><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> &nbsp;&nbsp; Open Group</p>
        @else
             <p><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> &nbsp;&nbsp; Closed Group</p>
        @endif
    @endif
    <div class="row" style="margin-bottom: 2%;">
    <div class="col-md-4">
    <a href="#">
    <div class="grup_member">
    <div>
    @if($groups != null)
        <img src="{!! url() !!}/images/groups/{!! $groups['0'] -> groupID !!}/{!! $groups['0'] -> image !!}" class="img-responsive" alt="group memberadmin image"/>
    @endif
    </div>
    </div></a>
    </div>
    <div class="col-md-8">
    @if($groups != null)
          <h4>Created By:</h4>
          <p>{!! $groups['0'] -> groupAdmin !!}</p>
          </div>
          </div>
          
          <p><b>Group Name: </b> {!! $groups['0'] -> group_name !!}</p>
          <p><b>Members in Group: </b>{!! count($groups) -1 !!}</p>
              <p><b>Group Description: </b>{!! $groups['0'] -> description !!}</p>
          </div>
          <div class="col-md-5">
          @if($groups['0'] -> logged_in != 0)
        
              @if($groups['0'] -> logged_in == $groups['0'] -> groupAdmin)
                  <a class="btn btn-default btn_link1" href="{!! url() !!}/groups/{!! $groups['0'] -> groupID !!}/addMember" role="button" id = "addMember"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Members</a>
                  <a class="btn btn-default btn_link1" href="{!! url() !!}/groups/{!! $groups['0'] -> groupID !!}/removeMember" role="button" id = "addMember"><span class="glyphicon glyphicon-plus"></span>&nbsp;Remove Members</a>
                  
              @else
                  @if($groups['0'] -> joined == 0)
                      <a class="btn btn-default btn_link1" href="#" role="button" id ="joinNow"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Join Group</a>
                  @else
                      <a class="btn btn-default btn_link1" href="#" role="button" id ="unJoin"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Leave Group</a>
                  @endif
              @endif
          @endif
    @else
    <div class="row">
          <div class="col-md-8">
              <h3>Group Doesnot Exists</h3>
          </div>
     </div>
    @endif

    </div>
    </div>
    
    <h3>Group Members</h3><br />
    
    <div class="row">
    @if($groups != null)
      @if($groups['0'] -> id != null)
         @if($groups['0'] -> groupType == 'Public')
                @foreach($groups as $group)
                    <div class="col-md-2">
                    <a href="{!! url() !!}/users/{!! $group -> user_info -> username !!}">
                    <div class="grup_member">
                    <div>
                        <img src="{!! url() !!}/images/users/{!! $group -> user_info -> username !!}/{!! $group -> user_info -> photo !!}" class="img-responsive" alt="group member image"/>
                    </div>
                    <div class="member_name">
                          {!! $group -> user_info -> firstName!!} {!! $group -> user_info  -> lastName !!}
                    </div>
                    </div></a>
                    </div>
                @endforeach
        @else
                @if($groups['0'] -> joined == 1)
                    @foreach($groups as $group)
                        <div class="col-md-2">
                        <a href="{!! url() !!}/users/{!! $group -> user_info -> username !!}">
                        <div class="grup_member">
                        <div>
                            <img src="{!! url() !!}/images/users/{!! $group -> user_info -> username !!}/{!! $group -> user_info -> photo !!}" class="img-responsive" alt="group member image"/>
                        </div>
                        <div class="member_name">
                              {!! $group -> user_info -> firstName!!} {!! $group -> user_info  -> lastName !!}
                        </div>
                        </div></a>
                        </div>
                    @endforeach
               @else
                    <h3> This is closed group, You can not view members </h3>
                @endif
        @endif
     @endif
    @endif
    </div>
    
   
    
    </div>
    
    </div>
    
    </div>
   
    </div>
    
    
    </div>
    
    </div>
    
  </div>
</div>
<!-- /middle -->

  <script type="text/javascript">
      $(document).ready(function(){



        $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

      
        @if($groups != null)

         $('#unJoin').click(function () {


          var token = $('meta[name="csrf-token"]').attr('content');

          var groupID = "{!! $groups['0']-> groupID !!}";

          var userID = "{!! Auth::user()->id !!}";

          var url = "{!! url() !!}/groups/"+groupID;
          


          var dataToSend =  '{ "data" : ['+'{ "action":"unjoin" ,"_token":"'+token+'","groupID":"'+groupID +'" , "userID":"'+userID +'"}]}';
            
           var obj = JSON.parse(dataToSend);

          
            $.ajax({
                url: 'ajax/group',
                type: 'POST',
                data: {'data' : obj},
                success: function(ajax_result){
                    var result = (ajax_result);
                      window.location.href = url;
                    }
            })
                .done(function() {
                })
                .fail(function() {
                });
        });


        $('#joinNow').click(function () {


          var token = $('meta[name="csrf-token"]').attr('content');

          var groupID = "{!! $groups['0']-> groupID !!}";

          var userID = "{!! Auth::user()->id !!}";

          var url = "{!! url() !!}/groups/"+groupID;
          
         

          var dataToSend =  '{ "data" : ['+'{ "action":"join" ,"_token":"'+token+'","groupID":"'+groupID +'" , "userID":"'+userID +'"}]}';
          
             var obj = JSON.parse(dataToSend);

            $.ajax({
                url: 'ajax/group',
                type: 'POST',
                data: {'data' : obj},
                success: function(ajax_result){
                    var result = (ajax_result);
                      window.location.href = url;
                    }
            })
                .done(function() {
                })
                .fail(function() {
                });
        });
        @endif

      });
</script>

@include('footer_new')

