<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="{{url('user/')}}" method="get">
    @csrf
    <button type="submit" class="btn btn-primary">User</button>
    </form>
    
    <form action="{{url('business/')}}" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">Business</button>
    </form>
    
   
    <form action="{{url('sinup/business')}}" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">sinup</button>
    </form>
 
    
</body>
</html>