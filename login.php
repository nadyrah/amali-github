<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENGIRAAN BMI</title>
	<style>
		#login-form{
			background:pink; 
			border: 3 px solid #eeeee; 
			padding:9px 9px;
 			width:300px; 
 			border-radius:5px;
		}

		h2 {
			color: #F06;
		}
	</style>
</head>
<body bgcolor="lightblue">
	<div align="center">
		<form id="login-form" method="post" action="utama.php">
			<table>
				<center>
					<h2>SISTEM PENGIRAAN BMI</h2>
					<tr>
						<td>ID PENGGUNA : </td>
						<td><input type="text" name="idpengguna" size="10"></td>
					</tr>
					<tr>
						<td>KATA LALUAN : </td>
						<td><input type="text" name="katalaluan" size="15"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="LOG MASUK"></td>
					</tr>
				</center>
			</table>
		</form>
	</div>
</body>
</html>