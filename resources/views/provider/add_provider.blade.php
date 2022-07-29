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
        <h1 class="text-center"> User</h1>
        <hr>
        <div class="row">
            <h3>Add User</h3>
            
            <div class="col-md-12 mt-5">
               <hr> 
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row shadow">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFirstName">First Name</label>
                                <input type="Text" class="form-control" name="F_Name" id=" " aria-describedby="emailHelp" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Email</label>
                                <input type="Email" class="form-control" name="Email" id="" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputLastName">Last Name</label>
                                <input type="Text" class="form-control" name="L_Name" id="" aria-describedby="emailHelp" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" name="Password" id="" placeholder="Password">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input  type="radio" name="R_Gender" id="" value="Male">
                                        <label  for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-group">
                                        <input  type="radio" name="R_Gender" id="" value="Female">
                                        <label  for="inlineRadio1">Female</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" >Select Country</label>
                                        <select class="form-control" name="Country" id="">
                                          <option>India</option>
                                          <option>Arabia</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Select Imagine</label>
                                        <input type="file" class="form-control-file" name="image" id="">
                                      </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputLastName">Phone Number</label>
                                        <input type="Text" class="form-control" id="" aria-describedby="emailHelp" name="P_number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Language</label>
                                        <select class="form-control" id="" name="Language">
                                          <option>English</option>
                                          <option>Arabic</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Currency</label>
                                        <select class="form-control" id="" name="Currency">
                                          <option>US Dollar</option>
                                          <option>UK Pound</option>
                                          <option>US Australian Dollar</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Status</label>
                                    <select class="form-control" id="" name="Status">
                                      <option>Active</option>
                                      <option>InActive</option>
                                    </select>
                                  </div></div>
                        </div> 
   
                        
                            <div class="form-group">
                                <button type="submit" class=" btn btn-primary shadow">Submit</button>
                            </div>  
                      
                       
                    </div>
                    
                </form>
            </div>
        </div>
      </div>
   
</body>
</html>