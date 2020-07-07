@extends('layouts.app')

@section('content')

<div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">
                <div class="sidebar-admin">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-file"></i></a></li>
                        <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                        <li><a href="#"><i class="fa fa-flag-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-folder-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
                        <li><a href="#"><i class="fa fa-cog"></i></a></li>
                    </ul>
                </div><!-- /.sidebar-admin-->

                <div class="sidebar-secondary-admin">
                    <ul>
                        <li class="active">
                            <a href="admin-dashboard.html">
                                <span class="icon"><i class="fa fa-tachometer"></i></span>
                                <span class="title">Dashboard</span>
                                <span class="subtitle">Manage your website</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-forms.html">
                                <span class="icon"><i class="fa fa-i-cursor"></i></span>
                                <span class="title">Forms <span class="notification">3</span> </span>
                                <span class="subtitle">View form styles</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-tables.html">
                                <span class="icon"><i class="fa fa-table"></i></span>
                                <span class="title">Tables</span>
                                <span class="subtitle">Default table style</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-grid.html">
                                <span class="icon"><i class="fa fa-th"></i></span>
                                <span class="title">Grid <span class="notification">2</span></span>
                                <span class="subtitle">Bootstrap Grid</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-notifications.html">
                                <span class="icon"><i class="fa fa-bell"></i></span>
                                <span class="title">Notifications</span>
                                <span class="subtitle">Alert messages</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.sidebar-secondary-admin -->

                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        <div class="content-admin-main">
                            <div class="content-admin-main-inner">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="message">
                                                        <h1>Welcome in Dashboard</h1>

                                                        <p>Thanks for checking <a href="#">Superlist</a> backend. If you have any questions, feel free to ask your question using ThemeForest's <a href="#">item comments</a> section. Before asking don't forget to check the template <a href="#">documentation</a>.</p>
                                                    </div><!-- /.message -->
                                                </div><!-- /.col-* -->
                                            </div><!-- /.row -->

                                            <div class="row">
                                                <div class="col-sm-12 col-lg-6">
                                                    <h3>Current Balance Status</h3>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="statusbox">
                                                                <h2>Balance</h2>
                                                                <div class="statusbox-content">
                                                                    <strong>$25,000</strong>
                                                                    <span>Updated 27/04/2015</span>
                                                                </div><!-- /.statusbox-content -->

                                                                <div class="statusbox-actions">
                                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                                    <a href="#"><i class="fa fa-bar-chart"></i></a>
                                                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                                                </div><!-- /.statusbox-actions -->
                                                            </div><!-- /.statusbox -->
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="statusbox">
                                                                <h2>Progress</h2>
                                                                <div class="statusbox-content">
                                                                    <strong>$13,200</strong>
                                                                    <span>Updated 27/04/2015</span>
                                                                </div><!-- /.statusbox-content -->

                                                                <div class="statusbox-actions">
                                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                                    <a href="#"><i class="fa fa-bar-chart"></i></a>
                                                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                                                </div><!-- /.statusbox-actions -->
                                                            </div>
                                                        </div>
                                                    </div><!-- /.row -->
                                                </div><!-- /.col-* -->

                                                <div class="col-sm-12 col-lg-6">
                                                    <h3>Monthly Expenses</h3>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="statusbox">
                                                                <h2>Payments</h2>
                                                                <div class="statusbox-content">
                                                                    <strong>$14,800</strong>
                                                                    <span>Updated 27/04/2015</span>
                                                                </div><!-- /.statusbox-content -->

                                                                <div class="statusbox-actions">
                                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                                    <a href="#"><i class="fa fa-bar-chart"></i></a>
                                                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                                                </div><!-- /.statusbox-actions -->
                                                            </div><!-- /.statusbox -->
                                                        </div><!-- /.col-* -->

                                                        <div class="col-sm-6">
                                                            <div class="statusbox">
                                                                <h2>Avg. Salary</h2>
                                                                <div class="statusbox-content">
                                                                    <strong>$12,800</strong>
                                                                    <span>Updated 27/04/2015</span>
                                                                </div><!-- /.statusbox-content -->

                                                                <div class="statusbox-actions">
                                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                                    <a href="#"><i class="fa fa-bar-chart"></i></a>
                                                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                                                </div><!-- /.statusbox-actions -->
                                                            </div><!-- /.statusbox -->
                                                        </div><!-- /.col-* -->
                                                    </div><!-- /.row -->
                                                </div><!-- /.col-* -->
                                            </div><!-- /.row -->

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h3>Sales &amp; Expenses Comparison Chart</h3>
                                                    <div class="p30 background-white mb50">
                                                        <div id="superlist-chart"></div>
                                                    </div>
                                                </div><!-- /.col-* -->
                                            </div><!-- /.row -->

                                            <div class="row">
                                                <div class="col-sm-12 col-lg-5">
                                                    <h3>Recent Users <a href="#">View All Logs <i class="fa fa-chevron-right"></i></a></h3>

                                                    <div class="users">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td><a class="user" href="#"><img src="assets/img/tmp/agent-1.jpg" alt=""></a></td>
                                                                    <td class="hidden-xs visible-sm visible-md visible-lg">
                                                                        <h2><a href="#">Fiona Wilson</a></h2>
                                                                        <h3>Last login: 28/07/1015 10:45</h3>
                                                                    </td>
                                                                    <td class="right">
                                                                        <a href="#" class="btn btn-xs btn-primary">Edit</a>
                                                                        <a href="#" class="btn btn-xs btn-danger">Remove</a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a class="user" href="#"><img src="assets/img/tmp/agent-2.jpg" alt=""></a></td>
                                                                    <td class="hidden-xs visible-sm visible-md visible-lg">
                                                                        <h2><a href="#">Natasha Samson</a></h2>
                                                                        <h3>Last login: 28/07/1015 10:45</h3>
                                                                    </td>
                                                                    <td class="right">
                                                                        <a href="#" class="btn btn-xs btn-primary">Edit</a>
                                                                        <a href="#" class="btn btn-xs btn-danger">Remove</a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a class="user" href="#"><img src="assets/img/tmp/agent-3.jpg" alt=""></a></td>
                                                                    <td class="hidden-xs visible-sm visible-md visible-lg">
                                                                        <h2><a href="#">Kim Glove</a></h2>
                                                                        <h3>Last login: 28/07/1015 10:45</h3>
                                                                    </td>
                                                                    <td class="right">
                                                                        <a href="#" class="btn btn-xs btn-primary">Edit</a>
                                                                        <a href="#" class="btn btn-xs btn-danger">Remove</a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a class="user" href="#"><img src="assets/img/tmp/agent-4.jpg" alt=""></a></td>
                                                                    <td class="hidden-xs visible-sm visible-md visible-lg">
                                                                        <h2><a href="#">Richard Peterson</a></h2>
                                                                        <h3>Last login: 28/07/1015 10:45</h3>
                                                                    </td>
                                                                    <td class="right">
                                                                        <a href="#" class="btn btn-xs btn-primary">Edit</a>
                                                                        <a href="#" class="btn btn-xs btn-danger">Remove</a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a class="user" href="#"><img src="assets/img/tmp/agent-5.jpg" alt=""></a></td>
                                                                    <td class="hidden-xs visible-sm visible-md visible-lg">
                                                                        <h2><a href="#">Rachel Fast</a></h2>
                                                                        <h3>Last login: 28/07/1015 10:45</h3>
                                                                    </td>
                                                                    <td class="right">
                                                                        <a href="#" class="btn btn-xs btn-primary">Edit</a>
                                                                        <a href="#" class="btn btn-xs btn-danger">Remove</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div><!-- /.users -->

                                                </div><!-- /.col-* -->

                                                <div class="col-sm-12 col-lg-7">
                                                    <h3>New Listings <a href="#">All Pending Listings <i class="fa fa-chevron-right"></i></a></h3>

                                                    <div class="background-white p30 mb50">
                                                        <div class="cards-system">
                                                                <div class="card-system">
                                                                    <div class="card-system-inner">
                                                                        <div class="card-system-image" data-background-image="assets/img/tmp/product-2.jpg">
                                                                            <a href="listing-detail.html"></a>
                                                                        </div><!-- /.card-system-image -->

                                                                        <div class="card-system-content">
                                                                            <h2><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                                                                            <h3>Posted sever hours ago</h3>
                                                                            <a href="#" class="btn btn-primary btn-xs">Edit</a>
                                                                            <a href="#" class="btn btn-secondary btn-xs">Ban</a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.card-system -->


                                                                <div class="card-system">
                                                                    <div class="card-system-inner">
                                                                        <div class="card-system-image" data-background-image="assets/img/tmp/product-3.jpg">
                                                                            <a href="listing-detail.html"></a>
                                                                        </div><!-- /.card-system-image -->

                                                                        <div class="card-system-content">
                                                                            <h2><a href="listing-detail.html">Healthy Breakfast</a></h2>
                                                                            <h3>Posted sever hours ago</h3>
                                                                            <a href="#" class="btn btn-primary btn-xs">Edit</a>
                                                                            <a href="#" class="btn btn-secondary btn-xs">Ban</a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.card-system -->


                                                                <div class="card-system">
                                                                    <div class="card-system-inner">
                                                                        <div class="card-system-image" data-background-image="assets/img/tmp/product-4.jpg">
                                                                            <a href="listing-detail.html"></a>
                                                                        </div><!-- /.card-system-image -->

                                                                        <div class="card-system-content">
                                                                            <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                                                                            <h3>Posted sever hours ago</h3>
                                                                            <a href="#" class="btn btn-primary btn-xs">Edit</a>
                                                                            <a href="#" class="btn btn-secondary btn-xs">Ban</a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.card-system -->


                                                                <div class="card-system">
                                                                    <div class="card-system-inner">
                                                                        <div class="card-system-image" data-background-image="assets/img/tmp/product-5.jpg">
                                                                            <a href="listing-detail.html"></a>
                                                                        </div><!-- /.card-system-image -->

                                                                        <div class="card-system-content">
                                                                            <h2><a href="listing-detail.html">Boat Trip</a></h2>
                                                                            <h3>Posted sever hours ago</h3>
                                                                            <a href="#" class="btn btn-primary btn-xs">Edit</a>
                                                                            <a href="#" class="btn btn-secondary btn-xs">Ban</a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.card-system -->

                                                        </div><!-- /.cards-system -->
                                                    </div>

                                                </div><!-- /.col-* -->
                                            </div><!-- /.row -->
                                        </div><!-- /.col-* -->

                                    </div>
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->

                        <div class="content-admin-footer">
                            <div class="container-fluid">
                                <div class="content-admin-footer-inner">
                                    &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
                                </div><!-- /.content-admin-footer-inner -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.content-admin-footer  -->

                    </div><!-- /.content-admin-wrapper -->
                </div><!-- /.content-admin -->
            </div><!-- /.wrapper-admin -->
        </div><!-- /.outer-admin -->
</div><!-- /.main -->

@endsection
