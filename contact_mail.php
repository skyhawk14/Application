<?php  
	$fp = fopen('feedback.txt', 'a');//opens file in append mode  
	fwrite($fp, "UserName: ".$_POST["userName"]);  
	fwrite($fp, "Email: ".$_POST["userEmail"]);  
	fwrite($fp, "Subject: ".$_POST["subject"]);  
	fwrite($fp, "Message: ".$_POST["content"]);  
	fwrite($fp, "\n");  
	
	fclose($fp);  
?>
<script type="text/javascript">
	var form = document.getElementById("frmContact");
	form.style.display = "none";
	document.getElementById("loader-icon").style.display = "block";
</script>
	
