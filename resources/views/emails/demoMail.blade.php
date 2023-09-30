<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Habibur's Demo Mail</title>
</head>
<body>
     <h1> {{ $mailData['title']}} </h1>
     <p> {{ $mailData['body']}} </p>

     <img src="{{asset('assests/images/2.jpg')}}" width="50px" height="100px" alt="image">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolore magnam, omnis quo voluptas quibusdam molestias quaerat itaque, saepe, harum cum dolorem cumque quae excepturi porro animi eaque ex. Illum quo at quibusdam facere velit.</p>
     <p>Thank You.</p>
</body>
</html>