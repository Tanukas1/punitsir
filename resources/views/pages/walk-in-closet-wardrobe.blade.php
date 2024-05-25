@extends('layout.master')
@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/wardrobe/w2.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/wardrobe/w2.jpg')">

                                        <img src="{{asset('assets')}}/img/wardrobe/w2.jpg" class="img-responsive"
                                            alt="Walk-In-Closet-Wardrobe" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Walk In Closet Wardrobe</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        Upgrade your storage game with this modular wardrobe that offers endless
                                        possibilities for customization. Crafted from top-notch materials, it's designed
                                        to keep your belongings in order and easy to access. If you have high ceilings,
                                        take advantage of the extra space by stacking the wardrobe as high as you can.
                                        Use the upper sections for bedding, seasonal clothes, or anything else you don't
                                        need to reach as often. With this wardrobe, you'll have a more efficient and
                                        stylish way to get dressed each day.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="wardrobe">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop