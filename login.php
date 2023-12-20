<?php 
session_start();
require 'loader.php';
require 'headerx.php'; 
require 'connect.php';
?>
<head>
    <link rel="stylesheet" href="regstyle.css">
    <link rel="shortcut icon" href="img/newitem/A0.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,200,1,200" />
</head>


<!-- INTRODUCTION OF LOGIN FORM -->


<div id="resp">
	
</div>


<div class="form_div">
    <!-- new login form -->
    <form class="form_container" name="login_form" onsubmit="return(valid())" method="POST">
    
  <div class="title_container">
    <p class="title">Login to your Account</p>
    <span class="subtitle">Hey it's Good to Have You Back, Just Login Into Your account and enjoy the experience.</span>
  </div>

  <br>
  <div class="input_container">
    <label class="input_label" for="email_field">Email</label>
    <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"></path>
      <path stroke-linejoin="round" stroke-width="1.5" stroke="#141B34" d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z"></path>
    </svg>
    <input placeholder="name@mail.com" title="Kindly key in your email" name="log_mail" type="email" class="input_field" id="email_field" required>
  </div>


  <div class="input_container">
    <label class="input_label" for="password_field">Password</label>
    <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
      <path stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M18 11.0041C17.4166 9.91704 16.273 9.15775 14.9519 9.0993C13.477 9.03404 11.9788 9 10.329 9C8.67911 9 7.18091 9.03404 5.70604 9.0993C3.95328 9.17685 2.51295 10.4881 2.27882 12.1618C2.12602 13.2541 2 14.3734 2 15.5134C2 16.6534 2.12602 17.7727 2.27882 18.865C2.51295 20.5387 3.95328 21.8499 5.70604 21.9275C6.42013 21.9591 7.26041 21.9834 8 22"></path>
      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M6 9V6.5C6 4.01472 8.01472 2 10.5 2C12.9853 2 15 4.01472 15 6.5V9"></path>
      <path fill="#141B34" d="M21.2046 15.1045L20.6242 15.6956V15.6956L21.2046 15.1045ZM21.4196 16.4767C21.7461 16.7972 22.2706 16.7924 22.5911 16.466C22.9116 16.1395 22.9068 15.615 22.5804 15.2945L21.4196 16.4767ZM18.0228 15.1045L17.4424 14.5134V14.5134L18.0228 15.1045ZM18.2379 18.0387C18.5643 18.3593 19.0888 18.3545 19.4094 18.028C19.7299 17.7016 19.7251 17.1771 19.3987 16.8565L18.2379 18.0387ZM14.2603 20.7619C13.7039 21.3082 12.7957 21.3082 12.2394 20.7619L11.0786 21.9441C12.2794 23.1232 14.2202 23.1232 15.4211 21.9441L14.2603 20.7619ZM12.2394 20.7619C11.6914 20.2239 11.6914 19.358 12.2394 18.82L11.0786 17.6378C9.86927 18.8252 9.86927 20.7567 11.0786 21.9441L12.2394 20.7619ZM12.2394 18.82C12.7957 18.2737 13.7039 18.2737 14.2603 18.82L15.4211 17.6378C14.2202 16.4587 12.2794 16.4587 11.0786 17.6378L12.2394 18.82ZM14.2603 18.82C14.8082 19.358 14.8082 20.2239 14.2603 20.7619L15.4211 21.9441C16.6304 20.7567 16.6304 18.8252 15.4211 17.6378L14.2603 18.82ZM20.6242 15.6956L21.4196 16.4767L22.5804 15.2945L21.785 14.5134L20.6242 15.6956ZM15.4211 18.82L17.8078 16.4767L16.647 15.2944L14.2603 17.6377L15.4211 18.82ZM17.8078 16.4767L18.6032 15.6956L17.4424 14.5134L16.647 15.2945L17.8078 16.4767ZM16.647 16.4767L18.2379 18.0387L19.3987 16.8565L17.8078 15.2945L16.647 16.4767ZM21.785 14.5134C21.4266 14.1616 21.0998 13.8383 20.7993 13.6131C20.4791 13.3732 20.096 13.1716 19.6137 13.1716V14.8284C19.6145 14.8284 19.619 14.8273 19.6395 14.8357C19.6663 14.8466 19.7183 14.8735 19.806 14.9391C19.9969 15.0822 20.2326 15.3112 20.6242 15.6956L21.785 14.5134ZM18.6032 15.6956C18.9948 15.3112 19.2305 15.0822 19.4215 14.9391C19.5091 14.8735 19.5611 14.8466 19.5879 14.8357C19.6084 14.8273 19.6129 14.8284 19.6137 14.8284V13.1716C19.1314 13.1716 18.7483 13.3732 18.4281 13.6131C18.1276 13.8383 17.8008 14.1616 17.4424 14.5134L18.6032 15.6956Z"></path>
    </svg>
    <input placeholder="Password" title="Password" name="log_pass" type="password" class="input_field" id="password_field" required>
  </div>

  <i id="pass_err"></i>

  <button title="Sign In" type="submit" class="sign-in_btn" name="log_btn">
    <span>Sign In</span>
  </button>

  <div class="separator">
    <hr class="line">
    <span>Or</span>
    <hr class="line">
  </div>
  <button title="Sign In" type="submit" class="sign-in_ggl">
    <svg height="18" width="18" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <path d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" id="A"></path>
      </defs>
      <clipPath id="B">
        
      </clipPath>
      <g transform="matrix(.727273 0 0 .727273 -.954545 -1.45455)">
        <path fill="#fbbc05" clip-path="url(#B)" d="M0 37V11l17 13z"></path>
        <path fill="#ea4335" clip-path="url(#B)" d="M0 11l17 13 7-6.1L48 14V0H0z"></path>
        <path fill="#34a853" clip-path="url(#B)" d="M0 37l30-23 7.9 1L48 0v48H0z"></path>
        <path fill="#4285f4" clip-path="url(#B)" d="M48 48L17 24l-4-3 35-10z"></path>
      </g>
    </svg>
    <span>Sign In with Google</span>
  </button>
  <button title="Sign In" type="submit" class="sign-in_apl">
    <svg preserveAspectRatio="xMidYMid" version="1.1" viewBox="0 0 256 315" height="20px" width="16px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
      <g>
        <path fill="#ffffff" d="M213.803394,167.030943 C214.2452,214.609646 255.542482,230.442639 256,230.644727 C255.650812,231.761357 249.401383,253.208293 234.24263,275.361446 C221.138555,294.513969 207.538253,313.596333 186.113759,313.991545 C165.062051,314.379442 158.292752,301.507828 134.22469,301.507828 C110.163898,301.507828 102.642899,313.596301 82.7151126,314.379442 C62.0350407,315.16201 46.2873831,293.668525 33.0744079,274.586162 C6.07529317,235.552544 -14.5576169,164.286328 13.147166,116.18047 C26.9103111,92.2909053 51.5060917,77.1630356 78.2026125,76.7751096 C98.5099145,76.3877456 117.677594,90.4371851 130.091705,90.4371851 C142.497945,90.4371851 165.790755,73.5415029 190.277627,76.0228474 C200.528668,76.4495055 229.303509,80.1636878 247.780625,107.209389 C246.291825,108.132333 213.44635,127.253405 213.803394,167.030988 M174.239142,50.1987033 C185.218331,36.9088319 192.607958,18.4081019 190.591988,0 C174.766312,0.636050225 155.629514,10.5457909 144.278109,23.8283506 C134.10507,35.5906758 125.195775,54.4170275 127.599657,72.4607932 C145.239231,73.8255433 163.259413,63.4970262 174.239142,50.1987249"></path>
      </g>
    </svg>
    <span>Sign In with Apple</span>
  </button>
  <p class="note">Terms of use &amp; Conditions</p>
