<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\item;
use Illuminate\Support\Facades\Storage;
class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $goods = goodsreceive::orderByDesc('id')->get();
        
       // return view('receivegood',compact('goods'));
$item = item::orderByDesc('id')->get();

       return view ('additem',compact('item'));
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
      
        
        date_default_timezone_set("Asia/Tashkent");
        $upd2 = date("d-m-y h:i"); 
        $item = new item();
        $item->itemcode = $request->input('itemcode');
        $item->itemname = $request->input('itemname');    
        $item->hscode = $request->input('hscode');    
        $item->hsdescription = $request->input('hsdescription'); 
        $item->ldescription1 = $request->input('ldescription1');
        $item->ldescription2 = $request->input('ldescription2');
        $item->brand = $request->input('brand');
        $item->packing = $request->input('packing');
        $item->unit = $request->input('unit');    
        $item->unitnos = $request->input('unitnos');
        $item->origin = $request->input('origin');       
        $item->expdate = $upd2;
        
        $name=request()->file('image')->getClientOriginalName();
        $name=time().$name;
        $ext=request()->file('image')->getClientOriginalExtension();
        $name=time().$name; 
       $item->image= $name ;
       //$imageName = time().'.'.$request->image->extension();
       $item ->save();
     
       // $request->image->move(public_path( $name), $name); // save to public path
        $request->image->move(public_path( 'image/'), $name); // working save to image folder
//$path = public_path('image/' . $name=time().$name);
 //$request->image->move( $path ); // save to public path

//    $destinationPath = 'images';
    //   $myimage = $request->image->getClientOriginalName();
    //   $request->image->move(public_path($destinationPath), $myimage);  // save a temp fie



       // dd($name);

        


        // https://www.youtube.com/watch?v=FeGB7JBplco

      // return redirect('/addditem')->with('success','item added');
      return redirect('/home');
    
    }

public function savworking_copy(Request $request)
{      
        date_default_timezone_set("Asia/Tashkent");
        $upd2 = date("d-m-y h:i"); 
        $item = new item();
        $item->itemcode = $request->input('itemcode');
        $item->itemname = $request->input('itemname');    
        $item->hscode = $request->input('hscode');    
        $item->hsdescription = $request->input('hsdescription'); 
        $item->ldescription1 = $request->input('ldescription1');
        $item->ldescription2 = $request->input('ldescription2');
        $item->brand = $request->input('brand');
        $item->packing = $request->input('packing');
        $item->unit = $request->input('unit');    
        $item->unitnos = $request->input('unitnos');
        $item->origin = $request->input('origin');       
        $item->expdate = $upd2; 
        $name=request()->file('image')->getClientOriginalName();
        $ext=request()->file('image')->getClientOriginalExtension();
        $name=time().$name .$ext;     
        $request->image->move(public_path( 'image/'), $name); // working save to image folder
       $item ->save();
       return redirect('/addditem')->with('success','item added');
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
}
