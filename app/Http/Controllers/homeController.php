<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function Collection(){
        return view('pages.collection');
    }
    public function Modern(){
        return view('pages.modern');
    }
    public function Classical(){
        return view('pages.classical');
    }
    public function Wardrobe(){
        return view('pages.wardrobe');
    }
    public function OurAssociation(){
        return view('pages.ourAssociation');
    }
    public function GalleryVideo(){
        return view('pages.galleryVideo');
    }
    public function GalleryImages(){
        return view('pages.galleryImages');
    }
    public function Location(){
        return view('pages.location');
    }
   
    public function Trends(){
        return view('pages.trends');
    }
     public function CareerWith(){
        return view('pages.careerWith');
    }

    public function Aboutus(){
        return view('pages.aboutus');
    }

    public function Testimonials(){
        return view('pages.testimonials');
    }

    public function ContactUs(){
        return view('pages.contactUs');
    }

    public function Blog(){
        return view('pages.blog');
    }
}
