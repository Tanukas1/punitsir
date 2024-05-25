@extends('layout.master')

@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m2.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m2.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m2.jpg" class="img-responsive"
                                            alt="Handleless-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Handleless Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This timeless combination of white and high gloss lacquer is ideal for spaces
                                        that demand sophistication. The handle-less feature adds a touch of modernity,
                                        while the customisable wall units make it perfect for white ceilings. It's a
                                        minimalistic design that exudes elegance and is sure to win your heart.</p> <a
                                        href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>

@stop