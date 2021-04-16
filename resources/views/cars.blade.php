<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>

<h1>Types of Cars and its producers</h1>
    <ul>
      
     @foreach($cars as $car)
       <li>{{$car->title}} {{$car->producer}}</li>
    

    @endforeach

    </ul>
   
</body>
</html>