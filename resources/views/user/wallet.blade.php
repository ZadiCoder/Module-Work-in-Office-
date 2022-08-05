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
        <h1 class="text-center"> Change Wallet Amount</h1>
        <hr>
        <div class="row">
            <h3>Wallet</h3>
            
            <div class="col-md-12 mt-5">
               <hr> 
                <form action="{{route('Change_wallet',$user->id)}}" method="POST">
                    @csrf

                    <div class="row shadow">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFirstName">Enter Amount Value</label>
                                <input type="Text" class="form-control" name="Value" id=" " aria-describedby="emailHelp" placeholder="New Amount ">
                            </div>
                            <div class="form-group">
                              <button type="submit" class=" btn btn-primary shadow">Submit</button>
                          </div>  
                        </div>

                      
                       
                    </div>
                    
                </form>
            </div>
        </div>
      </div>
   
</body>
</html>