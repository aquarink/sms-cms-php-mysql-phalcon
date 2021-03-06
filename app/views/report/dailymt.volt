<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Daily MT SMS</title>
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
        <style>
            label{
                text-align: center;
            }
            th{
                background-color: #4183D7;
                color: #fff;
                text-align: center;
            }
            #container {
                max-width: 1000px;
                height: 400px;
                margin: 0 auto;
                margin-top: 35px;
            }
        </style>
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
                                    <span class="hidden-xs"><i class="fa fa-user"></i>  {{pic}}</span>
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
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="application"><i class="fa fa-circle-o"></i> APPLICATION</a></li>
                                <li><a href="keyword"><i class="fa fa-circle-o"></i> KEYWORD</a></li>
                                <li><a href="regkeyword"><i class="fa fa-circle-o"></i> REG KEYWORD</a></li>
                                <li><a href="partnername"><i class="fa fa-circle-o"></i> PARTNER NAME</a></li>
                                <li><a href="medianame"><i class="fa fa-circle-o"></i> MEDIA NAME</a></li>
                                <li><a href="listcharging"><i class="fa fa-circle-o"></i> LIST CHARGING</a></li>
                                <li><a href="molog"><i class="fa fa-circle-o"></i> MO LOG</a></li>
                                <li><a href="mtlog"><i class="fa fa-circle-o"></i> MT LOG</a></li>
                                <li><a href="dnlog"><i class="fa fa-circle-o"></i> DN LOG</a></li>
                                <li class="active"><a href="dailymt"><i class="fa fa-circle-o"></i> DAILY MT SMS</a></li>
                                <li><a href="moreg"><i class="fa fa-circle-o"></i> MO REG</a></li>
                                <li><a href="smssubscriber"><i class="fa fa-circle-o"></i> SMS SUBSCRIBER</a></li>
                                <li><a href="dailytraffic"><i class="fa fa-circle-o"></i> DAILY TRAFFIC</a></li>
                                <li><a href="monthlytraffic"><i class="fa fa-circle-o"></i> MONTHLY TRAFFIC</a></li>
                                <li><a href="topservice"><i class="fa fa-circle-o"></i> TOP SERVICE</a></li>
                                <li><a href="partnertraffic"><i class="fa fa-circle-o"></i> PARTNER TRAFFIC</a></li>
                                <li><a href="profitloss"><i class="fa fa-circle-o"></i> PROFIT LOSS</a></li>
                                <li><a href="pushsms"><i class="fa fa-circle-o"></i> PUSH SMS</a></li>
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
                    <h1>Daily MT SMS</h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-body">
                                    <form class="form-horizontal">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>BULAN</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="col-md-4">
                                                        <select class="form-control">
                                                            <option>Januari</option>
                                                            <option>Februari</option>
                                                            <option>Maret</option>
                                                            <option>April</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <select class="form-control">
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>SHORTCODE</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="col-md-4">
                                                        <select class="form-control">
                                                            <option>97979</option>
                                                            <option>99999</option>
                                                            <option>11111</option>
                                                            <option>33333</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>TELCO</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="col-md-4">
                                                        <select class="form-control">
                                                            <option>All</option>
                                                            <option>TELKOMSEL</option>
                                                            <option>INDOSAT</option>
                                                            <option>XL</option>
                                                            <option>HUTCH</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-2 col-lg-offset-2">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-body">
                                    <p style="color:#446CB3">
                                        DAILY MT SMS : [ Bulan : 06 , Tahun : 2017 ] [ SHORTCODE : All ] [ TELCO : All ]
                                    </p>
                                </div>

                                <div class="box-body" style="overflow-x:auto">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">SERVICE</th>
                                                <th style="text-align: center">5</th>
                                                <th style="text-align: center">4</th>
                                                <th style="text-align: center">3</th>
                                                <th style="text-align: center">2</th>
                                                <th style="text-align: center">1</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td style="background-color:rgba(68,108,179,0.7);color: #fff;">Reg Game_10011</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                            </tr>

                                            <tr>
                                                <td style="background-color:rgba(68,108,179,0.7);color: #fff;">Reg Tawa_10012</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                            </tr>

                                            <tr>
                                                <td style="background-color:rgba(68,108,179,0.7);color: #fff;">Reg Masak_10013</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                            </tr>

                                            <tr>
                                                <td style="background-color:rgba(68,108,179,0.7);color: #fff;">Reg Gawang_10014</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                                <td>131.245</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="container"></div>
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
        <!-- DataTables -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- CK Editor -->
        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
        <script src="https://code.highcharts.com/highcharts.src.js"></script>
        <script>
            $(function () {
                $('#datepicker').datepicker({
                    autoclose: true
                });
            });
        </script>

        <script>
            Highcharts.chart('container', {
                colors: ['#2b908f', '#90ee7e', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee',
                    '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
                chart: {
                    backgroundColor: {
                        linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                        stops: [
                            [0, '#2a2a2b'],
                            [1, '#3e3e40']
                        ]
                    },
                    style: {
                        fontFamily: '\'Unica One\', sans-serif'
                    },
                    plotBorderColor: '#606063'
                },
                title: {
                    style: {
                        color: '#E0E0E3'
                    },
                    text: 'Grafik Daily MT SMS'
                },

                subtitle: {
                    text: ''
                },

                yAxis: {
                    gridLineColor: '#707073',
                    labels: {
                        style: {
                            color: '#E0E0E3'
                        }
                    },
                    lineColor: '#707073',
                    minorGridLineColor: '#505053',
                    tickColor: '#707073',
                    tickWidth: 1,
                    title: {
                        style: {
                            color: '#A0A0A3'
                        }
                    },
                    title: {
                        style: {
                            color: '#fff'
                        },
                        text: 'Jumlah MT'
                    }
                },
                xAxis: {
                    gridLineColor: '#707073',
                    labels: {
                        style: {
                            color: '#E0E0E3'
                        }
                    },
                    lineColor: '#707073',
                    minorGridLineColor: '#505053',
                    tickColor: '#707073',
                    title: {
                        text: 'Tanggal',
                        style: {
                            color: '#fff'

                        }
                    }

                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                plotOptions: {
                    series: {
                        pointStart: 1
                    }
                },

                series: [{
                        showInLegend: false,
                        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434, 12]
                    }]

            });
        </script>
    </body>
</html>