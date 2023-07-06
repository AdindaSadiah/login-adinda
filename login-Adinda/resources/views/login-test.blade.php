<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login css responsive</title>
  <link rel='stylesheet' href='http://weloveiconfonts.com/api/?family=fontawesome'>
<link rel='stylesheet' href='https://meyerweb.com/eric/tools/css/reset/reset.css'>
<link rel="stylesheet" href="{{ asset('css//style.css') }}">


</head>
<body>
<!-- partial:index.partial.html -->
<body>

    <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

        <p>Not a member? <a href="#" class="blue">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>
    <div class="bottom">  <h3><a href="http://softouchz.com/">www.softouchz.com</a></h3></div>
    
    
    
    
    
  </body>
<!-- partial -->
  
</body>
</html>
