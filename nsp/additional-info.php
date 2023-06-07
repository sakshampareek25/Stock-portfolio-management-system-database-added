<html>
<head>
<title>Additional Information</title>
<link rel="stylesheet" href="CSS/additional-info-style.css">
<style>
*{
margin: 0;
padding:0;
font-family: sans-serif;
}
.hero{
height: 100%;
width: 100%;
background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('../background3.jpg'); 
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
box-shadow: 0 0 20px 9px #333;
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
width:45%;
padding:10px 30px;
cursor:pointer;
display:block;
margin:auto;
background:linear-gradient(to right,  #26d7ab , #5b86e5);
border:0;
outline:none;
border-radius:20px;
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
<button type="button" class="toggle-btn" onclick="login()">Enter Info</button>
<button type="button" class="toggle-btn" onclick="signup()">Next</button>
</div>
<form  action="../addi_save.php" method="post" id="login" class="input-group">
<input type="number" name="mobile" class="input-field" placeholder="Enter Mobile no." required>
<input type="number" name="aadhar" class="input-field" placeholder="Enter Aadhar no." required>
<input type="number" name="pan" class="input-field" placeholder="Enter PAN no." required>
<input type="Date" name="dob" class="input-field" placeholder="Enter Date of Birth" required>
<input type="text" name="prof" class="input-field" placeholder="Profession" required>
<input type="number" name="income" class="input-field" placeholder="Annual Income" required>
<button type="submit" class="submit-btn">Submit</button>

</form>

</div> 
<form id="signup" class="input-group">
<!-- <input type="number"  class="input-field" placeholder="Experience in Years" required>
<input type="text" class="input-field" placeholder="Enter Bank Name" required>
<input type="number" class="input-field" placeholder="Enter Bank Account no." required>
<input type="number" class="input-field" placeholder="Enter Bank IFSC Code" required>
<input type="checkbox" class="check-box"><a href="tos.html"><span>I Accept the Terms & Conditions</span></as>
<button type="submit" class="submit-btn">Submit</button> -->
</form> 

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