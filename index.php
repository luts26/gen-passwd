<!DOCTYPE html>
<html>
<head>
	<title>Generator password</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="discription" content="">
	<meta name="keywords" content="">
	<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/master/dist/clipboard.min.js"></script>
	<script src="js/jquery-2.2.1.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<link href="style/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form name="generator" action="" method="post">
		<table>
			<th colspan="2">Generator password</th>
			<tr>
				<td>
					<select size="1" name="size" id="x">
						<?php
							for($i = 4; $i <= 32; $i++){
								if($i == 6){
									echo "<option selected='selected' value='$i'>$i</option>";
									continue;
								}
								echo "<option value='$i'>$i</option>";
							}
						?>
				   </select>
				</td>
				<td>
					<p>Password length</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="pass_can">The password can be:</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input disabled type="checkbox" name="option1" value="1" checked>
					<label>Numerals</label><br>
					<input id = 'cb2' type="checkbox" name="option2" value="1" checked>
					<label for="cb2">Letters</label><br>
					<input id = 'cb3' type="checkbox" name="option3" value="1">
					<label for="cb3">Capital letters</label><br>
					<input id = 'cb4' type="checkbox" name="option4" value="1">
					<label for="cb4">Special chars</label><br>
					<input id = 'cb5' type="checkbox" name="option5" value="1">
					<label for="cb5">Russian letters</label>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" name="generate" value="Generate">
					<input type="reset" value="&nbsp; Clear &nbsp;">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>Password:</h3>
					<input id="pass" type="text" name="text">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button class="btn-clipboard" data-clipboard-target="#pass">Copy</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>