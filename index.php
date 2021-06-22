<?php
$response = '';
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$response = 'Email is not valid!';
	} else if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$response = 'Please complete all fields!';
	} else {
		$to      = 'ehsanfalahati2006@gmail.com';
		$from    = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['msg'];
		$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
		$response = 'تمرین ارسال شد';		
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML &amp; CSS</title>
<link rel="shortcut icon" href="https://designbyparsa.com/per/icon.png">   
    <script>
    window.alert("در قسمت جلسه دوم، حتماً فیلم آموزش نحوه آپلود کردن فایل در گیت هاب را مشاهده کنید و لینک تمرین خود را در محل قرار داده شده ارسال کنید.")
    </script>
    <style>
        @keyframes blink {
            0% {color: red;text-shadow: 0 0 20px darkred;}
            25% {color: yellow;text-shadow: 0 0 20px orange;}
            50% {color: blue;text-shadow: 0 0 20px darkblue;}
            100% {color: red;text-shadow: 0 0 20px darkred;}
        }
        @keyframes alert{
            0% {color:black;}
            50% {color:red;font-size: 21px;}
            100% {color:black;}
        }
        @font-face{
            font-family: Lalezar-Regular;
            src: url(Lalezar-Regular.ttf);
        }
        @font-face{
            font-family:Vazir;
            src: url(Vazir.ttf);
        }
        body{
            background-image: url("light_bumpy_paper-web_background.jpg");
            background-repeat: repeat;
        }
        h1{
            text-align: center;
            animation: blink 5s infinite;
            margin: 50px;
            font-size: 100px;
            font-family: sans-serif;
        }
        a{
            font-family: sans-serif;
        }
        p{
            direction: rtl;
            font-family:Vazir;
            font-size: 20px;
        }
        h2{
            direction: rtl;
            font-family: Lalezar-Regular;
            font-size: 33px;
            text-shadow: 0 0 25px blue;

        }
        section{
            border-style: solid;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            background-color: cyan;
        }
        footer{
            background-color: green;
            height: 30px;
            font-size: 17px;
            text-align: center;
            padding-top: 10px;
        }
        div{
            color: white;
            font-family:Vazir;
        }
        .link{
            margin-left: 60px;
            font-size: 18px;
            transition: all 0.5s;
            font-family:Vazir;
        }
        .link:hover{
            font-size: 20px;
            opacity: 0.5;
        }
        pre code {
            background-color: #eee;
            border: 1px solid #999;
            display: block;
            padding: 20px;
            width: 450px;
            margin-left: 300px;
            font-size: 15px;
            line-height: 20px;
           color: #a67f59;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
       }
        .ex1{
	        color: #2f9c0a;
        }
        .important{
            animation: alert 1.5s infinite;
        }
input,textarea,select {
	outline:0;
	font-family: Tahoma, Geneva, sans-serif;
}
.contact input[type="text"], .contact input[type="email"] {
	display: block;
	margin-top: 15px;
	padding: 15px;
	border: 1px solid #dfe0e0;
	width: 500px;
    font-family: Vazir;
    direction: rtl;
}
.contact input[type="text"]:focus, .contact input[type="email"]:focus {
	border: 1px solid #c6c7c7;
}
.contact textarea {
	resize: none;
	margin-top: 15px;
	padding: 15px;
	border: 1px solid #dfe0e0;
	width: 500px;
	height: 30px;
    font-family: Vazir;
    direction: rtl;
}
.contact textarea:focus {
	border: 1px solid #c6c7c7;
}
.contact input[type="submit"] {
	display: block;
	margin-top: 15px;
	padding: 15px;
	border: 0;
	background-color: #518acb;
	font-weight: bold;
	color: #fff;
	cursor: pointer;
	width: 100px;
}
.contact input[type="submit"]:hover {
	background-color: #3670b3;
}

    </style>
</head>

<body>
    <h1>« HTML &amp; CSS »</h1>
    
    <section>
        <h2>جلسه اول</h2>
        <p>&star; فیلم آموزش ساخت اکانت گیت هاب  :</p>
        <a href="https://drive.google.com/file/d/1hQcAqjVow_KRmMlySNimzWwKZaAoRk5a/view?usp=sharing" class="link" target="_blank">https://drive.google.com/file/d/1hQcAqjVow_KRmMlySNimzWwKZaAoRk5a/view?usp=sharing</a>
        <hr color="black">
        <p>&star; لینک سایت گیت هاب :</p>
        <a href="https://github.com/" class="link" target="_blank">https://github.com/</a>
        <hr color="black">
        <p>&star; اسلاید های تدریس :</p>
        <a href="https://drive.google.com/file/d/1XaI4EFcfstD6-xroCNtQ4LPo3uDoXjSL/view?usp=sharing" class="link" target="_blank">https://drive.google.com/file/d/1XaI4EFcfstD6-xroCNtQ4LPo3uDoXjSL/view?usp=sharing</a>
        <hr color="black">
        <p>فیلم <strong>شبکۀ جهانی وب چیست؟</strong> :</p>
        <a href="https://drive.google.com/file/d/1QPYzG3zy819wISzD3RKjo3JWoAKDBxEd/view?usp=sharing" class="link" target="_blank">https://drive.google.com/file/d/1QPYzG3zy819wISzD3RKjo3JWoAKDBxEd/view?usp=sharing</a>
        <hr color="black">
        <p>&star; راه ارتباطی :</p>
        <a href="mailto:ehsanfalahati2006@gmail.com" class="link" target="_blank">ehsanfalahati2006@gmail.com</a>
    </section>
    
    <section>
        <h2>جلسه دوم</h2>
        <p>&star; لینک فایل ضبط جلسه :</p>
        <a href="https://drive.google.com/file/d/198I7EpcI6_W8_qGm0L7LGUNX43vsQ7SD/view?usp=sharing" class="link" target="_blank">https://drive.google.com/file/d/198I7EpcI6_W8_qGm0L7LGUNX43vsQ7SD/view?usp=sharing</a>
        <hr color="black">
        <p>&star; کد تمرین اول :</p>
       <pre>
        <code>
      1       <span class="ex1">&lt;!doctype html&gt;</span>
      2       <span class="ex2">&lt;html dir="rtl"&gt;</span>
      3       <span class="ex1">   &lt;head&gt;</span>
      4       <span class="ex2">      &lt;meta charset="utf-8"&gt;</span>
      5       <span class="ex1">      &lt;title&gt;1 تمرین&lt;/title&gt;</span>
      6       <span class="ex2">   &lt;/head&gt;</span>
      7       <span class="ex1">   &lt;body&gt;</span>
      8       <span class="ex2">      &lt;p&gt;اولین کدی که نوشته ام !&lt;/p&gt;</span>
      9       <span class="ex1">   &lt;/body&gt;</span>
     10       <span class="ex2">&lt;/html&gt;</span>
        </code>
       </pre>
        <hr color="black">
        <p class="important">&star; آپلود کردن تمرین ها در سایت گیت هاب :</p>
        <a href="https://drive.google.com/file/d/1TxQ8G4WH3TUDQy3H3Fda0NCOYqyhmtjH/view?usp=sharing" class="link" target="_blank">https://drive.google.com/file/d/1TxQ8G4WH3TUDQy3H3Fda0NCOYqyhmtjH/view?usp=sharing</a>
        <hr color="black">
        <p>&star; لینک تمرین آپلود شده :</p>
        <a href="https://html-course-mh.github.io/Learn/%D8%AA%D9%85%D8%B1%DB%8C%D9%86-1.html" class="link" target="_blank">https://html-course-mh.github.io/Learn/تمرین-1.html</a>
         <hr color="black">
         <p>&star; برای راحتی کار همینجا یه محلی برای فرستادن تمرین درست کردم که دیگه لازم به ایمیل زدن نباشه :)</p>
        
        
        
   <form class="contact" method="post" action="contact.php">
	   <input type="email" name="email" placeholder="آدرس ایمیل شما" required>
	   <input type="text" name="name" placeholder="نام" required>
	   <input type="text" name="subject" placeholder="Subject" required>
	  <textarea name="msg" placeholder="لینک تمرین را در اینجا قرار دهید" required></textarea>
	  <input type="submit" title="ارسال تمرین">
   </form>
        <?php if ($response): ?>
		<p><?php echo $response; ?></p>
		<?php endif; ?>
        
        
    </section>
    
    <section>
        <h2>جلسه سوم</h2>
    </section>
    
    <section>
        <h2>جلسه چهارم</h2>
    </section>
    
    <section>
        <h2>جلسه پنجم</h2>
    </section>
    
    <section>
        <h2>جلسه ششم</h2>
    </section>
    
    <section>
        <h2>جلسه هفتم</h2>
    </section>
    
    <footer>
       <div>&copy;2021 <a href="https://mohebanolhaidar.ir/">Mohebanolheidar</a> cultural group. All rights reserved</div>
    </footer>
    
    <script src="js/contact-form-script.js"></script>
    </body>
</html>
