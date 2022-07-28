<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
       
    </head>
    <!-- END  HEAD-->

    <!-- BEGIN BODY-->
    <body class="padTop53 " >
        <!-- Main LOading -->
        <!-- MAIN WRAPPER -->
        <div id="wrap">
           

            <!--PAGE CONTENT -->
            <div id="content">
                <div class="inner">
                    <div id="add-hide-show-div">
                        <div class="row">
                            <div class="col-lg-12">
                               
                          
                                <h2>LBL_LANGUAGE_ADMIN</h2>
                                <!--<input type="button" id="" value="ADD A DRIVER" class="add-btn">-->
                            </div>
                        </div>
                        <hr />
                        
                                    <div class="languages-top-part">
                           
                                 
                                          
                                <div class="admin_bax1">
                            
                                <a href="easy_editing_save.php?type=enable&platform=web" class="btn btn-primary">Enable Online Web Editing</a>
                       
                             <a href="easy_editing_save.php?type=disable&platform=web" class="btn btn-danger">Disable Online Web Editing</a>  <a href="" target="_blank" class="btn btn-primary">View Website</a> 
                        
                             </p>
                            </div>
                               </div>
                       
                        <div class="clearfix"></div>
                    </div>
                    

                    <form name="frmsearch" id="frmsearch" action="javascript:void(0);" method="post">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="admin-nir-table" >
                            <tbody>
                                <tr>
                                    <td width="5%"><label for="textfield"><strong>Search:</strong></label></td>
                                    <td width="10%" class=" padding-right10"><select name="option" id="option" class="form-control">
                                            <option value="">All</option>
                                            <option value="vLabel">Code</option>
                                            <option value="vValue">Value In Language</option>
                                        </select>
                                    </td>
                                    <td width="15%"><input type="Text" id="keyword" name="keyword" value=""  class="form-control" /></td>
                                    <td width="6%" id="exactcheckbox">
                                        <div class="checkbox" style="margin-left:5px;">
                                            <input type="checkbox" name="checktext" value="Yes" id="exactcheckbox_val" 
                                             >Exact Value
                                        </div>
                                    </td>
                                    <td width="12%">
                                        <input type="submit" value="Search" class="btnalt button11" id="Search" name="Search" title="Search" />
                                        <input type="button" value="Reset" class="btnalt button11" />
                                    </td>
                                    <td width="30%">
                                    
                                                <a class="add-btn" href="" style="text-align: center;">Add Label</a>
                                        
                                                    <a class="add-btn" href="" style="text-align: center;">Add Label</a>

                                                    <a class="add-btn" href="" style="text-align: center;">Add Label</a>
      
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="table-list">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="admin-nir-export">
                                    <div class="changeStatus col-lg-12 option-box-left">
                                    <!-- <span class="col-lg-2 new-select001">
                                            <select name="changeStatus" id="changeStatus" class="form-control" onChange="ChangeStatusAll(this.value);">
                                                    <option value="" >Select Action</option>
                                                    
                                                    <option value="Deleted">Make Delete</option>
                                            </select>
                                    </span> -->
                                       <!-- <form method="POST" action="" name="mylangform">

                                                <span class="col-lg-2 new-select001">
                                                    <select name="selectedlanguage" id="selectedlanguage" class="form-control" >
                                            
                                                            <option value="" ></option>

                                                    </select>
                                                </span>
                                 
                                                <input type="hidden" name="selectedlanguage" id="selectedlanguage" value="">

                                        </form> -->
                                    </div>

                                        <div class="panel-heading">
                                            <form name="_export_form" id="_export_form" method="post" >
                                                <button type="button" onClick="" >Export</button>
                                            </form>
                                        </div>
                                                                  
                                </div>
                                <div style="clear:both;"></div>
                                <div class="table-responsive">
                                    <form class="_list_form" id="_list_form" method="post" action="">
                                        <table class="table table-striped table-bordered table-hover dd-tt">
                                            <thead>
                                                <tr>
                                                    <th width="20%"><a href="javascript:void(0);" >AAA<i class="fa fa-sort" aria-hidden="true"></i> </a></th>

                                                    <th width="8%" align="center" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                        <tr class="gradeA">
                                                            <td></td>
                                                            <td></td>										

                                          
                     
                                                           <a href="" data-toggle="tooltip" title="Edit">
                                                                    <img src="" alt="Edit">
                                                                </a>
                                                         
                                                            </td>
                                                        </tr>
                                                    <tr class="gradeA">
                                                        <td colspan="7"> No Records Found.</td>
                                                    </tr>

                                            </tbody>
                                        </table>
                                    </form>

                                </div>
                            </div> <!--TABLE-END-->
                        </div>
                    </div>
                    <div class="admin-notes">
                        <h4>Notes:</h4>
                        <ul>
                            <li>
                                Language Label module will list all labels on this page.
                            </li>
                            <li>
                                Administrator can Edit / Delete any language label. 
                            </li>
                            <li>
                                Administrator can export data in XLS or PDF format.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END PAGE CONTENT -->
        </div>
        <!--END MAIN WRAPPER -->

        <form name="pageForm" id="pageForm" action="action/languages.php" method="post" >
            <input type="hidden" name="page" id="page" value="">
            <input type="hidden" name="tpages" id="tpages" value="">
            <input type="hidden" name="vLabel" id="iMainId01" value="" >
            <input type="hidden" name="status" id="status01" value="" >
            <input type="hidden" name="statusVal" id="statusVal" value="" >
            <input type="hidden" name="option" value="" >
            <input type="hidden" name="keyword" value="" >
            <input type="hidden" name="sortby" id="sortby" value="" >
            <input type="hidden" name="order" id="order" value="" >
            <input type="hidden" name="checktext" id="checktext" value="" >
            <input type="hidden" name="selectedlanguage" id="selectedlanguage" value=" >
            <input type="hidden" name="method" id="method" value="" >
        </form>

    </body>
    <!-- END BODY-->
</html>