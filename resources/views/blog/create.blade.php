@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">



        <div class="col-sm-8 col-lg-9">
            <div class="content">
                <div class="page-title">
                    <h1>Submit Listing</h1>
                </div>

                <div class="background-white p30 mb30">
                    <h3 class="page-title">Description</h3>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Title">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Listing Description" rows="8"></textarea>
                    </div><!-- /.form-group -->
                </div><!-- /.box -->

                <div class="background-white p30 mb30">
                    <h3 class="page-title">Attributes</h3>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select name="property">
                                    <option>Property Type</option>
                                    <option>Apartment</option>
                                    <option>Condo</option>
                                    <option>House</option>
                                    <option>Villa</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <select name="contract">
                                    <option>Contract</option>
                                    <option>Rent</option>
                                    <option>Sale</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <select name="location">
                                    <option>Location</option>
                                    <option>Kensal</option>
                                    <option>Braymer</option>
                                    <option>Horton Bay</option>
                                    <option>Laurel Run</option>
                                    <option>Estherville</option>
                                    <option>Millhousen</option>
                                    <option>Allegan</option>
                                    <option>Florala</option>
                                    <option>Dundarrach</option>
                                    <option>Neligh</option>
                                    <option>Roseboro</option>
                                    <option>Mount Pleasant</option>
                                    <option>Moro</option>
                                    <option>Strathmoor Village</option>
                                    <option>Mabton</option>
                                    <option>Loup City</option>
                                    <option>Wolverine</option>
                                    <option>San Leandro</option>
                                    <option>Dunwoody</option>
                                    <option>Battle Ground</option>
                                    <option>Hanson</option>
                                    <option>Reedley</option>
                                    <option>Bayshore</option>
                                    <option>Tupelo</option>
                                    <option>Lone Pine</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input class="form-control" type="text" placeholder="Price">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                <input class="form-control" type="text" placeholder="Address">
                            </div><!-- /.form-group -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                <input class="form-control" type="text" placeholder="City">
                            </div><!-- /.form-group -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input class="form-control" type="text" placeholder="Phone">
                            </div><!-- /.form-group -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input class="form-control" type="text" placeholder="E-mail">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </div><!-- /.box -->

                <div class="row">
                    <div class="col-sm-12">

                        <div class="background-white p30 mb30">
                            <h3 class="page-title">Map Position</h2>

                                <input id="pac-input" class="controls form-control mb30" type="text"
                                    placeholder="Enter a location">

                                <div id="map-canvas"></div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input class="form-control" type="text" placeholder="Latitude"
                                                id="input-latitude">
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input class="form-control" type="text" placeholder="Lontgitude"
                                                id="input-longitude">
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->
                                </div><!-- /.row -->
                        </div><!-- /.box -->
                    </div>

                    <div class="col-sm-12">
                        <div class="background-white p30 mb30">
                            <h3 class="page-title">Gallery</h2>
                                <input type="file" id="input-file">
                        </div><!-- /.box -->
                    </div>
                </div><!-- /.row -->

                <div class="background-white p30 mb30">
                    <h3 class="page-title">Amenities</h3>

                    <ul class="amenities">
                        <li class="checkbox"><input type="checkbox" id="amenity-1"> <label for="amenity-1">Air
                                conditioning</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-2"> <label
                                for="amenity-2">Balcony</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-3"> <label
                                for="amenity-3">Bedding</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-4"> <label for="amenity-4">Cable
                                TV</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-5"> <label for="amenity-5">Cleaning
                                after exit</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-6"> <label for="amenity-6">Cofee
                                pot</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-7"> <label
                                for="amenity-7">Computer</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-8"> <label for="amenity-8">Cot</label>
                        </li>
                        <li class="checkbox"><input type="checkbox" id="amenity-9"> <label
                                for="amenity-9">Dishwasher</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-10"> <label for="amenity-10">DVD</label>
                        </li>
                        <li class="checkbox"><input type="checkbox" id="amenity-11"> <label for="amenity-11">Fan</label>
                        </li>
                        <li class="checkbox"><input type="checkbox" id="amenity-12"> <label
                                for="amenity-12">Fridge</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-13"> <label
                                for="amenity-13">Grill</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-14"> <label
                                for="amenity-14">Hairdryer</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-15"> <label
                                for="amenity-15">Heating</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-16"> <label
                                for="amenity-16">Hi-fi</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-17"> <label
                                for="amenity-17">Internet</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-18"> <label
                                for="amenity-18">Iron</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-19"> <label
                                for="amenity-19">Juicer</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-20"> <label
                                for="amenity-20">Lift</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-21"> <label
                                for="amenity-21">Microwave</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-22"> <label
                                for="amenity-22">Oven</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-23"> <label
                                for="amenity-23">Parking</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-24"> <label
                                for="amenity-24">Parquet</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-25"> <label
                                for="amenity-25">Pool</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-26"> <label
                                for="amenity-26">Radio</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-27"> <label for="amenity-27">Roof
                                terrace</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-28"> <label for="amenity-28">Smoking
                                allowed</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-29"> <label
                                for="amenity-29">Terrace</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-30"> <label
                                for="amenity-30">Toaster</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-31"> <label
                                for="amenity-31">Towelwes</label></li>
                        <li class="checkbox"><input type="checkbox" id="amenity-32"> <label for="amenity-32">Use of
                                pool</label></li>
                    </ul>
                </div>

                <div class="center">
                    <button type="submit" class="btn btn-primary btn-xl">Submit Listing</button>
                </div><!-- /.center -->

            </div><!-- /.content -->
        </div><!-- /.col-* -->

        <div class="col-sm-4 col-lg-3">
            <div class="sidebar">
                <div class="widget">
                    <h2 class="widgettitle">Recent Listings</h2>






                    <div class="cards-small">
                        <div class="card-small">
                            <div class="card-small-image">
                                <a href="listing-detail.html">
                                    <img src="assets/img/tmp/product-2.jpg" alt="Tasty Brazil Coffee">
                                </a>
                            </div><!-- /.card-small-image -->

                            <div class="card-small-content">
                                <h3><a href="listing-detail.html">Tasty Brazil Coffee</a></h3>
                                <h4><a href="listing-detail.html">New York / Village</a></h4>

                                <div class="card-small-price">$180 / person</div>
                            </div><!-- /.card-small-content -->
                        </div><!-- /.card-small -->
                    </div><!-- /.cards-small -->



                    <div class="cards-small">
                        <div class="card-small">
                            <div class="card-small-image">
                                <a href="listing-detail.html">
                                    <img src="assets/img/tmp/product-3.jpg" alt="Healthy Breakfast">
                                </a>
                            </div><!-- /.card-small-image -->

                            <div class="card-small-content">
                                <h3><a href="listing-detail.html">Healthy Breakfast</a></h3>
                                <h4><a href="listing-detail.html">New York / Village</a></h4>

                                <div class="card-small-price">$180 / person</div>
                            </div><!-- /.card-small-content -->
                        </div><!-- /.card-small -->
                    </div><!-- /.cards-small -->



                    <div class="cards-small">
                        <div class="card-small">
                            <div class="card-small-image">
                                <a href="listing-detail.html">
                                    <img src="assets/img/tmp/product-4.jpg" alt="Coffee &amp; Newspaper">
                                </a>
                            </div><!-- /.card-small-image -->

                            <div class="card-small-content">
                                <h3><a href="listing-detail.html">Coffee &amp; Newspaper</a></h3>
                                <h4><a href="listing-detail.html">New York / Village</a></h4>

                                <div class="card-small-price">$180 / person</div>
                            </div><!-- /.card-small-content -->
                        </div><!-- /.card-small -->
                    </div><!-- /.cards-small -->

                </div><!-- /.widget -->


                <div class="widget">
                    <h2 class="widgettitle">Filter</h2>

                    <div class="background-white p20">
                        <form method="post"
                            action="http://preview.byaviators.com/template/superlist/listing-submit.html?">
                            <div class="form-group">
                                <label for="">Keyword</label>
                                <input type="text" class="form-control" name="" id="">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="">Category</label>

                                <select class="form-control" title="Select Category">
                                    <option>Automotive</option>
                                    <option>Real Estate</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="">Location</label>
                                <select class="form-control" title="Select Location">
                                    <option>New York</option>
                                    <option>San Francisco</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="">Starting Price</label>
                                <input type="text" class="form-control" name="" id="">
                            </div><!-- /.form-group -->

                            <button class="btn btn-primary btn-block" type="submit">Search</button>
                        </form>
                    </div>
                </div><!-- /.widget -->


                <div class="widget">
                    <h2 class="widgettitle">Working Hours</h2>

                    <div class="p20 background-white">
                        <div class="working-hours">
                            <div class="day clearfix">
                                <span class="name">Mon</span><span class="hours">07:00 AM - 07:00 PM</span>
                            </div><!-- /.day -->

                            <div class="day clearfix">
                                <span class="name">Tue</span><span class="hours">07:00 AM - 07:00 PM</span>
                            </div><!-- /.day -->

                            <div class="day clearfix">
                                <span class="name">Wed</span><span class="hours">07:00 AM - 07:00 PM</span>
                            </div><!-- /.day -->

                            <div class="day clearfix">
                                <span class="name">Thu</span><span class="hours">07:00 AM - 07:00 PM</span>
                            </div><!-- /.day -->

                            <div class="day clearfix">
                                <span class="name">Fri</span><span class="hours">07:00 AM - 07:00 PM</span>
                            </div><!-- /.day -->

                            <div class="day clearfix">
                                <span class="name">Sat</span><span class="hours">07:00 AM - 02:00 PM</span>
                            </div><!-- /.day -->

                            <div class="day clearfix">
                                <span class="name">Sun</span><span class="hours">Closed</span>
                            </div><!-- /.day -->
                        </div>
                    </div>
                </div><!-- /.widget -->


                <div class="widget">
                    <h2 class="widgettitle">Categories</h2>

                    <ul class="menu">
                        <li><a href="#">Automotive</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Nightlife</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Transportation</a></li>
                        <li><a href="#">Real Estate</a></li>
                        <li><a href="#">Restaurants</a></li>
                    </ul><!-- /.menu -->
                </div><!-- /.wifget -->


                <div class="widget">
                    <h2 class="widgettitle">Archives</h2>

                    <ul class="menu">
                        <li><a href="#">August <strong class="pull-right">12</strong></a></li>
                        <li><a href="#">July <strong class="pull-right">23</strong></a></li>
                        <li><a href="#">June <strong class="pull-right">53</strong></a></li>
                    </ul><!-- /.menu -->
                </div><!-- /.wifget -->

            </div><!-- /.sidebar -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div>
@endsection
