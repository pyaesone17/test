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

    </head>
    <body>
        <div class="container">
            <div style="margin-top: 100px" class="col-lg-8 col-lg-offset-2">
                <div>
                    <a href="/create">New Post</a>
                </div>
                <br/>
                <table class="table table-hover table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Title</th>                                                    
                        <th>Description</th>
                        <th>Content</th>
                        <th>Created at</th>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{ $post->id }}
                                </td>
                                <td>
                                    {{ $post->title }}
                                </td>
                                <td>
                                    {{ $post->description }}
                                </td>  
                                <td>
                                    {{ $post->content }}
                                </td>  
                                <td>
                                    {{ $post->created_at->diffForHumans() }}
                                </td>                                                                                    
                            </tr>
                        @endforeach                    
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
