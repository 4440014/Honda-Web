<?php
// Assigning value about your server to variables for database connection
$servername= "localhost";
$mydb= "honda";
$username= "root";
$password= "";


$con = mysqli_connect($servername, $username, $password, $mydb); 

if($_POST)
{ 
// $_FILES["file"]["error"] is HTTP File Upload variables $_FILES["file"] "file" is the name of input field you have in form tag.

    if ($_FILES["file"]["error"] > 0)
    {
        // if there is error in file uploading 
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

    }
    else
    {
        // check if file already exit in "images" folder.
        if (file_exists("images/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {  //move_uploaded_file function will upload your image.  if you want to resize image before uploading see this link http://b2atutorials.blogspot.com/2013/06/how-to-upload-and-resize-image-for.html
            if(move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]))
            {
            // If file has uploaded successfully, store its name in data base
                $query_image = "insert into acc_images (image, status, acc_id) values ('".$_FILES['file']['name']."', 'display','')";
                if(mysqli_query($query_image))
                {
                    echo "Stored in: " . "images/" . $_FILES["file"]["name"];
                }
                else
                {
                    echo 'File name not stored in database';
                }
            }
        }
    }
}
?>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label>
            <input type="file" name="file" accept="image/*" onchange="loadFile(event)"/> 
            <br/>
            <input type="submit" name="submit" value="Submit" />
            <div>
                <img id="output" height="150px" width="150px" />
            </div>
        </form>
    </body>



    <script>
      var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output');
          output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
      };
    </script>

</html>

