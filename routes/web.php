<?php

use Illuminate\Support\Facades\Route;

//Admin-Side
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ModelColorController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\DashboardController;	
use App\Http\Controllers\ModelController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ShopServiceController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ShopPackageController;
use App\Http\Controllers\InsuranceCompanyController;
use App\Http\Controllers\InsuranceCompanyInqureController;
use App\Http\Controllers\InsuranceCompanyPlanController;
use App\Http\Controllers\TestimonialsController;
//Admin-Side



// Front Side 

	// Login Page
	use App\Http\Controllers\userloginController;
	// Login Page

	// Registration 
	use App\Http\Controllers\UserRegistrationController;
	// Registration 

	// Home Page
	use App\Http\Controllers\UserIndexController;
	// Home Page

	// About Page
	use App\Http\Controllers\UserAboutController;
	// About Page

	// Shop List Page
	use App\Http\Controllers\UserShopListController;
	// Shop List Page

	
	// Service List Page
	use App\Http\Controllers\UserServiceListController;
	// Service List Page

	// Contact Us
	use App\Http\Controllers\UserContactUsController;
	// Contact Us
	
	// Checkout
	use App\Http\Controllers\UserCheckoutController;
	// Checkout

	//MyProfile
	use App\Http\Controllers\UserProfileController;
	//MyProfile

	// Change Password
	use App\Http\Controllers\UserChangePasswordController;
	// Change Password

	// Testimonial
	use App\Http\Controllers\UserTestimonialsController;
	// Testimonial
	
	// InsuranceCompany
	use App\Http\Controllers\UserInsuranceCompanyController;	
	// InsuranceCompany

	// Buy Car
	use App\Http\Controllers\UserBuyCarController;
	// Buy Car

	//Location
	use App\Http\Controllers\UserLocationCotroller;
	//Location


// Front Side 



// Shopkeeper-Side
	
	// Login
		use App\Http\Controllers\ShopkeeperLoginController;
	// Login

	// Registration
		use App\Http\Controllers\ShopkeeperRegistrationController;		
	// Registration

	// Dashboard
		use App\Http\Controllers\ShopkeeperDashboardController;
	// Dashboard

	// ChangePassword
		use App\Http\Controllers\ShopkeeperChangePasswordController;
	// ChangePassword

	// MyProfile
		use App\Http\Controllers\ShopkeeperMyProfileController;
	// MyProfile

	// Service
		use App\Http\Controllers\ShopkeeperServicesController;
	// Service

	//Pending Order
		use App\Http\Controllers\ShopkeeperPendingOrderController;
	//Pending Order

	// ProcessingOrder
		use App\Http\Controllers\ShopkeeperProcessingOrderController;
	// ProcessingOrder

	// CompleteOrder
		use App\Http\Controllers\ShopkeeperCompleteOrderController;
	// CompleteOrder

	// Shop Package
		use App\Http\Controllers\ShopkeeperPurchasePackageController;
	// Shop Package

	// Feedback
		use App\Http\Controllers\ShopkeeperFeedbackController;
	// Feedback

// Shopkeeper Side









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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', [LoginController::class,'loadlogin']);
Route::get('/logout', [LoginController::class,'logout']);
Route::post('/checklogin', [LoginController::class,'checklogin']);

Route::get('/ChangePassword',[PasswordController::class,'changeadminpassword']);
Route::post('/ChangePassword/update',[PasswordController::class,'updateadminpassword']);

Route::get('/AdminProfile',[AdminProfileController::class,'viewadminprofile']);
Route::post('/AdminProfile/Update',[AdminProfileController::class,'editadminprofile']);

 
Route::get('/Dashboard', [DashboardController::class,'loaddashboard']);


// State

Route::get('/State/view', [StateController::class,'viewstate']);
Route::get('/State/add', [StateController::class,'addstate']);
Route::post('/State/insert',[StateController::class,'insertState']);
Route::post('/State/delete',[StateController::class,'deleteState']);
Route::get('/State/edit/{id}', [StateController::class,'editstate']); //{id} is a Regular Expression Constraints which use for displaying ID of data which have to edit
Route::post('/State/update',[StateController::class,'updatestate']);

// State


// City

Route::get('/City/view',[CityController::class,'viewcity']);
Route::get('/City/add',[CityController::class,'addcity']);
Route::post('/City/insert',[CityController::class,'insertCity']);
Route::post('/City/delete',[CityController::class,'deleteCity']);
Route::get('/City/edit/{id}',[CityController::class,'editcity']); //{id} is a Regular Expression Constraints which use for displaying ID of data which have to edit
Route::post('/City/update',[CityController::class,'updateCity']);

// City


// Service

Route::get('/Service/view',[ServicesController::class,'viewservice']);
Route::get('/Service/add',[ServicesController::class,'addservice']);
Route::post('/Service/insert',[ServicesController::class,'insertService']);
Route::post('/Service/delete',[ServicesController::class,'deleteService']);
Route::get('/Service/edit/{id}',[ServicesController::class,'editservice']);
Route::post('/Service/update',[ServicesController::class,'updateservice']);

// Service


// Vechiles

	// Model
	Route::get('/Model/view',[ModelController::class,'viewmodel']);
	Route::get('/Model/add',[ModelController::class,'addmodel']);
	Route::post('/Model/insert',[ModelController::class,'insertModel']);
	Route::post('/Model/delete',[ModelController::class,'deleteModel']);
	Route::get('/Model/edit/{id}',[ModelController::class,'editModel']);
	Route::post('/Model/update',[ModelController::class,'updateModel']);
	// Model



	// Company
	Route::get('/Company/view',[CompanyController::class,'viewcompany']);
	Route::get('/Company/add',[CompanyController::class,'addcompany']);
	Route::post('/Company/insert',[CompanyController::class,'insertCompany']);
	Route::post('/Company/delete',[CompanyController::class,'deleteCompany']);
	Route::get('/Company/edit/{id}',[CompanyController::class,'editCompany']);
	Route::post('/Company/update',[CompanyController::class,'updateCompany']);
	// Company

	

	// Attribute
	Route::get('/Attribute/view',[AttributeController::class,'viewattribute']);
	Route::get('/Attribute/add',[AttributeController::class,'addattribute']);
	Route::post('/Attribute/insert',[AttributeController::class,'insertattribute']);
	Route::post('/Attribute/delete',[AttributeController::class,'deleteattribute']);
	Route::get('/Attribute/edit/{id}',[AttributeController::class,'editattribute']);
	Route::post('/Attribute/update',[AttributeController::class,'updateattribute']);	
	// Attribute
	

	// Price
	Route::get('/Prices/view',[PriceController::class,'viewprice']);
	Route::get('/Prices/add',[PriceController::class,'addprice']);
	Route::post('/Prices/insert',[PriceController::class,'insertprice']);
	Route::post('/Prices/delete',[PriceController::class,'deleteprice']);
	Route::get('/Prices/edit/{id}',[PriceController::class,'editprice']);
	Route::post('/Prices/update',[PriceController::class,'updateprice']);
	// Price


	// Color
	Route::get('/ModelColor/view',[ModelColorController::class,'viewmodelcolor']);
	Route::get('/ModelColor/add',[ModelColorController::class,'addmodelcolor']);
	Route::post('/ModelColor/insert',[ModelColorController::class,'insertmodelcolor']);
	Route::post('/ModelColor/delete',[ModelColorController::class,'deletemodelcolor']);
	Route::get('/ModelColor/edit/{id}',[ModelColorController::class,'editmodelcolor']);
	Route::post('/ModelColor/update',[ModelColorController::class,'updatemodelcolor']);
	// Color


// Vechiles


// Package
Route::get('/Package/view',[PackageController::class,'viewpackage']);
Route::get('/Package/add',[PackageController::class,'addpackage']);
Route::post('/Package/insert',[PackageController::class,'insertPackage']);
Route::post('/Package/delete',[PackageController::class,'deletePackage']);
Route::get('/Package/edit/{id}',[PackageController::class,'editpackage']);
Route::post('/Package/update',[PackageController::class,'updatePackage']);
// Package


// User
Route::get('/User', [AdminUserController::class,'loaduser']);
Route::post('/User/delete',[AdminUserController::class,'deleteUser']);
// User


// SubAdmin
Route::get('/SubAdmin/view',[SubAdminController::class,'viewsubadmin']);
Route::get('/SubAdmin/add',[SubAdminController::class,'addsubadmin']);
Route::post('/SubAdmin/insert',[SubAdminController::class,'insertAdmin']);
Route::post('/SubAdmin/delete',[SubAdminController::class,'deleteAdmin']);
Route::get('/SubAdmin/edit/{id}',[SubAdminController::class,'editsubadmin']);
Route::post('/SubAdmin/update',[SubAdminController::class,'updateSubAdmin']);
// SubAdmin


// Add Shop
Route::get('/Shop/add',[ShopController::class,'addshop']);
Route::post('/Shop/insert',[ShopController::class,'insertShop']);
// Add Shop


// Shop Package
Route::get('/ShopPackage/view',[ShopPackageController::class,'viewshoppackage']);
Route::get('/ShopPackage/add',[ShopPackageController::class,'addshoppackage']);
Route::post('/ShopPackage/insert',[ShopPackageController::class,'insertShopPackage']);
Route::post('/ShopPackage/delete',[ShopPackageController::class,'deleteShopPackage']);
Route::get('/ShopPackage/edit/{id}',[ShopPackageController::class,'editshoppackage']);
Route::post('/ShopPackage/update',[ShopPackageController::class,'updateshoppackage']);
// Shop Package



// Pending Shop
Route::get('/PendingShop/view',[ShopController::class,'viewpendingshop']);
Route::post('/PendingShop/delete',[ShopController::class,'deletePendingShop']);
Route::get('/PendingShop/edit/{id}',[ShopController::class,'editPendingShop']);
Route::post('/PendingShop/update',[ShopController::class,'updatePendingShop']);
// Pending Shop


// Approve Shop
Route::get('/ApproveShop/view',[ShopController::class,'viewapproveshop']);
Route::post('/ApproveShop/delete',[ShopController::class,'deleteApproveShop']);
Route::get('/ApproveShop/edit/{id}',[ShopController::class,'editApproveShop']);
Route::post('/ApproveShop/update',[ShopController::class,'updateApproveShop']);	
// Approve Shop


// Rejected Shop
Route::get('/RejectedShop/view',[ShopController::class,'viewrejectedshop']);
Route::post('/RejectedShop/delete',[ShopController::class,'deleteRejectedShop']);
Route::get('/RejectedShop/edit/{id}',[ShopController::class,'editRejectedShop']); 
Route::post('/RejectedShop/update',[ShopController::class,'updateRejectedShop']);
// Rejected Shop


// Shop Service
Route::get('/ShopService/view',[ShopServiceController::class,'viewshopservices']);
Route::get('/ShopService/add',[ShopServiceController::class,'addshopservices']);
Route::post('/ShopService/insert',[ShopServiceController::class,'insertShopService']);
Route::post('/ShopService/delete',[ShopServiceController::class,'deleteShopService']);
Route::get('/ShopService/edit/{id}',[ShopServiceController::class,'editshopservices']);
Route::post('/ShopService/update',[ShopServiceController::class,'updateshopservice']);
// Shop Service




// Orders
Route::get('/Order', [OrderController::class,'loadorder']);
Route::post('/Order/delete', [OrderController::class,'deleteorder']);
// Orders



// Details
Route::get('/Details', [DetailsController::class,'loaddetail']);
Route::post('/Details/delete', [DetailsController::class,'deletedetail']);
// Details



// Log
Route::get('/Log', [LogController::class,'loadlog']);
Route::post('/Log/delete', [LogController::class,'deletelog']);
// Log




// Insurance Company
Route::get('/InsuranceCompany/view',[InsuranceCompanyController::class,'viewinsurancecompany']);
Route::get('/InsuranceCompany/add',[InsuranceCompanyController::class,'addinsurancecompany']);
Route::post('/InsuranceCompany/insert',[InsuranceCompanyController::class,'insertInsuranceCompany']);
Route::post('/InsuranceCompany/delete',[InsuranceCompanyController::class,'deleteInsuranceCompany']);
Route::get('/InsuranceCompany/edit/{id}',[InsuranceCompanyController::class,'editInsuranceCompany']);
Route::post('/InsuranceCompany/update',[InsuranceCompanyController::class,'updateInsuranceCompany']);

// Insurance Company



// Insurance Plans
Route::get('/InsuranceCompanyPlan/view',[InsuranceCompanyPlanController::class,'viewinsuranceplan']);
Route::get('/InsuranceCompanyPlan/add',[InsuranceCompanyPlanController::class,'addinsuranceplan']);
Route::post('/InsuranceCompanyPlan/insert',[InsuranceCompanyPlanController::class,'insertinsuranceplan']);
Route::post('/InsuranceCompanyPlan/delete',[InsuranceCompanyPlanController::class,'deleteinsuranceplan']);

Route::get('/InsuranceCompanyPlan/edit/{id}',[InsuranceCompanyPlanController::class,'editinsuranceplan']);
Route::post('/InsuranceCompanyPlan/update',[InsuranceCompanyPlanController::class,'updateinsuranceplan']);

