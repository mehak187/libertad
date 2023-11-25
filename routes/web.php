<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;



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
// Route::group(['middleware' => ['UserMiddleware']], function () {
    Route::controller(userController::class)->group(function(){
        Route::get('airport','airport');
        Route::get('book','book');
        Route::get('cart','cart');
        Route::get('contact','contact');
        Route::get('dailyactivites','dailyactivites');
        Route::get('daily_activities_det/{id}','daily_activities_det');
        Route::get('home-libertad','home');
        Route::get('hotels','hotels');
        Route::get('/','index');
        Route::get('museum1','museum1');
        Route::get('notification','notification');
        Route::get('pakage','pakage');
        Route::get('pakages','pakages');
        Route::get('productsandtools','productsandtools');
        Route::get('accommodation',  'accommodation');
        Route::get('sites','sites');
        Route::get('sitesandmonoments/{id}','sitesandmonoments');
        Route::get('testimonial','testimonial');
        Route::get('tourdetail/{id}','tourdetail');
        Route::get('tour1','tour1');
        Route::get('tours','tours');
        Route::get('travelyourway','travelyourway');
        Route::get('travelyourway2','travelyourway2');
        Route::get('vehicle','vehicle');
        Route::get('accomodation_detail1/{id}','accomodation_detail1');
        Route::get('cities_detail/{id}','cities_detail');
        Route::get('city_tour_det/{id}','city_tour_det');
        Route::get('musuem_det/{id}','musuem_det');
        Route::get('social','social');
        Route::get('libertad','libertad');
        Route::post('savereview','savereview');
        Route::post('save_trip','save_trip');
        Route::post('stourreview','stourreview');
        Route::post('citytourreview','citytourreview');
        Route::post('musuem_review','musuem_review');
        Route::post('site_review','site_review');
        Route::post('activities_review','activities_review');
        Route::post('acc_review','acc_review');
        Route::post('book1','book1');
        Route::post('savebooking','savebooking');
        Route::post('check','check');
    });
// });

Route::group(['middleware' => ['AdminMiddleware']], function () {
    Route::controller(adminController::class)->group(function(){
        Route::get('adminhome','adminhome');
        Route::get('manage_libertad_reviews','manage_libertad_reviews');
        Route::get('delete_reviews/{id}','delete_reviews');
        
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

        Route::get('manage_sites_and_monuments','manage_sites_and_monuments');
        Route::post('save_sites_and_monuments','save_sites_and_monuments');
        Route::get('add_sites_and_monuments','add_sites_and_monuments');
        Route::get('edit_sites_and_monuments/{id}','edit_sites_and_monuments');
        Route::get('sites_and_monuments_details/{id}','sites_and_monuments_details');
        Route::get('delete_sites_and_monuments/{id}','delete_sites_and_monuments');
        Route::post('update_sites_and_monuments','update_sites_and_monuments');

        Route::get('manage_musuem','manage_musuem');
        Route::post('save_musuem','save_musuem');
        Route::get('add_musuem','add_musuem');
        Route::get('edit_musuem/{id}','edit_musuem');
        Route::post('update_musuem','update_musuem');
        Route::get('musuem_detail/{id}','musuem_detail');
        Route::get('delete_musuem/{id}','delete_musuem');

        Route::get('add_special_tours','add_special_tours');
        Route::post('addstours','addstours');
        Route::get('manage_special_tours','manage_special_tours');
        Route::get('special_tour_details/{id}','special_tour_details');
        Route::get('edit_special_tours/{id}','edit_special_tours');
        Route::get('deletestour/{id}','deletestour');
        Route::post('updatestour','updatestour');

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
        Route::post('addproducts','addproducts');
        Route::get('add_products','add_products');
        Route::get('edit_products/{id}','edit_products');
        Route::get('deleteproduct/{id}','deleteproduct');
        Route::post('updateproduct',  'updateproduct');
        
        Route::get('manage_shuttle','manage_shuttle'); 
        Route::post('addshuttle','addshuttle');
        Route::get('add_shuttle','add_shuttle');
        Route::get('edit_shuttle/{id}','edit_shuttle');
        Route::get('deleteshuttle/{id}','deleteshuttle');
        Route::post('updateshuttle',  'updateshuttle');

        Route::get('manage_city_tours','manage_city_tours');
        Route::post('save_citytour','save_citytour');
        Route::get('add_city_tours','add_city_tours');
        Route::get('edit_city_tours/{id}','edit_city_tours');
        Route::get('city_tour_details/{id}','city_tour_details');
        Route::get('delete_city_tour/{id}','delete_city_tour');
        Route::post('update_city_tour','update_city_tour');

        Route::get('manage_why_libertad','manage_why_libertad');
        Route::post('save_libertad','save_libertad');

    });
});

// Auth::routes();
Auth::routes(['verify' => true]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});