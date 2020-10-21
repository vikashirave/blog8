<h1>User login</h1>
<form action="login" method="POST">
@csrf
<input type="text" name="username">  <br> <br>
<input type="password" name="password"> <br> <br>
<button type="submit">Login</button>
</form>