@extends('layout.master')

@section('body') 
    <div class="inner-product-banner" style="background-image: url(wp-admin/images/product-banner.jpg)">
        <div class="container">
            <h2>Collection</h2>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="location sc-pro">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="{{url('/collections')}}">All Categories</a>
                </li>
                <li>
                    <a href="{{url('/modern')}}">Modern</a>
                </li>
                <li>
                    <a href="{{url('/classical')}}">Classical</a>
                </li>
                <li>
                    <a href="{{url('/wardrobe')}}">Wardrobe</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="elegant-modular">
                                    <img src="{{asset('assets')}}/img/modern/m1.jpg"
                                        alt="elegant-modular" />
                                    <h3>Elegant Modular kitchen</h3>
                                    <p>This kitchen design, featuring a white matt laminated finish with
                                        chamfered endings, is perfect for <a
                                            href="elegant-modular" style="color:blue"> read
                                            more...</a>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="handleless-modular">
                                    <img src="{{asset('assets')}}/img/modern/m2.jpg"
                                        alt="Handleless-Modular-Kitchen" />
                                    <h3>Handleless Modular kitchen</h3>
                                    <p>This timeless combination of white and high gloss lacquer is
                                       ideal for spaces that demand sophistication <a
                                            href="handleless-modular" style="color:blue">
                                            read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="stylish-and-function-open-modular">
                                    <img src="{{asset('assets')}}/img/modern/m3.jpg"
                                        alt="Stylish-And-Functional-Open-Modular-Kitchen" />
                                    <h3>Stylish and functional Open modular kitchen</h3>
                                    <p>Combining dark tones with clean lines can create an elegant
                                        kitchen design. This particular design features <a
                                            href="stylish-and-function-open-modular"
                                            style="color:blue"> read more...</a>
                                    </p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="modern-country-style-Modular">
                                    <img src="{{asset('assets')}}/img/modern/m4.jpg"
                                        alt="Modern-Country-Style-Modular-Kitchen" />
                                    <h3>Modern Country-style Modular kitchen</h3>
                                    <p>This modern country-style kitchen design is perfect for families
                                        that gather in the heart of the home. <a
                                            href="modern-country-style-Modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="modular-kitchen-interior">
                                    <img src="{{asset('assets')}}/img/modern/m15.jpg"
                                        alt="Modular-Kitchen-Interior" />
                                    <h3>Modular kitchen interior</h3>
                                    <p>The combination of white and black exudes a bold and resolute
                                        vibe, setting a clear tone. The wooden hues of the. <a
                                            href="modular-kitchen-interior" style="color:blue">
                                            read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="shape-modular">
                                    <img src="{{asset('assets')}}/img/modern/m5.jpg"
                                        alt="L-Shape-Modular-Kitchen-Design-thumbnail" />
                                    <h3>L shape Modular kitchen design</h3>
                                    <p>This kitchen exudes a friendly and inviting ambiance, much like a
                                        beautiful summer day. Its casual coziness is <a
                                            href="shape-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a
                                    href="simple-design-and-graphics-shape-small-modular">
                                    <img src="{{asset('assets')}}/img/modern/m6.jpg"
                                        alt="Simple-Design-And-Graphic-Shape-Small-Modular-Kitchen-Design" />
                                    <h3>Simple design and graphic shape Small Modular Kitchen Design
                                    </h3>
                                    <p>The simple design and graphic shapes of the Porto GL Azur | Black
                                        kitchen are a mature achievement. The combination of <a
                                            href="simple-design-and-graphics-shape-small-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="island-woodern-surface-modular">
                                    <img src="{{asset('assets')}}/img/modern/m7.jpg"
                                        alt="Island-Wooden-Surface-Modular-Kitchen" />
                                    <h3>Island Wooden Surface Modular Kitchen</h3>
                                    <p>This kitchen is a minimalist's dream with its grooved wooden
                                        surface and noble combination <a
                                            href="island-woodern-surface-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="the-classic-country-look-modern-modular">
                                    <img src="{{asset('assets')}}/img/modern/m8.jpg"
                                        alt="The-Classic-Country-Look-Modern-Modular-Kitchen" />
                                    <h3>The classic country look Modern Modular Kitchen</h3>
                                    <p>It's hard to resist the enchanting appeal of a warm and cheerful
                                        kitchen. The ash lacquered real wood frame <a
                                            href="the-classic-country-look-modern-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="modular-kitchen-with-woodern-breakfast-counter">
                                    <img src="{{asset('assets')}}/img/modern/m9.jpg"
                                        alt="Modular-Kitchen-With-Wooden-Breakfast-Counter" />
                                    <h3>Modular kitchen with Wooden Breakfast Counter</h3>
                                    <p>This modern country-style kitchen design is perfect for families
                                        who love to gather together <a
                                            href="modular-kitchen-with-woodern-breakfast-counter"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="daf-working-and-dining-open-modular">
                                    <img src="{{asset('assets')}}/img/modern/m10.jpg"
                                        alt="Daf-Working-And-Dining-Open-Modular-Kitchen" />
                                    <h3>Daf Working and Dining Open Modular Kitchen</h3>
                                    <p>Indulge in simple elegance at its finest with this kitchen
                                        design. The clearly defined areas in rich, wooden toned colors
                                        <a href="daf-working-and-dining-open-modular"
                                            style="color:blue"> read more...</a>
                                    </p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="open-space-modular-kitchen-with-graphite-shade">
                                    <img src="{{asset('assets')}}/img/modern/m11.jpg"
                                        alt="Open-Space-Modular-Kitchen-With-Graphite-Shade" />
                                    <h3>Open Space Modular Kitchen with Graphite Shade</h3>
                                    <p>The combination of the grained wood and muted graphite shade of
                                        the kitchen fronts creates <a
                                            href="open-space-modular-kitchen-with-graphite-shade"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="small-modular">
                                    <img src="{{asset('assets')}}/img/modern/m12.jpg" alt="Small-Modular-Kitchen" />
                                    <h3>Small Modular Kitchen</h3>
                                    <p>From the massive olive kitchen island to the wall-mounted
                                        cabinets, this kitchen design is dominated by geometric <a
                                            href="small-modular" style="color:blue"> read
                                            more...</a>
                                    </p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="all-white-branded-modular">
                                    <img src="{{asset('assets')}}/img/modern/m13.jpg"
                                        alt="all-white-branded-modular-kitchen-Cabinet" />
                                    <h3>All White Branded Modular Kitchen Cabinet</h3>
                                    <p>This kitchen exudes a charmingly bright and friendly ambiance,
                                        much like a beautiful summer day.<a
                                            href="all-white-branded-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="island-dining-table-modular">
                                    <img src="{{asset('assets')}}/img/modern/m14.jpg"
                                        alt="Island-Dining-Table-Modular-Kitchen" />
                                    <h3>Island Dining Table Modular Kitchen</h3>
                                    <p>The combination of light colors, such as crema-magnolia, and a
                                        friendly wood shade creates a soothing <a
                                            href="island-dining-table-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a
                                    href="classic-l-shape-modular">
                                    <img src="{{asset('assets')}}/img/classical/c1.jpg"
                                        alt="Classic-L-Shape-Modular-Kitchen-Design-With-Central-Cooking-Area" />
                                    <h3>Classic L-Shape Modular Kitchen Design With Central Cooking Area
                                    </h3>
                                    <p>With its well-balanced color scheme of white and summer oak
                                        silver-grey, this kitchen design exudes <a
                                            href="classic-l-shape-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <!-- //--------------cLASSICIAL-------------- -->

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="stunning-classic-modular">
                                    <img src="{{asset('assets')}}/img/classical/c2.jpg"
                                        alt="Stunning-Classic-Modular-Kitchen-Design" />
                                    <h3>Stunning Classic Modular kitchen design</h3>
                                    <p>Discover the epitome of modern elegance with this stunning
                                        kitchen design. Boasting cutting-edge <a
                                            href="stunning-classic-modular"
                                            style="color:blue"> read more...</a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a
                                    href="classic-island-modular">
                                    <img src="{{asset('assets')}}/img/classical/c3.jpg"
                                        alt="Classic-Island-Modular-Kitchen-Design-With-Area-For-Stove" />
                                    <h3>Classic Island Modular Kitchen Design With Area for Stove</h3>
                                    <p>Like a refreshing ocean breeze, the Ocean shade harmoniously
                                        pairs with the timeless natural umber <a
                                            href="classic-island-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="simple-small-modular">
                                    <img src="{{asset('assets')}}/img/classical/c4.jpg"
                                        alt="Simple-Small-Modular-Kitchen-With-A-Classic-Touch" />
                                    <h3>Simple small modular kitchen with a Classic touch</h3>
                                    <p>This kitchen is a true gem that effortlessly combines the
                                        refinements of modern technology, impeccable <a
                                            href="simple-small-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a
                                    href="serenity-sunrise-modular">
                                    <img src="{{asset('assets')}}/img/classical/c5.jpg"
                                        alt="Serenity-Sunrise-Modular-Kitchen-In-Lucknow-White-Marble-Countertops" />
                                    <h3>Serenity Sunrise Modular Kitchen in Lucknow white marble
                                        countertops</h3>
                                    <p>This kitchen is tailored to your lifestyle. The inviting cashmere
                                        pink shade harmonizes perfectly with <a
                                            href="serenity-sunrise-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="central-island-modular">
                                    <img src="{{asset('assets')}}/img/classical/c6.jpg"
                                        alt="Central-Island-Modular-Kitchen" />
                                    <h3>Central island Modular Kitchen</h3>
                                    <p>It's hard to resist the allure of a cozy and bright kitchen. The
                                        ash lacquered real wood frame, topped <a
                                            href="central-island-modular"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="modular-kitchen-with-marble-countertop">
                                    <img src="{{asset('assets')}}/img/classical/c7.jpg"
                                        alt="Modular-Kitchen-With-Marble-Countertop" />
                                    <h3>Modular Kitchen With Marble Countertop</h3>
                                    <p>White never goes out of style and exudes a timeless charm.
                                        Complemented by white oak flooring, walnut <a
                                            href="modular-kitchen-with-marble-countertop"
                                            style="color:blue"> read more...</a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="dining-modular-kitchen">
                                    <img src="{{asset('assets')}}/img/classical/c8.jpg"
                                        alt="Dining-Modular-Kitchen-In-Lucknow" />
                                    <h3>Dining Modular kitchen in Lucknow</h3>
                                    <p>The combination of teal green and wooden oak makes a bold
                                        statement, exuding confidence and pride <a
                                            href="dining-modular-kitchen"
                                            style="color:blue"> read more...</a></p>

                                </a>
                            </div>
                        </div>

                        <!-- //--------------wARDORBE-------------- -->

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="walk-in-closet-wardrobe">
                                    <img src="{{asset('assets')}}/img/wardrobe/w2.jpg"
                                        alt="Walk-In-Closet-Wardrobe" />
                                    <h3>Walk in closet-wardrobe</h3>
                                    <p>Upgrade your storage game with this modular wardrobe that offers
                                        endless possibilities for customization<a
                                            href="walk-in-closet-wardrobe" style="color:blue"> read
                                            more...</a></p>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-thumbnail">
                                <a href="u-shape-walk-in-closet-wardrobe">
                                    <img src="{{asset('assets')}}/img/wardrobe/w1.jpg"
                                        alt="U-Shape-Walk-In-Closet-Wardrobe" />
                                    <h3>U- Shape walk in Closet-wardrobe</h3>
                                    <p>With ample space, a walk-in wardrobe is the epitome of
                                        sophistication for any bedroom. These wardrobes <a
                                            href="u-shape-walk-in-closet-wardrobe"
                                            style="color:blue"> read more...</a></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@stop