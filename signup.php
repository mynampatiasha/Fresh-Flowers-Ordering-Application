<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
      
.body{
background-image:url("/home/student/images5.jpeg");
      
      background-repeat:repeat;
}
</style>
</head>

<body>
<div class = "d-flex justify-content-center align-items-center vh-100">


<form class = "shadow w-450 p-3" action = "login.php" method = "POST" >
<h4 class = "display-4 text-center fs-4">Create Account</h4>

  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input type="text" class="form-control" name="fname" >
</div>
 <div class="mb-3">
    <label  class="form-label">Last name</label>
    <input type="text" class="form-control" name="lname" ">
</div>
 <div class="mb-3">
    <label  class="form-label">Gender</label>
    <input type="text" class="form-control" name="Gender"  >
</div>
 <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="text" class="form-control" name="mail" ">
</div>
<div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" >
</div>
  
  
  <button type="submit" class="btn btn-primary">signup</button>
<a href = "login.php">Login</a>

</form>
</body>
</html>
