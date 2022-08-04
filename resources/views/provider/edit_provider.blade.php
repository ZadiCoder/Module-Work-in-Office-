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
                <form action="{{ route('provider-update',$provider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <img src="{{asset('images/'.$provider->image)}}" style="height:100px; width:100px;">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFirstName">First Name</label>
                                    <input type="Text" class="form-control" name="first_name" id=" " aria-describedby="emailHelp" value="{{ $provider->first_name }}" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLastName">Last Name</label>
                                    <input type="Text" class="form-control" name="last_name" id="" aria-describedby="emailHelp" value="{{ $provider->last_name }}" placeholder="Enter Last Name" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Email</label>
                                    <input type="Email" class="form-control" name="email" id="" value="{{ $provider->email }}"placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ $provider->password }}" id="" placeholder="Password">
                                </div>         
                                <label for="exampleFormControlFile1">Select Gender</label>
 
                                <div class="form-control">
                                    <input type="radio" name="r_gender" value="male " {{ $provider->gender == 'male' ? 'checked' : '' }}  id="actice" /><label for="" class="">Male</label>
                                    <input type="radio" name="r_gender" value="female" {{ $provider->gender == 'female' ? 'checked' : '' }}  id="deactive" /><label for="" class="">Female</label>
                                </div>
                           
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Select Image</label>
                                    <input type="file" class="form-control-file" name="image" id="">
                                    </div>
                                </div>          
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLastName">Phone Number</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" value="{{ $provider->phone }}" name="phone" placeholder="Phone Number">
                            </div>       
                            <div class="form-group">
                                <label for="exampleInputLastName">Address</label>
                                <input type="Text" class="form-control" name="address" id="" aria-describedby="emailHelp" value="{{ $provider->address }}"placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLastName">Zip Code</label>
                                <input type="number" class="form-control" name="zip_code" id="" value="{{ $provider->zip_code }}" aria-describedby="emailHelp" placeholder="Enter Zip Code">
                            </div>   
                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Company</label>
                                        <select name="company_name" class="form-control">
                                           <option>{{$provider->company}}</option>
                                           @foreach ($company as $item)
                                           <option value="{{$item->company_name}}">{{$item->company_name}}</option>
                                           @endforeach
                                        </select>
                                    </div>   
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Language</label>
                                        <select name="language" class="form-control">
                                            <option>{{$provider->language}}</option>
                                            @foreach ($language as $item)
                                            <option value="{{$item->language_name}}">{{$item->language_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>                      
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Currency</label>
                                        <select name="currency" class="form-control">
                                            <option>{{$provider->currency}}</option>
                                            @foreach ($currency as $item)
                                            <option value="{{$item->currency_name}}">{{$item->currency_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" >Select Country</label>
                                        <select class="form-control" name="country" id="">
                                            <option>{{ $provider->country }}</option>
                                            <option>India</option>
                                            <option>Arabia</option>
                                            <option>Pakistan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" >Select State</label>
                                        <select class="form-control" name="state" id="">
                                            <option>{{ $provider->state }}</option>
                                            <option>Pnjab</option>
                                            <option>Sindh</option>
                                            <option>Balochistan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select City</label>
                                        <select class="form-control" id="" name="city">
                                        <option>{{ $provider->city }}</option>
                                        <option>Lahore</option>
                                        <option>Karachi</option>
                                        <option>Multan</option>
                                        <option>Islamabad</option>
                                        </select>
                                    </div> 
                                </div>

                                
                            
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class=" btn btn-primary shadow">Submit</button>
                            </div>  
                      
                       
                    </div>
                    
                </form>
            </div>
        </div>
    
   
</body>
</html>