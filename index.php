<!DOCTYPE HTML>


<head>
	<title>About Me</title>
	<link rel="stylesheet" type="text/css" href="theme.css"/>
</head>

<body class="index">
	<div class="wrapper">

			<nav>
				<a href="index.php?page=index1" title="Home">Home</a>
				<a href="index.php?page=schedule" title="Click to view my class schedule">Class Schedule</a> 
				<a href="index.php?page=contact" title="My contacts">Contact<a/>
			</nav>
						
			<article>
				<?include $_GET["page"].".php";?>
			</article>

	</div>
		
</body>

