<!DOCTYPE html>
<html lang="en"> <head>
<title>Practical 3: Add</title>
<meta charset="UTF-8" />
<meta name="author" content="<replace with your name>" /> <link rel="stylesheet" href="styles/style.css" />
<script src="scripts/script.js" defer></script>
</head>
<body>
<?php require_once "inc/menu.inc.php"; ?> <h1>Add a new task</h1>
<!-- Add your HTML here -->
<form action="add-task.php" method="POST">
<input type="text" name="name" placeholder="Enter the task name"  Required/><br>
<button type="submit" class=" begin" value="Begin" >Add Task</button><br>
</form>
</body>
</html>