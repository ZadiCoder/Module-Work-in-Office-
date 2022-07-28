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
                                <h2 class="text-center">Add Vouchers</h2>
                                 
                                <!--<input type="button" id="" value="ADD A DRIVER" class="add-btn">-->
                            </div>
                        </div>
                        <hr /> 
                <div class="vouchers" >
                    <div class="container">
                    <form method="POST" action="{{ route('create') }}">
                        @csrf
                        <div class="sub_head" id="printPageButton">
                            <h3>Amount</h3>
                        </div>
                        <div class="row" id="printPageButton">
                            <div class="col-md-5">
                                <div class="buttons_voucher">
                                    <label class="btn_radio">
                                        <input type="radio" id="amount" value="10"  name="amount"  />LY 10
                                    </label>
                                    <label class="btn_radio">
                                        <input type="radio" value="30" id="amount" name="amount" />LY 30
                                    </label>
                                    <label class="btn_radio" />
                                        <input type="radio" id="amount" value="50"  name="amount" />LY 50
                                    </label>
                                    <label class="btn_radio">
                                        <input type="radio" id="amount" value="100" name="amount" />LY 100
                                    </label>
                                 
                                </div>
                            </div>
                    
                        </div>
                        <div class="voucher_no" id="printPageButton" >
                            <h3>No. of Vouchers</h3>
                            <div class="voucher_no">
                                <input type="number" class="voucher_amount" name="quantity" min=1  placeholder="Enter Voucher Amount..." required>
                            </div>
                            <h3>Choose Expiry Date</h3>
                            <div class="expiry-date">
                                <input type="date" class="expiry-date" name="exDate" required>
                            </div>
                            <div class="exp_gen">
                                <button type="submit" id="generate_voucher" class="btn" >Generate</button>
                                <!--<button type="button" class="btn">Export</button>-->
                            </div>
                        </div>
                    </form>
                       <hr class="set_hr">
                        <div class="voucher_table">
                            <div class="voucher-table-heading" id="printPageButton" >
                                <h3>Vouchers</h3>
                                <!--<button type="button" onclick="window.print()" class="btn "><i class="fa fa-print"></i> Export</button>-->
                              <a id="down" href="#"> <button type="button"  class="btn "><i class="fa fa-download"></i> Export</button></a>
                            </div>
                            <table class="table  table-bordered" >
                              <thead>
                                <tr>
                                  <th scope="col">Serial No</th>
                                  <th scope="col">Vocher Id</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Expiry Date</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                @foreach ($fetch as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->voucher_id }}</td>
                                    <td> {{ $item->value }}</td>
                                    <td>{{ $item->expiry_date }}</td>
                                    <td>
                                        <a href="{{ route('edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach                                 
                                
                            
                              
                              </tbody>
                            </table>
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