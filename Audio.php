<?php
if(isset($_POST['submit']) && $_POST['submit'] =="click here")
{

	$folder="student/";
	$audio_path=$folder.basename($_FILES["uploadfile"]["name"]);

if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$audio_path)) 
{
		echo "uploaded successfully.";

		saveAudio($audio_path);
//		displayAudios();
}

//$filename = $_FILES["uploadfile"]["name"];
//$tempname = $_FILES["uploadfile"]["tmp_name"];
//$folder="student/". $filename;
//echo $folder;

//move_uploaded_file($tempname, $folder);
//echo "<img src='$folder' height='100' width='100'/>";
}



//function displayAudios()
//{
	//$conn=mysqli_connect('localhost','root','','useregistration');
	//if ($conn) 
	//{
		//echo("hi");
	//}

	//$query="select from  audio";

	//	$r=mysqli_query($conn,$query);

	//	while ($row=mysqli_fetch_array($r)) 
	//	{
	//		echo $row['name'];
	//		echo "<br>";
	//	}
	//	mysqli_close($conn);
//}

function saveAudio($filename)

{
	$conn=mysqli_connect('localhost','root','','useregistration');
	if ($conn) 
	{
		//echo("hi");
	}

	$query="insert into audio(Name) values('{$filename}')";

	mysqli_query($conn,$query);
	if (mysqli_affected_rows($conn)>0)
	 {
		echo "audio file path save in datavase.";
	}
	mysqli_close($conn);

}
?>
<!--<?php

//echo "hi";


?>-->