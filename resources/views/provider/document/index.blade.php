<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 class="text-center"> Documents</h1>
        <hr>
         <h3>Documents of {{ $provider->first_name }} {{ $provider->last_name }}</h3>
        <div class="row">
            <div class="col-md-4 mt-5">
                <form action="{{ route('provider-create-work') }}" method="POST">
                    @csrf       
                    <div class="card" style="width:350px">
                        <div class="card-header">Work Experience Letter</div>
                        <div class="card-body">
                           
                                <label for="image">Image</label>
                                <div class="form-group">
                                    <input type="file" name="image" class="col-md-12">
                                </div>
                                <label for="exp">EXP. DATE</label>
                                <div class="form-group">
                                    <input type="date" name="exp" id="" class="col-md-10">
                                </div>
                                <button type="submit" class="btn btn-info ">Submit</button>                       
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mt-5">
                <form action="{{ route('provider-create-licenses') }}" method="POST">
                    @csrf       
                    <div class="card" style="width:300px">
                        <div class="card-header">Driving License</div>
                            <div class="card-body">
                                <label for="image">Image</label>
                                <div class="form-group">
                                    <input type="file" name="image" class="col-md-12">
                                </div>
                                <label for="exp">EXP. DATE</label>
                                <div class="form-group">
                                    <input type="date" name="exp" id="" class="col-md-10">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info text-center">Submit</button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>


