<h1>Sign UP</h1>
<form action="add" method="POST">
@csrf
<input type="text" name="id" placeholder="Enter ID"> <br> <br>
<input type="text" name="name" placeholder="Entername"> <br><br>
<input type="text" name="username" placeholder="Username"> <br> <br>
<input type="email" name="email" placeholder="email"> <br> <br>
<input type="password" name="password" placeholder="password" > <br> <br>
<button type="submit">Add EMP</button>
</form>
<h1>OR</h1>
<a href="/login">Login</a>