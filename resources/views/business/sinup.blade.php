<!DOCTYPE html>
<html lang="en">

<body>
    
<form action="{{url('business/stor')}}" method="post">
@csrf
<label for=""> user Name</label>
<input type="text" name="login_name" >

<label for="">Password</label>
<input type="password" name="password" >

<label for=""> Email</label>
<input type="email" name="email" >

<label for="">Type</label>

<select name="type" >
  <option >---type---</option>
  <option value="lab">Lab</option>
  <option value="pharmacie">Pharmacie</option>
  <option value="hospital">Hospital</option>
</select>

<button type="submit" class="btn btn-primary">Submit</button>


</form>

</body>
</html>