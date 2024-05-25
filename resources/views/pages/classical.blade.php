@extends('layout.master')

@section('body')

<div class="inner-product-banner" style="background-image: url(wp-admin/images/product-banner.jpg)">
                        <div class="container">
                            <h2>Classical<br />Collection</h2>
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
                                                <a href="stunning-classic-modular">
                                                    <img src="{{asset('assets')}}/img/classical/c2.jpg"
                                                        alt="Stunning-Classic-Modular-Kitchen-Design" />
                                                    <h3>Stunning Classic Modular kitchen design</h3>
                                                    <p>Discover the epitome of modern elegance with this stunning
                                                        kitchen design. Boasting cutting-edge <a
                                                            href="stunning-classic-modular"
                                                            style="color:blue"> read more...</a>
                                                    </p>

                                                </a>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a
                                                    href="classic-island-modular">
                                                    <img src="{{asset('assets')}}/img/classical/c3.jpg"
                                                        alt="Classic-Island-Modular-Kitchen-Design-With-Area-For-Stove" />
                                                    <h3>Classic Island Modular Kitchen Design With Area for Stove</h3>
                                                    <p>Like a refreshing ocean breeze, the Ocean shade harmoniously
                                                        pairs with the timeless natural umber <a
                                                            href="classic-island-modular"
                                                            style="color:blue"> read more...</a></p>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a href="simple-small-modular">
                                                    <img src="{{asset('assets')}}/img/classical/c4.jpg"
                                                        alt="Simple-Small-Modular-Kitchen-With-A-Classic-Touch" />
                                                    <h3>Simple small modular kitchen with a Classic touch</h3>
                                                    <p>This kitchen is a true gem that effortlessly combines the
                                                        refinements of modern technology, impeccable <a
                                                            href="simple-small-modular"
                                                            style="color:blue"> read more...</a></p>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a
                                                    href="serenity-sunrise-modular">
                                                    <img src="{{asset('assets')}}/img/classical/c5.jpg"
                                                        alt="Serenity-Sunrise-Modular-Kitchen-In-Lucknow-White-Marble-Countertops" />
                                                    <h3>Serenity Sunrise Modular Kitchen in Lucknow white marble
                                                        countertops</h3>
                                                    <p>This kitchen is tailored to your lifestyle. The inviting cashmere
                                                        pink shade harmonizes perfectly with <a
                                                            href="serenity-sunrise-modular"
                                                            style="color:blue"> read more...</a></p>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a href="central-island-modular">
                                                    <img src="{{asset('assets')}}/img/classical/c6.jpg"
                                                        alt="Central-Island-Modular-Kitchen" />
                                                    <h3>Central island Modular Kitchen</h3>
                                                    <p>It's hard to resist the allure of a cozy and bright kitchen. The
                                                        ash lacquered real wood frame, topped <a
                                                            href="central-island-modular"
                                                            style="color:blue"> read more...</a></p>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a href="modular-kitchen-with-marble-countertop">
                                                    <img src="{{asset('assets')}}/img/classical/c7.jpg"
                                                        alt="Modular-Kitchen-With-Marble-Countertop" />
                                                    <h3>Modular Kitchen With Marble Countertop</h3>
                                                    <p>White never goes out of style and exudes a timeless charm.
                                                        Complemented by white oak flooring, walnut <a
                                                            href="modular-kitchen-with-marble-countertop"
                                                            style="color:blue"> read more...</a></p>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="product-thumbnail">
                                                <a href="dining-modular-kitchen">
                                                    <img src="{{asset('assets')}}/img/classical/c8.jpg"
                                                        alt="Dining-Modular-Kitchen-In-Lucknow" />
                                                    <h3>Dining Modular kitchen in Lucknow</h3>
                                                    <p>The combination of teal green and wooden oak makes a bold
                                                        statement, exuding confidence and pride <a
                                                            href="dining-modular-kitchen"
                                                            style="color:blue"> read more...</a></p>

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