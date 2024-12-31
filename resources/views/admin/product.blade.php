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
                <div class="div_center">

                <h1 class="font_size">Add Product</h1>

                  <div  class="div_design">
                  <label for="">Product Title    :</label>
                  <input class="text_color" type="text" name="title" placeholder="write a title">
                  </div>
                  <div class="div_design">
                  <label for="">Product Description    :</label>
                  <input class="text_color" type="text" name="description" placeholder="write a description">
                  </div>
                  <div class="div_design">
                  <label for="">Product Price    :</label>
                  <input class="text_color" type="number" name="price" placeholder="write a price">
                  </div>
                  <div class="div_design">
                  <label for="">Product Discount price    :</label>
                  <input class="text_color" type="number" name="Dis_price" placeholder="write a Discount">
                  </div>
                  <div class="div_design">
                  <label for="">Product Quantity    :</label>
                  <input class="text_color" type="number" name="quantity" min="0" placeholder="write a quantity">
                  </div>
                  
                  <div class="div_design">
                  <label for="">Product Catagory    :</label>
                 <select class="text_color" name="catagory" id="">
                    <option value="" selected="" >Add a catagory here</option>
                    <option value="">shirt</option>
                 </select>
                  </div>
                  <div class="div_design">
                  <label for="">Product Image Here    :</label>
                 <input type="file" name="image" id="">
                  </div>

                    <div class="div_design">
                   
                    <input type="submit" name="submit" id="" value="Add Product" class="btn btn-primary">
                    </div>

                </div>
          </div> 
     </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>