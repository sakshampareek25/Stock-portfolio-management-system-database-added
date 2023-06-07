<html>
<head>
<title> Login Page</title>

<style>
*{
margin: 0;
padding:0;
font-family: sans-serif;
}
.hero{
height: 100%;
width: 100%;
background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('../background3.jpg'); 
background-position:center;
background-size:cover;
position: absolute;
}
.form-box{
width: 380px;
height: 480px;
position: relative;
margin: 6% auto;
background: #fff;
padding: 5px;
box-shadow: 0 0 20px 9px #ff61241f;
border-radius: 50px;
overflow:hidden;
}
.button-box{
width:220px;
margin: 35px auto;
position: relative;  
box-shadow: 3 3 50px 9px #ccffff;
border-radius: 30px;
}
.toggle-btn{
padding:10px 30px;
cursor: pointer;
background: transparent;
border: 0;
outline: none;  
position: relative; 
}
#btn{
top: 0;
left:0;
position: absolute;
width:110px;
height:100%;
background:linear-gradient(to right, #26d7ab , #5b86e5);
border-radius: 30px;
transition:.5s;  
}
.google{
    width: 50px;
    height: 50px;
    background-image: url(images/gs.png);
    background-repeat: no-repeat;
    margin-top: 30px;
    font-size: 20px;
}
.input-group{
top:140px;
position:absolute;
width:280px;
transition:.5s;
}
.input-field{
width:100%;
padding: 10px 0;
margin:5px 0;
border-left:0;
border-top:0;
border-right:0;
border-bottom:1px solid #999;
outline:none;
background:transparent;  
}
.submit-btn{
width:85%;
padding:10px 30px;
cursor:pointer;
display:block;
margin:auto;
background:linear-gradient(to right,  #26d7ab , #5b86e5);
border:0;
outline:none;
border-radius:30px;
}
.check-box{
margin:30px 10px 30px 0;
}
span{
color:#777;
font-size:12px;
bottom:68px;
position:absolute;
}
#login{
left:50px;
}
#signup{
left: 450px;
}


 


</style>
</head>
<body>
<div class="hero">
<div class="form-box">
<div class="button-box">
<div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()">LogIn</button>
<button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
</div>
<form  action ="../loginsave.php" method="post" id="login" class="input-group">
<input type="text" name ="username" class="input-field" placeholder="Username" required>
<input type="email" name ="email" class="input-field" placeholder="Enter Email " required> 
<input type="password" name ="password" class="input-field" placeholder="Enter Password" required>
<input type="checkbox" class="check-box"><span>Remember Me</span>
<button type="submit" class="submit-btn">Log In</button>
</form>

<form  action="../signup.php" method="post" id="signup" class="input-group">
<input type="text"  name="name" class="input-field" placeholder="Enter Name" required>
<input type="number" name="phone" class="input-field" placeholder="Phone no." required>
<input type="text"  name="uname" class="input-field" placeholder="Username" required>
<input type="password"  name="pasw" class="input-field" placeholder="Enter Password" required>

<input type="checkbox" class="check-box"><a href="tos.html"><span>I agree to the Terms & Condition</span></a>
<button type="submit" class="submit-btn">Sign Up</button>
</form> 

</div> 
</div>
<script>
var x= document.getElementById("login");
var y= document.getElementById("signup");
var z= document.getElementById("btn");

function signup(){
x.style.left="-400px";
y.style.left="50px";
z.style.left="110px";
}
function login(){
x.style.left="50px";
y.style.left="450px";
z.style.left="0px";
}
</script>

</body>
</html> 