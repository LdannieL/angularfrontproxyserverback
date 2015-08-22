<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Valor - Administrators</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->    
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        {{ HTML::style('css/theme-default.css', ['id'=>'theme']); }} 
        {{ HTML::style('css/main.css', ['id'=>'theme']); }}    
{{--         <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> --}}
    

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
                        <a href="user_management.html"><span>User Management</span></a>
                    </li> 

                    <li class="#">
                        <a href="branding.html"><span>Branding</span></a>
                    </li>

                    <li class="#">
                        <a href="administrators.html"><span>Administrators</span></a>
                    </li>

                    <li class="#">
                        <a href="advanced_analytics.html"><span>Advanced analytics</span></a>
                    </li> 

                    <li>
                        <a href="marketing_campaigns.html"><span>Marketing Campaigns</span></a>
                    </li>

                    <li class="#">
                        <a href="fundraising.html"><span>Fundraising</span></a>
                    </li> 

                    <li class="#">
                        <a href="contact_us.html"><span>Contact Us</span></a>
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
                        <div class="col-md-12">

                        <!-- LOGGED IN TITLE -->

                        <div class="page-title">                    
                            <h2>LOGGED IN ADMIN</h2>
                        </div>

                        <button onClick="openPopup('div1');" class="change_pass">Change Password</button>

                        <div id="div1" class="popup pop_1 c_p" style="display:none;">
                            {{ HTML::image('img/triangle.png') }}
                          <div class="c_p_h"><h3>change password</h3><div class="cancel" onclick="closePopup();"><span>x</span></div></div>

                            <form>
                            
                            Current Password<br>
                            <input type="text" name="current_password" placeholder="Enter minimum 8 characters">
                            New Password<br>
                            <input type="text" name="new_password"placeholder="Enter minimum 8 characters">
                            Re-type New Password<br>
                            <input type="text" name="re-type_password"placeholder="Enter minimum 8 characters">
                            <input type="submit" value="change password">

                            </form>

                        </div>
                

                        <!-- START LOGGED IN DATATABLE -->
                            <div class="panel panel-default">
                                 
                                <div class="panel-body">
                                    <table class="table datatable">

                                        <tbody>
                                            <tr>
                                                <td class="sorting_1">{{ HTML::image('img/user_photo.png') }}
                                                </td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>System Admin</td>
                                                <td>**************</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                      </div>


                            <!-- START TOTAL ADMINS DATATABLE -->

                    <div class="row">
                        <div class="col-md-12">

                        <!-- TOTAL ADMINS TITLE -->

                        <div class="page-title">                    
                            <h2>TOTAL 36 ADMINS</h2>
                        </div>

                        <button onClick="openPopup('div2');" class="new_admin">Add New Admin</button>
 
                        <div id="div2" class="popup pop_2 c_p" style="display:none;" data-overlay-theme="b">
                            {{ HTML::image('img/triangle.png') }}
                          <div class="c_p_h"><h3>NEW ADMIN</h3><div class="cancel" onclick="closePopup();"><span>x</span></div></div>

                          <form>
                            
                            First Name<br>
                            <input type="text" name="first_name"><br>
                            Last Name<br>
                            <input type="text" name="last_name"><br>
                            E-mail address<br>
                            <input type="text" name="e-mail"><br>
                            Password<br>
                            <input type="text" name="password" placeholder="Enter minimum 8 characters"><br>
                            Re-type New Password<br>
                            <input type="text" name="re-type_password" placeholder="Enter minimum 8 characters">
                            Admin Type<br>
                            <select name="admin_type" form="#">
                              <option value="manager">Manager</option>
                              <option value="editor">Editor</option>
                              <option value="viewer">Viewer</option>
                            </select>
                            <input type="submit" value="save">

                            </form>

                        </div>
                        

                            <div class="panel panel-default">
                                 
                                <div class="panel-body">
                                    <table class="table datatable_simple">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email address</th>
                                                <th>Password</th>
                                                <th>Type {{ HTML::image('img/info.png') }}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Editor</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                           <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Manager</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Jonathon</td>
                                                <td>Marshall</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>**************</td>
                                                <td>Viewer</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

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
                     
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        {{ HTML::script('js/plugins/jquery/jquery.min.js') }}
        {{ HTML::script('js/plugins/jquery/jquery-ui.min.js') }}
        {{ HTML::script('js/plugins/bootstrap/bootstrap.min.js') }}      
        <!-- END PLUGINS -->  

        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <script>
        function openPopup(el) {
           $('.popup').hide();
           $('#' + el).fadeIn(200);   
        }

        function closePopup() {
            $('.popup').fadeOut(300);
        }              
        </script>
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






