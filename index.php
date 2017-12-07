<!DOCTYPE html>
<html lang="en-us" data-ng-app="blankApp">
    <head>
        <meta charset="utf-8">
        <title>Simple DB</title>
    </head>
    <body >
        <div id="content"  data-ng-view="" autoscroll="true" class="view-animate" style="padding: 8px;background-color: #eee;"></div>
        <script src="js/jquery-2.0.2.min.js"></script> 
        <script src="js/angular/angular.js"></script>
        <script src="js/angular/angular-route.js"></script>
        <script src="js/ng/blankController.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="row" data-ng-controller="GlobalController">
            <div class="col-lg-3" style="padding:10px;margin:10px;">
                <div class="col-lg-6">
                    <div ng-click="mysql()">MySQL</div>
                    <input type="username"  class="form-control required" id="name" placeholder="username" name="uname" ng-model="uname" style="width:70%;padding:5px;margin-top: 5px;">
                <input type="password"  class="form-control required" id="name" placeholder="password" name="pswd" ng-model="pswd" style="width:70%; padding:5px;margin-top: 5px;">
                </div>
                <div class="col-lg-6">
                    <div ng-click="csv()">CSV</div>
                   
                </div>
            </div>
            <div class="col-lg-3" style="padding: 10px;margin: 10px;">
                <div class="col-lg-6" ng-show="MySQL">
                    MySQL
                    
                </div>
                <div class="col-lg-6" ng-show="CSV">
                    CSV
                </div>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    </body>
</html>