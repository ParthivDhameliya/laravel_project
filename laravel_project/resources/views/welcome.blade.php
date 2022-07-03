<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <h1>Welcome to home page</h1>
    <hr>
    @php
        $desc = "Product description";
    @endphp
    <x-card title="Product 1" image="image 1" :description=$desc/> 
    <x-card title="Product 2" image="image 2" :description=$desc/> 
    <x-card title="Product 3" image="image 3" :description=$desc/> 
</body>
</html>