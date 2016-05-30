
//php mysql 在浏览器输入用户名，去数据库查询。查到则显示在浏览器，查不到则显示空。
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
        <title>查询页面</title>
    </head>

	 <body>

<form name="form" method="post" action="select.php">	
			<center>
            <table>
                <tr>
                    <td><br>请输入用户名：<input type="text" name="username"></td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td><br><input type="submit"  value="查询">    <input type="reset" value="重置"></td>
                     
                </tr>
				</br>
				<br>
					<br>
					输入用户名能够查询到密码，如果不知道请使用sql注入测试
            </table>
			</center>
        </form>
</body>
</html>
