<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\city;
use App\Models\book;
use App\Models\event;
use App\Models\accomodation;
use App\Models\citytour;
use App\Models\GalleryImage;
use App\Models\specialtours;
use App\Models\musuem;
use App\Models\GalleryImageMusuem;
use App\Models\categories;
use App\Models\DailyActivities;
use App\Models\GalleryImageActivities;
use App\Models\Contact;
use App\Models\product;
use App\Models\GalleryImageSite;
use App\Models\site;
use App\Models\SiteDay;
use App\Models\shuttle;
use App\Models\libertad;
use App\Models\GalleryLibertad;
use App\Models\indexreview;


use File;

class adminController extends Controller
{
    public function adminhome(){
        return view('admin.index');
    }
    public function manage_libertad_reviews(){
        $data = indexreview::all();
        return view('admin.manage_libertad_reviews',['reviews'=>$data]);
    }
    public function delete_reviews($id){
        $data =indexreview::find($id);
        $data->delete();
        return redirect('manage_libertad_reviews')->with ('Delete','review Deleted Successfully');
    }
    public function add_special_tours(){
        return view('admin.add_special_tours');
    }
    public function addstours(request $request){
        $request->validate([
            '*'=>'required',
            'img'=>'required|file|mimes:jpeg,png,jpg,svg,webp'
            ]);
            $data =$request->all();
            $photo = $request->file('img');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $data['img'] = $photo_name;
            specialtours::create($data);
            return redirect('manage_special_tours')->with ('success','Special tour added Successfully');
    }
    public function manage_special_tours(){
        $data = specialtours::orderBy('id', 'desc')->get();
        return view('admin.manage_special_tours',['stours'=>$data]);
    }
    public function special_tour_details($id){
        $data['stour'] =specialtours::find($id);
        return view('admin.special_tour_details',$data);
    }
    public function edit_special_tours($id){ 
        $data['stour'] =specialtours::find($id);
        return view('admin.edit_special_tours',$data);
    }
    public function updatestour(request $request){
        if($request->file('img')==NULL){
            $name =$request->name;
            $location =$request->location;
            $price =$request->price;
            $night =$request->night;
            $rooms =$request->rooms;
            $sight_seeing =$request->sight_seeing;
            $include =$request->include;
            $des =$request->des;
            specialtours::find($request->id)->update([
                'name' => $name,
                'location' => $location,
                'price' => $price,
                'night' => $night,
                'sight_seeing' => $sight_seeing,
                'include' => $include,
                'des' => $des,
            ]);
        }else{
            $photo = $request->file('img');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $name =$request->name;
            $location =$request->location;
            $price =$request->price;
            $night =$request->night;
            $sight_seeing =$request->sight_seeing;
            $include =$request->include;
            $des =$request->des;
            specialtours::find($request->id)->update([
                'name' => $name,
                'location' => $location,
                'price' => $price,
                'night' => $night,
                'sight_seeing' => $sight_seeing,
                'include' => $include,
                'des' => $des,
                'img'=>$photo_name
            ]);
        }
        return redirect('manage_special_tours')->with ('update','Special tour updated Successfully');
    }
    public function deletestour($id){
        $data =specialtours::find($id);
        $imagePath = public_path('uploads/' . $data->img);
        $data->delete();
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        return redirect('manage_special_tours')->with ('Delete','Special tour Deleted Successfully');
    }

