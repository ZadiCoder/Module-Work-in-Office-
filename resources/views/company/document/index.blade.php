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
        <div class="text-right">
            <a href="{{ route('company-document-work',$company->id) }}" class="btn btn-primary" >View Work</a>
            <a href="{{ route('company-index') }}" class="btn btn-success" >Back to Company List</a>
        </div>
         <h3>Documents of {{ $company->company_name }}</h3>
     
         
        <div class="row">
            <div class="col-md-4 mt-5">
                <form action="{{ route('company-document-create') }}" method="POST" enctype="multipart/form-data">
                    @csrf       
                    <div class="card" style="width:300px">
                        <div class="card-header">Company License</div>
                            <div class="card-body">
                                <label for="image">Image</label>
                                <div class="form-group">
                                    <input type="file" name="image" class="col-md-12">
                                </div>
                                <label for="exp">EXP. DATE</label>
                                <div class="form-group">
                                    <input type="date" name="exp" id="" class="col-md-10">
                                    <input type="hidden" name="name" value="Driving License">
                                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                                </div>
                                <button type="submit" class="btn btn-info text-center">Save</button>       
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>


