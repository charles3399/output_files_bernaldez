<?php
//create a variable named createFile and use fopen function to write a file, the second parameter is write
$createFile = fopen("Exam_02\hello_there.php", "w");

$line_one = "<?php\n"; //the contents of the hello_there.php file

fwrite($createFile, $line_one); //use fwrite function to write the contents to the created php file

$line_two = "\n//This is a comment\n"; //the contents of the hello_there.php file

fwrite($createFile, $line_two); //use fwrite function to write the contents to the created php file

$line_three = "\necho 'This is a test page!';\n"; //the contents of the hello_there.php file

fwrite($createFile, $line_three); //use fwrite function to write the contents to the created php file

$line_four = "echo 'Exam number two!';\n"; //the contents of the hello_there.php file

fwrite($createFile, $line_four); //use fwrite function to write the contents to the created php file

$line_five = "\n//This is the end of a comment"; //the contents of the hello_there.php file

fwrite($createFile, $line_five); //use fwrite function to write the contents to the created php file

fclose($createFile); //closes the newly created file