</form>

	<!-- <p>Forgot password? <a href="user-reset">Reset Here</a></p> -->
	<p class="txt">Do not have an account? Sign Up <a href="register">HERE</a></p>
</div>


<!-- WORKING ON USER LOGIN -->


<?php 
if (isset($_POST['log_btn'])) {

    function clean($value){
    require("connect.php");
    $value=trim($value);
    $value=htmlspecialchars($value);
    $value=htmlentities($value);
    $value=stripslashes($value);
    $value=mysqli_real_escape_string($conn,$value);
    return $value;
}

$mail=clean(strtolower($_POST['log_mail']));
$password=clean($_POST['log_pass']);
$user_password=hash('sha256', $password);



// CHECKING FOR ADMIN MODES
$mode_log="select * from admin_table where level='super_admin' ";
$mode_sql=$conn->query($mode_log);
$mode_row=$mode_sql->fetch_assoc();



// CHECKING FOR VALID USER
$sel_log="select * from user_table where email='$mail' && password='$user_password' ";
$log_sql=$conn->query($sel_log);
$row=$log_sql->fetch_assoc();

if($row>=1 && $row['access']=='granted'){

        $_SESSION['logged']=1;
        $_SESSION['id']=$row['id'];
        $_SESSION['member_id']=$row['member_id'];
        $_SESSION['user']=$row['username'];
        $_SESSION['email']=$row['email'];
        // $_SESSION['email_status']=$row['email_status'];
        // $_SESSION['reg_date']=$row['reg_date'];
        // $_SESSION['ref_id']=$row['ref_id'];
        // $_SESSION['ref_wallet']=$row['ref_wallet'];

         ?>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#resp").fadeIn(3000);
                $("#resp").html("<b>Login success!</b>");
                $("#resp").css({"background":"palegreen"});
                setTimeout(function(){
                    $("#resp").fadeOut(1000);
            },2000);
                setTimeout(function(){
                   window.location="user/dashboard.php";
            },2000);
        });
    </script>
<?php 
}

