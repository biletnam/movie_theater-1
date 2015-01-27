﻿<!-- HTML5で開発します -->
<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<!-- ↓ここには全ページ共通のcss↓ -->
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/common.css">
		<!-- ↑ここには全ページ共通のcss↑ -->

		<!-- ↓ここにはそのページ用のcss↓ -->
		<link rel="stylesheet" href="css/menu.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>管理者メニュー | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">
			
			<div id="main">

				<h1>管理者メニュー</h1>

				<div id="maininner">

					<h3 id="select">右のメニューから選んでください。</h3>

				</div>

			</div>

			<div id="menu">

				<h1>メニュー</h1>

				<div id="menuinner">
					
					<ul>
						<li><a href="#menu.php">トップページ</a></li>
						<li><a href="#moviedata_edit.php">映画情報登録・編集</a></li>
						<li><a href="#schedule_edit.php">上映スケジュール登録・編集</a></li>
						<li><a href="#output_pdf.php">月別予約状況PDF出力</a></li>
					<ul>
					
				</div>

			</div>
			
		</div>

	</body>

</html>