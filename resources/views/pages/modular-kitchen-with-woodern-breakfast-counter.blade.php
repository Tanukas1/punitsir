@extends('layout.master')
@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m9.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m9.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m9.jpg" class="img-responsive"
                                            alt="Modular-Kitchen-With-Wooden-Breakfast-Counter" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Modular Kitchen With Wooden Breakfast Counter</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This modern country-style kitchen design is perfect for families who love to
                                        gather together. The combination of soothing white and wooden breakfast counter
                                        creates a classic and timeless look that will appeal to all. This design also
                                        features open metal shelves, providing a convenient and stylish storage option
                                        for all your essentials.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>

@stop