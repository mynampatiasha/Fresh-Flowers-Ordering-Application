<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
body {
background-color:white
background-attachment: fixed;
  font-family: "Asap", sans-serif;
  margin:10px;
  font-size:20px;
  color:black;
background-image:url("background.jpeg");
background-repeat:no-repeat;
background-size:cover;

}
</style>

</head>

<body>
<center><h2 class="text-light">Order Details</h2></center><hr>
<form name="myform" id="forms" method="post" action="store1.php" onsubmit="name()||email()||phone()||gender()">
<center>
<div class="container-fluid">
   
    <div class="row ">
        <div class="col-md">
        <table>
            <tr>
                <td>
                    <p><span class="error text-light">* required field</span></p>
                </td>
            </tr>
        <tr>
            <td>
             <div class=" form-group">
            <label class="form-label text-light" for="fname" required>First Name: &nbsp;&nbsp;</label>
            <span class="error">*</span>
        
            </div> 
           
                <input class="form-control" type="text" name="fname" id="fname" >
            </td>
        </tr>  
        <tr>
            <td>
             <div class=" form-group">
            <label class="form-label text-light" for="lname">Last Name: </label>
            <span class="error">*</span>

            </div> 
           
                <input class="form-control" type="text" name="lname" id="lname">
            </td>
        </tr> 
        <tr>
            <td>
             <div class=" form-group">
            <label class="form-label text-light" for="email">Email: </label>
            <span class="error">*</span>
            
            </div> 
            
                <input class="form-control" type="email" name="email" id="email" placeholder="username@gmail.com">
                <br>
            </td>
        </tr> 
        <tr>
            <td>
            <div class="form-group">
                <label for="gender" class="form-check-label text-light">Gender:&nbsp;&nbsp;  </label>
                <span class="error text-light">*</span>
                &nbsp;&nbsp;
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label for="male" class="text-light">Male</label>&nbsp;&nbsp;
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label for="female" class="text-light">Female</label>
            </div>
            </td>
        </tr> 
        
        <tr>
            <td>
                <br>
             <div class=" form-group">
            <label class="form-label text-light" for="phone">Phone Number:</label>
            <span class="error">*</span>

            </div> 
            
                <input class="form-control" type="tel" name="phone" id="phone">
            </td>
        </tr>    
        <tr>
            <td>
             <div class=" form-group">
            <label class="form-label text-light" for="address">Address: &nbsp;&nbsp;</label>
            </div> 
                <textarea cols="40" id="address" class="form-control" name="address">

                </textarea>
            </td>
        </tr>                                                                                                                                                              
        </table>
        </div>
        <div class="col-md">
  
            <table>
                <tr>
                    <td>
                       <br>
                       <br>
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label text-light" for="select1"> select state</label>
                        <span class="error">*</span>
                    <div class="form-group" >
                    
                        <select class="form-control" id="select1" name="select1" >
                            <option value="Andhra Pradesh"> Andhra pradesh</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Tamilnadu">Tamilnadu</option>
                        </select>
                    </div>
                    
                    </td>
                </tr>  
                <tr>
                    <td><label class="form-label text-light" for="select2">Flower type</label>
                        <span class="error">*</span>
                    <div class="form-group" >
                    
                        <select class="form-control" id="select2" name="select2" >
                            <option value="types of flowers"> types of flowers</option>
                            <option value="Rose">Rose</option>
                            <option value="Lilly">Lilly</option>
                            <option value="Marigold">Marigold</option>
                            <option value="Hibiscus">Hibiscus</option>
                        </select>
                    </div>
                    
                    </td>
                </tr>


                <tr>
                    <td>
                        <div class=" form-group">
                            <label class="form-label text-light" for="add">Additional Requirements &nbsp;&nbsp;</label>
                            </div> 
                                <textarea cols="40" id="add" class="form-control" name="requirements">
                
                                </textarea>
                            </td>
                    </td>
                </tr>
                </table>
          <br>
        </div>
      </div>
</div>


<a href="name.php" class="btn btn-outline-primary">Go back</a>
<input type="submit" class="btn btn-success" value="Submit">
<input type="reset" class="btn btn-secondary" value="Reset">
</center> 
</form>
<script>
forms.addEventListener('submit',(e)=>{
    name();
    email();
    phone();
    gender();
    //validate();
})
function name(){
    var fname=document.myform.fname.value.trim();
    var lname=document.myform.lname.value.trim();
    let name_pattern=/^[a-z A-Z]+$/;
    if(fname==null||fname==""){
        alert("First Name Can't be Empty!!! ");
        return false;
    }
    else if(lname==null||lname==""){
        alert("Last Name Can't be Empty!!! ");
        return false;
    }
    else if(fname.length<4||lname.length<4){
        alert("Name contains atleast 3 letters!!!");
        return false;
    }
    else if(!(name_pattern.test(fname))){
        alert("Name Only Contains Alphabets")
     }
}
function email(){
    var email=document.myform.email.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email==null||email==""){
       alert("Email is Required!!");
       return false;
    }
    else if(!(emailRegex.test(email))){
        alert("Invalid Email!!");
        return false;
    }
}
function phone(){
    var number=document.myform.phone.value.trim();
    var pattern=/^(0|91)?[6-9][0-9]{9}$/;
    if(number==null||number==""||number.length!=10){
            alert("number can't be empty and must contains 10 digits");
            return false;
    }
    else if(!(pattern.test(number))){
        alert("Invalid Phone Number!!");
        return false;
    }
}
function gender(){
    var gender=document.myform.gender.value;
    if(gender==null){
        alert("Gender is Required!!");
        return false;
    }
}
/*function validate(){
    var Check_in=document.myform.Check_in.value;
    var Check_out=document.myform.Check_out.value;

    if(Check_in==null||Check_out==null){
        alert("Checkin and Checkout Mandatory!");
        return false;
    }
}*/
</script>
</body>
</html>
