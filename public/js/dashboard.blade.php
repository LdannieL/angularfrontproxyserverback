<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
    <head>        
        <!-- META SECTION -->
        <title>Valor - User Management</title>            
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
                        <a href="dashboard.html"><span>Dashboard</span></a>
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
                
                <!-- PAGE TITLE -->
                <div class="page-title dashboard">                    
                    <h2>Community List</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            
                                
                            <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-3 community text-center">
                                            
                                            <input class="knob" data-width="150" data-fgColor="#a4c540" data-displayInput=false value="25"/>  <span>25%</span>
                                            <h3>Community 1</h3>                                      
                                        </div>
                                        <div class="col-md-3 community text-center">
                                            
                                            <input class="knob" data-width="150" data-fgcolor="#e13030" data-displayInput=false value="45"/> <span>45%</span>
                                            <h3>Community 2</h3> 
                                        </div>
                                        <div class="col-md-3 community text-center">
                                           
                                            <input class="knob" data-width="150" data-fgColor="#00afeb" data-displayInput=false value="65"/> <span>65%</span>
                                            <h3>Community 3</h3> 
                                        </div>
                                        <div class="col-md-3 community text-center">
                                         
                                            <input class="knob" data-width="150" data-fgColor="#faac17" data-displayInput=false value="28"/> <span>28%</span>
                                            <h3>Community 4</h3>                                     
                                        </div>
                                    </div>         
                            

                             

                      

                   <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    
                    <div class="row">

                        
                        <div class="col-md-6">

                            <!-- START DONUT CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="new_m">New Members</h3>                                
                                </div>
                                <div class="panel-body">
                                    <div id="morris-donut-example" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END DONUT CHART -->                        

                        </div>

                        <div class="col-md-6">

                            <!-- START BAR CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="new_m">New Members</h3>                                
                                </div>
                                <div class="panel-body">
                                    <div id="morris-bar-example" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END BAR CHART -->

                        </div>


                        
                        
                    </div>

                    <div class="row">
                       
                        <div class="col-md-6">

                            <!-- START Area CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="users_b_c">Users By Class</h3>                                
                                </div>
                                <div class="panel-body">
                                    <div id="morris-area-example" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END Area CHART -->                        

                        </div>
                        <div class="col-md-6">

                            <!-- START LINE CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="new_m">New Members</h3>                                
                                </div>
                                <div class="panel-body">
                                    <div id="morris-line-example" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END LINE CHART -->

                        </div>
                        
                    </div>

                    
                    
                </div> 
                <!-- END PAGE CONTENT WRAPPER -->     

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

        {{ HTML::script('js/plugins/rangeslider/jQAllRangeSliders-min.js') }}
        {{ HTML::script('js/plugins/knob/jquery.knob.min.js') }}
        {{ HTML::script('js/plugins/morris/raphael-min.js') }}
        {{ HTML::script('js/plugins/morris/morris.min.js') }}
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        {{ HTML::script('js/settings.js') }}

        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/actions.js') }}
        {{ HTML::script('js/demo_charts_morris.js') }}
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
<!-- </html> -->






