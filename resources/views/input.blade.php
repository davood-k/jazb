<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>import-date</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     
        <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        @csrf

            <input type="file" name="file" class="form-control">
            <input type="submit" value="upload" name="submit">

        </form>
 
    </body>

</html>