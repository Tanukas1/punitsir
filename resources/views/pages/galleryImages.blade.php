@extends('layout.master')
@section('css') 
<style>
        .container .gallery a img {
            float: left;
            width: 25%;
            height: auto;
            border: 2px solid #fff;
            -webkit-transition: -webkit-transform .15s ease;
            -moz-transition: -moz-transform .15s ease;
            -o-transition: -o-transform .15s ease;
            -ms-transition: -ms-transform .15s ease;
            transition: transform .15s ease;
            position: relative;
        }

        .clear {
            clear: both;
        }

        a {
            color: #009688;
            text-decoration: none;
        }

        a:hover {
            color: #01695f;
            text-decoration: none;
        }
    </style>
@stop
@section('body')
<div class="inner-product-banner" style="background-image: url(wp-admin/images/product-banner.jpg)">
                        <div class="container">
                            <h2>Images</h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="location sc-pro">
                        <div class="container">

                            <div class="gallery mt-5">
                                <a href="img/full/01.jpg" class="big"><img src="img/thumb/01.jpg" alt="" title="" /></a>
                                <a href="img/full/02.jpg"><img src="img/thumb/02.jpg" alt="" title="" /></a>
                                <a href="img/full/03.jpg"><img src="img/thumb/03.jpg" alt="" title="" /></a>
                                <a href="img/full/04.jpg"><img src="img/thumb/04.jpg" alt="" title="" /></a>
                                <a href="img/full/05.jpg"><img src="img/thumb/05.jpg" alt="" title="" /></a>
                                <a href="img/full/06.jpg"><img src="img/thumb/06.jpg" alt="" title="" /></a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
@stop