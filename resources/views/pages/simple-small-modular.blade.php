@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">
                                    <a href="{{asset('assets')}}/img/classical/c4.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c4.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c4.jpg" class="img-responsive"
                                            alt="Simple-Small-Modular-Kitchen-With-A-Classic-Touch" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Simple Small Modular Kitchen With a Classic Touch</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This kitchen is a true gem that effortlessly combines the refinements of modern
                                        technology, impeccable design, and sustainability. The noble oak shade is a
                                        beautiful homage to nature and serves as a wonderful contrast to the crystal
                                        white fronts. With this design, you can revive and enjoy your everyday life in a
                                        space that seamlessly blends form and function.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop