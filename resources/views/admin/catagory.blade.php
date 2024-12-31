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
        .center
        {
          margin: auto;
          width: 50%;
          text-align:center ;
          margin-top: 30px;
          border: 2px solid white;
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
    
        <div>
                <div class="div_center">

                <h2 class="h2_font"> Add Catagory</h2>

                <form action="{{url('/add_catagory')}}" method="GET">

                @csrf
                    <input class="input_color" type="text" name="catagory" placeholder="Write Catagory name">
                    <input type="submit" name="submit" value="Add Catagory" class="btn btn-primary">
                </form>
                </div>


                

                <table class="center">
                 
                  <tr>
                      <td>Catagory name</td>
                      <td>Action</td>
                  </tr>
                  @foreach ($data as $data)
                  
                  
                  

                  <tr>

                  
                      <td>{{$data->catagory_name}}</td>
                      <td><a onclick="return confirm( 'Are You Sure To Delete This')" href="{{url('delete_catagory',$data->id)}}" class="btn btn-danger">Delete</a></td>
                  </tr>

                  @endforeach

                </table>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>