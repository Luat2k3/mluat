<?php
    include("connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Website bán vật liệu xây dựng</title>
        <style type="text/css" >          
            div.menu_ngang a
            {
                color:blue;
                margin-left: 10px;
                margin-right: 10px;
                text-decoration: none;
                font-size:20px;
            }
            div.menu_ngang a:hover
            {
                color:red
            }
        </style>
    </head>
    <body>
        <center>
            <table width="1500px">
                <tr><h1>Website bán vật liệu xây dựng </h1></tr>
				<tr><div class="wrap">
					<form action="" class="search" method="post">
					<input type="text" class="searchTerm" placeholder="Bạn muốn tìm gì ? ">
					<button type="submit" class="searchButton">Tìm kiếm</button>
					</form>
				</div></tr>
                <tr colspan="3" height="40px">
                        <div class="menu_ngang">
                            <a href="">Trang chủ</a>
                            <a href="http://localhost:8080/website/login.php">Đăng nhập</a>
                            <a href="http://localhost:8080/website/dangky.php">Đăng ký</a>
                            <a href="">Sản phẩm</a>
                            <a href="">Liên hệ</a>
                        </div>
                </tr>
                <tr>
                    <td width="300px">
						<?php

						?>
					</td>
                    <td width="1200px">Cột phải</td>
                </tr>
                <tr>
                    <td colspan="3">Footer</td>
                </tr>
            </table>
        </center>
    </body>
</html>