elseif($row>=1 && $row['access']=='granted'){ ?>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#resp").fadeIn(1000);
                $("#resp").html("<b>Login unavailable, try again later!!</b>");
                $("#resp").css({"background":"rgba(150,0,0,1)"});
                setTimeout(function(){
                    $("#resp").fadeOut(1000);
            },2000);
        });
    </script>
<?php 
}
elseif($row>=1 && $row['access']=='denied'){ ?>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#resp").fadeIn(1000);
                $("#resp").html("<b>Account Activation Required!!</b><br>Contact Support");
                $("#resp").css({"background":"rgba(150,0,0,1)"});
                setTimeout(function(){
                    $("#resp").fadeOut(1000);
            },2000);
        });
    </script>
<?php 
}
else{ ?>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#resp").fadeIn(1000);
                $("#resp").html("<b>Incorrect email or password!!</b>");
                $("#resp").css({"background":"rgba(150,0,0,1)"});
                setTimeout(function(){
                    $("#resp").fadeOut(1000);
            },2000);
        });
    </script>

<?php
}
}
?>


<!-- END OF WORKING ON USER LOGIN -->


<!-- STYLING THE LOGIN FORM -->

<style type="text/css">
/* 
#resp{
	padding: 20px;
	font-size: 17px;
	position: absolute;
	top: 30px;
	z-index: 9999;
	display: none;
	right: 20px;
	color: white;
}

#big_menu,#small_menu{
	visibility: hidden;
}

.api{
	display: none;
} */

/*SIGN UP STYLING FOR CSS */
/*SIGN UP STYLING FOR CSS */

/* .login_div{
	margin-top: 60px;
}

.form_div,.login_div{
	background: ;
	height: 100%;
	margin:;
	text-align: center;
}

.form_div form,.login_div form{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	align-content: center;
	text-align: center;
	padding: ;
	background:;
}



.form_div form div,.login_div form div{
	display: flex;
	margin: 10px;
	align-items: center;
	align-content: center;
	box-shadow: 2px 4px 4px 4px rgba(0, 0, 0, 0.06);
	border-radius: 30px;
	border: 0.5px solid #ffd000;
	height: 49px;
}

.form_div form input[type="text"],.form_div form input[type="password"],.form_div form input[type="email"],.form_div form input[type="number"],.login_div form input[type="password"],.login_div form input[type="email"],.login_div form input[type="text"]{
	height: 45px;
	width: 400px;
	border-top-right-radius: 30px;
	border-bottom-right-radius: 30px;
	background: white;
	color: ;
	border: 0px;
	outline: none;
	font-size: 16px;
}

.form_div p a,.login_div p a{
	color: #ff9900;
	text-decoration: none;
}

.form_div form button,.login_div form button{
	padding: 17px;
	background: #ffd000;
	color: black;
	font-size: 17px;
	border: 0px;
	outline: none;
	border-radius: 30px;
	width: 150px;
	cursor: pointer;
}

.form_div form div i,.login_div form div i{
	background: white;
	padding: 18px;
	border-top-left-radius: 30px;
	border-bottom-left-radius: 30px;
	color: #ffd000;
} */

/* SHOW AND AND PASSWORD FOR FORM */
/* 
#hidep,#showp{
	padding: 0px;
	background: none;
	color: black;
	margin-left: -28px;
	margin-right: 12px;
	font-size: 21px;
	cursor: pointer;
}

#hidep{
	display: none;
}

#frm_tip{
	font-size: 30px;
	color: #ffd000;
	font-weight: ;
	font-family: arial;
}

@media only screen and (max-width: 500px){
.form_div form input[type="text"],.form_div form div select,.form_div form input[type="password"],.form_div form input[type="number"],.form_div form input[type="email"],.login_div form input[type="password"],.login_div form input[type="email"],.login_div form input[type="text"]{


   }

   .login_div form div{
   	width: 90%;
   }
} */

</style>

<script type="text/javascript">
	// START OF JAVASCRIPT VALIDATION FOR LOGIN FORM

     function valid(){
          if(document.login_form.login_mail.value==""){
               document.getElementById("mail_err").innerHTML="please enter email";
               document.getElementById("mail_err").style.color="red";
               setTimeout(function(){
                    document.getElementById("mail_err").innerHTML="";
               },3000);
               return false;
          }
          else if(document.login_form.login_pass.value.length<6){
               document.getElementById("pass_err").innerHTML="password should be 6 or more";
               document.getElementById("pass_err").style.color="red";
               setTimeout(function(){
                    document.getElementById("pass_err").innerHTML="";
               },3000);
               return false;
          }

          return true;
     }


 //HIDE AND SHOW PASSWORD
$(document).ready(function(){

$("#hidep,#showp").click(function(){
     $("#hidep,#showp").toggle();
     $("#pass1").attr("type","text");
});
$("#hidep").click(function(){
     $("#pass1").attr("type","password");
});

});

// END OF  JAVASCRIPT VALIDATION FOR LOGIN FORM
</script>


<?php //require 'footerx.php'; ?>