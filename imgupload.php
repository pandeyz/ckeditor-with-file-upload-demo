<?php
if (file_exists("upload/" . $_FILES["upload"]["name"]))
{
	echo $_FILES["upload"]["name"] . " already exists. ";
}
else
{
	$funcNum = $_REQUEST['CKEditorFuncNum'];

	move_uploaded_file($_FILES["upload"]["tmp_name"],
	"upload/" . $_FILES["upload"]["name"]);

	// Path to shown on frontend
	$url = 'upload/' . $_FILES["upload"]["name"];
	
	// Message to be shown on frontend
	$message = 'Successful';

	echo '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
}
?>