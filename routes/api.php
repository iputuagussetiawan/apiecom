<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SliderController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Get Visitor 
Route::get('/getvisitor', [VisitorController::class, 'GetVisitorDetails']);
// Contact Page Route
Route::post('/postcontact', [ContactController::class, 'PostContactDetails']);
//Site Info
Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteinfo']);
//Category Controller
Route::get('/allcategory', [CategoryController::class, 'AllCategory']);
//Product List Controller
Route::get('/productlistbyremark/{remark}', [ProductListController::class, 'ProductListByRemark']);
Route::get('/productlistbycategory/{category}', [ProductListController::class, 'ProductListByCategory']);
Route::get('/productlistbysubcategory/{category}/{subcategory}', [ProductListController::class, 'ProductListBySubCategory']);

// Slider Route
Route::get('/allslider', [SliderController::class, 'AllSlider']);
