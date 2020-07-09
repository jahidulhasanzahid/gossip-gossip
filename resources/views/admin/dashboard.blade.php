@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="message">
                        <h1>Welcome in Dashboard</h1>

                        <p>Thanks for checking <a href="#">Superlist</a> backend. If
                            you have any questions, feel free to ask your question
                            using ThemeForest's <a href="#">item comments</a>
                            section. Before asking don't forget to check the
                            template <a href="#">documentation</a>.</p>
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
                                        <h2><a href="listing-detail.html">Tasty
                                                Brazil Coffee</a></h2>
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
                                        <h2><a href="listing-detail.html">Healthy
                                                Breakfast</a></h2>
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
                                        <h2><a href="listing-detail.html">Coffee
                                                &amp; Newspaper</a></h2>
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
                                        <h2><a href="listing-detail.html">Boat
                                                Trip</a></h2>
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
</div>
@endsection
