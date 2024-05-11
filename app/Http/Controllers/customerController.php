<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Excel;

use Illuminate\Support\Facades\Auth; 
class customerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
   {
       $this->middleware('auth');
   }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new customer();
       
        $customer->shippingmark = $request->input('ShippingMark');     
        $customer->nickname = $request->input('NickNameSirName');       
        $customer->firstname = $request->input('FirstName');   
        $customer->lastname = $request->input('LastName');            
        $customer->companyname = $request->input('CompanyName');  
        $customer->registration = $request->input('BusinessRegistration');     
        $customer->address = $request->input('Address');   
        $customer->road = $request->input('RoadName');   
        $customer->city = $request->input('City');   
        $customer->country = $request->input('Country');   
        $customer->zipcode = $request->input('ZipCode'); 
       $customer->telephone = $request->input('Telephone'); 
       $customer->mobile = $request->input('Mobile'); 
       $customer->email1 = $request->input('e-mail1'); 
       $customer->email2 = $request->input('e-mail2'); 
       $customer->socialaccounts = $request->input('socialaccounts'); 
       $customer ->save();
       return redirect('/')->with('success','customer data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function customersearch(Request $request)
    {

// 
if  ($this->middleware('auth')==true)
{
    
    $user1 = Auth::user()->name;
       if ($user1=='admin' )
 
        {
            $contacts = customer::when($request->term, function ($query, $term) {
                $query->where(function ($query) use ($term) {
                    // $query->where('shippingmark', 'like', "%{$term}%")->orWhere('companyname', 'like', "%{$term}%");
                    $query->where('shippingmark', 'like', "%{$term}%");
                });
            })->get();
        
             return view('contacts', ['contacts' => $contacts,]);
        }
             else
             {
                //return 'please login';
                return view('agent1');
                
             }
 
           }

        
    }
// 

        //


  // $contacts = User::when($request->term, function ($query, $term) {
    // $contacts = customer::when($request->term, function ($query, $term) {
    //     $query->where(function ($query) use ($term) {
    //         // $query->where('shippingmark', 'like', "%{$term}%")->orWhere('companyname', 'like', "%{$term}%");
    //         $query->where('shippingmark', 'like', "%{$term}%");
    //     });
    // })->get();

    //  return view('contacts', ['contacts' => $contacts,]);













    // }


}
