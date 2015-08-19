<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <title>Blog</title>
</head>
<body>
    <h1 class="main-title">My Blog</h1>
    <div class="container-fluid">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#">Main</a>
                </li>
                <li>
                    <a href="#">Create Post</a>
                </li>
                <li class="active">
                    <a href="#">Login</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 blog-body">
        
            <div class="col-lg-6 col-lg-offset-3 ng-scope">
            
            
                <div class="panel panel-success" style="margin-top:20px;">
                    <div class="panel-heading">
                        <h2 style="margin:0;" class="ng-binding">Login</h2>
                    </div>
                    <div class="panel-body">
                
                        
                            <form ng-submit="loginForm.submit()" novalidate="" name="loginFrm" class="ng-pristine ng-valid-email ng-invalid ng-invalid-required">
                    
                                <div class="form-group required ">
                                    <label class="control-label ng-binding" for="loginform-email">Email</label>
                                    <input type="email" id="loginform-email" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" name="email" ng-model="loginForm.email" ng-required="true" required="required">
                                </div>
                    
                                <div class="form-group required ">
                                    <label class="control-label ng-binding" for="loginform-password">Password</label>
                                    <input type="password" id="loginform-password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" name="password" ng-model="loginForm.password" ng-required="true" required="required">
                                </div>
                    
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me" name="rememberMe" ng-model="loginForm.rememberMe" class="ng-pristine ng-untouched ng-valid"> Keep me logged in
                                    </label>
                                </div>
                    
                                <div class="form-group">
                                    <input type="submit" id="login-button" class="btn btn-primary form-control" value="Login">
                                </div>
                
                            </form>
                
                    </div>
                </div>
            </div>
        </div>    
        
    </div>
</body>
</html>