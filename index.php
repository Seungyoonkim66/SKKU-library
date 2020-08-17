<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="index.css">
		<meta charset="utf-8">
		<title>2017310301 project</title>
	</head>
	<body>
		<div class="container">
			<div class="welcome">
				<h2>Welcome to</h2>
				<h1>SKKU LIBRARY</h1>
			</div>
			<div class="menu">
				<ul>

					<li><input type="button" onClick="location.href = 'http://localhost/joinus.php';" value="JOIN US"></li>
					<li><input type="button" onClick="location.href = 'http://localhost/login.php';" value="LOGIN"></li>

				</ul>
			</div>
			<div class="menu">
				<ul>
					<li><input type="button" onClick="location.href = 'http://localhost/booklist.php';" value="BOOKS"></li>
					<li><input type="button" onClick="location.href = 'http://localhost/review.php';" value="REVIEW"></li>
					<li><input type="button" onClick="location.href = 'http://localhost/reserve.php';" value="RESERVE"></li>
					<li><input type="button" onClick="location.href = 'http://localhost/room.php';" value="ROOM"></li>
				</ul>
			</div>

			<form class="book_serach" action="book.php" method="post">
				<input type="text" name="wanted" placeholder="enter the title or the author of the book you want to search" >
				<button type="submit" name="serachbtn">SEARCH</button>
			</form>

		</div>


	</body>
</html>
