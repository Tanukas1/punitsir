@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m11.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m11.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m11.jpg" class="img-responsive"
                                            alt="Open-Space-Modular-Kitchen-With-Graphite-Shade" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Open Space Modular Kitchen With Graphite Shade</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        The combination of the grained wood and muted graphite shade of the kitchen
                                        fronts creates a frame that accentuates the furniture's shapes beautifully. This
                                        design promotes a sense of powerful calm and allows for visual tranquility to
                                        radiate its magic unhindered. Experience the cozy and harmoniously coordinated
                                        ambiance of this kitchen, which has a lasting impact on all those who enter it.
                                    </p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop