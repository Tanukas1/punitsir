@extends('layout.master')

@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m6.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m6.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m6.jpg" class="img-responsive"
                                            alt="Simple-Design-And-Graphic-Shape-Small-Modular-Kitchen-Design" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Simple Design And Graphic Shape Small Modular Kitchen Design</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        The simple design and graphic shapes of the Porto GL Azur | Black kitchen are a
                                        mature achievement. The combination of a docked island and wall units with open
                                        shelving elements creates a successful composition. The black and azure colours
                                        work together to bring power and freshness to the design. The wood-look floor
                                        and slatted wall create a contrast program that adds to the kitchen's overall
                                        appeal.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop