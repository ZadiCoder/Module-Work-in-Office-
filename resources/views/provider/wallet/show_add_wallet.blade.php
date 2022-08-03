<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Hello</title>
</head>
<body>

      <div class="container">
        <h1 class="text-center"> Wallet</h1>
        <hr>
       
            <h3>Add Balance</h3>
                <h5>Provider Name : {{ $data->first_name }}</h5>
                <h5>Email : {{ $data->email }}</h5>
                @if (!isset($data->wallet))
                    <h5>Wallet's Ammount : 0 </h5>
                @else
                <h5>Wallet's Ammount : {{ $data->wallet }}</h5>    
                @endif
                

            
               
                <hr> 
                <form action="{{ route('provider-update-add-wallet') }}" method="POST" >
                    @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Entered Amount Will Be Added Directly To Provider's Account</h5><br>
                                <div class="form-group">
                                    <label for="exampleInputFirstName">Enter Ammount</label>
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <input type="hidden" name="wallet" value="{{ $data->wallet }}">
                                    <input type="number" class="form-control" required name="ammount" id=" " aria-describedby="emailHelp" placeholder="Enter Ammount">
                                </div>
                                <button type="submit" class=" btn btn-primary shadow">Save</button>
                                <a href="{{ route('provider-index') }}" class="btn btn-danger">Close</a> 
                                
                          
                            </div>
                    </div>
                    
                </form>
            
        
    </div>
    
   
</body>
</html>