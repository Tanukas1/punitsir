@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m14.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}s/img/modern/m14.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m14.jpg" class="img-responsive"
                                            alt="Island-Dining-Table-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Island Dining Table Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        The combination of light colors, such as crema-magnolia, and a friendly wood
                                        shade creates a soothing and harmonious blend that ensures a great start to your
                                        day. The subtle colors of the kitchen furniture, walls, and floor seamlessly
                                        blend together to accentuate this calm and inviting look. This design exudes a
                                        sense of unity, with all shades complementing each other perfectly and creating
                                        a cohesive and tranquil atmosphere in the kitchen.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>



@stop