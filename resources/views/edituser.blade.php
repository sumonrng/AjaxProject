<!doctype html>
<html lang="en">
  <head>
    <title>Edit Member</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-9">
              {{-- <form id="formData"> --}}
              <form action="{{route('members.update',$member->id)}}" method="POST">
              @csrf
              @method('PUT')
                    <input type="hidden" value="{{$member->id}}" name="id">
                    <div class="form-group">
                    <label for="f_name">Name</label>
                    <input type="text" class="form-control" value="{{$member->name}}" id="f_name" name="f_name" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="number" class="form-control" value="{{$member->age}}" id="age" name="age" aria-describedby="emailHelp" placeholder="Enter Age">
                      </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$member->email}}" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="number" class="form-control" value="{{$member->mobile}}" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Enter Mobile">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" value="{{$member->city}}" id="city" name="city" aria-describedby="emailHelp" placeholder="Enter City">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" value="{{$member->country}}" id="country" name="country" aria-describedby="emailHelp" placeholder="Enter Mobile">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      
      // $(document).ready(function(){
      //   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      //   var objectResult = $('#formData').serializeArray();
      //     $('#formData').submit(function(e){
      //       e.preventDefault();
      //       alert('Hello');
      //       $.ajax({
      //         url:'store',
      //         type:'POST',
      //         data:{
      //          _token: CSRF_TOKEN,
      //          fields: objectResult
      //         },
      //         success:function(res){
      //           console.log(res);
      //         }
      //       });
      //     });
      // });

    </script>
  </body>
</html>