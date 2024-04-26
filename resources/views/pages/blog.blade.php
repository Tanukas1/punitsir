@extends('layout.master')

@section('css')
<style>

        .img_blog {
            height: 100px !important;
            width: 120px !important;
        }

        .mail_blog {
            width: 100% !important;
            height: auto !important;
            border-radius: 5px;
            background-color: #fff !important;
            border: solid thin #d5d5d5;
            margin-bottom: 50px;
            padding-bottom:50px;
        }
            .mail_blog h2
            {
                display:block;
                padding :10px;
            }

            .img_box {
                width: 100% !important;
                aspect-ratio: 2/1;
                object-fit: cover
            }

        .image_main {
            margin-bottom: 10px !important;
            width: 100% !important;
        }

        .blog_matter {
            margin-bottom: 10px !important;
            padding: 10px;
        }


        .list1 {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }


            .list1 li:first-child
            {
                margin-left:0px;
                padding-left:0px;
            }
            .list1 i {
                color: #4ea9e0;
                padding-right: 3px;
            }
            .list1 li {
                float: left;
                display: block;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

        .blogss {
            margin-bottom: 20px;
        }

        .desc_blog {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }

         .desc_blog p,.desc_blog span ,.desc_blog li
         {
             font-size:16px;
             
         }
        .readmore
        {
           
            float:right;
            padding:5px;
            background-color:black;
            color:white;
            border-radius:5px;
            margin-top:20px;
        }
        /*  ////////////*/
        .latestWrapper {
            display: flex;
            justify-content: space-between;
            padding: 5px;
            margin-top: 15px;
            width: calc(95% - 5%);
            margin-left: 5%;
        }

            .latestWrapper:hover
            {
                background-color:#f2f2f2

            }

            .latestWrapper img {
                width: 100px;
                height: auto;
                object-fit: cover;
                aspect-ratio: 4/3;
            }
        .bleft
        {
            width:calc(100% - 100px);
            padding-left:5px;
          
        }
            .bleft h4 {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
                font-size: 1.6rem;
                color: #4ea9e0;
            }

            .bleft p {
               font-size:12px;
               font-weight:600;
               margin-top:6px;
            }

            .bleft i {
                font-size: 12px;
                font-weight: 600;
                margin-top: 6px;
            }


        @media screen and (max-width: 600px) {





            .list1 li {
                float: left;
                display: block;
                width: 33%;
                text-align: left;
                margin: 0px;
                padding: 0px;
                font-size:12px;
            }

                .list1 li:nth-child(4) {
                    width: 100%;
                    margin: 0px;
                    padding: 0px;
                    margin-top:10px;
                }
        }

    </style>
@stop

@section('body')
<div class="inner-product-banner" style="background-image: url(wp-admin/images/product-banner.jpg)">
                        <div class="container">
                            <h2>Blogs</h2>
                            <h4 style="color:white"> <a href="\" style="color:white"> Home</a> / Blog</h4>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="associations">
                        <div class="container">
                            <div class="row">
                              
                                <br />
                                <div class="col-md-9">
                                    <div id="blogs">
                                        <!--<div class="image_main">
                                            <img src="assests/img/banner/banner1.jpg" class="img-responsive" />
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="clearfix"></div>
                                        <div class="blog_matter">
                                            <p>Adesf sfcfjhsfes sdjhsdjesd sdjksdjesd  sdjseudesmnd edesfhes ewebmdhjd</p>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                     <h2>Latest Blogs</h2>
                                     <br />
                                     <hr />

                                    <div class="row" id="blogdetails">

                                        <!--<div class="latestWrapper">
                                            <img src="assests/img/adds.jpg" />
                                            <div class="bleft">
                                                <h4>Dynamic </h4>
                                                <p><i class='fa fa-calendar' aria-hidden='true'></i>Date</p>
                                                <a href="#">Readmore...</a>
                                            </div>
                                        </div>-->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
@stop