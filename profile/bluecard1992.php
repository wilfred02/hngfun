<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo $send_to=$_POST['send_to'];
        echo $send_from=$_POST['send_from'];
        echo $subject=$_POST['subject'];
        echo $body=$_POST['body'];

        $config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

         $URL="sendmail.php?password=$password&subject=$body&body=$body&to=$send_to";
        header("location: $URL");
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>bluecard1992</title>
	<style>
	    body{
               background: #403737;
			}
		div{
			margin: 0;

		}
		#mypix{
			float: left;
			width: 50%;

		}
		img{
			border-radius: 30%;
		}
		#mydetail{
			float: right;
			width: 50%;
			text-align: center;
			color:#F4EEEE;
		}

		.myName{
			color: #F4EEEE;
			text-align: center;
			font-style: italic;
		}
		h4{margin-top:20%}

        .contact_form{
            text-align: center;
            margin-left: 20px;
            margin-bottom: 30px;
        }
        .input{
            width: 300px;
            height: 30px;
        }
	</style>
</head>
<body>
<div>
   <div id="mypix">
   	 <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/17342946_1210785139019486_1925490870085940056_n.jpg?_nc_eui2=v1%3AAeGms8tFiTUdWJruQnnKrwKo4I1jB0hljlTtGtpjv3IZ_Moy7NCYhqNSj3YaLj64xw4gd6LxLKAFN8UHaFkwMdq-exS1BYNm1be5_X2mW2b-Tg&oh=736aacd816e83a28eb5e4729320a8672&oe=5A24C9A4" height="40%" width="60%">
   	 <div class="myName">
	   	 <h2>ECHEZONA OKAFOR</h2>
	   	 <h5>WEB DEVELOPER</h5>
	  </div>
   </div>

   <div id="mydetail">
   	   <h4>
   	   	   MY NAME IS ECHEZONA OKAFOR FROM ANAMBRA STATE, NIGERIA. <br><br>
   	   	   I CODE WITH HTML, CSS, JAVASCRIPT, ANGULAR JS AND PHP.<br>
   	   	   I HAVE WORK ON PROJECT SUCH AS EDUCATIONAL PORTAL, AGRONOMY SYSTEM AND
   	   	   E-CLEARANCE SYSTEM FOR STUDENT. <br><br>
   	   	   I AM AIMING AT BEING ONE OF THE BEST WEB DEVELOPER.
           <br><br>
            email:bluecard1992@yahoo.com
            <br><br>
            github username: alactic

            <br><br>
               slack: bluecard1992
            <br><br>
               <a href="https://github.com/alactic/hng/blob/master/hng-app.apk" style="color:red"> DOWNLOAD ANDROID APK</a>
   	   </h4>

       <div class="contact_form">
           <hr>
           <h1 style="color:firebrick">SEND YOUR EMAIL</h1>
           <form action="bluecard1992.php" method="post">
               <h3>SEND TO:<br> <input type="email" name="send_to" placeholder="RECIEVER'S EMAIL" class="input" required></h3>

               <h3>SEND FROM:<br> <input type="email" name="send_from" placeholder="SENDER'S EMAIL" class="input" required></h3>

               <h3>MESSAGE SUBJECT:<br> <input type="text" name="subject" placeholder="ENTER YOUR EMAIL SUBJECT" class="input" required></h3>

               <h3>MESSAGE BODY:<br> <textarea type="text" name="body" placeholder="ENTER YOUR MESSAGE HERE" rows="20" cols="40" required></textarea></h3>


               <button type="submit" name="send">SEND</button>
           </form>
       </div>
   </div>
   </div>
<br>


</body>
</html>