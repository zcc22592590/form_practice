<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>week3_form</title>
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
</head>
<body>
	<form name="form1" action="a.php" method="POST">
		請輸入帳號：
		<input type="text" name="user" size="20" maxlength="20">
		<br>
		請輸入密碼：
		<input type="password" name="password" size="20" value="123456">
		<br>
		請輸入您的問題：
		<br>
		<textarea name="question" rows="20" cols="40">enter something...
		</textarea>


		<table>
			<tr>
				<td class="c_title">公告對象：</td>
				<td class="c_content">
					<input type="checkbox" name="c3[]" value="1">教職員
					<input type="checkbox" name="c3[]" value="2">學生
					<input type="checkbox" name="c3[]" value="3">學校首頁</td>
			</tr>
			<tr>
				<td class="c_title">公告類型：</td>
				<td class="c_content">
					<input type="radio" name="c3[]" value="1">演講
					<input type="radio" name="c3[]" value="2">研討會
					<input type="radio" name="c3[]" value="3">徵才
					<input type="radio" name="c3[]" value="4">招生
					<input type="radio" name="c3[]" value="5">其他</td>
			</tr>
			<tr>
				<td class="c_title">主旨:</td>
				<td class="c_content">
					<input type="text" name="c3[]" size="50"></td>
			</tr>
			<tr>
				<td class="c_title">截止日期：</td>
				<td class="c_content">
					<select name=“c5”>
						<?php

						for($i=2021; $i>=1911; $i--){
							echo "<option value=\“$i\”>$i</option>";
						}
						?>
					</select>年

					<select name="c5">
						<?php

						for($i=1; $i<=12; $i++){
							echo "<option value=\“$i\”>$i</option>";
						}

						?>
					</select>月

					<select name="c5">
						<?php

						for($i=1; $i<=31; $i++){
							echo "<option value=\“$i\”>$i</option>";
						}
						?>
					</select>日 </td>
			</tr>
			<tr>
				<td class="c_title">連結網址:</td>
				<td class="c_content">
					<input type="text" name="ttt" size="50" value="ex:a123456@gmail.com"></td>
			</tr>
			<tr>
				<td class="c_title">公告內容：</td>
				<td class="c_content">
					<textarea name="test" rows="20" cols="50"></textarea></td>
			</tr>
			<tr>
				<td class="c_content" colspan="2" align="center" >
					<button class="c_button" type="submit">確定送出</button>
					<button class="c_button" type="reset">重新填寫</button></td>
			</tr>
		</table>
	</form>
</body>
</html>