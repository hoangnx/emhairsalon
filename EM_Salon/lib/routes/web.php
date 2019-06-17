<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route to get view Front-end

Route::group(['namespace'=>'Frontend'], function(){
	Route::get('/', 'FrontendController@getIndex');

	Route::get('/service', 'FrontendController@getService');
	
	Route::get('/appointment', 'AppointmentFormController@getAppointmentForm');
	Route::post('/appointment', 'AppointmentFormController@postAppointmentForm');
	//test
	Route::get('/test/{service_id}', 'FrontendController@getAllServiceType');
	
});


Route::get('/blog', function () {
    return view('customer/blog');
});
Route::get('/gallery', function () {
    return view('customer/gallery');
});
Route::get('/quickview', function () {
    return view('customer/quickview');
});

Route::get('/store', function () {
    return view('customer/store');
});
//End Front-end


Route::group(['namespace'=>'Admin'], function(){

	Route::group(['prefix'=>'login','middleware'=>'CheckLogin'], function(){
		//phần login
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin');
	});
//logout
	Route::get('logout', 'LoginController@getLogout');


//trang chu Admin
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogout'], function(){
		Route::get('/home','AdminController@getAdmin');

///
		Route::get('/user', 'UserController@getUser');

		Route::get('/user/add', 'UserController@addUser');
		Route::post('/user/add', 'UserController@postUser');

		Route::get('/user/edit/{id}', 'UserController@getEditUser');
		Route::post('/user/edit/{id}', 'UserController@postEditUser');

		//xóa user
		Route::get('/delete/{id}', 'UserController@getDeleteUser');

//Service
		Route::get('/service', 'ServiceController@getService');
		Route::get('/service/add', 'ServiceController@getAddService');
		Route::post('/service/add', 'ServiceController@postAddService');


		Route::get('/service/edit/{id}', 'ServiceController@getEditService');
		Route::post('/service/edit/{id}', 'ServiceController@postEditService');

		Route::get('/service/delete/{id}', 'ServiceController@getDeleteService');

///Service Category
		Route::get('/service-category', 'ServiceCategoryController@getServiceCategory');
		Route::get('/service-category/add', 'ServiceCategoryController@getAddServiceCategory');
		Route::post('/service-category/add', 'ServiceCategoryController@postAddServiceCategory');


		Route::get('/service-category/edit/{id}', 'ServiceCategoryController@getEditServiceCategory');
		Route::post('/service-category/edit/{id}', 'ServiceCategoryController@postEditServiceCategory');

		Route::get('/service-category/delete/{id}', 'ServiceCategoryController@getDeleteServiceCategory');

///Service Type
		Route::get('/service-type', 'ServiceTypeController@getServiceType');
		
		Route::get('/service-type/add', 'ServiceTypeController@getAddServiceType');
		Route::post('/service-type/add', 'ServiceTypeController@postAddServiceType');


		Route::get('/service-type/edit/{id}', 'ServiceTypeController@getEditServiceType');
		Route::post('/service-type/edit/{id}', 'ServiceTypeController@postEditServiceType');

		Route::get('/service-type/delete/{id}', 'ServiceTypeController@getDeleteServiceType');

//Brand
		Route::get('/brand', 'BrandController@getBrand');

		Route::get('/brand/add', 'BrandController@getAddBrand');
		Route::post('/brand/add', 'BrandController@postAddBrand');

		Route::get('/brand/edit/{id}', 'BrandController@getEditBrand');
		Route::post('/brand/edit/{id}', 'BrandController@postEditBrand');

		Route::get('/brand/delete/{id}', 'BrandController@getDeleteBrand');

//News Categories
		Route::get('news-categories','NewsCategoryController@index');

		Route::post('news-categories','NewsCategoryController@store');

		Route::get('news-categories/{categories}/edit','NewsCategoryController@edit');

		Route::patch('news-categories/{categories}/edit','NewsCategoryController@update');

		Route::delete('news-categories/{categories}','NewsCategoryController@destroy');

//Appointment
		Route::get('/customer', 'CustomerController@getCustomer');

//Appointment
		Route::get('/appointment', 'AppointmentController@getAppointment');
	});

	
});

// Bắt đầu Route của Đức
	// Route::get('/', function () {
	//     return view('user/store');
	// });


//News
	Route::group(['prefix'=>'admin'],function(){

		Route::get('news','NewsController@index');

		Route::post('news','NewsController@store');

		Route::get('news/{news}/edit','NewsController@edit');

		Route::patch('news/{news}/edit','NewsController@update');

		Route::delete('news/{news}','NewsController@destroy');
	});


//Product Type
	Route::group(['prefix'=>'admin'],function(){

		Route::get('product_type','Product_typeController@index');

		Route::post('product_type','Product_typeController@store');

		Route::patch('product_type/{product_type}/edit/','Product_typeController@update');

		Route::delete('product_type/{product_type}','Product_typeController@destroy');
	});


//Product
	Route::group(['prefix'=>'admin'],function(){

		Route::get('product','ProductController@index');

		Route::post('product','ProductController@store');

		Route::get('product/{product}/edit','ProductController@edit');

		Route::patch('product/{product}/edit','ProductController@update');

		Route::delete('product/{product}','ProductController@destroy');
	});


//user
	//store
	Route::get('user/store','PageController@store');

	//blog
	Route::get('user/blog/{id}','PageController@blog');

	//pagination ajax
	/*Route::get('user/blog/page/{id}','PageController@get_home');*/

	Route::post('user/blog/{1}','PageController@ajax_blog');
	// Kết thúc Route của Đức


