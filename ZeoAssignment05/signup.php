<!DOCTYPE html>
<html>
<style>
	header{
		background-color:#2f4f4f;
		color:#fff;
		padding: 40px;
	}
	form {
		font-size: 25px;
		background-color: #bebebe;
		padding: 60px;
		display: inline-block;
		float:right;
		margin-right: 680px;
		margin-top: 150px;	}
	footer {
		color: #fff;
		background-color:#2f4f4f;
		margin-top:600px;
		text-align: center;
		padding: 50px;
	}
</style>
<head>
	<title>Sign up</title>
	<header>
	<h1 align="center">Sign up</h1>
	</header>
</head>
<body>
	<form action="open.php">
		<center>
		<table>
			<tr>
				<td>Email Address</td>
				<td>
					<input type="text" name="Email Address">
				</td>
			</tr>
			<tr>
				<td>Confirm Email Address</td>
				<td>
					<input type="text" name="Confirm Email Address">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="Password">
				</td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td>
					<input type="password" name="Confirm Password">
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="submit" value="sigup">
				</td>
			</tr>
		</table>
	</form>
	</center>


	<footer>
		<p>&copyzeo</p>
	</footer>

</body>
</html>
