

<form method="post">
<table border="2">
<tr>
<th>Id :</th>
<td><input type="text" name="txtid"/> </td>
</tr>
<tr>
<th>Name :</th>
<td><input type="text" name="txtname"/> </td>
</tr>
<tr>
<th>Email :</th>
<td><input type="text" name="txtemail"/> </td>
</tr>
<tr>
<th>Password :</th>
<td><input type="password" name="txtpass"/> </td>
</tr>
<tr>

<td><input type="submit" name="btn_sub"/> </td>
<td><input type="submit" name="btn_upd" value="Update"/> </td>
<td><input type="submit" name="btn_del" value="Delate"/> </td>
</tr>

</table>


</form>




<?php
$server="localhost";
$username="root";
$password="";
$database="test";

//insert query
$connect=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['btn_sub'])){
	$id=$_POST['txtid'];
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
$insert=mysqli_query($connect,"insert into register values('$id','$name','$email','$pass');");
	
	if($insert){
	echo"Rigister sucessfully";
	
}
else{
	echo"some thing went wronge";
	
}
	
}

if(isset($_POST['btn_upd'])){
	$id=$_POST['txtid'];
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
$insert=mysqli_query($connect,"update register set name='$name',email='$email',password='$pass' where id='$id'");
	
	if($insert){
	echo"update  sucessfully";
	
}
else{
	echo"Can't be updated";
	
}
	
}


if(isset($_POST['btn_del'])){
	$id=$_POST['txtid'];
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
$insert=mysqli_query($connect,"delete from register where id='$id'");
	
	if($insert){
	echo"  sucessfully deleted ";
	
}
else{
	echo"Can't be delete";
	
}
}


?>