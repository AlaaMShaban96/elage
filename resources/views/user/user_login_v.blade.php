<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    @isset($a)
    @if ($a=="is_login")
        
       <h1>{{request()->login_name }}</h1>
       
   @else
       
   
    <div class="container">
   
    <form action="{{url('user/login')}}" method="post">
        @csrf
    <label for="">user name</label>
    <input type="text" name="login_name" >
    <span class="text-danger">{{ $errors->first('login_name') }}</span>

    <label for="">password</label>
    <input type="password" name="password" >
    <button type="submit" class="btn btn-primary">login</button>
   </form>

   @endif
   @endisset
       
  
</div>
</body>
</html>