// Insurance Plans



// Insurance Inqure
Route::get('/InsuranceCompanyInqure/view',[InsuranceCompanyInqureController::class,'viewinsuranceinqure']);
Route::post('/InsuranceCompanyInqure/delete',[InsuranceCompanyInqureController::class,'deleteinsuranceinqure']);
// Insurance Inqure



// Testimonials
Route::get('/Testimonial/view', [TestimonialsController::class,'viewtestimonial']);
Route::get('/Testimonial/add', [TestimonialsController::class,'addtestimonial']);
Route::post('/Testimonial/insert', [TestimonialsController::class,'insertTestimonial']);
Route::post('/Testimonial/delete',[TestimonialsController::class,'deletetestimonial']);
Route::get('/Testimonial/edit/{id}', [TestimonialsController::class,'edittestimonial']);
Route::post('/Testimonial/update', [TestimonialsController::class,'updatettestimonial']);
// Testimonials



// Front Side 

	// Login 
Route::get('/UserLogin',[userloginController::class,'viewlogin']);
Route::get('/UserLogout', [userloginController::class,'Logout']);
Route::post('/UserCheckLogin',[userloginController::class,'checkuserlogin']);
// Route::get('/adduser',[userloginController::class,'adduser']);
	// Login 

	// Registration
Route::post('/Registration',[UserRegistrationController::class,'insertuser']);

Route::get('/UserOTPpage',[UserRegistrationController::class,'insertotp']);

// Route::get('/UserOTP',[UserRegistrationController::class,'insertotp']);
Route::post('/Registration/otp',[UserRegistrationController::class,'otpcheck']);
	// Registration
	
	// Home 
Route::get('/index',[UserIndexController::class,'viewindex']);
	// Home 
	
	// About 
Route::get('/About',[UserAboutController::class,'viewabout']);
	// About 

	// Shop  
Route::get('/ShopList',[UserShopListController::class,'viewshoplist']);
Route::get('/ShopPortfolio/{id}',[UserShopListController::class,'viewshopportfolio']);
Route::post('/Shop-order/CreateOrder/{id}',[UserShopListController::class,'viewshopserviceorder']);
Route::post('/Shop-order/insertorder',[UserShopListController::class,'insertorder']);
	// Shop  

	// Service  
Route::get('/ServiceList',[UserServiceListController::class,'viewservicelist']);
Route::get('/DetailServiceList/{id}',[UserServiceListController::class,'viewservicelistdetail']);	

	// Service  

	// Contact Us
Route::get('/ContactUs',[UserContactUsController::class,'viewcontactus']);
Route::post('/ContactUs/update',[UserContactUsController::class,'insertcontactus']);
	// Contact Us

	// Checkout
Route::get('/Checkout',[UserCheckoutController::class,'viewcheckout']);
	// Checkout

	// MyProfile
Route::get('/MyProfile',[UserProfileController::class,'viewprofile']);
Route::post('/UserProfileUpdate',[UserProfileController::class,'updateprofile']);
	// MyProfile
	
	// Change Password
Route::get('/UserChangePassword',[UserChangePasswordController::class,'viewchangepassword']);
Route::post('/UserChangePassword/Update',[UserChangePasswordController::class,'updateuserpassword']);
	// Change Password

	// Testimonial
Route::get('/Testimonials',[UserTestimonialsController::class,'viewtestimonial']);
Route::get('/Feedback',[UserTestimonialsController::class,'viewfeedback']);
Route::post('/Feedback/insert',[UserTestimonialsController::class,'interfeedback']);
	// Testimonial

	// Insurance Company
Route::get('/InsuranceCompany',[UserInsuranceCompanyController::class,'viewinsuranceco']);
Route::get('/InsuranceCompanyDetails/{id}',[UserInsuranceCompanyController::class,'viewinsurancecodetail']);
Route::get('/InsuranceCompany-Details/plan',[UserInsuranceCompanyController::class,'viewplan']);
Route::get('/InsuranceCompany/plan/inqury',[UserInsuranceCompanyController::class,'viewcompanyinqurey/{id}']);
Route::get('/InsuranceCompany/plan/inqury-submited',[UserInsuranceCompanyController::class,'viewcompanyinqurey']);

	// Insurance Company

	// Buy Car
