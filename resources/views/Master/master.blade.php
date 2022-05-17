<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('../resources/css/app.css')}}">
    <title>Hoàng Đức</title>
</head>
<body>
    @include("Master.header")
    <div id="content">
        
        <h1>Xin chào</h1>

        @yield("Noidung")

        
    </div>
    @include("Master.footer")
</body>
</html>