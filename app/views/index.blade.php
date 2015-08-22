<!DOCTYPE html>
<html lang="en" ng-app="valorApp">
<head>
<meta charset="utf-8" />
<title>Valor</title>

{{ HTML::style('css/login.css') }}
{{ HTML::style('font-awesome/css/font-awesome.min.css') }}
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{ HTML::script('angular.min.js') }}
{{ HTML::script('js/resources/angular-route/angular-route.js') }}


<!-- Angular Module-->
{{ HTML::script('js/app.js') }}
{{ HTML::script('js/controllers.js') }}
{{ HTML::script('js/services.js') }}

<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body id="login">
{{-- <body> --}}
    <div ng-view>
          {{-- <script src="js/main.js"></script> --}}
    </div>
    
</body>
</html>
