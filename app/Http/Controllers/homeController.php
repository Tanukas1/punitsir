<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function Collections(){
        return view('pages.collections');
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
        return view('pages.our-association');
    }
    public function GalleryVideo(){
        return view('pages.gallery-video');
    }
    public function GalleryImages(){
        return view('pages.gallery-images');
    }
    public function Location(){
        return view('pages.location');
    }
   
    public function Trends(){
        return view('pages.trends');
    }
     public function CareerWith(){
        return view('pages.career-with');
    }

    public function Aboutus(){
        return view('pages.about-us');
    }

    public function Testimonials(){
        return view('pages.testimonials');
    }

    public function ContactUs(){
        return view('pages.contact-us');
    }

    public function Blog(){
        return view('pages.blog');
    }
    public function ElegantModular(){
        return view('pages.elegant-modular');
    }
    public function HandlelessModular(){
        return view('pages.handleless-modular');
    }
    public function StylishAndFunctionOpenModular(){
        return view('pages.stylish-and-function-open-modular');
    }
    public function ModernCountryStyleModular(){
        return view('pages.modern-country-style-Modular');
    }
    public function ModularKitchenInterior(){
        return view('pages.modular-kitchen-interior');
    }
    public function ShapeModular(){
        return view('pages.shape-modular');
    }
    public function SimpleDesigAandGraphicsShapeSmallModular(){
        return view('pages.simple-design-and-graphics-shape-small-modular');
    }
    public function IslandWoodernSurfaceModular(){
        return view('pages.island-woodern-surface-modular');
    }
    public function TheClassicCountryLookModernModular(){
        return view('pages.the-classic-country-look-modern-modular');
    }
    public function ModularKitchenWithWoodernBreakfastCounter(){
        return view('pages.modular-kitchen-with-woodern-breakfast-counter');
    }
    public function DafWorkingAndDiningOpenModular(){
        return view('pages.daf-working-and-dining-open-modular');
    }
    public function OpenSpaceModularKitchenWithGraphiteShade(){
        return view('pages.open-space-modular-kitchen-with-graphite-shade');
    }
    public function SmallModular(){
        return view('pages.small-modular');
    }
    public function AllWhiteBrandedModular(){
        return view('pages.all-White-Branded-Modular');
    }
    public function IslandDiningTablemodular(){
        return view('pages.island-dining-table-modular');
    }
    public function ClassicLShapeModular(){
        return view('pages.classic-l-shape-modular');
    }
    public function StunningClassicModular(){
        return view('pages.stunning-classic-modular');
    }
    public function ClassicIslandModular(){
        return view('pages.classic-island-modular');
    }
    public function SimpleSmallModular(){
        return view('pages.simple-small-modular');
    }
    public function SerenitySunriseModular(){
        return view('pages.serenity-sunrise-modular');
    }
    public function CentralIslandModular(){
        return view('pages.central-island-modular');
    }
    public function ModulaKitchenWithMarbleCountertop(){
        return view('pages.modular-kitchen-with-marble-countertop');
    }
    public function DiningModularKitchen(){
        return view('pages.dining-modular-kitchen');
    }
    public function WalkInClosetWardrobe(){
        return view('pages.walk-in-closet-wardrobe');
    }
    public function UShapeWalkInClosetWardrobe(){
        return view('pages.u-shape-walk-in-closet-wardrobe');
    }
}
