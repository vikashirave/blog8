<h1>SignUp page</h1>
<form action="add" method="POST">
@csrf
<input type="text" name="name"> <br> <br>
<input type="text" name="username"> <br> <br>
<input type="email" name="email"> <br> <br>
<input type="password" name="password" > <br> <br>
<input type="password" name="cpassword"> <br><br>
<button type="submit">Sign Up</button>
</form>
