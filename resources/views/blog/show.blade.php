@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">



        <div class="col-sm-8 col-lg-9">
            <div class="content">
                <div class="page-title">
                    <h1>Blog Detail</h1>
                </div><!-- /.page-title -->

                <div class="posts post-detail">

                    <img src="assets/img/tmp/blog-1.jpg" alt="A Clockwork Origin">

                    <div class="post-meta clearfix">
                        <div class="post-meta-author">By <a href="blog-detail.html">Eric Yorick</a></div>
                        <!-- /.post-meta-author -->
                        <div class="post-meta-date">08/24/2015</div><!-- /.post-meta-date -->
                        <div class="post-meta-categories"><i class="fa fa-tags"></i> <a
                                href="blog-detail.html">Restaurant</a></div><!-- /.post-meta-categories -->
                        <div class="post-meta-comments"><i class="fa fa-comments"></i> <a href="blog-detail.html">3
                                comments</a></div><!-- /.post-meta-comments -->
                    </div><!-- /.post-meta -->

                    <div class="post-content">
                        <p class='drop-cap'>Just once I'd like to eat dinner with a celebrity who isn't bound and
                            gagged. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the
                            dominoes will fall like a house of cards. Checkmate. How much did you? Wow! A superpowers
                            drug you can just rub onto your skin? </p>
                        <p>You'd think it would be something you'd have to freebase. <a href='#'>The alien
                                mothership</a> is in orbit here. Morbo can't understand his teleprompter because he
                            forgot how you say that letter that's shaped like a man wearing a hat. And from now on
                            you're all named Bender Jr. Who said that? SURE you can die! You want to die?! I like
                            cooking too.</p><img class='post-content-image pull-left' src='assets/img/tmp/product-3.jpg'
                            alt'...'>
                        <h3>If we can hit that bullseye</h3>
                        <p>The rest of the dominoes will fall like a house of cards. Checkmate. Now that the, uh,
                            garbage ball is in space, Doctor, perhaps you can help me with my inhibitions? I've been
                            there. Just once <mark>I'd like to eat dinner with a celebrity</mark> who isn't stupid. What
                            am I, the pope? Oh, all right, I am. But if anything happens to me, tell them I died robbing
                            some old man. This opera's as lousy as it is brilliant! Your lyrics lack subtlety. You can't
                            just have your characters announce how they feel. That makes me feel angry!</p>
                        <p>For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored.
                            Then throw her in the laundry room, which will hereafter be referred to as 'the brig'. Who
                            said that? SURE you can die! You want to die?! I like cooking too. Oh, all right, I am. But
                            if anything happens to me, tell them I died robbing some old man. Well, thanks to the
                            Internet. I decline the title of Iron Cook and accept the lesser title of Zinc Saucier,
                            which I just made up. Comes with double prize money.</p>
                        <blockquote>Two things are infinite: the universe and human stupidity; and I'm not sure about
                            the universe.<footer><cite>Albert Einstein</cite></footer>
                        </blockquote>
                        <p>Doctor, perhaps you can help me with my inhibitions? I've been there. My folks were always on
                            me to groom myself and wear underpants. What am I, the pope? Oh, all right, I am. But if
                            anything happens to me, tell them I died robbing some old man. This opera's as lousy as it
                            is brilliant! Your lyrics lack subtlety. This is the worst kind of discrimination.</p><img
                            class='post-content-image pull-right' src='assets/img/tmp/product-9.jpg' alt'...'>
                        <h3>Completely reasonable</h3>
                        <p>I didn't ask for a completely reasonable excuse! I asked you to get busy! Morbo can't
                            understand his teleprompter because he forgot how you say that letter that's shaped like a
                            man wearing a hat. Look, everyone wants to be like <a href='#'>Germany</a>.</p>
                        <p>Bender, quit destroying the universe! We're rescuing ya. Shut up and get to the point! I
                            decline the title of Iron Cook and accept the lesser title of Zinc Saucier, which I just
                            made up. Uhh… also, comes with double prize money. Daylight and everything.</p>
                        <h3>The universe and human stupidity</h3>
                        <p>Wow! A superpowers drug you can just rub onto your skin? You'd think it would be something
                            you'd have to freebase. For one beautiful night I knew what it was like to be a grandmother.
                            Subjugated, yet honored. Then throw her in the laundry room, which will hereafter be
                            referred to as 'the brig'. I suppose I could part with 'one' and still be feared</p>
                    </div><!-- /.post-content -->

                    <div class="post-meta-tags clearfix">
                        Tags:
                        <ul>
                            <li class="tag"><a href="#">Coffee</a></li>
                            <li class="tag"><a href="#">Breakfast</a></li>
                            <li class="tag"><a href="#">Wine</a></li>
                            <li class="tag"><a href="#">Healthy Food</a></li>
                            <li class="tag"><a href="#">Raw Food</a></li>
                        </ul>
                    </div><!-- /.post-meta -->

                    @include('blog.comments.index')


                </div><!-- /.post -->


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
                            action="http://preview.byaviators.com/template/superlist/blog-detail-right-sidebar.html?">
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
</div><!-- /.container -->
@endsection
