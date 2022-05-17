<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['adminlogin2'])=="")
  { 
header('location:index');
}
else{
date_default_timezone_set('WAT');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> SGP In Media- New Post | Casafrique</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
     <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
        <!-- cropper CSS
		============================================ -->
    <link rel="stylesheet" href="css/cropper/cropper.min.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
       <!-- tag Input CSS
		============================================ -->
    <link rel="stylesheet" href="css/taginput.css">
      <!-- tag Input JS
		============================================ -->
    <script src="js/taginput.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include('includes/sidebar.php'); ?>
    <!-- Start Welcome area -->
    <?php include('includes/header.php'); ?>
            <!-- Mobile Menu start -->
            <?php include('includes/mobilemenu.php'); ?>
            <!-- Mobile Menu End -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Create New Event</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                   
        <!-- Static Table Start -->
        <div class="static-table-area mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col"> <!--    -->
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Create New SGP In Media Content</h1>
                                </div>
                            </div>

                           
                                             <input type="text" hidden id="pid" value="-200"/>
                                             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <label>Title</label>
                                              <input type="text" id="ptitle" required placeholder="Title"   class="form-control" /><br>
                                             </div>

                                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <label>Date of Media Post</label>
                                            <input type="date" id="pdate" required placeholder="Date Of Post"   class="form-control" /><br>
                                             </div>
                                             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <label>Source Name</label>
                                            <input type="text" id="psource" required placeholder="Source Name"   class="form-control" /><br>
                                             </div>
                                             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <label>Post Url</label>
                                            <input type="text" id="purl" required placeholder="Post Url"   class="form-control" /><br>
                                             </div>

                      <!--        <div class="form-group-inner">
                              <div class="row">
                                <div class="container">

                                
                           <label class="login2 pull-left"><span class="basic-ds-n">Blog Post Type</label>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                  <div class="bt-df-checkbox">
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> <label class="pull-left"><span class="basic-ds-n">Normal Post   </span></label>
                                  </div>  
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> <label class="pull-left"><span class="basic-ds-n">Video Post   </span></label>
                                  </div>  
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> <label class="pull-left"><span class="basic-ds-n">Audio Post   </span></label>
                                  </div>  
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> <label class="pull-left"><span class="basic-ds-n">Galery Post   </span></label>
                                  </div>  
                                  </div>
                                </div>
                              </div>
                            </div>   -->
                            
      <!-- tinymce Start-->
      <div class="tinymce-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tinymce-single responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Synopsis</h2>
                            </div>
                            <div class="summernote" id="summernote1">
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>             

                <div class="pull-left" id="unpaid-item"></div>
                <div class="pull-right" style="padding:30px;">
                <a class="btn btn-primary jscheck" id="download">Process Event</a>
                </div>
            </div>
        </div>
        <!-- Basic Image cropper End-->
  
   
            
                            
    </div> 

                      


</div>
                       
                            
           <?php include('includes/footer.php'); ?>
           <?php include('includes/productmodal.php'); ?>
    </div>

<!--    
<script>  
//for cart preview
//for cart preview
$(document).ready(function(){  
   var UserID = '//php echo $_SESSION['id'];?>';
   $.ajax({  
        url:"upload-unpaid-table.php",  
        method:"post",
        data:{UserID:UserID},
        success:function(data){  
             $('#unpaid-table').html(data);  
        }  
});  
});  


$(document).ready(function(){  

$("div").on("click", ".static-table-list .del-Item", function(){
  var cartid = $(this).attr("cartID");  
  var userid = $(this).attr("userID");  
     //alert(session_id +"   "+ product_id);
     $.ajax({  
          url:"delete-from-unpaid.php",  
          method:"post",  
          data:{cartid:cartid, userid:userid},  
          success:function(data){  
            var UserID = 'php //echo $_SESSION['id'];?>';
            $.ajax({  
        url:"upload-unpaid-table.php",  
        method:"post",
        data:{UserID:UserID},
        success:function(data){  
             $('#unpaid-table').html(data);  
        }  
    }); 
               $('#product_details').html(data);  
               $('#product_modal').modal("show");  
          }  
     });  

});  


});  
//end of delete
</script> -->
<script>
/*$(document).ready(function(){  

  $(".jscheck").on('click', function(e){
    e.preventDefault();   
    alert(" Dont be a fool");  
    var content1 = $('#summernote1').summernote('code');
    alert(content1+" Dont be a fool");
  });

});*/
</script>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
     <!-- summernote JS
		============================================ -->
    <script src="js/summernote/summernote.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
      <!-- cropper JS
		============================================ -->
    <script src="js/cropper/cropper.min.js"></script>
    <script src="js/cropper/cropper-actice.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>