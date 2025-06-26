<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
  @if($errors->any())
    <div style="color:red;">
    <ul>
      @foreach($errors->all() as $error)
      <li>
      {{ $error }}
      </li>
    @endforeach
    </ul>
    </div>
  @endif
  <div class="container">
    <h3>Edit Record</h3>

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row shadow-lg p-3 mb-5 bg-body rounded">
        <div class="col-6">
          <label>Student Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $students->name }}" />
        </div>

        <div class="col-6">
          <label>Student Email</label>
          <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $students->email }}" />
        </div>

        <div class="col-6">
          <label>Student Phone</label>
          <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $students->phone }}" />
        </div>

        <div class="col-6">
          <label>Student Image</label><br>
          @if($students->img)
        <img src="{{ asset('images/' . $students->img) }}" width="50" />
      @else
        <p>No Image </p>
      @endif

        </div>

        <div class="col-12 text-center mt-3">
          <button class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>