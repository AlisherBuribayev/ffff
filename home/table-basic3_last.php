<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
       <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS --><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
  .gh{
      margin-top:200px;
  }
.dfa {
  background-color:blue-light ;
  border: none;
  color: white;
width: 100%;
height:30%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
}
    .ddd{
        display:flex !important;
        width: 100%;;
        flex-direction:row;justify-content: space-between;
    }
    .ddd>div{
        justify-content: space-between;    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Tables </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="table-basic2.php" class="sidebar-link"><span
                                            class="hide-menu"> Basic Table 2
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-basic3.php" class="sidebar-link"><span
                                            class="hide-menu">  Basic Table 3
                                        </span></a>
                                </li>
                            
                            </ul>
                        </li>
                        
                     
  
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
    </aside>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Basic Table</h4>
                        <div class="d-flex align-items-center">
                            
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <form  method="post" action="../status/timas2.php">    

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body ddd">   
                                                   <div>

                                <h4 class="card-title">show specific date</h4>
                                <input  type="text" name="from_date"   class="w3-input" placeholder="From Date"   id="lname1">            <br>      
                                <input  type="text" name="end_date"   class="w3-input" placeholder="end Date"   id="lname2">            <br>      

                                <input type="submit"  id="btn" class=""  name="submit" value="show"     >

    </div>
                               <div>
                                   <br>
                               <input id="lname3" placeholder="flexi time" class="w3-input" style="width:50%" type="text">
<br>
<input id="lname4" class="w3-input"  placeholder="week" style="width:50%" type="text">

                               <button id="addBtn2" type="submit" style="width:50%;height:20%" class="card-title dfa">submit </button>
                               </div>

                            </div>
    </form>
                           
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col">Date</th>
                                            <th scope="col">Hours</th>
                                            
                                        </tr>
                                    </thead>

                                        <tbody id="kkk">

                                        </tbody>
                                   
                                    </table>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>




<script>
    
$(document).ready(function(){  
        $.datepicker.setDefaults({  
            dateFormat: 'yy-mm-dd'   
       });  
       $(function(){  
            $("#lname1").datepicker();  
            $("#lname2").datepicker();  

       });  


                    $("#btn").on("click", function(e){

                    e.preventDefault();

                    var from_date = $('#lname1').val(); 
                    var end_date = $('#lname2').val();  
 
                                if(from_date != '' && end_date != '' )  
                                {  
                                    $.ajax({  
                                        url:"../status/timas.php",  
                                        method:"POST",  
                                        data:{from_date:from_date,end_date:end_date},  
                                        success:function(data)  
                                        {  
                                            $('#kkk').html(data);  
                                        }  
                                    });  
                                }  
                                else  
                                {  
                                    alert("Please Select Date");  
                                }  
                    });





                      $("#addBtn2").on("click", function(e){

                    e.preventDefault();

                    var from_date = $('#lname1').val(); 
                    var end_date = $('#lname2').val();  
                    var flex = $('#lname3').val();  
                    var week = $('#lname4').val();  

                                if(from_date != '' && end_date != ''&& flex != ''&& week != '' )  
                                {  
                                    $.ajax({  
                                        url:"../status/timass123.php",  
                                        method:"POST",  
                                        data:{from_date:from_date,end_date:end_date,flex:flex,week:week},  
                                        success:function(data)  
                                        {  
                                            $('#kkk').html(data);  
                                        }  
                                    });  
                                }  
                                else  
                                {  
                                    alert("Please Select Date");  
                                }  
                    });

});
</script>

       <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
</body>

</html>