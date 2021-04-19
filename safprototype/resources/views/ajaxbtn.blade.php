<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="frm1" method="post" onsubmit="return greeting()">

<?php
   

   
   $query = mysqli_query($result,"INSERT INTO 'mdl_user_enrolments' values (0,0,'$enrolid2','$userid2',1616382842,0,'$userid2',162138283,16328388");
    while($rows = mysqli_fetch_array($query))
    { 
        $userid2 = $rows['userid'];
        $enrolid2 = $rows['enrolid'];

	function insert() 
	{ 	 
  		if (isset($_GET['enrolid'])){
  			$userid2 = mysql_real_escape_string($_GET['userid']);
  			$enrolid2 = mysql_real_escape_string($_GET['enrolid']);
  			$order = mysql_query("INSERT INTO 'mdl_user_enrolments' values (0,0,'$enrolid2','$userid2',1616382842,0,'$userid2',162138283,16328388");
    }       
	}
    
    {insert();}
     
?>

</body>
</html>