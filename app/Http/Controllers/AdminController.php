<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=catagory::all();
        return view('admin.catagory',compact('data')); 
    }

    public function add_catagory( Request $request)
    {
       $data=new Catagory;
       $data->catagory_name=$request->catagory;
       $data->save();
       return redirect()->back()->with('message','Catagory Added successfully');
       
    }

    public function delete_catagory($id)
    {
        $data=catagory::find($id);
        $data->delete();

        return redirect()->back();with('message','Catagory Deleted successfully');
    }


    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product',compact('catagory'));
    }
    public function add_product(Request $request)
    {
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->Dis_price;
        $product->quantity=$request->quantity;
        $product->catagory=$request->catagory;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);


        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Addded Successfully');
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();

        return redirect()->back()->with('message','Product Delete Successfully');
    }


    public function update_product($id)
    {
        $product=product::find($id);

        return view ('admin.update_product',compact('product'));
    }
}

