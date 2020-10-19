<h1>Add Emp name</h1>
<form action="add" method="POST">
@csrf
<input type="text" name="id" placeholder="Enter ID"> <br> <br>
<input type="text" name="name" placeholder="Entername"> <br><br>
<input type="text" name="designation" placeholder="enterdes"> <br> <br>
<button type="submit">Add EMP</button>
</form>