<html>
    <head>
		<meta charset="utf8">
        <title>Đăng ký tài khoản</title>
		<style>
			body {background: #99ccff;}
		</style>
    </head>
    <body>
		<?php
	if(isset($_POST['dk']))
	{
		$email=$_POST['dce'];
		$tendn=$_POST['tdn'];
		$matkhau=$_POST['pw'];
		$rematkhau=$_POST['pwa'];
		$ngaysinh=$_POST['ns'];
		$kn=mysqli_connect('localhost', 'root', '', 'minhluat') or die('Không kết nối được');
		mysqli_query($kn, "SET NAMES 'utf8'");
		$caulenh="INSERT INTO account(email, username, password, ngaysinh) VALUES ('$email','$tendn','$matkhau','$ngaysinh')";
		$caulenhkt1="SELECT email FROM account WHERE email='$email'";
		$caulenhkt2="SELECT username FROM account WHERE username='$tendn'";
		if($matkhau==$rematkhau)
		{
			$kqkt1=mysqli_query($kn, $caulenhkt1);
			if($dong1=mysqli_fetch_array($kqkt1))
			{
				echo "<script>
						alert('Email này đã được đăng ký, vui lòng đăng ký với một email khác');
						window.history.back();
					</script>";
			}
			else
			{
				$kqkt2=mysqli_query($kn, $caulenhkt2);
				if($dong2=mysqli_fetch_array($kqkt2))
				{
					echo "<script>
						alert('Tên đăng nhập này đã được đăng ký, vui lòng đăng ký với một tên đăng nhập khác');
						window.history.back();
					</script>";
				}
				else
				{
					if($kq=mysqli_query($kn, $caulenh))
					{
						echo "<script>
						alert('Đăng ký thành công!');
						window.history.back();
					</script>";
					}
				}
			}
		}
		else 
		{
			echo "<script>
				alert('Mật khẩu không khớp');
				window.history.back();
				</script>";
		}
		mysqli_fetch_array($kq);
		mysqli_close($kn);
	}
	?>
		<table align="center" border="0">
			<h2 align="center"><b>Đăng ký khách hàng<b></h2>
		<form action="dangky.php" method="POST"
			<table align="center" colspan="2" border="0">
				<tr><td><b>Email</b><td><input type="text" name="dce"></td></td></tr>
				<tr><td><b>Tên đăng nhập</b><td><input type="text" name="tdn"></td></td></tr>
				<tr><td><b>Mật khẩu</b><td><input type="password" name="pw"></td></td></tr>
				<tr><td><b>Nhập lại mật khẩu</b><td><input type="password" name="pwa"></td></td></tr>
				<tr><td><b>Ngày sinh</b><td><input type="text" name="ns"></td></td>
			</table>
				<h3></h3>
				<center><td><input type="submit" value="Đăng ký" name="dk"><br>
				<h4></h4>
				<tr><td>Đã có tài khoản?  </td></tr><a href="login.php">Đăng nhập</a>
		</form>
		</table>
    </body>
</html>