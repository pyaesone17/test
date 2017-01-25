<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style type="text/css">
            .form-control, .btn{
                border-radius: 0px;
            }
        </style>
        <!-- Styles -->
    </head>
    <body>
        <div class="container">
            <div style="margin-top: 100px" class="col-lg-4 col-lg-offset-3">
            <form method="POST" action="/">
                <h4>Post</h4>
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="title" placeholder="title"  class="form-control"  required="required" />
                </div>
                <div class="form-group">
                    <textarea name="description" placeholder="description" class="form-control" required="required" ></textarea>
                </div>
                <div class="form-group">
                    <textarea name="content" placeholder="content" class="form-control"  required="required" ></textarea>
                </div>                                                
                <button class="btn btn-default">Submit</button>
            </form>
            </div>
        </div>
    </body>
</html>
