<?php

namespace App\Http\Controllers;
use App\Models\city;
use App\Models\book;
use App\Models\event;
use App\Models\accomodation;
use App\Models\citytour;
use App\Models\GalleryImage;
use App\Models\specialtours;
use App\Models\categories;
use App\Models\GalleryImageMusuem;
use App\Models\musuem;
use App\Models\DailyActivities;
use App\Models\GalleryImageActivities;
use App\Models\contact;
use App\Models\product;
use App\Models\GalleryImageSite;
use App\Models\site;
use App\Models\SiteDay;
use App\Models\shuttle;

use Illuminate\Http\Request;
class userController extends Controller
{

    public function airport(){
        $data=shuttle::all();
        if($data->count()>5){
            $upper=$data->take($data->count()/2);
            $lower=$data->skip($data->count()/2);
            return view('airport-shuttle',[
                'vehicles1'=>$upper,
                'vehicles2'=>$lower
            ]);
        }
        else{
            return view('airport-shuttle',['vehicles'=>$data]);
        }
    }
    public function book(){
        $data=book::all();
        return view('book',['books'=>$data]);
    }
    public function cart(){
        return view('cart');
    }
    public function contact(){
        $data['contact'] = contact::first();
        return view('contact-us',$data);
    }
    public function dailyactivites(){
        $data =DailyActivities::all();
        return view('daily-activities',['activities'=>$data]);
    }
    public function daily_activities_det($id){
        $data['citytour'] =DailyActivities::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageActivities::leftJoin('daily_activities', 'gallery_image_activities.activities_id', '=', 'daily_activities.id')
        ->where('gallery_image_activities.activities_id', $cityTourId)
        ->select('gallery_image_activities.*')
        ->get();
        return view('daily_activities_det',$data);
    }
    public function home(){
        $data=specialtours::all();
        return view('home1',['stours'=>$data]);
    }
    public function hotels(){
        $data=accomodation::all();
        if($data->count()>5){
            $upper=$data->take($data->count()/2);
            $lower=$data->skip($data->count()/2);
            return view('hotels-1',[
                'hotels1'=>$upper,
                'hotels2'=>$lower
            ]);
        }
        else{
            return view('hotels-1',['hotels'=>$data]);
        }
    }
    public function index(){
        return view('index');
    }
    public function libertad(){
        return view('libert-ad');
    }
    public function museum1(){
        return view('museum1');
    }
    public function notification(){
        return view('notification-page');
    }
    public function pakages(){
        return view('packages-1');
    }
    public function pakagefullday(){
        return view('package');
    }
    public function accommodation(){
        $data=accomodation::all();
        if($data->count()>5){
            $upper=$data->take($data->count()/2);
            $lower=$data->skip($data->count()/2);
            return view('hotels-1',[
                'hotel1'=>$upper,
                'hotel2'=>$lower
            ]);
        }
        else{
            return view('hotels-1',['hotels'=>$data]);
        }
    }
    public function accomodation_detail1($id){
        $data['hotel'] =accomodation::find($id);
        return view('recommended-accommodation-page',$data);
    }
    public function sites(){
        return view('sites');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function tourdetail($id){
        $data['stour'] =specialtours::find($id);
        return view('tour-detail',$data);
    }
    public function tour1(){
        $data=city::all();
        if($data->count()>5){
            $upper=$data->take($data->count()/2);
            $lower=$data->skip($data->count()/2);
            return view('tours-1',[
                'cities1'=>$upper,
                'cities2'=>$lower
            ]);
        }
        else{
            return view('tours-1',['cities'=>$data]);
        }
    }
    public function cities_detail($id){
        $cityId = $id;
        $data = citytour::where('city', $cityId)->get();
        $data2 = musuem::where('city', $cityId)->get();
        $data3 = site::where('city', $cityId)->get();
        return view('tours', ['cityTours' => $data, 'museums' => $data2, 'sites' => $data3]);
    }
    public function city_tour_det($id){
        $data['citytour'] =citytour::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImage::leftJoin('citytours', 'gallery_images.city_tour_id', '=', 'citytours.id')
        ->where('gallery_images.city_tour_id', $cityTourId)
        ->select('gallery_images.*')
        ->get();
        return view('city_tour_det',$data);
    }
    public function musuem_det($id){
        $data['citytour'] =musuem::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageMusuem::leftJoin('musuems', 'gallery_image_musuems.musuem_id', '=', 'musuems.id')
        ->where('gallery_image_musuems.musuem_id', $cityTourId)
        ->select('gallery_image_musuems.*')
        ->get();
        return view('museum_det',$data);
    }
    public function sitesandmonoments($id){
        $data['sites'] =site::find($id);
        $cityTourId = $data['sites']->id;

        $data['galleryImages'] = GalleryImageSite::leftJoin('sites', 'gallery_image_sites.site_id', '=', 'sites.id')
        ->where('gallery_image_sites.site_id', $cityTourId)
        ->select('gallery_image_sites.*')
        ->get();

        $data['days'] = SiteDay::leftJoin('sites', 'site_days.site_id', '=', 'sites.id')
        ->where('site_days.site_id', $cityTourId)
        ->select('site_days.*')
        ->get();
        return view('sitesandmonoments',$data);
    }
    public function tours(){
        return view('tours');
    }
    public function travelyourway(){
        $data=event::all();
        return view('travel-your-way',['events'=>$data]);
    }
    public function travelyourway2(){
        return view('travel-your-way2');
    }
    public function vehicle(){
        return view('vehicle-destination');
    }
    public function productsandtools(){
        // $data=categories::all();
        $data = categories::join('products', 'categories.id', '=', 'products.p_catg')
        ->select('categories.*')
        ->distinct()
        ->get();
        $data2 = product::leftJoin('categories', 'products.p_catg', '=', 'categories.id')
        ->select('products.*', 'categories.catg')
        ->get();
        return view('productsandtools',['catagories'=>$data,'products'=>$data2]);
    }
}