Route::get('/CarCompany',[UserBuyCarController::class,'viewCarCompany']);
Route::get('/BuyCar/{id}',[UserBuyCarController::class,'viewbuycar']);
Route::get('/DetailBuyCar/{id}',[UserBuyCarController::class,'viewdetailbuycar']);
	// Buy Car

	// Location
Route::get('/Location',[UserLocationCotroller::class,'viewlocation']);
Route::get('/LocationOrder/{lat}/{long}/{shopn}',[UserLocationCotroller::class,'vieworder']);
Route::post('/Location/submit/{id}',[UserLocationCotroller::class,'insertemgorder']);
	// Location

 

// Front Side 



//Shoperkeeper

	// Login
Route::get('/ShopkeeperLogin',[ShopkeeperLoginController::class,'viewloginform']);
Route::post('/Checkloginform',[ShopkeeperLoginController::class,'checkshopkeeperlogin']);
Route::get('/ShopkeeperLogout',[ShopkeeperLoginController::class,'logoutshopkeeper']);

Route::get('/ShopkeeperRegistration',[ShopkeeperRegistrationController::class,'viewregistration']);
Route::post('/ShopkeeperRegistration/insert',[ShopkeeperRegistrationController::class,'insertshopkeeper']);
	// Login

	// Dashboard
Route::get('/ShopkeeperDashboard',[ShopkeeperDashboardController::class,'viewdashboard']);
	// Dashboard

	//ChangePassword
Route::get('/ShopkeeperChangePassword',[ShopkeeperChangePasswordController::class,'viewchangepassword']);
Route::post('/ShopkeeperChangePassword/update',[ShopkeeperChangePasswordController::class,'updatepassword']);
	//ChangePassword

	// MyProfile
Route::get('/ShopkeeperProfile',[ShopkeeperMyProfileController::class,'viewshopkeeperprofile']);
Route::post('/ShopkeeperProfile/Update',[ShopkeeperMyProfileController::class,'editprofile']);
	// MyProfile


	// OrderRequest
// Route::get('/ShopkeeperOrderRequest',[ShopkeeperOrderRequestController::class,'viewrequest']);
	// OrderRequest
	
	//PendingOrder
Route::get('/ShopkeeperPendingOrder',[ShopkeeperPendingOrderController::class,'viewpendingorder']);
Route::get('/ShopkeeperOrderDetail/{id}',[ShopkeeperPendingOrderController::class,'viewdetailorder']);
Route::post('/ShopkeeperOrderDetail/update',[ShopkeeperPendingOrderController::class,'changestatus']);
Route::get('/ShopkeeperOrderRejectedDetail/{id}',[ShopkeeperPendingOrderController::class,'viewrejectorder']); 
	//PendingOrder
	
	// ProcessingOrder
Route::get('/ShopkeeperProcessingOrder',[ShopkeeperProcessingOrderController::class,'viewprocessingorder']);
Route::get('/ShopkeeperProcessOrderDetail/{id}',[ShopkeeperProcessingOrderController::class,'viewprocessdetailorder']);
Route::post('/ShopkeeperProcessOrderDetail/Update',[ShopkeeperProcessingOrderController::class,'changeupdatestatus']);
	// ProcessingOrder

	// CompleteOrder
Route::get('/ShopkeeperCompleteOrder',[ShopkeeperCompleteOrderController::class,'viewcompleteorder']);
Route::get('/ShopkeeperCompleteOrderDetail/{id}',[ShopkeeperCompleteOrderController::class,'viewdetailcompleteorder']);

	// CompleteOrder

	// Shop Package
Route::get('/PurchaseShopPackage',[ShopkeeperPurchasePackageController::class,'viewpurachsepackage']);
	// Shop Package

	// Feedback
Route::get('/ShopkeeperTestimonial',[ShopkeeperFeedbackController::class,'viewfeedback']);
	// Feedback

	// Service
Route::get('/ShopkeeperServices',[ShopkeeperServicesController::class,'viewshopkeeperservices']);
Route::get('/ShopkeeperSerices/add',[ShopkeeperServicesController::class,'addshopkeeperservice']);
Route::post('/ShopkeeperService/insert',[ShopkeeperServicesController::class,'insertshopkeeperservice']);
Route::get('/ShopkeeperSerices/edit/{id}',[ShopkeeperServicesController::class,'editshopkeeperservice']);
Route::post('/ShopkeeperSerices/delete/{id}',[ShopkeeperServicesController::class,'deleteshopkeeperservice']);
	// Service
	
//Shopkeeper
