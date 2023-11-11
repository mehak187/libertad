<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\userController;
use App\http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(userController::class)->group(function(){
    Route::get('airport','airport');
    Route::get('alexandriatour','alexandriatour');
    Route::get('luxortour','luxortour');
    // Route::get('bahariya','bahariya');
    Route::get('behariyatour','behariyatour');
    Route::get('book','book');
    Route::get('cairo','cairo');
    Route::get('cart','cart');
    Route::get('alexandria','alexandria');
    Route::get('contact','contact');
    Route::get('dailytours','dailytours');
    Route::get('fayoum','fayoum');
    Route::get('fayoumtour','fayoumtour');
    Route::get('gizafullday','gizafullday');
    Route::get('egyptianmeuseum','egyptianmeuseum');
    Route::get('gizatours','gizatours');
    // Route::get('meuseum','meuseum');
    Route::get('home','home');
    Route::get('hotels','hotels');
    Route::get('/','index');
    Route::get('libertad','libertad');
    Route::get('aswan','aswan');
    Route::get('museum1','museum1');
    Route::get('luxorcruise','luxorcruise');
    Route::get('aswancruise','aswancruise');
    Route::get('notification','notification');
    Route::get('pakagebeharya','pakagebeharya');
    Route::get('pakagecatacombs','pakagecatacombs');
    Route::get('pakagefayoum','pakagefayoum');
    Route::get('pakagefullday','pakagefullday');
    Route::get('pakagegiza','pakagegiza');
    Route::get('pakagesiwa','pakagesiwa');
    Route::get('pakages','pakages');
    Route::get('productsandtools','productsandtools');
    Route::get('accommodation',  'accommodation');
    Route::get('sites','sites');
    Route::get('sitesandmonoments','sitesandmonoments');
    Route::get('siwaoasis','siwaoasis');
    Route::get('siwatour','siwatour');
    Route::get('testimonial','testimonial');
    Route::get('tourdetail','tourdetail');
    Route::get('tour1','tour1');
    Route::get('tours','tours');
    Route::get('travelyourway','travelyourway');
    Route::get('travelyourway2','travelyourway2');
    Route::get('vehicle','vehicle');
    Route::get('accomodation_detail1/{id}','accomodation_detail1');
    Route::get('cities_detail/{id}','cities_detail');
    Route::get('city_tour_det/{id}','city_tour_det');
    Route::get('musuem_det/{id}','musuem_det');

    Route::get('dailyactivites','dailyactivites');
    Route::get('daily_activities_det/{id}','daily_activities_det');
});

Route::controller(adminController::class)->group(function(){
    Route::get('adminhome','adminhome');
    Route::get('manage_libertad_reviews','manage_libertad_reviews');
    
    Route::get('manage_city_tours','manage_city_tours');
    Route::post('save_citytour','save_citytour');
    Route::get('add_city_tours','add_city_tours');
    Route::get('edit_city_tours/{id}','edit_city_tours');
    Route::get('city_tour_details/{id}','city_tour_details');
    Route::get('delete_city_tour/{id}','delete_city_tour');
    Route::post('update_city_tour','update_city_tour');

    Route::get('manage_daily_activities','manage_daily_activities');
    Route::post('save_daily_activities','save_daily_activities');
    Route::get('add_daily_activities','add_daily_activities');
    Route::get('edit_daily_activities/{id}','edit_daily_activities');
    Route::get('daily_activities_details/{id}','daily_activities_details');
    Route::get('delete_daily_activities/{id}','delete_daily_activities');
    Route::post('update_daily_activities','update_daily_activities');

    Route::get('manage_musuem','manage_musuem');
    Route::post('save_musuem','save_musuem');
    Route::get('add_musuem','add_musuem');
    Route::get('edit_musuem/{id}','edit_musuem');
    Route::post('update_musuem','update_musuem');
    Route::get('musuem_detail/{id}','musuem_detail');
    Route::get('delete_musuem/{id}','delete_musuem');

    Route::get('add_special_tours','add_special_tours');
    Route::get('manage_special_tours','manage_special_tours');
    Route::get('special_tour_details','special_tour_details');
    Route::get('edit_special_tours','edit_special_tours');

    Route::get('manage_accomodation','manage_accomodation');
    Route::get('add_accomodation','add_accomodation');
    Route::post('addhotel','addhotel');
    Route::get('deletehotel/{id}','deletehotel');
    Route::post('updateaccomodation', 'updateaccomodation');
    Route::get('edit_accomodation/{id}','edit_accomodation');
    Route::get('accomodation_detail/{id}','accomodation_detail');

    Route::get('manage_books','manage_books');
    Route::get('add_book','add_book');
    Route::get('edit_book/{id}','edit_book');
    Route::post('addbook','addbook');
    Route::get('deletebook/{id}','deletebook');
    Route::post('updatebook',  'updatebook');
    Route::get('manage_events','manage_events');

    Route::get('add_event','add_event');
    Route::post('addevent','addevent');
    Route::get('deleteevent/{id}','deleteevent');
    Route::get('edit_event/{id}','edit_event');
    Route::post('updateevent',  'updateevent');

    Route::get('add_cities','add_cities');
    Route::get('manage_cities','manage_cities');
    Route::get('edit_city/{id}','edit_city');
    Route::post('updatecity',  'updatecity');
    Route::post('savecity','savecity');
    Route::get('citydetail','citydetail');
    Route::get('deletecity/{id}','deletecity');

    Route::get('manage_contact','manage_contact');
    Route::post('contact_save','contact_save');

    Route::get('manage_product_categories','manage_product_categories');
    Route::post('addcategories','addcategories');
    Route::get('add_product_categories','add_product_categories');
    Route::get('edit_product_categories/{id}','edit_product_categories');
    Route::post('updatecatg',  'updatecatg');
    Route::get('deletecatg/{id}','deletecatg');

    Route::get('manage_products','manage_products');
    Route::get('add_products','add_products');
    Route::get('edit_products','edit_products');
});

