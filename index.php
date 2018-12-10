<!DOCTYPE html>
<html>
<head>
	<title>
		FORM
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<div class="ab">
</div>
 		<div class="bg">
			<form  action="include/signup.php" method="POST">
				<ab class="ab1">REGISTER</ab>
				<br/>
ENTER YOUR NAME: <input type="text" name="Name" placeholder="NAME">
<br/><br/>
E-mail: <input type="email" name="Email" placeholder="xyz@gmail.com"> &nbsp; &nbsp;
Password: <input type="Password" name="Pwd" maxlength="8"><br/>
<br/>
DATE-OF-BIRTH:
 <input type="date" name="DOB"> &nbsp; &nbsp;
 <br><br>
 BRANCH: &nbsp;
<select name="Branch">
    <option value="CSE">CSE</option>
    <option value="IT">IT</option>
    <option value="ECE">ECE</option>
    <option value="EN">EN</option>
  </select>
  &nbsp; &nbsp;
 ROLL NO: &nbsp; <input type="number" name="Roll_No" min="1" maxlength="10" required>
  <br/>
 <br/>
  HOSTELLER:&nbsp;
   <input type="radio" name="Hosteller" value="YES" checked> YES &nbsp; &nbsp;
  <input type="radio" name="Hosteller" value="NO">NO<br><br>
 COURSES:
  <input type="checkbox" name="Courses" value="HTML5">HTML5 &nbsp;
<input type="checkbox" name="Courses" value="CSS3">CSS3 &nbsp;
  <input type="checkbox" name="Courses" value="JAVA SCRIPT">JAVA SCRIPT &nbsp;
<input type="checkbox" name="Courses" value="PHP">PHP &nbsp;
  <input type="checkbox" name="Courses" value="NODE JS">NODE JS &nbsp;
  <input type="checkbox" name="Courses" value="ANGULAR 6">ANGULAR6 &nbsp";
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
		</div>
</body>
</html>