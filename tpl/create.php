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
                <li class="active">
                    <a href="#">Create Post</a>
                </li>
                <li class="">
                    <a href="#">Login</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 blog-body">
        
            <div class="post">
                
                <h1>Create new blog post</h1>
                
                
                <form>
                    <div class="form-group">
                        <label>Post title</label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    
                    <div class="form-group">
                        <label>Post summary</label>
                        <textarea class="form-control" name="summary"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Post body</label>
                        <textarea rows="10" class="form-control" name="body"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary form-control" value="Create" />
                    </div>
                </form>
                
                
                <hr />
            </div>
            
        </div>    
        
    </div>
</body>
</html>