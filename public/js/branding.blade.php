<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Valor - Branding</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->    
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
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
       

                    <div class="row cover">
                        <div class="setting">

                        <!-- SET COMMUNITY NAME/ LOGO/ COLOR SCHEME -->
                    <div class="community_name">
                    <h2>SET COMMUNITY NAME</h2>

                    <form>

                        COMMUNITY NAME<br>
                        <input type="text" name="first_name" placeholder="Enter Community Name"><br>
                        COMMUNITY ABBREVIATION<br>
                        <input type="text" name="last_name" placeholder="Enter Community Abbreviation">

                    </form>
                    </div>

                    <div class="set_logo">

                    <h2>SET LOGO</h2>

                    <p>Community</p>
                    <div class="logo_1">Click to Upload Logo</div>

                    <p>Horizontal</p>
                    <div class="logo_2">Click to Upload Logo</div>
                    
                    </div>

                    <div class="set_color_scheme">

                    <h2>SET COLOR SCHEME</h2>

                    <p>Primary</p>
                    <div class="primary"></div>

                    <div class="col1">
                    <p>Secondary</p>
                    <div class="secondary">Click to set color</div></div>

                    <div class="col2">
                    <p>Tertiary</p>
                    <div class="tertiary"></div></div>

                    </div>

                    <div class="publish">
                    <button>PUBLISH</button>
                    <p>Satisfied with how everything looks?</p>
                    </div>

                        
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

        <!-- START PRELOADS -->
        <audio id="audio-alert" src={{ asset('audio/alert.mp3') }} preload="auto"></audio>
        <audio id="audio-fail" src={{ asset('audio/fail.mp3') }} preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        {{ HTML::script('js/plugins/jquery/jquery.min.js') }}
        {{ HTML::script('js/plugins/jquery/jquery-ui.min.js') }}
        {{ HTML::script('js/plugins/bootstrap/bootstrap.min.js') }}        
        <!-- END PLUGINS -->  

        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>              


        <!-- START TEMPLATE -->
        {{ HTML::script('js/settings.js') }}

        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/actions.js') }}       
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>






