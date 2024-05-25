@extends('layout.master')
@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/wardrobe/w1.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/wardrobe/w1.jpg')">

                                        <img src="{{asset('assets')}}/img/wardrobe/w1.jpg" class="img-responsive"
                                            alt="U-Shape-Walk-In-Closet-Wardrobe" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>U-Shape Walk In Closet Wardrobe</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        With ample space, a walk-in wardrobe is the epitome of sophistication for any
                                        bedroom. These wardrobes offer enough room for all your belongings, including
                                        your shoe and jewelry collections, without the hassle of overflowing drawers and
                                        cluttered racks. With versatile shelving options and innovative storage
                                        solutions, you can create more space and give your accessories room to breathe.
                                        The well-organized and clutter-free space allows you to sort and organize your
                                        belongings more effectively, making your daily routine much smoother.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="wardrobe">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop