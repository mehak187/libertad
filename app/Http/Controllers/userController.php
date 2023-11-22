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
use App\Models\libertad;
use App\Models\GalleryLibertad;
use App\Models\indexreview;
use App\Models\trip;
use App\Models\StourRating;
use App\Models\citytourRating;
use App\Models\accRating;
use App\Models\activitiesRating;
use App\Models\musuemRating;
use App\Models\siteRating;
use Illuminate\Http\Request;
class userController extends Controller
{

    public function airport(){
        $data=shuttle::all();
        if ($data->isEmpty()) {
            return view('airport-shuttle')->with ('error','No record to show');
        }
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
        $data=book::paginate(9);
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
        $data = specialtours::all();
        $data2 = city::orderBy('id', 'desc')->get();
        return view('home1',['stours'=>$data,'cities'=>$data2]);
    }
    public function save_trip(request $request){
        $request->validate([
        '*'=>'required',
        ]);
        $user_id = auth()->user()->id;
        $data = $request->all();
        $data['user_id'] = $user_id;
        $trip = Trip::create($data);
        return redirect('travelyourway2')->with('success', 'Trip added successfully')->with('trip', $trip);
    }
    public function hotels(){
        $data=accomodation::all();
        if ($data->isEmpty()) {
            return view('hotels-1')->with ('error','No record to show');
        }
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
    public function savereview(request $request){
        $name=auth()->user()->name;
        $request->validate([
            '*'=>'required',
            ]);
            $data = $request->all();
            $data['name'] = $name;
            indexreview::create($data);
            return redirect('/')->with ('success','Review sent Successfully');
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
    public function pakage(){
        return view('package');
    }
    public function accommodation(){
        $data=accomodation::all();
        if ($data->isEmpty()) {
            return view('hotels-1')->with ('error','No record to show');
        }
        elseif($data->count()>5){
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
        $data=StourRating::leftJoin('users', 'stour_ratings.user_id', '=', 'users.id')
        ->select('stour_ratings.*', 'users.*')
       ->orderBy('stour_ratings.id', 'desc')->get();
        $data2=citytourRating::leftJoin('users', 'citytour_ratings.user_id', '=', 'users.id')
        ->select('citytour_ratings.*', 'users.*')
        ->orderBy('citytour_ratings.id', 'desc')->get();
        $data3=musuemRating::leftJoin('users', 'musuem_ratings.user_id', '=', 'users.id')
        ->select('musuem_ratings.*', 'users.*')
        ->orderBy('musuem_ratings.id', 'desc')->get();
        $data4=siteRating::leftJoin('users', 'site_ratings.user_id', '=', 'users.id')
        ->select('site_ratings.*', 'users.*')
        ->orderBy('site_ratings.id', 'desc')->get();
        $data5=activitiesRating::leftJoin('users', 'activities_ratings.user_id', '=', 'users.id')
        ->select('activities_ratings.*', 'users.*')
        ->orderBy('activities_ratings.id', 'desc')->get();
        $data6=accRating::leftJoin('users', 'acc_ratings.user_id', '=', 'users.id')
        ->select('acc_ratings.*', 'users.*')
        ->orderBy('acc_ratings.id', 'desc')->get();

        return view('testimonial',['StourRatings'=>$data,'citytourRatings'=>$data2,'musuemRatings'=>$data3,'siteRatings'=>$data4,'activitiesRatings'=>$data5,'accRatings'=>$data6]);
    }
    public function tourdetail($id){
        $data['stour'] =specialtours::find($id);
        return view('tour-detail',$data);
    }
    public function tour1(){
        $cities = City::select('cities.*')
        ->leftJoin('musuems', 'cities.id', '=', 'musuems.city')
        ->leftJoin('citytours', 'cities.id', '=', 'citytours.city')
        ->leftJoin('sites', 'cities.id', '=', 'sites.city')
        ->whereNotNull('musuems.city')
        ->orWhereNotNull('citytours.city')
        ->orWhereNotNull('sites.city')
        ->distinct()
        ->get();
    
        if ($cities->isEmpty()) {
            return view('tours-1')->with('error', 'No record to show');
        }
    
        if ($cities->count() > 5) {
            $upper = $cities->take($cities->count() / 2);
            $lower = $cities->skip($cities->count() / 2);
            return view('tours-1', [
                'cities1' => $upper,
                'cities2' => $lower
            ]);
        } else {
            return view('tours-1', ['cities' => $cities]);
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
        $data=event::paginate(9);
        return view('travel-your-way',['events'=>$data]);
    }
    public function travelyourway2(){
        return view('travel-your-way2');
    }
    public function vehicle(){
        return view('vehicle-destination');
    }
    public function productsandtools(){
        $data = categories::join('products', 'categories.id', '=', 'products.p_catg')
        ->select('categories.*')
        ->distinct()
        ->get();
        $data2 = product::leftJoin('categories', 'products.p_catg', '=', 'categories.id')
        ->select('products.*', 'categories.catg')
        ->get();
        return view('productsandtools',['catagories'=>$data,'products'=>$data2]);
    }
    public function libertad(){
        $data['libertad'] =libertad::first();
        $cityTourId = 1;

        $data['galleryImages'] = GalleryLibertad::leftJoin('libertads', 'gallery_libertads.libertad_id', '=', 'libertads.id')
        ->where('gallery_libertads.libertad_id', $cityTourId)
        ->select('gallery_libertads.*')
        ->get();
        return view('libert-ad',$data);
    }
    public function stourreview(request $request){
        $request->validate([
            '*'=>'required',
            ]);
        $user_id = auth()->user()->id;
        $stour_id = $request->input('stour_id');
        if (StourRating::where('user_id', $user_id)->where('stour_id', $stour_id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted a review');
        }
       
        $data = $request->all();
        $data['user_id'] = $user_id;
        StourRating::create($data);
        return redirect()->back()->with('success', 'Thanks for your review');
    }
    public function citytourreview(request $request){
        $request->validate([
            '*'=>'required',
            ]);
        $user_id = auth()->user()->id;
        if (citytourRating::where('user_id', $user_id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted a review');
        }
        $data = $request->all();
        $data['user_id'] = $user_id;
        citytourRating::create($data);
        return redirect()->back()->with('success', 'Thanks for your review');
    }
    public function musuem_review(request $request){
        $request->validate([
            '*'=>'required',
            ]);
        $user_id = auth()->user()->id;
        if (musuemRating::where('user_id', $user_id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted a review');
        }
        $data = $request->all();
        $data['user_id'] = $user_id;
        musuemRating::create($data);
        return redirect()->back()->with('success', 'Thanks for your review');
    }
    public function site_review(request $request){
        $request->validate([
            '*'=>'required',
            ]);
        $user_id = auth()->user()->id;
        if (siteRating::where('user_id', $user_id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted a review');
        }
        $data = $request->all();
        $data['user_id'] = $user_id;
        siteRating::create($data);
        return redirect()->back()->with('success', 'Thanks for your review');
    }
    public function activities_review(request $request){
        $request->validate([
            '*'=>'required',
            ]);
        $user_id = auth()->user()->id;
        if (activitiesRating::where('user_id', $user_id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted a review');
        }
        $data = $request->all();
        $data['user_id'] = $user_id;
        activitiesRating::create($data);
        return redirect()->back()->with('success', 'Thanks for your review');
    }
    public function acc_review(request $request){
        $request->validate([
            '*'=>'required',
            ]);
        $user_id = auth()->user()->id;
        if (accRating::where('user_id', $user_id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted a review');
        }
        $data = $request->all();
        $data['user_id'] = $user_id;
        accRating::create($data);
        return redirect()->back()->with('success', 'Thanks for your review');
    }
}