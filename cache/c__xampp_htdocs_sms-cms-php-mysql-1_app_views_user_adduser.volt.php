<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add New User</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="../plugins/iCheck/all.css">
        <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body  class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>CMS</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>CMS</b> SMS</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><i class="fa fa-user"></i>  <?= $pic ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <?php echo $this->tag->linkTo(['user/editpass?id='.$idsess, 'Change Password', 'class'=>'btn btn-default btn-flat']) ?>
                                        </div>
                                        <div class="pull-right">
                                            <?php echo $this->tag->linkTo(['user/logout', 'Sign out', 'class'=>'btn btn-default btn-flat']) ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>User</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="adduser"><i class="fa fa-pencil-square-o"></i> Add New User</a></li>
                                <li><a href="manageuser"><i class="fa fa-users"></i> Manage Users</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../report/application"><i class="fa fa-circle-o"></i> APPLICATION</a></li>
                                <li><a href="../report/keyword"><i class="fa fa-circle-o"></i> KEYWORD</a></li>
                                <li><a href="../report/regkeyword"><i class="fa fa-circle-o"></i> REG KEYWORD</a></li>
                                <li><a href="../report/partnername"><i class="fa fa-circle-o"></i> PARTNER NAME</a></li>
                                <li><a href="../report/medianame"><i class="fa fa-circle-o"></i> MEDIA NAME</a></li>
                                <li><a href="../report/listcharging"><i class="fa fa-circle-o"></i> LIST CHARGING</a></li>
                                <li><a href="../report/molog"><i class="fa fa-circle-o"></i> MO LOG</a></li>
                                <li><a href="../report/mtlog"><i class="fa fa-circle-o"></i> MT LOG</a></li>
                                <li><a href="../report/dnlog"><i class="fa fa-circle-o"></i> DN LOG</a></li>
                                <li><a href="../report/dailymt"><i class="fa fa-circle-o"></i> DAILY MT SMS</a></li>
                                <li><a href="../report/moreg"><i class="fa fa-circle-o"></i> MO REG</a></li>
                                <li><a href="../report/smssubscriber"><i class="fa fa-circle-o"></i> SMS SUBSCRIBER</a></li>
                                <li><a href="../report/dailytraffic"><i class="fa fa-circle-o"></i> DAILY TRAFFIC</a></li>
                                <li><a href="../report/monthlytraffic"><i class="fa fa-circle-o"></i> MONTHLY TRAFFIC</a></li>
                                <li><a href="../report/topservice"><i class="fa fa-circle-o"></i> TOP SERVICE</a></li>
                                <li><a href="../report/partnertraffic"><i class="fa fa-circle-o"></i> PARTNER TRAFFIC</a></li>
                                <li><a href="../report/profitloss"><i class="fa fa-circle-o"></i> PROFIT LOSS</a></li>
                                <li><a href="../report/pushsms"><i class="fa fa-circle-o"></i> PUSH SMS</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>CMS TEXT</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Content Info
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../text/addtext"><i class="fa fa-pencil-square-o"></i> Add New</a></li>
                                        <li><a href="../text/managetext"><i class="fa fa-list"></i> Manage Content</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Content Quiz
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../text/addquiz"><i class="fa fa-pencil-square-o"></i> Add New</a></li>
                                        <li><a href="../text/managequiz"><i class="fa fa-list"></i> Manage Content</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Content Wap
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../text/addwap"><i class="fa fa-pencil-square-o"></i> Add New</a></li>
                                        <li><a href="../text/managewap"><i class="fa fa-list"></i> Manage Content</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>CMS RICH CONTENT</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Monophonic
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/monophoniccontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/monophoniccategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/monophonicmarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Polyphonic
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/polyphoniccontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/polyphoniccategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/polyphonicmarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> True Tone
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/truetonecontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/truetonecategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/truetonemarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Color Picture
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/colorcontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/colorcategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/colormarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Animated Picture
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/animatedcontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/animatedcategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/animatedmarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Themes
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/themescontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/themescategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/themesmarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Java Games
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/javacontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/javacategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/javamarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Video
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/videocontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/videocategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/videomarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Premium Games
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/premiumcontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/premiumcategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/premiummarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Full Track
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/trackcontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/trackcategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/trackmarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Java App
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../content/javaappcontent"><i class="fa fa-pencil-square-o"></i> Content</a></li>
                                        <li><a href="../content/javaappcategory"><i class="fa fa-list"></i> Category</a></li>
                                        <li><a href="../content/javaappmarket"><i class="fa fa-barcode"></i> Market Code</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>CMS CS TOOLS</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../cs/managemsisdn"><i class="fa fa-mobile"></i> Check MSISDN</a></li>
                                <li><a href="../cs/blacklistmsisdn"><i class="fa fa-list-ol"></i> Blacklist MSISDN</a></li>
                            </ul>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add New User
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-body">
                                    <?php
                                    if(isset($_GET['msg'])) {
                                    echo '<b style=color:red>'.$_GET['msg'].'</b>';
                                    }
                                    ?>
                                    <form class="form-horizontal" method="post" action="">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="col-sm-2">Nama / PIC</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama" placeholder="Name of PIC">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2">Username</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2">Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>

                                            <!--                                            <div class="form-group">
                                                                                            <label class="col-sm-2">Level</label>
                                            
                                                                                            <div class="col-sm-10">
                                                                                                <select class="form-control">
                                                                                                    <option>Admin Developer</option>
                                                                                                    <option>Admin Text CMS</option>
                                                                                                    <option>Admin Content CMS</option>
                                                                                                    <option>Admin CS CMS</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="form-group">
                                                <label class="col-sm-2">Accessable Page</label>

                                                <div class="col-sm-10">
                                                    <div class="col-md-3">
                                                        <label>Page User</label>
                                                        <select multiple class="form-control" name="page[]">
                                                            <option value="adduser">Add New User</option>
                                                            <option value="manageuser">Manage User</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Page Report</label>
                                                        <select multiple class="form-control" name="page[]">
                                                            <option value="application">Application</option>
                                                            <option value="keyword">Keyword</option>
                                                            <option value="regkeyword">Reg Keyword</option>
                                                            <option value="partnername">Partner Name</option>
                                                            <option value="medianame">Media Name</option>
                                                            <option value="listcharging">List Charging</option>
                                                            <option value="molog">MO LOG</option>
                                                            <option value="mtlog">MT LOG</option>
                                                            <option value="dnlog">DN LOG</option>
                                                            <option value="dailymt">Daily MT SMS</option>
                                                            <option value="moreg">MO Reg</option>
                                                            <option value="smssubscriber">SMS Subscriber</option>
                                                            <option value="dailytraffic">Daily Traffic</option>
                                                            <option value="monthlytraffic">Monthly Traffic</option>
                                                            <option value="topservice">Top Service</option>
                                                            <option value="partnertraffic">Partner Traffic</option>
                                                            <option value="profitloss">Profit Loss</option>
                                                            <option value="pushsms">Push SMS</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Page Text</label>
                                                        <select multiple class="form-control" name="page[]">
                                                            <option value="addtext">Add New Content Info</option>
                                                            <option value="managetext">Manage Content Info</option>
                                                            <option value="addquiz">Add New Content Quiz</option>
                                                            <option value="managequiz">Manage Content Quiz</option>
                                                            <option value="addwap">Add New Content WAP</option>
                                                            <option value="managewap">Manage Content WAP</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Page Content</label>
                                                        <select multiple class="form-control" name="page[]">
                                                            <option value="monophoniccontent">Monophonic Content</option>
                                                            <option value="monophoniccategory">Monophonic Category</option>
                                                            <option value="monophonicmarket">Monophonic Market Code</option>
                                                            <option value="polyphoniccontent">Polyphonic Content</option>
                                                            <option value="polyphoniccategory">Polyphonic Category</option>
                                                            <option value="polyphonicmarket">Polyphonic Market Code</option>
                                                            <option value="truetonecontent">True Tone Content</option>
                                                            <option value="truetonecategory">True Tone Category</option>
                                                            <option value="truetonemarket">True Tone Market Code</option>
                                                            <option value="colorcontent">Color Picture Content</option>
                                                            <option value="colorcategory">Color Picture Category</option>
                                                            <option value="colormarket">Color Picture Market Code</option>
                                                            <option value="animatedcontent">Animated Picture Content</option>
                                                            <option>Animated Picture Category</option>
                                                            <option>Animated Picture Market Code</option>
                                                            <option>Themes Content</option>
                                                            <option>Themes Category</option>
                                                            <option>Themes Market Code</option>
                                                            <option>Java Games Content</option>
                                                            <option>Java Games Category</option>
                                                            <option>Java Games Market Code</option>
                                                            <option>Video Content</option>
                                                            <option>Video Category</option>
                                                            <option>Video Market Code</option>
                                                            <option>Premium Games Content</option>
                                                            <option>Premium Games Category</option>
                                                            <option>Premium Games Market Code</option>
                                                            <option>Full Track Content</option>
                                                            <option>Full Track Category</option>
                                                            <option>Full Track Market Code</option>
                                                            <option>Java App Content</option>
                                                            <option>Java App Category</option>
                                                            <option>Java App Market Code</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Page CS</label>
                                                        <select multiple class="form-control" name="page[]">
                                                            <option>Check MSISDN</option>
                                                            <option>Blacklist MSISDN</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-offset-2">
                                                <button type="submit" class="btn btn-success" style="margin-left:5px;">Register</button>
                                                <button type="reset" class="btn btn-info" style="margin-left:5px;">Cancel</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2017 Mobiwin.</strong> All rights
                reserved.
            </footer>


        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3.1.1 -->
        <script src="../plugins/jQuery/jquery-3.1.1.min.js"></script>

        <script src="../plugins/jQueryUI/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <!-- Slimscroll -->
        <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <script src="../plugins/iCheck/icheck.min.js"></script>
        <!-- DataTables -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    </body>
</html>

