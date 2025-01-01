<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
    <style>
        .div_center
        {
            text-align: center;
            padding: top 40px; 
        }
        .font_size
        {
            font-size:40px ;
            padding-bottom: 40px;
        }
        .text_color
        {
            color:black ;
            padding-bottom: 20px;
        }
        label
        {
            display: inline-block;
            padding-bottom: 20px;
        }
        .div_design
        {
            padding-bottom: 2px;
           
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
    
        <div class="main-panel">
          <div class="content-wrapper">

                      @if (session()->has('message'))


                      <div class="alert alert-success" >
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                      {{session()->get('message')}}


                      </div>          
                      @endif

                <div class="div_center">

                <h1 class="font_size">Add Product</h1>

                <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">

                @csrf

                
                <div  class="div_design">
                  <label for="">Product Title    :</label>
                  <input class="text_color" type="text" name="title" placeholder="write a title" required="">
                  </div>
                  <div class="div_design">
                  <label for="">Product Description    :</label>
                  <input class="text_color" type="text" name="description" placeholder="write a description"  required="">
                  </div>
                  <div class="div_design">
                  <label for="">Product Price    :</label>
                  <input class="text_color" type="number" name="price" placeholder="write a price"  required="">
                  </div>
                  <div class="div_design">
                  <label for="">Product Discount price    :</label>
                  <input class="text_color" type="number" name="Dis_price" placeholder="write a Discount"  >
                  </div>
                  <div class="div_design">
                  <label for="">Product Quantity    :</label>
                  <input class="text_color" type="number" name="quantity" min="0" placeholder="write a quantity"  required="">
                  </div>
                  
                  <div class="div_design">
                  <label for="">Product Catagory    :</label>
                 <select class="text_color" name="catagory" id=""  required="">
                    <option value="" selected="" >Add a catagory here</option>

                    @foreach ($catagory as $catagory)

                    <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                    @endforeach
                    
                 </select>
                  </div>
                  <div class="div_design">
                  <label for="">Product Image Here    :</label>
                 <input type="file" name="image" id=""  required="">
                  </div>

                    <div class="div_design">
                   
                    <input type="submit" name="submit" id="" value="Add Product" class="btn btn-primary">
                    </div>
                </form>

                </div>
          </div> 
     </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>