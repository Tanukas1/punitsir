@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m8.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m8.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m8.jpg" class="img-responsive"
                                            alt="The-Classic-Country-Look-Modern-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>The Classic Country Look Modern Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        It's hard to resist the enchanting appeal of a warm and cheerful kitchen. The
                                        ash lacquered real wood frame, combined with a veneer centre panel in a
                                        delightful pastel green shade, is as charming as it is invigorating. This design
                                        exudes a classic country look, featuring vibrant colors and framed clear glass
                                        units that perfectly complement the overall aesthetic.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>


@stop