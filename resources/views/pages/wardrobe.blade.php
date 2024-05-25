@extends('layout.master')

@section('body')

<div class="inner-product-banner" style="background-image: url(wp-admin/images/product-banner.jpg)">
                        <div class="container">
                            <h2>Wardrobe<br />Collection</h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="location sc-pro">
                        <div class="container">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="{{url('/collections')}}">All Categories</a>
                                </li>
                                <li>
                                    <a href="{{url('/modern')}}">Modern</a>
                                </li>
                                <li>
                                    <a href="{{url('/classical')}}">Classical</a>
                                </li>
                                <li>
                                    <a href="{{url('/wardrobe')}}">Wardrobe</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="all" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a href="walk-in-closet-wardrobe">
                                                    <img src="{{asset('assets')}}/img/wardrobe/w2.jpg"
                                                        alt="Walk-In-Closet-Wardrobe" />
                                                    <h3>Walk in closet-wardrobe</h3>
                                                    <p>Upgrade your storage game with this modular wardrobe that offers
                                                        endless possibilities for customization<a
                                                            href="walk-in-closet-wardrobe" style="color:blue"> read
                                                            more...</a>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a href="u-shape-walk-in-closet-wardrobe">
                                                    <img src="{{asset('assets')}}/img/wardrobe/w1.jpg"
                                                        alt="U-Shape-Walk-In-Closet-Wardrobe" />
                                                    <h3>U- Shape walk in Closet-wardrobe</h3>
                                                    <p>With ample space, a walk-in wardrobe is the epitome of
                                                        sophistication for any bedroom. These wardrobes <a
                                                        href="u-shape-walk-in-closet-wardrobe"
                                                        style="color:blue"> read more...</a>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
@stop