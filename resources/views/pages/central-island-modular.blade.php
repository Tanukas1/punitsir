@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c6.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c6.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c6.jpg" class="img-responsive"
                                            alt="Central-Island-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Central Island Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        It's hard to resist the allure of a cozy and bright kitchen. The ash lacquered
                                        real wood frame, topped with a white marble countertop and accented with a soft
                                        pastel green, is simply enchanting. The design exudes a rustic countryside
                                        charm, with its vivid hues and framed clear glass units that bring the whole
                                        look together.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>

@stop