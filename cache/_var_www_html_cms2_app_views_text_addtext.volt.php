<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add New Text</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="<?php echo $this->config->base_url; ?>public/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $this->config->base_url; ?>public/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo $this->config->base_url; ?>public/dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="<?php echo $this->config->base_url; ?>public/plugins/iCheck/all.css">
        <link rel="stylesheet" href="<?php echo $this->config->base_url; ?>public/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo $this->config->base_url; ?>public/plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body  class="hold-transition skin-blue sidebar-mini">


        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index.html" class="logo">
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
                                    <span class="hidden-xs"><i class="fa fa-user"></i>  Admin</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>User</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../user/adduser"><i class="fa fa-pencil-square-o"></i> Add New User</a></li>
                                <li><a href="../user/manageuser"><i class="fa fa-users"></i> Manage Users</a></li>
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
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>CMS TEXT</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Content Info
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href="addtext"><i class="fa fa-pencil-square-o"></i> Add New</a></li>
                                        <li><a href="managetext"><i class="fa fa-list"></i> Manage Content</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Content Quiz
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="addquiz"><i class="fa fa-pencil-square-o"></i> Add New</a></li>
                                        <li><a href="managequiz"><i class="fa fa-list"></i> Manage Content</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Content Wap
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="addwap"><i class="fa fa-pencil-square-o"></i> Add New</a></li>
                                        <li><a href="managewap"><i class="fa fa-list"></i> Manage Content</a></li>
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
                        Add New Text
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-body">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group" style="margin-top:15px;">
                                            <label class="col-sm-2 col-md-offset-2">Service</label>

                                            <div class="col-sm-5">
                                                <select class="form-control" name="id_app">
                                                    <?php foreach ($data as $d) { ?>
                                                    <option value="<?= $d['id_app'] ?>"><?= $d['id_app'] ?> - <?= $d['app_desc'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">Content</label>

                                            <div class="col-sm-5">
                                                <textarea class="form-control" name="content_field" rows="3" placeholder="Content ..."></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">Category</label>

                                            <div class="col-sm-5">
                                                <input type="text" name="category" class="form-control" placeholder="Category">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">Character Count</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="160" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">Publish Date</label>

                                            <div class="col-sm-5">
                                                <!-- Date -->
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="publish_date" class="form-control pull-right" id="datepicker" placeholder="Date">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">Publish Seq</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="content_number" placeholder="Publish Seq" >
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-md-offset-4">
                                            <button type="submit" class="btn btn-info">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col md 12 -->
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
        <script src="<?php echo $this->config->base_url; ?>public/plugins/jQuery/jquery-3.1.1.min.js"></script>

        <script src="<?php echo $this->config->base_url; ?>public/plugins/jQueryUI/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo $this->config->base_url; ?>public/bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <!-- Slimscroll -->
        <script src="<?php echo $this->config->base_url; ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo $this->config->base_url; ?>public/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo $this->config->base_url; ?>public/dist/js/adminlte.min.js"></script>
        <script src="<?php echo $this->config->base_url; ?>public/plugins/iCheck/icheck.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo $this->config->base_url; ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo $this->config->base_url; ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="<?php echo $this->config->base_url; ?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- CK Editor -->
        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
        <script>
            $(function () {
                $('#datepicker').datepicker({
                    autoclose: true
                });
            });
        </script>

    </body>
</html>