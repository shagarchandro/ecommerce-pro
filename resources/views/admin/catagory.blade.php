<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')

    <style >
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h2_font
        {
            font-size: 40px;
            padding: bottom 40px; 
        }
        .input_color
        {
            color: black;
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
    
        <div>
                <div class="div_center">

                <h2 class="h2_font"> Add Catagory</h2>

                <form action="{{url('/add_catagory')}}" method="GET">

                @csrf
                    <input class="input_color" type="text" name="catagory" placeholder="Write Catagory name">
                    <input type="submit" name="submit" value="Add Catagory" class="btn btn-primary">
                </form>
                </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>