<!DOCTYPE html>
<html lang="en" ng-app="valorApp"> 
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

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        {{ HTML::script('angular.min.js') }}
        {{ HTML::script('js/resources/angular-route/angular-route.js') }}

        <!-- Angular Module-->
        {{ HTML::script('js/app.js') }}
        {{ HTML::script('js/controllers.js') }}
        {{ HTML::script('js/services.js') }}                                  
    </head>
    <body id="dashboard#">
        <div ng-view>
            
                <!-- START SCRIPTS -->
            <!-- START PLUGINS -->
            <script src="js/plugins/jquery/jquery.min.js"></script>
            <script src="js/plugins/jquery/jquery-ui.min.js"></script>
            <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
            <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script src="js/plugins/icheck/icheck.min.js"></script>
        <script src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script src="js/plugins/rangeslider/jQAllRangeSliders-min.js"></script>
        <script src="js/plugins/knob/jquery.knob.min.js"></script>
        <script src="js/plugins/morris/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>

        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script src="js/settings.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/actions.js"></script>
        <script src="js/demo_charts_morris.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        </div>
        
    </body>
</html>






