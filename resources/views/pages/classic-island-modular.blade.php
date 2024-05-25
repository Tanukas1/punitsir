@extends('layout.master')

@section('body')
    <div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c3.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c3.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c3.jpg" class="img-responsive"
                                            alt="Classic-Island-Modular-Kitchen-Design-With-Area-For-Stove" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Classic Island Modular Kitchen Design With Area For Stove</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        Like a refreshing ocean breeze, the Ocean shade harmoniously pairs with the
                                        timeless natural umber in this kitchen design. The combination of these two
                                        refined colors creates a stunning visual effect. For a perfect match, white
                                        works great for worktops, shelving, and kitchen splashbacks. Adding a touch of
                                        contrast to this look, shades of blue are also appropriate.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop