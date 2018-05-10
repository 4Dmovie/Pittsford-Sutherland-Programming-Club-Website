<?php
$link = mysqli_connect("fdb15.biz.nf","2268644_cp","sutherland2015","2268644_cp") or die("Error ".mysqli_error($link));
if($_POST['upload']){

$fileExistsFlag = 0; 
$fileName = $_FILES['Filename']['name'];
$codeName = $_FILES['codefile']['name'];
$target = "files/";		
                        $fileTarget = $target.$fileName;
                        $codeTarget = $target.$codeName;
                        $tempFileName = $_FILES["Filename"]["tmp_name"];
                        $codeFileName = $_FILES["codefile"]["tmp_name"];
                        $fileDescription = $_POST['Description'];	
                        $result = move_uploaded_file($tempFileName,$fileTarget);
                        $mps = move_uploaded_file($codeFileName,$codeTarget);
                        $datetime = date("Y-m-d H:i:s");
                        $ptitle = $_POST['rtitle'];
                        $pauthor = $_POST['rauthor'];
                        $type = $_POST['categories'];
                        $tl = $_POST['timeline'];
                        $pyr = $_POST['ryr'];
                        $pmd = $_POST['rmd'];
if($fileName && $codeName){
      
                /* 
                *	Checking whether the file already exists in the destination folder 
                */
                $query = "SELECT filename FROM ts WHERE filename='$fileName'";	
                $result = $link->query($query) or die("Error : ".mysqli_error($link));
                while($row = mysqli_fetch_array($result)) {
                        if($row['filename'] == $fileName) {
                                $fileExistsFlag = 1;
                        }		
                }
                /*
                * 	If file is not present in the destination folder
                */
                if($fileExistsFlag == 0) { 
                        
                        /*
                        *	If file was successfully uploaded in the destination folder
                        */
                        if($result) { 
                                echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
                                $query = "INSERT INTO ts(yr, md, timeline, type, author, title, date, filepath,filename,description, code) VALUES ('$pyr', '$pmd', '$tl', '$type', '$pauthor', '$ptitle', '$datetime', '$fileTarget','$fileName','$fileDescription', '$codeTarget')";
                                $link->query($query) or die("Error : ".mysqli_error($link));	
                                header("location: success.php");
                        }
                        else {			
                                echo "Sorry !!! There was an error in uploading your file";			
                        }
                }
                /*
                * 	If file is already present in the destination folder
                */
                else {
                        echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
                }
}

else if ($fileName && (!$codeName)){
      
                /* 
                *	Checking whether the file already exists in the destination folder 
                */
                $query = "SELECT filename FROM ts WHERE filename='$fileName'";	
                $result = $link->query($query) or die("Error : ".mysqli_error($link));
                while($row = mysqli_fetch_array($result)) {
                        if($row['filename'] == $fileName) {
                                $fileExistsFlag = 1;
                        }		
                }
                /*
                * 	If file is not present in the destination folder
                */
                if($fileExistsFlag == 0) { 
                        
                        /*
                        *	If file was successfully uploaded in the destination folder
                        */
                        if($result) { 
                                echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
                                $query = "INSERT INTO ts(yr, md, timeline, type, author, title, date, filepath,filename,description) VALUES ('$pyr', '$pmd', '$tl', '$type', '$pauthor', '$ptitle', '$datetime', '$fileTarget','$fileName','$fileDescription')";
                                $link->query($query) or die("Error : ".mysqli_error($link));	
                                header("location: success.php");
                        }
                        else {			
                                echo "Sorry !!! There was an error in uploading your file";			
                        }
                }
                /*
                * 	If file is already present in the destination folder
                */
                else {
                        echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
                }

}

else if ($codeName){
         $query = "INSERT INTO ts(yr, md, timeline, type, author, title, date, description, code) VALUES ('$pyr', '$pmd', '$tl', '$type', '$pauthor', '$ptitle', '$datetime', '$fileDescription', '$codeTarget')";
         $link->query($query);	
         header("location: success.php");
}
else{
        $query = "INSERT INTO ts(yr, md, timeline, type, author, title, date, description) VALUES ('$pyr', '$pmd', '$tl', '$type', '$pauthor', '$ptitle', '$datetime', '$fileDescription')";
         $link->query($query);	
         header("location: success.php");
}
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h3>PHP connect to MySQL</h3>
<h3> table success </h3>
<a href = "http://sutherland-programming-club.co.nf"><h3>Go to website page</h3></a>

<form method="post" action="" enctype="multipart/form-data">
<select name="categories">
    <option name = "ts" value="ts">tutorial and schedule(ts)</option>
    <option value="wa">warm-up(wa)</option>
    <option value="gp">groups and project(gp)</option>
    <option value="snap">snapshots(snap)</option>
  </select>
  <br><br>
    <p>Title:</p> <input type="text" name="rtitle"> <br>
    <p>Author:</p> <input type="text" name="rauthor"> <br>
    <p>Year (ie. 2017): </p> <input type="text" name="ryr"> <p>MonthDay (ie. Nov26): </p><input type="text" name="rmd">
    <p>Explanation File :</p>
    <input type="file" name="Filename">
    <p>Code File :</p>
    <input type="file" name="codefile">
    <p>Timeline(or Link) ie. link to hackerrank or other tutorials:</p>
    <textarea rows="20" cols="50" name="timeline"></textarea>
    <p>Description</p>
    <textarea rows="50" cols="170" name="Description"></textarea>
    <br/>
    <input TYPE="submit" name="upload" value="Submit"/>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
echo "List of all the things: <br><br>";
$query = "SELECT * FROM ts ORDER BY id DESC";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)){
  $sid = $row['id'];
  $dellink = "<a href=\"delete.php?id=".$sid."\">Delete</a>";
 
  echo $row['date'] . " " . $row['type'] . " ". $row['title'] . " " . $row['author'] . " " . $dellink;
  echo "<br />";
}
?>
<?php
mysqli_close($link);
?>

</body>
</html>