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
                                <h2 class="text-center">Provider</h2>
                                 
                                <!--<input type="button" id="" value="ADD A DRIVER" class="add-btn">-->
                            </div>
                        </div>
                        <hr /> 
                <div class="vouchers" >
                    <div class="container">
                   
                        <form class="form-inline" method="post" action="">
                            @csrf
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="admin-nir-table" >
                                <tbody>
                                    <tr>
                                        <td width="5%"><label for="textfield"><strong>Search:</strong></label></td>
                                    
                                        <td width="15%"><input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search"></td>
                                      
                                        <td width="12%">
                                            <input type="submit" value="Search" class="btn btn-success my-2 my-sm-0"   title="Search" />
                                            <input type="button" value="Reset" class="btn btn-primary my-2 my-sm-0" />
                                        </td>
                                        <td width="30%">
                                            <a class="btn btn-warning" href="{{ route('provider-show') }}" style="text-align: center;">Add Provider</a>
                        
                                               </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                       <hr class="set_hr">
                        <div class="voucher_table">
                            <div class="voucher-table-heading" id="printPageButton" >
                                <h3>Provider List</h3>
                                <!--<button type="button" onclick="window.print()" class="btn "><i class="fa fa-print"></i> Export</button>-->
                              <a id="down" href="#"> <button type="button"  class="btn "><i class="fa fa-download"></i> Export</button></a>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="table-responsive">
                                <form class="_list_form" id="_list_form" method="post" action="/admin/languages.php">
                                    <table class="table table-striped table-bordered table-hover dd-tt">
                                        <thead>
                                            <tr>

                                                <th>Provider Name</th>
                                                <th>Company Name</th>
                                                <th>Email</th>
                                                <th>Taxi Count</th>
                                                <th>Signup Date</th>
                                                <th>Mobile</th>
                                                <th>Wallet Balance</th>
                                                <th>View/Edit Document(s)</th>
                                                <th>Manage Services</th>
                                                <th>View/Edit Availability</th>
                                                <th>Status</th>
                                                <th>IsFeatured</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                         
                                             
                                           
                                        </tbody>
                                    </table>
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