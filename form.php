<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta http-equiv="Content-Type" content="text/html charset=utf-8"/>
	<style>
		input[type=text], select {
                          width: 20%;
                          padding: 12px 20px;
                          margin: 8px 0;
                          display: inline-block;
                          border: 1px solid #ccc;
                          border-radius: 4px;
                          box-sizing: border-box;
                        }
                        input[type=submit]{
                        	background-color: orange;
                          width: 15%;
                          padding: 12px 20px;
                          margin: 8px 0;
                          display: inline-block;
                          border: 1px solid #ccc;
                          border-radius: 4px;
                          box-sizing: border-box;
                        }
                        input[type=submit]:hover{
                        	background-color: cadetblue;
                        }
	</style>
	
</head>
<body>
	<form action="search.php" method="GET">
		<input type="text" name="query"/>
		<input type="submit" name="submit" value="Search"/>
	</form>
</body>
</html>