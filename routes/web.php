<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\customer;
use App\Models\Requestorder;
use App\Models\User;
use App\Models\vendor;
use App\Models\Billentry;

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
// to get csv data from a table change code to a function in controller or keep in route but to use  customer dump  
// thanks to the forum contributers here (https://stackoverflow.com/questions/26146719/use-laravel-to-download-table-as-csv)
   
    //  $posts = Post::paginate(10);

    Route::get('/contacts', function (Request $request) {
        // $contacts = User::when($request->term, function ($query, $term) {
            $contacts = customer:: when($request->term, function ($query, $term) {
            $query->where(function ($query) use ($term) {
                // $query->where('shippingmark', 'like', "%{$term}%")->orWhere('companyname', 'like', "%{$term}%");
                $query->where('shippingmark', 'like', "%{$term}%");
            });
        })->get()->paginate(5);
    
        return view('contacts', [
            'contacts' => $contacts,
        ]);
    });


    Route::get('/all-tweets-csv', function () {
    $table = customer::all();
    $filename = "users.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('id','shippingmark','nickname','firstname','lastname', 'companyname', 'registration','address','road','city','country','zipcode','telephone', 'mobile', 'email1','email1','socialaccounts','created_at'));

    foreach($table as $row) {
        // fputcsv($handle, array( $row['shippingmark'], $row['companyname'], $row['telephone'], $row['mobile'], $row['email1']));
    
        fputcsv($handle, array($row['id'], $row['shippingmark'], $row['nickname'], $row['firstname'], $row['lastname'], $row['companyname'], $row['registration'],$row['address'],$row['road'],$row['city'],$row['country'],$row['zipcode'],$row['telephone'], $row['mobile'], $row['email1'], $row['email1'], $row['socialaccounts'], $row['created_at']));
    
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    
    return Response::download($filename, 'users.csv', $headers);
});



Route::get('/all-tweets1-csv', function () {
    $table = requestorder::all();
    $filename = "users1.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('id','item_name','hscode','brand','unit','packing','category','reqested_qty', 'req_date_time_by', 'approve_date_time_by'));

    foreach($table as $row) {
        // fputcsv($handle, array( $row['shippingmark'], $row['companyname'], $row['telephone'], $row['mobile'], $row['email1']));
    
        fputcsv($handle, array($row['id'], $row['item_name'], $row['hscode'], $row['brand'], $row['unit'], $row['packing'],  $row['category'],$row['reqested_qty'], $row['req_date_time_by'], $row['approve_date_time_by']));
    
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    
    return Response::download($filename, 'users.csv', $headers);
});




Route::get('/', function () {
     return view('agenthome'); 
    //  return view('auth.login');
    
});


Auth::routes();
Route::get('showapproveddata/{id}',[App\Http\Controllers\RequestorderController::class,'show'])->name('showapproveddata');

Route::post('/updaterequestorder/{id}', [App\Http\Controllers\RequestorderController::class, 'update'])->name('updaterequestorder');

Route::post('update_requestorder/{id}',[App\Http\Controllers\RequestorderController::class,'update_requestorder'])->name('update_requestorder');

Route::get('/Requestorder', [App\Http\Controllers\RequestorderController::class, 'index6'])->name('Requestorder');
Route::post('/requestorderentry', [App\Http\Controllers\RequestorderController::class, 'store'])->name('requestorderentry');

Route::post('delete_requestorder/{id}',[App\Http\Controllers\RequestorderController::class,'destroy'])->name('delete_requestorder');

Route::get('/updateweight/{id}', [App\Http\Controllers\GoodsreceivenoteController::class, 'update'])->name('updateweight');
Route::get('/goodereceive_entry', [App\Http\Controllers\GoodsreceivenoteController::class, 'index'])->name('goodereceive_entry');
Route::post('/grnsavedata', [App\Http\Controllers\GoodsreceivenoteController::class, 'store'])->name('grnsavedata');

Route::post('/updateweightchange/{id}', [App\Http\Controllers\GoodsreceivenoteController::class, 'up1'])->name('updateweightchange');

// Route::get('/updatepacking', [App\Http\Controllers\DataentryController::class, 'update'])->name('updatepacking');
Route::post('/savedata', [App\Http\Controllers\DataentryController::class, 'store'])->name('savedata');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/tariffsearch', [App\Http\Controllers\TariffmvController::class, 'index'])->name('tariffsearch');

Route::get('/customersearch', [App\Http\Controllers\customerController::class, 'customersearch'])->name('customersearch');

Route::get('/billentry', [App\Http\Controllers\HomeController::class, 'index4'])->name('billentry');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addcustomer', [App\Http\Controllers\HomeController::class, 'index1'])->name('addcustomer');
Route::get('/addvendor', [App\Http\Controllers\HomeController::class, 'index2'])->name('addvendor');

// Route::get('/addvendor', [App\Http\Controllers\vendorscontroller::class, 'index'])->name('addvendor');
Route::post('/savecustomer', [App\Http\Controllers\customerController::class, 'store'])->name('savecustomer');
Route::post('/savevendor', [App\Http\Controllers\vendorscontroller::class, 'store'])->name('savevendor');

Route::post('delete_customer/{id}',[App\Http\Controllers\HomeController::class,'destroy'])->name('delete_customer');

Route::post('delete_vendor/{id}',[App\Http\Controllers\vendorscontroller::class,'destroy'])->name('delete_vendor');

Route::post('editdata',[App\Http\Controllers\DeliveryController::class,'edit2'])->name('editdata');
Route::get('/adddelivery', [App\Http\Controllers\DeliveryController::class, 'index'])->name('adddelivery');
Route::post('delete_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'destroy'])->name('delete_delivery');
Route::post('/savedelivery', [App\Http\Controllers\DeliveryController::class, 'store'])->name('savedelivery');
Route::post('update_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'update'])->name('update_delivery');
Route::post('complete_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'complete'])->name('complete_delivery');

Route::get('show_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'show'])->name('show_delivery');

Route::get('/export_to', [App\Http\Controllers\DeliveryController::class, 'data_dump'])->name('export_to');

Route::post('update_reverse/{id}',[App\Http\Controllers\DeliveryController::class,'reverse'])->name('update_reverse');

Route::get('/pending-delivery', [App\Http\Controllers\DeliveryController::class, 'index4'])->name('pending-delivery');
Route::get('/delivery_ordered', [App\Http\Controllers\DeliveryController::class, 'index5'])->name('delivery_ordered');
Route::get('/chart1', [App\Http\Controllers\DeliveryController::class, 'chart'])->name('chart1');

Route::get('/shopodered', [App\Http\Controllers\DeliveryController::class, 'shopodered'])->name('shopodered');

 Route::get('/addtracking', [App\Http\Controllers\TrackingController::class, 'index'])->name('addtracking');
 Route::post('/savetracking', [App\Http\Controllers\TrackingController::class, 'store'])->name('savetracking');

 
 Route::get('/receivegood', [App\Http\Controllers\GoodsreceiveController::class, 'index'])->name('receivegood');
 Route::post('/savereceivegood', [App\Http\Controllers\GoodsreceiveController::class, 'store'])->name('savereceivegood');

//  Route::get('/add_item', [App\Http\Controllers\HomeController::class, 'additem'])->name('add_item');

Route::get('/additem', [App\Http\Controllers\itemController::class, 'index'])->name('additem');
Route::post('/saveitem', [App\Http\Controllers\itemController::class, 'store'])->name('saveitem');

Route::post('/editsellingprice',[App\Http\Controllers\itemController::class,'edit2'])->name('editsellingprice');
Route::post('/deleteimage',[App\Http\Controllers\itemController::class,'deleteimage'])->name('deleteimage');

Route::get('/lawsm2', [App\Http\Controllers\HomeController::class, 'lawsm2'])->name('lawsm2');
Route::get('/warehouse_item_entry', [App\Http\Controllers\WarehouseitemController::class, 'index'])->name('warehouse_item_entry');

Route::post('/save_warehouse_item', [App\Http\Controllers\WarehouseitemController::class, 'store'])->name('save_warehouse_item');

Route::get('/warehouse_stock_entry', [App\Http\Controllers\WarehousestockController::class, 'index'])->name('warehouse_stock_entry');
Route::post('/warehouse_item_check', [App\Http\Controllers\WarehousestockController::class, 'show'])->name('warehouse_item_check');

Route::post('/warehouse_stock_save', [App\Http\Controllers\WarehousestockController::class, 'store'])->name('warehouse_stock_save');

Route::get('/maintenancelog', [App\Http\Controllers\Maintenancelog1Controller::class, 'index'])->name('maintenancelog');

Route::get('/itemsimp', [App\Http\Controllers\ItemsimpController::class, 'index'])->name('itemsimp');

Route::get('/search', [App\Http\Controllers\ItemsimpController::class, 'search'])->name('search');

// routes for scroll 
Route::get('/posts', [App\Http\Controllers\ItemsimpController::class,'indexL'])->name('posts');
 Route::get('/loadMoreData', [App\Http\Controllers\ItemsimpController::class,'loadMoreData'])->name('loadMoreData');

 Route::get('/itemsw1', [App\Http\Controllers\itemswiftwayController::class, 'index1'])->name('itemsw1');
 Route::get('/searchb', [App\Http\Controllers\itemswiftwayController::class, 'search'])->name('searchb');

 Route::post('/itemswiftways.store', [App\Http\Controllers\itemswiftwayController::class, 'store'])->name('itemswiftways.store');
 
Route::get('/uaelist', [App\Http\Controllers\itemswiftwayController::class, 'uaelist'])->name('uaelist');

Route::get('/uaelistparisp', [App\Http\Controllers\itemswiftwayController::class, 'uaelistparisp'])->name('uaelistparisp');





