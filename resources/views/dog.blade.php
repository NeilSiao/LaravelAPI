<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <img id="dog" src="" alt="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $.get(`collection/dogImg`,function( res){
            console.log(res);
            var result= JSON.parse(res)
            var url = result.message
            $('#dog').attr('src', url)
        })
    </script>
</body>

</html>