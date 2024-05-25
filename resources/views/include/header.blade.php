<a href="\" class="logo">
    <img src="/assets/img/logoblack.png" />
</a>


<div class="meubartoggler" onclick="gtm()">
     
    <ul class="d-flex">
        <li><i class="fa fa-envelope" aria-hidden="true"></i>Info@dafmodular.com</li>
         <li><i class="fa fa-phone-square" aria-hidden="true"></i>+91-9044064228</li>
    </ul>

     <i class="fa-solid fa-bars"  onclick="gtm()" style="cursor:pointer"></i>
</div>



<nav class="navbar">

    <div class="meubartogglerclose" onclick="gtmclose()">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <ul class="mymenuul">
        <li><a href="{{url('/')}}">Home</a></li>
        <li>
            <a href="{{url('/collections')}}">Collection </a>
            <ul>
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
        </li>
        <!-- <li><a href="\furniture.html">Furniture</a></li> -->

        <li><a href="{{url('/our-association')}}">Our Association</a></li>


        <li><a href="{{url('/gallery-video')}}">Gallery Video</a></li>

        <li><a href="{{url('/gallery-images')}}">Gallery Images</a></li>

        <li><a href="{{url('/location')}}">Location</a></li>
        <li><a href="{{url('/trends')}}">Trends</a></li>
        <li><a href="{{url('/career-with')}}">Career With Us</a></li>
        <li><a href="{{url('/about-us')}}">About Us</a></li>
        <li><a href="{{url('/testimonials')}}">Testimonials</a></li>
        <li><a href="{{url('/contact-us')}}">Contact US</a></li>
        <li><a href="{{url('/blog')}}">Blog</a></li>
    </ul>
</nav>
