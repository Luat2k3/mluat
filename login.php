<!DOCTYPE html> 
<html>
    <head>
		<meta charset="utf8">
        <title>Web ban vat lieu xay dung</title>
		<style>
			body {background: #99ccff;}
		</style>
    </head>
    <body>
		<?php
	if(isset($_POST['dn']))
	{
		$tendn=$_POST['tdn'];
		$matkhau=$_POST['pw'];
		$kn=mysqli_connect('localhost', 'root', '', 'minhluat') or die('Không kết nối được');
		mysqli_query($kn, "SET NAMES 'utf8'");
		$caulenh="SELECT username FROM account WHERE username='$tendn'";
		$caulenh1="SELECT password FROM account WHERE password='$matkhau'";
		if (!$tendn || !$matkhau) 
		{
			echo "<script>
					alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!');
					window.history.back();
				</script>";
		}
		else
		{
			$kq=mysqli_query($kn, $caulenh);
			if(!$dong=mysqli_fetch_array($kq))
			{
				echo "<script>
						alert('Tên đăng nhập không tồn tại! Vui lòng nhập lại.');
						window.history.back();
					</script>";
			}
			else
			{
				$kq1=mysqli_query($kn, $caulenh1);
				if(!$dong1=mysqli_fetch_array($kq1))
				{
					echo "<script>
						alert('Mật khẩu không đúng! Vui lòng nhập lại.');
						window.history.back();
					</script>";
				}
				else
				{
					echo "<script>
						alert('Đăng nhập thành công');
						location.href = '/website/index.php';
					</script>";
				}
			}
		}
		mysqli_close($kn);
	}
	?>
		<table>
        <form action="login.php" method="POST">
            <table colspan="2" align="center" border="0">
				<center><h1>Đăng nhập</h1>
				<tr><td>Tên đăng nhập: <td><input type="text" name="tdn"><br></td></tr>
				<tr><td>Mật khẩu: <td><input type="password" name="pw"><br></td></tr>
			</table>
			<h3></h3>
				<center><input type="submit" value="Đăng nhập" name="dn"><br>
				<center><a href='quenmatkhau.php'>Quên mật khẩu?</a><br>
				<tr><td align="center">Hoặc tạo tài khoản mới. <a href='dangky.php'>Đăng ký</a></td></tr>
        </form>
		</table>
    </body>
</html>