<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-8 col-sm-9">
              <div class="mb-5 mt-5">
                <a href="{{route('members.create')}}" class="btn btn-success">Add Member</a>
              </div>
              @if(session('success'))
              <div class="alert alert-success" role="alert">
                {{session('success')}}
              </div>
              @endif
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Show</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($member) > 0)
                  @foreach ($member as $show)
                  <tr>
                    <th scope="row">{{$show->id}}</th>
                    <td>{{$show->name}}</td>
                    <td>{{$show->age}}</td>
                    <td>{{$show->email}}</td>
                    <td>{{$show->mobile}}</td>
                    <td>{{$show->city}}</td>
                    <td>{{$show->country}}</td>
                    <td><a href="{{route('members.show',$show->id)}}" class="btn btn-info">Show</a></td>
                    <td><a href="{{route('members.edit',$show->id)}}" class="btn btn-primary">Update</a></td>
                    <td>
                      <form action="{{route('members.destroy',$show->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  @else
                    <tr>
                      <td colspan="12" class="text-center">No Data Found!</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>