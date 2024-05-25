@extends('layout.master')
@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c2.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c2.jpg')">
                                        <img src="{{asset('assets')}}/img/classical/c2.jpg" class="img-responsive"
                                            alt="Stunning-Classic-Modular-Kitchen-Design" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Stunning Classic Modular Kitchen Design</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        Discover the epitome of modern elegance with this stunning kitchen design.
                                        Boasting cutting-edge technology, exquisite design, and sustainable materials,
                                        this kitchen is truly exceptional. The noble oak shade infuses the space with a
                                        natural, soothing vibe and perfectly complements the shimmering crystal white
                                        fronts. Enjoy a seamless blend of form and function and elevate your culinary
                                        experience with this extraordinary kitchen.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop