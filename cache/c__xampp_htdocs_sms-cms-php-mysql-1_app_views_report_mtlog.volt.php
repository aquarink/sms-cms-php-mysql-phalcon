<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MT Outgoing Log</title>
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
                                <li class="active"><a href="mtlog"><i class="fa fa-circle-o"></i> MT LOG</a></li>
                                <li><a href="dnlog"><i class="fa fa-circle-o"></i> DN LOG</a></li>
                                <li><a href="dailymt"><i class="fa fa-circle-o"></i> DAILY MT SMS</a></li>
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
                    <h1>
                        MT Outgoing Log
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-body">

                                    <!-- form start -->
                                    <form class="form-horizontal">


                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">APPID</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control"  placeholder="APPID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">SUBJECT</label>

                                            <div class="col-sm-5">
                                                <select class="form-control">
                                                    <option>All</option>
                                                    <option>REG</option>
                                                    <option>UNREG</option>
                                                    <option>PULL</option>
                                                    <option>PUSH</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">MSISDN</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="MSISDN">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">TELCO</label>

                                            <div class="col-sm-5">
                                                <select class="form-control">
                                                    <option>All</option>
                                                    <option>Telkomsel</option>
                                                    <option>Indosat</option>
                                                    <option>XL</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">SHORTCODE</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="SHORTCODE">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">MT TYPE</label>

                                            <div class="col-sm-5">
                                                <select class="form-control">
                                                    <option>All</option>
                                                    <option>TEXT</option>
                                                    <option>WAPPUSH</option>
                                                    <option>SMART MESSAGING</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">TRX ID</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="TRX ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">SESSION ID</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="SESSION ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">DATE</label>

                                            <div class="col-sm-5">
                                                <!-- Date -->
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control pull-right" id="datepicker" placeholder="Date">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">LIMIT</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="LIMIT">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 col-md-offset-2">TIME</label>

                                            <div class="col-sm-5">
                                                <div class="col-sm-6">
                                                    <select class="form-control">
                                                        <option>Januari</option>
                                                        <option>Februari</option>
                                                        <option>Maret</option>
                                                        <option>April</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6">
                                                    <select class="form-control">
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-md-offset-4">
                                            <button type="submit" class="btn btn-info">SUBMIT</button>
                                        </div>


                                        <!-- /.box-body -->
                                    </form>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-body" style="overflow-x:auto">
                                    <table id="example2" class="table table-bordered table-hover" style="font-size:12px">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">APPID</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">MSISDN</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">SMS</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">SUBJECT</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">MESSAGE</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">URL</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">TELCO</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">SHORTCODE</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">CHARGE</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">MT TYPE</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">TRX ID</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">SESSION ID</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">MEDIA ID</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">PARTNER ID</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">ACK STATUS</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">SID</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">DN TELCO</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">DN STATUS</th>
                                                <th style="text-align: center;background-color: #4183D7;color: #fff;">DATETIME</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $d) { ?>
                                            <tr>
                                                <td style="text-align: center">10014</td>
                                                <td style="text-align: center"><?= $d['msisdn'] ?></td>
                                                <td><?= $d['sms_field'] ?></td>
                                                <td><?= $d['subject'] ?></td>
                                                <td><?= $d['content_field'] ?></td>
                                                <td style="text-align: center"></td>
                                                <td style="text-align: center"><?= $d['telco'] ?></td>
                                                <td style="text-align: center"><?= $d['shortcode'] ?></td>
                                                <td style="text-align: center"><?= $d['cost'] ?></td>
                                                <td style="text-align: center">1</td>
                                                <td style="text-align: center"><?= $d['trx_id'] ?></td>
                                                <td style="text-align: center"><a data-toggle="modal" data-target="#view-modal" href="" onclick="getData(<?= $d['session_id'] ?>)"><?= $d['session_id'] ?></a></td>
                                                <td style="text-align: center">0</td>
                                                <td style="text-align: center">0</td>
                                                <td style="text-align: center">0</td>
                                                <td style="text-align: center">92000029001001</td>
                                                <td style="text-align: center"><?= $d['send_status'] ?></td>
                                                <td style="text-align: center"><?= $d['response_code'] ?></td>
                                                <td style="text-align: center"><?= $d['trx_date'] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" style="width:100%"> 
                                            <div class="modal-content">  

                                                <div class="modal-header"> 
                                                    <h4 class="modal-title">
                                                        <i class="glyphicon glyphicon-dashboard"></i> Session ID Data
                                                    </h4> 
                                                </div> 

                                                <div class="modal-body">                     
                                                    <div id="modal-loader" style="display: none; text-align: center;">
                                                        <!-- ajax loader -->
                                                        <h1>Loading</h1>
                                                    </div>

                                                    <table id="dynamic-content" class="table table-responsive table-bordered" style="font-size:12px;">

                                                    </table>
                                                </div> 

                                                <div class="modal-footer"> 
                                                    <button onclick="clearData()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                                </div> 

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col md 12 -->

                    </div>
                    <!-- /.row (main row) -->

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
        <!-- CK Editor -->
        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
        <script src="https://code.highcharts.com/highcharts.src.js"></script>
        <script>
                                    $(function () {
                                    $('#datepicker').datepicker({
                                    autoclose: true
                                    });
                                    });
                                    $(function () {
                                    $("#example1").DataTable();
                                    $('#example2').DataTable({
                                    "paging": false,
                                            "lengthChange": false,
                                            "searching": false,
                                            "ordering": false,
                                            "info": true,
                                            "autoWidth": false
                                    });
                                    });
        </script>

        <script>
            function getData(sessId) {
            $.get("http://localhost/sms-cms-php-mysql-1/user/mobysessid?id=" + sessId, function (data, status) {
            $('#dynamic-content').append(data);
            });
            }

            function clearData() {
            $('#dynamic-content').empty();
            }
        </script>
    </body>
</html>