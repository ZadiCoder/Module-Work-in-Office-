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
                    <form method="POST" action="{{ route('update',$data->id) }}">
                        @csrf
                        <div class="sub_head" id="printPageButton">
                            <h3>Amount</h3>
                        </div>
                        <div class="row" id="printPageButton">
                            <div class="col-md-5">
                                <div class="buttons_voucher">
                                    <label class="btn_radio" style="background-color: #4CAF50;">
                                        <input type="" id="amount" value="{{ $data->value }}"  name="amount"  />LY {{ $data->value }}
                                    </label>
                                    <label class="btn_radio">
                                        <input type="radio" id="amount" value="10"  name="amount"  />LY 10
                                    </label>
                                    <label class="btn_radio">
                                        <input type="radio" value="30" id="amount" name="amount" />LY 30
                                    </label>
                                    <label class="btn_radio">
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
                                <input type="number" class="voucher_amount" name="quantity" min=1 value="{{ $data->voucher_id }}" required>
                            </div>
                            <h3>Choose Expiry Date</h3>
                            <div class="expiry-date">
                                <input type="date" class="expiry-date" value="{{ $data->expiry_date }}" name="exDate" required>
                            </div>
                            <div class="exp_gen">
                                <button type="submit" id="generate_voucher" class="btn" >Generate</button>
                                <!--<button type="button" class="btn">Export</button>-->
                            </div>

                        </div>
                    </form>
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