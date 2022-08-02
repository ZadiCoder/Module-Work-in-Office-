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
        <h1 class="text-center"> Provider</h1>
        <hr>
       
            <h3>Add Provider</h3>
        <div class="row">
            <div class="col-md-6 mt-5">
               
                <hr> 
                <form action="{{ route('provider-bank-update',$bank->id) }}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFirstName">Payment Email</label>
                                <input type="email" class="form-control" name="payment_mail" id=" " 
                                value="{{ $bank->payment_email }}"   aria-describedby="emailHelp" placeholder="Enter Payment Email">
                            </div>
                              <div class="form-group">
                                <label for="exampleInputFirstName">Account Holder Name</label>
                                <input type="text" class="form-control" name="holder_name" id=" " 
                                value="{{ $bank->account_name }}"  aria-describedby="emailHelp" placeholder="Enter Account Holder Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFirstName">Account Number</label>
                                <input type="number" class="form-control" name="account_number" id=" "
                                value="{{ $bank->account_number }}"    aria-describedby="emailHelp" placeholder="Enter Account Number">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFirstName">Bank Name</label>
                                    <input type="text" class="form-control" name="bank_name" id=" " 
                                    value="{{ $bank->bank_name }}"  aria-describedby="emailHelp" placeholder="Enter Bank Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFirstName">Bank Location</label>
                                    <input type="text" class="form-control" name="location" id=" " 
                                    value="{{ $bank->location }}" aria-describedby="emailHelp" placeholder="Enter Bank Location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFirstName">BIC/SWIFT Code</label>
                                    <input type="number" class="form-control" name="bic_code" id=" " 
                                    value="{{ $bank->bit_code }}"  aria-describedby="emailHelp" placeholder="Enter Code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFirstName">Service Description</label>
                                    <textarea name="description" id="" cols="30" rows="10"> {{ $bank->bank_description }} 
                                    </textarea>
                                </div> 
                        </div>
                    </div>            
                    
                        <div class="form-group">
                            <button type="submit" class=" btn btn-primary shadow">Submit</button>
                        </div>  
                </form>
            </div>
        </div>
    </div>
    
   
</body>
</html>