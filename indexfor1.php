<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<style media="screen">
    .container{ width: 970px; padding-bottom: 10px; height: auto; background-color: #1E90FF}
    .menu{display: grid; height: 70px; grid-template-columns: 240px; margin: 10px; margin-bottom: 20px;}
    .menu ul{width: 900px; display: flex; list-style: none;}
    .menu li{ background-color:white; border-style: none; margin: 20px; padding: 10px 50px;font-family:monospace; box-shadow: 3px 3px 5px gray; order: 1;}
    .menu input{border-style: none; background-color:white; color: #00BFFF; font-style: oblique;}


    .welcome h1{color: white; font-family:sans-serif; text-align: center; text-shadow: 4px 2px gray;}
    .welcome h2{color: white; font-family:sans-serif; text-align: center; padding-top: 30px;}

    .book_serach{text-align: center;}
    .book_serach input{padding: 15px 100px 15px 100px; margin-bottom: 30px;}
    .book_serach button{padding: 15px 10px 15px 10px;}

    </style>
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
					<li><input type="button" onClick="location.href = 'http://localhost/logout.php';" value="LOGOUT"></li>
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
