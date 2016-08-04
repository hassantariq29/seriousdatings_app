@include('header_new')
@include('header_bottom')
<div class="middle inner-middle">

    <div class="inner-header aboutyour-header">

    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 header_btmimgtxt">
                <h1><i class="icon-sprite aboutdate-icon"></i>About your date</h1>
                <p style="margin-left:25%">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

            </div>

        </div>
    </div>


    <div class="inner-contendbg">

        <div class="container">

            



            <div class="row" style="background:#FFF;padding-top:12px;padding-bottom:5px">
                <div class="col-md-6" style="padding-left:0px">
                    <div class="placeholder_txt" >

                        
                    </div>
                </div>


      <div class="col-md-4 pull-right" style="padding-left:0px">
                    Sort By:
      
       <select name = "sort" id ="sort" >
           <option value="age"> Age</option>
           <option value="firstName"> Name</option>
           <option value="username"> Username</option>
           
       </select>
  
                </div>

            </div>



            <div class="row">





                @include('left_sidebar')


                <div class="col-md-8" style="padding-top:10px;">

                    


                    <div id = "loadingIcon">
                            {!! HTML::Image('images/loader.gif','',array('class' => '')) !!}
                      </div>
                      
                    <div class="row custom1" style="padding-left:5px" id = "search_result_list">
                      
                        @foreach($users as $user)
                            <div class="col-md-4 card">
                                <div class="card_up">
                                    <div class="up_left">
                                        <a href="/seriousdatings_app/public/users/{!! $user['username'] !!}">
                                            {!! HTML::image('images/users/'.$user["username"].'/'.$user["photo"],'alt_profile_pic',array( 'width' => '100%', 'height' => '100%' )) !!}
                                        </a>
                                    </div>
                                    <div class="up_right">
                                        <div><a href="/seriousdatings_app/public/users/{!! $user['username'] !!}">{!! $user['firstName'] !!} {!! $user['lastName'] !!}</a></div>
                                        <p>{!! $user['age'] !!}, {!! $user['location'] !!}<br />
                                        </p>
                                    </div>
                                </div>
                                <div class="card_down">
                                    <a href="#">
                                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>    Quick View
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>





                <div class="col-md-2 right_sbar" style="background:#DDD !important;padding-top:10px;margin-top:10px">


                    @include('right_sidebar')





                </div>
            </div>





        </div>





    </div>






</div>
{!!  Form::open(array('action' => 'SearchController@postIndex','method' => 'POST' , 'id' => 'search_form')) !!}
{!! Form::close() !!}
<script>
    $(document).ready(function()
    {
        $('#loadingIcon').hide();
        $('#sort').on('change', function (e) {
              $('#loadingIcon').show();
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            
            var search_type = $(this).attr('id');
            var action = $("#search_form").attr('action');
            var token = $('input[name="_token"]').val();
          
            var gender = "{!! $users[0]['gendr'] !!}";
            
            var ageFrom = {!! $users[0]['ageFrom'] !!};
            var ageTo = {!! $users[0]['ageTo'] !!};
            var range = {!! $users[0]['range'] !!};
            var lati = {!! $users[0]['lati'] !!};
            var longi = {!! $users[0]['longi'] !!};

            var dataToSend =  '{ "data" : [' +
                        '{ "action":"sort" , "type":"'+valueSelected +'" , "gender":"'+gender +'", "ageFrom":"'+ageFrom +'" , "ageTo":"'+ageTo +'" , "range":"'+range +'" , "lati":"'+lati +'" , "longi":"'+longi +'" } ]}';
            
            var obj = JSON.parse(dataToSend);
             $('#search_result_list').empty();
           
                
            //console.log(obj);
            $.ajax({
                url: 'ajax',
                type: 'GET',
                data: {'data' : obj},
                success: function(ajax_result){
                    var objJSON = JSON.parse(ajax_result);
                    var length = objJSON.length;
                    var html = '';
                    for(i=0;i<length;i++){

                       
                       var imageSrc = "images/users/"+objJSON[i].username+"/"+objJSON[i].photo;
                       
                       console.log(imageSrc);
                      
                       html += '<div class="col-md-4 card"><div class="card_up"><div class="up_left" id ='+ i + '><a href="/seriousdatings_app/public/users/'+objJSON[i].username+'"><img alt = "profile_pic" width = "100%" height = "100%" src = "images/users/'+objJSON[i].username+'/'+objJSON[i].photo+'"/></a></div><div class="up_right"> <div><a href="/seriousdatings_app/public/images/users/'+decodeURI(objJSON[i].username)+'">'+objJSON[i].firstName+' '+objJSON[i].lastName+'</a></div><p>'+objJSON[i].age+'<br/>ZipCode: '+objJSON[i].locations+'<br /></p></div></div><div class="card_down"><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>    Quick View</a></div></div>';
                    

                    }
                    //alert(html);
                    $('#loadingIcon').hide();
                    $('#search_result_list').html(html);


                }
            })
                    .done(function() {

                    })
                    .fail(function() {

                    });
        });
    });
</script>

<!-- /middle -->


@include('footer')
