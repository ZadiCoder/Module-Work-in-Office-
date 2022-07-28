<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title> Vouchers</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
      
        <style>
            .setteled-class{
                background-color:#bddac5
            }
            .buttons_voucher button  {
                padding: 8px 31px;
                background: transparent;
                color: #000;
                outline : none !important;
                border: 1px solid #5CA3DA;
            }
            .exp_gen button , .voucher-table-heading button {
                padding: 8px 31px;
                background: #5CA3DA;
                color: #fff !important;
                border: 1px solid #5CA3DA;
                outline : none !important;
            }
            .voucher_input input , .voucher_no input {
                padding: 8px 11px;
                background: transparent;
                /*color: #efefef;*/
                outline: none;
                border: 1px solid #5CA3DA;
                border-radius: 4px;
                width: 60%;
                font-size: 15px;
            }
            .voucher_no input {
                margin-bottom: 1rem;
            }
            .active_btn {
                background: #5CA3DA !important;
                color: #fff !important;
            }
            .voucher-table-heading {
                display: flex;
                justify-content: space-between;
                    align-items: baseline;
                    margin-bottom: 1.5rem;
            }
                .btn_radio {
                    display: block;
                    padding: 5px 10px;
                    margin: 5px 5px;
                    font: 14px/20px Arial, sans-serif;
                    background-color: transparent;
                    border-radius: 4px;
                    border: 1px solid #5ca3da;
                    cursor: pointer;
                }
                
                .btn_radio input{
                  display: none;
                }
                
                .isSelected {
                    background-color: #5ca3da;
                    color: #fff;
                }
                .buttons_voucher {
                    display: flex;
                }

        @media print { 
          #printPageButton {
             display: none;
                 }
}
        </style>
    </head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
    <body class="padTop53 " >
     
            <!--PAGE CONTENT -->
            <div id="content">
                <div class="inner">
                    <div id="add-hide-show-div" >
                        <div class="row">
                            <div class="col-lg-12" id="printPageButton">
                                <h2 class="text-center">Banner</h2>
                                 
                                <!--<input type="button" id="" value="ADD A DRIVER" class="add-btn">-->
                            </div>
                        </div>
                        <hr /> 
                <div class="vouchers" >
                    <div class="container">
                       <hr class="set_hr">
                        <div class="voucher_table">
                            <div class="voucher-table-heading" id="printPageButton" >
                                <h3>Edit Banner</h3>
                                <!--<button type="button" onclick="window.print()" class="btn "><i class="fa fa-print"></i> Export</button>-->
                              <a id="down" href=""> <button type="button"  class="btn "><i class="fa fa-download"></i> Back to Listing</button></a>
                            </div>
                            <div style="clear:both;"></div>
                                <form method="post" action="{{ route('banner-update',$data->id) }}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12" id="errorMessage">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/'.$data->image)}}" style="height:70px; width:70px;">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Image<span class="red"> *</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" name="image" 
                                             class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Title</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="title" id="tiile" value="{{ $data->title }}" placeholder="Enter Title" >
                                            </div>
                                    </div>                                                                                                                  
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Text<span class="red"> *</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <textarea name="text" value="" cols="30" rows="10">{{ $data->text }} </textarea>
                                        </div>
                                  
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-control">
                                                <input type="radio" name="status" value="active " {{ $data->status == 'active' ? 'checked' : '' }}  id="actice" /><label for="" class="">Active</label>
                                                <input type="radio" name="status" value="deactive" {{ $data->status == 'deactive' ? 'checked' : '' }}  id="deactive" /><label for="" class="">De-Active</label>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="submit" class="btn btn-default" value="Update Banner">
                                            <input type="reset" value="Reset" class="btn btn-default">
                                            <a href="" class="btn btn-default ">Cancel</a>
                                        </div>  
                                    </div>                                        
                                </form>
                            </div>
                        </div> <!--TABLE-END-->
                    </div>
                </div>
            </div>
        </div>
                    
    </div>
                 
                
                <!--echo $orgNameArr[$db_organization[$g]];-->
    
                    <div class="clear"></div>
                </div>
            </div>
            <!--END PAGE CONTENT -->
        </div>
        <!--END MAIN WRAPPER -->
    </body>
</html>