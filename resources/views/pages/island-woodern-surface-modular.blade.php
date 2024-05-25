@extends('layout.master')

@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m7.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m7.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m7.jpg" class="img-responsive"
                                            alt="Island-Wooden-Surface-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Island Wooden Surface Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This kitchen is a minimalist's dream with its grooved wooden surface and noble
                                        combination of elegant oak and white. The real wood veneer fronts boast a fine
                                        line structure that complements the clear design. It's a magnificent kitchen
                                        that impressively showcases how good combinations can succeed.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop