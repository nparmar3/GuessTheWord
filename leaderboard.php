<html>

<head>
<title> leaderboard </title>
<style>
table {
  border-collapse: collapse; 
  border-spacing: 0;
  width: 40%;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  font-size: 35;
  border: 5px dashed orange;
  background-color: yellow; 	
  border-style: dashed;
}
h2 {
	font-size: 35;
	font-weight: italics;
	text-align: center;
	font-family: bookman old style;
}
#err {
	color: red;
	font-family: bookman old style;
	font-size: 15px;
	text-align: center;
}
</style>
</head>

<body>

<?php
require('GuessWord.php');
echo '<h2> YOUR SCORE is: ' .$score. '</h2><br>' ;
?>
<h2>
<table>
	<tr> 
		<th> Name </th>
		<th> Score </th>
	</tr>
	<tr>
		<td> Sandy </td>
		<td> 25000 </td>
	</tr>
	<tr>
		<td> Fish #1 </td>
		<td> 2100 </td>
	</tr>
	<tr>
		<td> Patrick </td>
		<td> 1800 </td>
	</tr>
	<tr>
		<td> Pearl </td>
		<td> 1000 </td>
	</tr>
	<tr>
		<td> Fish #2 </td>
		<td> 900 </td>
	</tr>
</table>
</h2>
<div id="err">
<br><br><br>
*Due to the high number of players, we are unable to update the leaderboard at this time. Please check back after a few days. 
<br><br>
</div>

</body>

</html>