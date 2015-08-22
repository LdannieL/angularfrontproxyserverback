<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Valor - Marketing Compaigns</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE --> 
        {{ HTML::style('css/theme-default.css', ['id'=>'theme']); }}
        {{ HTML::style('css/main.css', ['id'=>'theme']); }}       

        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">

                    <li class="xn-logo">
                        <a href="index.html">{{ HTML::image('img/Valor.png') }}</a>
                        <!--<a href="index.html">VALOR</a>-->
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                                   
                    <li>
                        <a href="index.html"><span>V-logo and Valor</span></a>
                    </li>

                    <li class="#">
                        <a href="#"><span>Dashboard</span></a>
                    </li>

                    <li class="#">
                        <a href="#"><span>User Management</span></a>
                    </li> 

                    <li class="#">
                        <a href="#"><span>Branding</span></a>
                    </li>

                    <li class="#">
                        <a href="tables.html"><span>Administrators</span></a>
                    </li>

                    <li class="#">
                        <a href="#"><span>Advanced analytics</span></a>
                    </li> 

                    <li>
                        <a href="maps.html"><span>Marketing Campaigns</span></a>
                    </li>

                    <li class="#">
                        <a href="#"><span>Fundraising</span></a>
                    </li> 

                    <li class="#">
                        <a href="#"><span>Contact Us</span></a>
                    </li> 
                                       
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">                
                
                        

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
       

                    <div class="row">

                    <div class="col-md-3">

                        <!-- ACTIVE CAMPAIGNS -->
                    <div class="active_campaigns">
                    <h2>ACTIVE CAMPAIGNS</h2>

                    <table id="act_c">
                      <tr>
                        <th>Name</th>
                        <th>Start Data</th> 
                        <th>End Data</th>
                      </tr>
                      <tr>
                        <td>Campaign 1</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 2</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 3</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 4</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 5</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 6</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 7</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                    </table>
                        
                    </div>  

                    <!-- INACTIVE -->
                    <div class="inactive">
                    <h2>INACTIVE</h2>

                    <table id="act_c">
                      <tr>
                        <th>Name</th>
                        <th>Start Data</th> 
                        <th>End Data</th>
                      </tr>
                      <tr>
                        <td>Campaign 8</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 9</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 10</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 11</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 12</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 13</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                      <tr>
                        <td>Campaign 14</td>
                        <td>05-01-2015</td> 
                        <td>05-01-2015</td>
                      </tr>
                    </table>
                        
                    </div>     

                    
                    </div>

                    <div class="col-md-4">

                        <!-- BASIC INFO -->
                    <div class="basic_info">
                    <h2>BASIC INFO</h2>


                        
                    </div>   

                    
                    </div>

                    <div class="col-md-5">

                        <!-- CAMPAIGN PREVIEW -->
                    <div class="campaign_preview">
                    <h2>CAMPAIGN PREVIEW</h2>


                        
                    </div>   
                          
                    
                    </div>


                <!-- PAGE CONTENT WRAPPER -->                                
                </div>    
            <!-- END PAGE CONTENT -->
            </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->                     
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        {{ HTML::script('js/plugins/jquery/jquery.min.js') }}
        {{ HTML::script('js/plugins/jquery/jquery-ui.min.js') }}
        {{ HTML::script('js/plugins/bootstrap/bootstrap.min.js') }}      
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        {{ HTML::script('js/plugins/icheck/icheck.min.js') }}
        {{ HTML::script('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}
        
        {{ HTML::script('js/plugins/datatables/jquery.dataTables.min.js') }}
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        {{ HTML::script('js/settings.js') }}

        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/actions.js') }}       
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>