    public function add_city_tours(){
        $data=city::all();
        return view('admin.add_city_tours',['cities'=>$data]);
    }
    public function save_citytour(request $request){
        $request->validate([
            '*' => 'required',
            'img'=>'required|mimes:jpeg,png,jpg,svg,webp',
        ]);
        $photo = $request->file('img');
        $photo_name =time()."-".$photo->getClientOriginalName();
        $photo_destination=public_path('uploads');
        $photo->move($photo_destination,$photo_name);

        $cityTour = citytour::create([
            'name' => $request->name,
            'location' => $request->location,
            'price' => $request->price,
            'nights' => $request->nights,
            'city' => $request->city,
            'sight_seeing' => $request->sight_seeing,
            'include' => $request->include,
            'des' => $request->des,
            'img' => $photo_name,
        ]);
        // --------get latest store id------
        $cityTourId = $cityTour->id;
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImage::create([
                    'city_tour_id' => $cityTour->id,
                    'image_path' => $originalName,
                ]);
            }
        }
        return redirect('/manage_city_tours')->with('savectour', 'City tour added Successfully');
    }
    public function manage_city_tours(){
        $data =citytour::all();
        $data = CityTour::leftJoin('cities', 'citytours.city', '=', 'cities.id')
        ->select('citytours.*', 'cities.Cityname')
       ->orderBy('id', 'desc')->get();
        return view('admin.manage_city_tours',['citytours'=>$data]);
    }
    public function city_tour_details($id){
        $data['citytour'] =citytour::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImage::leftJoin('citytours', 'gallery_images.city_tour_id', '=', 'citytours.id')
        ->where('gallery_images.city_tour_id', $cityTourId)
        ->select('gallery_images.*')
        ->get();
        return view('admin.city_tour_details',$data);
    }
    public function edit_city_tours($id){
        $data['cities']=city::all();
        $data['citytour'] =citytour::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImage::leftJoin('citytours', 'gallery_images.city_tour_id', '=', 'citytours.id')
        ->where('gallery_images.city_tour_id', $cityTourId)
        ->select('gallery_images.*')
        ->get();
        return view('admin.edit_city_tours',$data);
    }
    public function update_city_tour(Request $request){
        $request->validate([
            // Add your validation rules here
        ]);
    
        $cityTour = CityTour::find($request->id);
    
        if (!$cityTour) {
            return redirect('/manage_city_tours')->with('error', 'City tour not found');
        }
    
        $dataToUpdate = [
            'name' => $request->name,
            'location' => $request->location,
            'price' => $request->price,
            'night' => $request->night,
            'sight_seeing' => $request->sight_seeing,
            'include' => $request->include,
            'des' => $request->des,
            'city' => $request->city,
        ];
    
        if ($request->file('img') !== null) {
            $photo = $request->file('img');
            $photo_name = time() . "-" . $photo->getClientOriginalName();
            $photo_destination = public_path('uploads');
            $photo->move($photo_destination, $photo_name);
    
            $dataToUpdate['img'] = $photo_name;
        }
    
        $cityTour->update($dataToUpdate);
    
        // Handle updating existing gallery images
        $imagePathsold = $request->file('imagesold');
        $galleryIds = $request->input('gallery_id', []);
    
        if ($imagePathsold) {
            foreach ($galleryIds as $key => $galleryId) {
                $gimg = GalleryImage::find($galleryId);
                if (!$gimg) {
                    return redirect('/manage_city_tours')->with('error', 'Gallery image not found');
                }
    
                if (isset($imagePathsold[$key])) {
                    $image = $imagePathsold[$key];
                    $originalName = time() . "-" . $image->getClientOriginalName();
                    $imagePathDestination = public_path('uploads');
                    $image->move($imagePathDestination, $originalName);
                    $gimg->update([
                        'image_path' => $originalName,
                    ]);
                }
            }
        }
    
        // Handle adding new gallery images
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImage::create([
                    'city_tour_id' => $cityTour->id,
                    'image_path' => $originalName,
                ]);
            }
        }
    
        return redirect('/manage_city_tours')->with('savectour', 'City tour updated successfully');
    }
    
    public function delete_city_tour($id){
        $cityTour = citytour::find($id);
        $cityTour->delete();
        $imagePath = public_path('uploads/' . $cityTour->img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $galleryImages = GalleryImage::where('city_tour_id', $cityTour->id)->get();
        if ($galleryImages) {
            foreach ($galleryImages as $image) {
                $imagePath = public_path('uploads/' . $image->image_path);
                if (file_exists($imagePath)) {
                        unlink($imagePath);
                }
                $image->delete();
            }
        }
        return redirect('manage_city_tours')->with ('Delete','City Tour Deleted Successfully');
    }

    public function add_musuem(){
        $data=city::all();
        return view('admin.add_musuem',['cities'=>$data]);
    }
    public function save_musuem(request $request){
        $request->validate([
            '*' => 'required',
            'img'=>'required|mimes:jpeg,png,jpg,svg,webp',
        ]);
        $photo = $request->file('img');
        $photo_name =time()."-".$photo->getClientOriginalName();
        $photo_destination=public_path('uploads');
        $photo->move($photo_destination,$photo_name);

        $cityTour = musuem::create([
            'name' => $request->name,
            'location' => $request->location,
            'price' => $request->price,
            'city' => $request->city,
            'sight_seeing' => $request->sight_seeing,
            'include' => $request->include,
            'des' => $request->des,
            'img' => $photo_name,
        ]);
        // --------get latest store id------
        $cityTourId = $cityTour->id;
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImageMusuem::create([
                    'musuem_id' => $cityTour->id,
                    'image_path' => $originalName,
                ]);
            }
        }
        return redirect('/manage_musuem')->with('savectour', 'City tour added Successfully');
    }
    public function manage_musuem(){
        $data =musuem::all();
        $data = musuem::leftJoin('cities', 'musuems.city', '=', 'cities.id')
        ->select('musuems.*', 'cities.Cityname')
        ->orderBy('id', 'desc')->get();
        return view('admin.manage_musuem',['musuems'=>$data]);
    }
    public function edit_musuem($id){
        $data['cities']=city::all();
        $data['citytour'] =musuem::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageMusuem::leftJoin('musuems', 'gallery_image_musuems.musuem_id', '=', 'musuems.id')
        ->where('gallery_image_musuems.musuem_id', $cityTourId)
        ->select('gallery_image_musuems.*')
        ->get();
        return view('admin.edit_musuem',$data);
    }
    public function update_musuem(Request $request) {
        $request->validate([
        ]);
    
        $cityTour = musuem::find($request->id);
    
        if (!$cityTour) {
            return redirect('/manage_musuem')->with('error', 'City tour not found');
        }
    
        if ($request->file('img') == NULL) {
            $cityTour->update([
                'name' => $request->name,
                'location' => $request->location,
                'price' => $request->price,
                'sight_seeing' => $request->sight_seeing,
                'include' => $request->include,
                'des' => $request->des,
                'city' => $request->city,
            ]);
            $updatedCityTourId = $cityTour->id;
            $imagePathsold = $request->file('imagesold');
            $galleryIds = $request->input('gallery_id', []);

            if ($imagePathsold) {
                foreach ($galleryIds as $key => $galleryId) {
                    $gimg = GalleryImageMusuem::find($galleryId);
                    if (!$gimg) {
                        return redirect('/manage_musuem')->with('error', 'Gallery image not found');
                    }
                    if (isset($imagePathsold[$key])) {
                        $image = $imagePathsold[$key];
                        $originalName = time() . "-" . $image->getClientOriginalName();
                        $imagePathDestination = public_path('uploads');
                        $image->move($imagePathDestination, $originalName);
                        $gimg->update([
                            'image_path' => $originalName,
                        ]);
                    }
                }
            }
            // ------new img-------
            $imagePaths = $request->file('images');
            if ($imagePaths) {
                foreach ($imagePaths as $image) {
                    $originalName = time() . "-" . $image->getClientOriginalName();
                    $imagePathDestination = public_path('uploads');
                    $image->move($imagePathDestination, $originalName);
                    GalleryImageMusuem::create([
                        'musuem_id' => $cityTour->id,
                        'image_path' => $originalName,
                    ]);
                }
            }
        } else {
            $photo = $request->file('img');
            $photo_name = time() . "-" . $photo->getClientOriginalName();
            $photo_destination = public_path('uploads');
            $photo->move($photo_destination, $photo_name);
    
            $cityTour->update([
                'name' => $request->name,
                'location' => $request->location,
                'price' => $request->price,
                'sight_seeing' => $request->sight_seeing,
                'include' => $request->include,
                'des' => $request->des,
                'img' => $photo_name,
                'city' => $request->city
            ]);
    
            // Handle gallery images update if new images are provided
            $updatedCityTourId = $cityTour->id;
            $imagePathsold = $request->file('imagesold');
            $galleryIds = $request->input('gallery_id', []);

            if ($imagePathsold) {
                foreach ($galleryIds as $key => $galleryId) {
                    $gimg = GalleryImageMusuem::find($galleryId);
                    if (!$gimg) {
                        return redirect('/manage_city_tours')->with('error', 'Gallery image not found');
                    }
                    if (isset($imagePathsold[$key])) {
                        $image = $imagePathsold[$key];
                        $originalName = time() . "-" . $image->getClientOriginalName();
                        $imagePathDestination = public_path('uploads');
                        $image->move($imagePathDestination, $originalName);
                        $gimg->update([
                            'image_path' => $originalName,
                        ]);
                    }
                }
            }

             // ------new img-------
             $imagePaths = $request->file('images');
             if ($imagePaths) {
                 foreach ($imagePaths as $image) {
                     $originalName = time() . "-" . $image->getClientOriginalName();
                     $imagePathDestination = public_path('uploads');
                     $image->move($imagePathDestination, $originalName);
                     GalleryImageMusuem::create([
                         'musuem_id' => $cityTour->id,
                         'image_path' => $originalName,
                     ]);
                 }
             }
        }
    
        return redirect('/manage_musuem')->with('savectour', 'Musuem updated successfully');
    }
    public function musuem_detail($id){
        $data['musuem'] =musuem::find($id);
        $musuemId = $data['musuem']->id;

        $data['galleryImages'] = GalleryImageMusuem::leftJoin('musuems', 'gallery_image_musuems.musuem_id', '=', 'musuems.id')
        ->where('gallery_image_musuems.musuem_id', $musuemId)
        ->select('gallery_image_musuems.*')
        ->get();
        return view('admin.musuem_detail',$data);
    }
    public function delete_musuem($id){
        $cityTour = musuem::find($id);
        $cityTour->delete();
        $imagePath = public_path('uploads/' . $cityTour->img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $galleryImages = GalleryImageMusuem::where('musuem_id', $cityTour->id)->get();
        if ($galleryImages) {
            foreach ($galleryImages as $image) {
                $imagePath = public_path('uploads/' . $image->image_path);
                if (file_exists($imagePath)) {
                        unlink($imagePath);
                }
                $image->delete();
            }
        }
        return redirect('manage_musuem')->with ('Delete','Musuem Deleted Successfully');
    }
    
    public function add_sites_and_monuments(){
        $data=city::all();
        return view('admin.add_sites_and_monuments',['cities'=>$data]);
    }
    public function save_sites_and_monuments(request $request){
        $request->validate([
            '*' => 'required',
            'img'=>'required|mimes:jpeg,png,jpg,svg,webp',
        ]);
        $photo = $request->file('img');
        $photo_name =time()."-".$photo->getClientOriginalName();
        $photo_destination=public_path('uploads');
        $photo->move($photo_destination,$photo_name);

        $site = site::create([
            'name' => $request->name,
            'location' => $request->location,
            'nights' => $request->nights,
            'city' => $request->city,
            'des' => $request->des,
            'img' => $photo_name,
        ]);
        // --------get latest store id------
        $siteId = $site->id;
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImageSite::create([
                    'site_id' => $site->id,
                    'image_path' => $originalName,
                ]);
            }
        }
        $dayTitles = $request->day_title;
        $dayDescriptions = $request->day_des;
        if (count($dayTitles) == count($dayDescriptions)) {
            foreach ($dayTitles as $index => $dayTitle) {
                $dayDescription = $dayDescriptions[$index];
        
                SiteDay::create([
                    'site_id' => $siteId,
                    'day_title' => $dayTitle,
                    'day_des' => $dayDescription,
                ]);
            }
        } 
        return redirect('/manage_sites_and_monuments')->with('savectour', 'Sites and monuments added Successfully');
    }
    public function manage_sites_and_monuments(){
        $data =site::all();
        $data = site::leftJoin('cities', 'sites.city', '=', 'cities.id')
        ->select('sites.*', 'cities.Cityname')
        ->orderBy('id', 'desc')->get();
        return view('admin.manage_sites_and_monuments',['citytours'=>$data]);
    }
    public function sites_and_monuments_details($id){
        $data['citytour'] =site::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageSite::leftJoin('sites', 'gallery_image_sites.site_id', '=', 'sites.id')
        ->where('gallery_image_sites.site_id', $cityTourId)
        ->select('gallery_image_sites.*')
        ->get();

        $data['days'] =SiteDay::leftJoin('sites', 'site_days.site_id', '=', 'sites.id')
            ->where('site_days.site_id', $cityTourId)
            ->select('site_days.*') // Include columns from site_days
            ->get();
        return view('admin.sites_and_monuments_details',$data);
    }
    public function edit_sites_and_monuments($id){
        $data['cities']=city::all();
        $data['citytour'] =site::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageSite::leftJoin('sites', 'gallery_image_sites.site_id', '=', 'sites.id')
        ->where('gallery_image_sites.site_id', $cityTourId)
        ->select('gallery_image_sites.*')
        ->get();

        $data['days'] =SiteDay::leftJoin('sites', 'site_days.site_id', '=', 'sites.id')
            ->where('site_days.site_id', $cityTourId)
            ->select('site_days.*') // Include columns from site_days
            ->get();
        return view('admin.edit_sites_and_monuments',$data);
    }
    public function update_sites_and_monuments(Request $request){
        $request->validate([
        ]);
    
        $cityTour = Site::find($request->id);
    
        if (!$cityTour) {
            return redirect('/manage_sites_and_monuments')->with('error', 'Site and monuments not found');
        }
    
        $dataToUpdate = [
            'name' => $request->name,
            'location' => $request->location,
            'night' => $request->night,
            'des' => $request->des,
            'city' => $request->city,
        ];
    
        if ($request->file('img') !== null) {
            $photo = $request->file('img');
            $photo_name = time() . "-" . $photo->getClientOriginalName();
            $photo_destination = public_path('uploads');
            $photo->move($photo_destination, $photo_name);
            $dataToUpdate['img'] = $photo_name;
        }
    
        $cityTour->update($dataToUpdate);
        // Handle updating existing gallery images
        $imagePathsold = $request->file('imagesold');
        $galleryIds = $request->input('gallery_id', []);
    
        if ($imagePathsold) {
            foreach ($galleryIds as $key => $galleryId) {
                $gimg = GalleryImageSite::find($galleryId);
                if (!$gimg) {
                    return redirect('/manage_sites_and_monuments')->with('error', 'Gallery image not found');
                }
                if (isset($imagePathsold[$key])) {
                    $image = $imagePathsold[$key];
                    $originalName = time() . "-" . $image->getClientOriginalName();
                    $imagePathDestination = public_path('uploads');
                    $image->move($imagePathDestination, $originalName);
                    $gimg->update([
                        'image_path' => $originalName,
                    ]);
                }
            }
        }
    
        //add new imgs
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImageSite::create([
                    'site_id' => $cityTour->id,
                    'image_path' => $originalName,
                ]);
            }
        }
        // Handle updating day titles and descriptions
        $dayTitles = $request->day_title;
        $dayDescriptions = $request->day_des;
        $daysIds = $request->input('days_id', []);
    
        if (count($dayTitles) === count($dayDescriptions) && count($dayTitles) === count($daysIds)) {
            foreach ($daysIds as $key => $daysId) {
                $gday = SiteDay::find($daysId);
    
                if (!$gday) {
                    return redirect('/manage_sites_and_monuments')->with('error', 'Site day not found');
                }
    
                $dayTitle = $dayTitles[$key];
                $dayDescription = $dayDescriptions[$key];
    
                $gday->update([
                    'day_title' => $dayTitle,
                    'day_des' => $dayDescription,
                ]);
            }
        }
    
        return redirect('/manage_sites_and_monuments')->with('savectour', 'Sites and monuments updated successfully');
    }
    public function delete_sites_and_monuments($id){
        $cityTour = site::find($id);
        $cityTour->delete();
        $imagePath = public_path('uploads/' . $cityTour->img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $galleryImages = GalleryImageSite::where('site_id', $cityTour->id)->get();
        if ($galleryImages) {
            foreach ($galleryImages as $image) {
                $imagePath = public_path('uploads/' . $image->image_path);
                if (file_exists($imagePath)) {
                        unlink($imagePath);
                }
                $image->delete();
            }
        }
        $days = SiteDay::where('site_id', $cityTour->id)->get();
            foreach ($days as $day) {
                $day->delete();
            }
        return redirect('manage_sites_and_monuments')->with ('Delete','Sites and Monuments Deleted Successfully');
    }

    public function add_daily_activities(){
        return view('admin.add_daily_activities');
    }
    public function save_daily_activities(request $request){
        $request->validate([
            '*' => 'required',
            'img'=>'required|mimes:jpeg,png,jpg,svg,webp',
        ]);
        $photo = $request->file('img');
        $photo_name =time()."-".$photo->getClientOriginalName();
        $photo_destination=public_path('uploads');
        $photo->move($photo_destination,$photo_name);

        $cityTour = DailyActivities::create([
            'name' => $request->name,
            'location' => $request->location,
            'sight_seeing' => $request->sight_seeing,
            'include' => $request->include,
            'des' => $request->des,
            'img' => $photo_name,
        ]);
        // --------get latest store id------
        $cityTourId = $cityTour->id;
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImageActivities::create([
                    'activities_id' => $cityTour->id,
                    'image_path' => $originalName,
                ]);
            }
        }
        return redirect('/manage_daily_activities')->with('savectour', 'Daily Activities added Successfully');
    }
    public function manage_daily_activities(){
        $data =DailyActivities::orderBy('id', 'desc')->get();
        return view('admin.manage_daily_activities',['citytours'=>$data]);
    }
    public function daily_activities_details($id){
        $data['citytour'] =DailyActivities::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageActivities::leftJoin('daily_activities', 'gallery_image_activities.activities_id', '=', 'daily_activities.id')
        ->where('gallery_image_activities.activities_id', $cityTourId)
        ->select('gallery_image_activities.*')
        ->get();
        return view('admin.daily_activities_details',$data);
    }
    public function edit_daily_activities($id){
        $data['citytour'] =DailyActivities::find($id);
        $cityTourId = $data['citytour']->id;

        $data['galleryImages'] = GalleryImageActivities::leftJoin('daily_activities', 'gallery_image_activities.activities_id', '=', 'daily_activities.id')
        ->where('gallery_image_activities.activities_id', $cityTourId)
        ->select('gallery_image_activities.*')
        ->get();
        return view('admin.edit_daily_activities',$data);
    }
    public function update_daily_activities(Request $request){
        $request->validate([
        ]);

        $cityTour = DailyActivities::find($request->id);

        if (!$cityTour) {
            return redirect('/manage_daily_activities')->with('error', 'Daily Activities not found');
        }

        $dataToUpdate = [
            'name' => $request->name,
            'location' => $request->location,
            'sight_seeing' => $request->sight_seeing,
            'include' => $request->include,
            'des' => $request->des,
        ];

        if ($request->file('img') !== null) {
            $photo = $request->file('img');
            $photo_name = time() . "-" . $photo->getClientOriginalName();
            $photo_destination = public_path('uploads');
            $photo->move($photo_destination, $photo_name);

            $dataToUpdate['img'] = $photo_name;
        }

        $cityTour->update($dataToUpdate);
        $updatedCityTourId = $cityTour->id;

        $imagePathsold = $request->file('imagesold');
        $galleryIds = $request->input('gallery_id', []);

        if ($imagePathsold) {
            foreach ($galleryIds as $key => $galleryId) {
                $gimg = GalleryImageActivities::find($galleryId);
                if (!$gimg) {
                    return redirect('/manage_daily_activities')->with('error', 'Gallery image not found');
                }
                if (isset($imagePathsold[$key])) {
                    $image = $imagePathsold[$key];
                    $originalName = time() . "-" . $image->getClientOriginalName();
                    $imagePathDestination = public_path('uploads');
                    $image->move($imagePathDestination, $originalName);
                    $gimg->update([
                        'image_path' => $originalName,
                    ]);
                }
            }
        }
        //add new imgs
        $imagePaths = $request->file('images');
        if ($imagePaths) {
            foreach ($imagePaths as $image) {
                $originalName = time() . "-" . $image->getClientOriginalName();
                $imagePathDestination = public_path('uploads');
                $image->move($imagePathDestination, $originalName);
                GalleryImageActivities::create([
                    'activities_id' => $cityTour->id,
                    'image_path' => $originalName,
                ]);
            }
        }
        return redirect('/manage_daily_activities')->with('savectour', 'Daily Activities updated successfully');
    }
    public function delete_daily_activities($id){
        $cityTour = DailyActivities::find($id);
        $cityTour->delete();
        $imagePath = public_path('uploads/' . $cityTour->img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $galleryImages = GalleryImageActivities::where('activities_id', $cityTour->id)->get();
        if ($galleryImages) {
            foreach ($galleryImages as $image) {
                $imagePath = public_path('uploads/' . $image->image_path);
                if (file_exists($imagePath)) {
                        unlink($imagePath);
                }
                $image->delete();
            }
        }
        return redirect('manage_daily_activities')->with ('Delete','Daily activity deleted Successfully');
    }
    
    public function add_accomodation(){
        return view('admin.add_accomodation');
    }
    public function addhotel(request $request){
        $request->validate([
            '*'=>'required',
            'tourimg'=>'required|file|mimes:jpeg,png,jpg,svg,webp'
            ]);
            $data =$request->all();
            $photo = $request->file('tourimg');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $data['tourimg'] = $photo_name;
            accomodation::create($data);
            return redirect('manage_accomodation')->with ('success','Accomodation added Successfully');

    }
    public function manage_accomodation(){
        $data =accomodation::orderBy('id', 'desc')->get();
        return view('admin.manage_accomodation',['hotels'=>$data]);
    }
    public function edit_accomodation($id){
        $data['accomodation'] =accomodation::find($id);
        return view('admin.edit_accomodation',$data);
    }
    public function updateaccomodation(request $request){
        if($request->file('tourimg')==NULL){
            $name =$request->name;
            $location =$request->location;
            $price =$request->price;
            $night =$request->night;
            $rooms =$request->rooms;
            $sight_seeing =$request->sight_seeing;
            $include =$request->include;
            $des =$request->des;
            accomodation::find($request->id)->update([
                'name' => $name,
                'location' => $location,
                'price' => $price,
                'night' => $night,
                'rooms' => $rooms,
                'sight_seeing' => $sight_seeing,
                'include' => $include,
                'des' => $des,
            ]);
        }else{
            $photo = $request->file('tourimg');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $name =$request->name;
            $location =$request->location;
            $price =$request->price;
            $night =$request->night;
            $rooms =$request->rooms;
            $sight_seeing =$request->sight_seeing;
            $include =$request->include;
            $des =$request->des;
            accomodation::find($request->id)->update([
                'name' => $name,
                'location' => $location,
                'price' => $price,
                'night' => $night,
                'rooms' => $rooms,
                'sight_seeing' => $sight_seeing,
                'include' => $include,
                'des' => $des,
                'tourimg'=>$photo_name
            ]);
        }
        return redirect('manage_accomodation')->with ('update','Accomodation updated Successfully');
    }
    public function accomodation_detail($id){
        $data['hotel'] =accomodation::find($id);
        return view('admin.accomodation_detail',$data);
    }  
    public function deletehotel($id){
        $data =accomodation::find($id);
        $imagePath = public_path('uploads/' . $data->tourimg);
        $data->delete();
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        return redirect('manage_accomodation')->with ('Delete','Accomodation Deleted Successfully');
    }

    public function add_book(){
        return view('admin.add_book');
    }
    public function addbook(request $request){
        $request->validate([
        '*'=>'required',
        'image'=>'required|file|mimes:jpeg,png,jpg,svg,webp'
        ]);
        $data =$request->all();
        $photo = $request->file('image');
        $photo_name =time()."-".$photo->getClientOriginalName();
        $photo_destination=public_path('uploads');
        $photo->move($photo_destination,$photo_name);
        $data['image'] = $photo_name;
        book::create($data);
        return redirect('manage_books')->with ('success','Book added Successfully');
    }
    public function manage_books(){
        $data=book::orderBy('id', 'desc')->get();
        return view('admin.manage_books',['books'=>$data]);    
    }
    public function deletebook($id){
        $data =book::find($id);
        $imagePath = public_path('uploads/' . $data->image);
        $data->delete();
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        return redirect('manage_books')->with ('Delete','Book Deleted Successfully');
    }
    public function edit_book($id){
        $data['book'] =book::find($id);
        return view('admin.edit_book',$data);
    }
    public function updatebook(request $request){
        if($request->file('image')==NULL){
            $book_name =$request->book_name;
            $author_name =$request->author_name;
            $link =$request->link;
            $description =$request->description;
            book::find($request->id)->update([
                'book_name' => $book_name,
                'author_name' => $author_name,
                'link' => $link,
                'description' => $description,
            ]);
        }else{
            $photo = $request->file('image');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $book_name =$request->book_name;
            $author_name =$request->author_name;
            $link =$request->link;
            $description =$request->description;
            book::find($request->id)->update([
                'book_name' => $book_name,
                'author_name' => $author_name,
                'link' => $link,
                'description' => $description,
                'image' => $photo_name,
            ]);
        }
        return redirect('manage_books')->with ('update','Book updated Successfully');
    }

    public function add_event(){
        return view('admin.add_event');
    }
    public function addevent(request $request){
        $request->validate([
        '*'=>'required',
        ]);
        $data = $request->all();
        event::create($data);
        return redirect('manage_events')->with ('success','Event added Successfully');
    }
    public function manage_events(){
        $data=event::orderBy('id', 'desc')->get();
        return view('admin.manage_events',['events'=>$data]);
    }
    public function edit_event($id){
        $data['event'] =event::find($id);
        return view('admin.edit_event',$data);
    }
    public function deleteevent($id){
        $data =event::find($id);
        $data->delete();
        return redirect('manage_events')->with ('Delete','Event Deleted Successfully');
    }
    public function updateevent(Request $request){
        $data = $request->all();
        $event = event::find($data['id']);
        $event->update($data);
        return redirect('manage_events')->with ('update','Event updated Successfully');
    }

    public function add_cities(){
        return view('admin.add_cities');
    }
    public function savecity(request $request){
        $request->validate([
            '*'  =>'required',
            'Cityname' => 'required|unique:cities',
            'tourimg'   =>'required|file|mimes:jpeg,png,jpg,svg,webp',
        ]);
        $cityname =$request-> Cityname;
        $photo = $request->file('tourimg');
        $photo_name= time()."-".$photo->getClientOriginalName();
        $photo_destination=public_path('uploads');
        $photo->move($photo_destination,$photo_name);
        city::create([
            'Cityname' => $cityname,
            'tourimg' => $photo_name
        ]);
        return redirect('manage_cities')->with ('success','City added Successfully');
    }
    public function updatecity(request $request){
        if($request->file('tourimg')==null){
            $cityname =$request->Cityname;
            city::find($request->id)->update([
                'Cityname' => $cityname,
            ]);
        }else{
            $photo = $request->file('tourimg');
            $photo_name= time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $cityname =$request->Cityname;
            city::find($request->id)->update([
            'Cityname' => $cityname,
            'tourimg' => $photo_name
        ]);
        }
        return redirect('manage_cities')->with ('update','City updated Successfully');

    }
    public function manage_cities(){
        $data = city::orderBy('id', 'desc')->get();
        return view('admin.manage_cities',['cities'=>$data]);
    }
    public function edit_city($id){
        $data['cities'] =city::find($id);
        return view('admin.edit_city',$data);
    }
    public function deletecity($id){
        $data =city::find($id);
        $imagePath = public_path('uploads/' . $data->tourimg);
        $data->delete();
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        citytour::leftJoin('cities', 'citytours.city', '=', 'cities.id')
        ->where('citytours.city', $id)
        ->delete();
        musuem::leftJoin('cities', 'musuems.city', '=', 'cities.id')
        ->where('musuems.city', $id)
        ->delete();
        site::leftJoin('cities', 'sites.city', '=', 'cities.id')
        ->where('sites.city', $id)
        ->delete();
        return redirect('manage_cities')->with ('Delete','City Deleted Successfully');
    }

    public function manage_contact(){
        $data['contact'] = contact::first();
        return view('admin.manage_contact',$data);
    }
    public function contact_save(request $request){
        $record = contact::find(1);
        $request->validate([
            'office_location' => 'required',
            'map_location' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email1' => 'required|email',
            'email2' => 'required|email',
            'tripadvisor' => 'required|url',
            'fb_link' => 'required|url',
            'google' => 'required',
            'yt_link' => 'required|url',
            'insta_link' => 'required|url',
            'des' => 'required',
        ], [
            'google.required' => 'Whatsapp field is required.',
        ]);
        if ($record) {
            $record->update($request->all());
        } else {
            contact::create($request->all());
        }
        return redirect('manage_contact')->with ('success','Contact information saved successfully');
    }

    public function manage_product_categories(){
        $data=categories::orderBy('id', 'desc')->get();
        return view('admin.manage_product_categories',['categories'=>$data]);
    }
    public function add_product_categories(){
        return view('admin.add_product_categories');
    }    
    public function addcategories(request $request){
        $request->validate([
        '*'=>'required',
        ]);
        $data = $request->all();
        categories::create($data);
        return redirect('manage_product_categories')->with ('success','Category added Successfully');
    }
    public function deletecatg($id){
        $data =categories::find($id);
        $data->delete();
        product::leftJoin('categories', 'categories.catg', '=', 'products.p_catg')
        ->where('products.p_catg', $id)
        ->delete();
        return redirect('manage_product_categories')->with ('Delete','Category Deleted Successfully');
    }
    public function edit_product_categories($id){
        $data['category'] =categories::find($id);
        return view('admin.edit_product_categories',$data);
    }   
    public function updatecatg(request $request){
            $catg =$request->catg;
            categories::find($request->id)->update([
            'catg' => $catg
        ]);
        return redirect('manage_product_categories')->with ('update','Category updated Successfully');
    }

    public function manage_products(){
        $data=product::all();
        $data = product::leftJoin('categories', 'products.p_catg', '=', 'categories.id')
        ->select('products.*', 'categories.catg')
        ->orderBy('id', 'desc')->get();
        return view('admin.manage_products',['catagories'=>$data]);
    }
    public function add_products(){
        $data=categories::all();
        return view('admin.add_products',['catagories'=>$data]);
    }
    public function addproducts(request $request){
        $request->validate([
            '*'=>'required',
            'img'=>'required|file|mimes:jpeg,png,jpg,svg,webp'
            ]);
            $data =$request->all();
            $photo = $request->file('img');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $data['img'] = $photo_name;
            product::create($data);
        return redirect('manage_products')->with ('success','Product added Successfully');
    }
    public function edit_products($id){
        $data['catagories']=categories::all();
        $data['product'] =product::find($id);
        return view('admin.edit_products',$data);
    }
    public function deleteproduct($id){
        $data =product::find($id);
        $imagePath = public_path('uploads/' . $data->img);
        $data->delete();
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        return redirect('manage_products')->with ('Delete','Product Deleted Successfully');
    }
    public function updateproduct(request $request){
        if($request->file('img')==NULL){
            $data = $request->except('img');
            product::find($request->id)->update($data);
        }else{
            $data =$request->all();
            $photo = $request->file('img');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $data['img'] = $photo_name;
            product::find($request->id)->update($data);
        }
        return redirect('manage_products')->with ('update','Product updated Successfully');
    }

    public function add_shuttle(){
        return view('admin.add_shuttle');
    }
    public function addshuttle(request $request){
        $request->validate([
            '*'=>'required',
            'img'=>'required|file|mimes:jpeg,png,jpg,svg,webp'
            ]);
            $data =$request->all();
            $photo = $request->file('img');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $data['img'] = $photo_name;
            shuttle::create($data);
        return redirect('manage_shuttle')->with ('success','Airport Shuttle added Successfully');
    }
    public function manage_shuttle(){
        $data=shuttle::all();
        return view('admin.manage_shuttle',['vehicles'=>$data]);
    }
    public function edit_shuttle($id){
        $data['vehicle']=shuttle::find($id);
        return view('admin.edit_shuttle',$data);
    }
    public function deleteshuttle($id){
        $data =shuttle::find($id);
        $imagePath = public_path('uploads/' . $data->img);
        $data->delete();
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        return redirect('manage_shuttle')->with ('Delete','Airport Shuttle Deleted Successfully');
    } 
    public function updateshuttle(request $request){
        if($request->file('img')==NULL){
            $data = $request->except('img');
            shuttle::find($request->id)->update($data);
        }else{
            $data =$request->all();
            $photo = $request->file('img');
            $photo_name =time()."-".$photo->getClientOriginalName();
            $photo_destination=public_path('uploads');
            $photo->move($photo_destination,$photo_name);
            $data['img'] = $photo_name;
            shuttle::find($request->id)->update($data);
        }
        return redirect('manage_shuttle')->with ('update','Airport Shuttle updated Successfully');
    }

    public function manage_why_libertad(){
        $data['libertad'] = libertad::first();
        if ($data['libertad']) {
        $LbId = $data['libertad']->id;
       
        $data['galleryImages'] = GalleryLibertad::leftJoin('libertads', 'gallery_libertads.libertad_id', '=', 'libertads.id')
        ->where('gallery_libertads.libertad_id', $LbId)
        ->select('gallery_libertads.*')
        ->get();
        }
        return view('admin.manage_why_libertad',$data);
    }
    public function save_libertad(request $request){
        $record = libertad::find(1);

        $request->validate([
            'des' => 'required',
        ]);
        if ($record) {
            $record->update([
                'des' => $request->des,
            ]);
            $libertadId = 1;
            $imagePaths = $request->file('images');
            $imagePathsold = $request->file('images_old');
            $galleryIds = $request->input('gallery_id', []);
            //-------update old imgs------
            if ($imagePathsold) {
                foreach ($galleryIds as $key => $galleryId) {
                    $gimg = GalleryLibertad::find($galleryId);
                    if (!$gimg) {
                        return redirect('/manage_musuem')->with('error', 'Gallery image not found');
                    }
                    if (isset($imagePathsold[$key])) {
                        $image = $imagePathsold[$key];
                        $originalName = time() . "-" . $image->getClientOriginalName();
                        $imagePathDestination = public_path('uploads');
                        $image->move($imagePathDestination, $originalName);
                        $gimg->update([
                            'image_path' => $originalName,
                        ]);
                    }
                }
            }
            // -------save new imgs-----
            if ($imagePaths) {
                foreach ($imagePaths as $image) {
                    $originalName = time() . "-" . $image->getClientOriginalName();
                    $imagePathDestination = public_path('uploads');
                    $image->move($imagePathDestination, $originalName);
                    GalleryLibertad::create([
                        'libertad_id' => $libertadId,
                        'image_path' => $originalName,
                    ]);
                }
            }
        }
        else {
            $libertad = libertad::create([
                'des' => $request->des,
            ]);
            // --------get latest store id------
            $libertadId = $libertad->id;
            $imagePaths = $request->file('images');
            if ($imagePaths) {
                foreach ($imagePaths as $image) {
                    $originalName = time() . "-" . $image->getClientOriginalName();
                    $imagePathDestination = public_path('uploads');
                    $image->move($imagePathDestination, $originalName);
                    GalleryLibertad::create([
                        'libertad_id' => $libertad->id,
                        'image_path' => $originalName,
                    ]);
                }
            }
        }
        return redirect('/manage_why_libertad')->with('savectour', 'City tour added Successfully');
    }
    
}