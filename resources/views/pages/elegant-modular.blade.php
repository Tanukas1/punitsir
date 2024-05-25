@extends('layout.master')

@section("body")
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m1.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m1.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m1.jpg" class="img-responsive"
                                            alt="Elegant-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Elegant Modular Kitchen</h1>
                                        <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                        <p>
                                            When you bring together clean lines with dark tones, what you get is an
                                            elegant
                                            kitchen design. With a contrast of wood and black clean lines, the kitchen
                                            comes
                                            with a moving breakfast table that is a winner. The open shelves on the
                                            island
                                            are a testament to the functionality of this design.</p>
                                        <a href="contact-us" class="mr-5">Enquire Now</a>
                                        <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop