@extends('layout.master')

@section('body')


<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m4.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m4.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m4.jpg" class="img-responsive"
                                            alt="Modern-Country-Style-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Modern Country Style Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This modern country-style kitchen design is perfect for families that gather in
                                        the heart of the home. The soothing white tones, complemented by a wooden
                                        breakfast counter, create a classic and inviting atmosphere. The subtle colour
                                        combination is easy on the eyes, offering a sense of calm and tranquillity. The
                                        successful combination of white with shallow natural shades adds a touch of
                                        sophistication to the design, making it a perfect fit for any modern home.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop