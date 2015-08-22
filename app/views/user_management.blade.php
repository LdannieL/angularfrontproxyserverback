<!DOCTYPE html>
<html lang="en">
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
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2>7386 Community members</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                 
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Joined</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Title</th>
                                                <th>Company</th>
                                                <th>Email address</th>
                                                <th>LinkedIN</th>
                                                <th>Class Year</th>
                                                <th>Wants to See</th>
                                                <th><span></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/08/25</td>
                                                <td>Andy </td>
                                                <td>Fine</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2013</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/09/25</td>
                                                <td>Andy</td>
                                                <td>Fine</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2012</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2012/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2014</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2012/07/22</td>
                                                <td>Andy</td>
                                                <td>Fine</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/26</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/13</td>
                                                <td>Andy</td>
                                                <td>Fine</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2009/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2008/08/02</td>
                                                <td>Andy</td>
                                                <td>Fine</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2009</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/02/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2010</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/01/08</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2007/03/25</td>
                                                <td>Andy</td>
                                                <td>Fine</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2009/06/06</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                           <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>{{ HTML::image('img/user_photo.png') }}</td>
                                                <td>2011/07/25</td>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>Co-Founder and CEO</td>
                                                <td>MyNetwork LLC</td>
                                                <td>andy@mynetworks.io</td>
                                                <td>{{ HTML::image('img/linkedin.png') }}</td>
                                                <td>2015</td>
                                                <td>Only Alumni</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    <button class="export">Export to CSV</button>
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






