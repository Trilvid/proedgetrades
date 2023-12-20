<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sprout capitals Email Sender</title>
<!--Linking ck editor--->


<!--style sheet--->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@300&family=Righteous&family=Staatliches&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!---Viewport--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

<!---shortcut icon--->
<!--<link rel="shortcut icon" type="image/jpg" href="img/logo.png">-->
<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
  </head>
  <body>
    <div class="input-div">
        <center><!--<img src="img/logo.png" id="imgx">--><h1>Email Sender</h1>
          <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
        </center>

<form action="phpmailer/send.php" method="post">
    Sender Name<br>
    <input type="text" name="sender_name" placeholder="Sender's Name" class="half" required><br>

    <!-- Sender Email<br>
    <input type="text" name="sender" placeholder="Sender's Email" class="half" required><br> -->

    Subject<br>
    <input type="text" name="subject" placeholder="Message Subject" class="half" required><br>

    Recipient's Email<br>
    <textarea name="recipient" placeholder="mail1@mail.com, &#10;mail2@mail.com" rows="4" cols="80" required></textarea>
    <br>

    Main Content<br>
    <textarea name="remails" id="remails" placeholder="Message" rows="4" cols="80" required></textarea>
    <script>
      CKEDITOR.replace('remails');
    </script>

    <br><br>
<center>
    <button type="submit" name="button" id="btn1">Send Mail</button>
    <button type="reset" name="button" id="btn2"> Reset Form</button>
</center>
</form>
  </div>
  </body>
</html>
