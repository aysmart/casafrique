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
    <title>Event History | Casafrique</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    	============================================ -->
      <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

   
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
                                            <li><span class="bread-blod">Data Table</span>
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

        <div class="login-form-area adminpro-pd mg-tb-15">
            <div class="container-fluid">
              
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div id="ChangeInformation" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body quick-mark" id="InfoFill" >
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#" class="update-infomation" prod-id="<?php echo $row['ProductID']; ?>">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Del-Information" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body quick-mark" id="InfoFill" >
                                    <h2>Delete Product!</h2>
                                    <p>Are you sure you want to delete this </p>
                                    <input type="text" id="del-id" hidden>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">No Don't</a>
                                        <a href="#" id="del-infomation">Yes Please</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="InformationproModalalert" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-informatio modal-check-pro information-icon-pro"> </span>
                                        <h2>Information!</h2>
                                        <div id="update-info">
                                        
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                  </div>
               </div>

        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Event <span class="table-project-n">Posts</span> Table</h1>
                                
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                            <th >S/N</th>
                                                <th >Edit</th>
                                                <th >Title</th>
                                                <th >Time Frame</th>
                                                <th >Location</th>
                                                <th >Post By</th>
                                                <th >Comments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
$numrow=1;
$query=mysqli_query($con,"select * from eventinfo ORDER BY EventDate DESC");
while ($row=$query->fetch_assoc())
{
         ?>
                                           <tr>
                                                <td><?php echo $numrow; ?></td>
                                                <td><a href="editevent?pid=<?php echo $row['ID']; ?>" ><button>Click To Edit</button></a><br><br><button id="Del-Prod" style="color:#fff; background:red;" data-toggle="modal" data-target="#Del-Information" post-id="<?php echo $row['ID']; ?>" onclick=" document.getElementById('del-id').value=<?php echo $row['ID']; ?>">Delete Post</button></td>
                                                <td><?php echo $row['EventTitle']; ?></td>
                                                <td><?php echo date(" j M, Y" , strtotime($row['EventDate'])) ?>  <?php echo date("g:i a" , strtotime($row['FromTime'])) ?> <?php //echo $row['FromTime'] ?> - <?php echo date("g:i a" , strtotime($row['ToTime'])) ?><?php //echo $row['ToTime'] ?></td>
                                                <td><?php echo $row['EventLocation']; ?></td>
                                                <td><?php echo $row['PostedBy']; ?></td>
                                                <td><?php $Pid=$row['ID'];
                                                $query10=mysqli_query($con,"select * from blogcomments where PostID='".$Pid."' AND Category='2'");
                                                echo mysqli_num_rows($query10); ?></td>
                                            </tr>
                                            <?php 
$numrow+=1; } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->

        <?php
        include('includes/footer.php');
        ?>


        </div>
        </div>

        </div></div></div></div>

        <script>
          // Function to create the cookie 
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
} 
 
          //To show product Edit details
 $(document).ready(function(){  
  $('.datatable-dashv1-list').click(function(){  
  $('.quick-view').click(function(){  
    
   //   alert('I was here');
        var product_id = $(this).attr("product-id");  
           $.ajax({  
                url:"view-product-information.php",  
                method:"post",  
                data:{product_id:product_id},  
                success:function(data){  
                     $('#InfoFill').html(data);  
                     $('#ChangeInformation').modal("show");  
                }  
           });  
      });  
 });  
}); 
//To show product Edit details


 //To Add New Product Information
 $(document).ready(function(){  
  $('#del-infomation').click(function(){  
        var post_id= document.getElementById('del-id').value;
    // alert(post_id);
      //  var product_id = $(this).attr("product-id");  
           $.ajax({  
                url:"delete-event.php",  
                method:"post", 
                data:{post_id:post_id},
                  success:function(data){  
                 // alert('I was here!');
                     $('#update-info').html(data);
                     $('#InformationproModalalert').modal("show");  
                     location.reload();
                }  
           });  
      });  
 });  

//To Delete Product Information
                                      
                                       
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
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
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