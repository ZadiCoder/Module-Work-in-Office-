<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 >Document</h2>
       <br><br>
  <table class="table table-bordered">
    <thead>
      <tr class="bg-info ">
        <th>ID</th>
        <th>Document Name</th>
        <th>EXP. DATE</th>
        <th>image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($doc as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->expiry_date }}</td>
            <td>
                <img src="{{asset('images/'.$item->image)}}" style="height:100px; width:100px;">
            </td>
            <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
