<?php
$file = fopen("data.php", "r");
//$r=fopen("out.txt","w");
//echo fread($file, filesize("data.php"));
//echo fwrite($r, "Hello World");
//echo file_get_contents("data.php");
//file_put_contents("out.txt","Padma Vasanthi");
//print_r(file("data.php"));
// filesize()
//fclose($r);
echo "File size: " . filesize("data.php") . " bytes<br>";
$f = "data.php";
echo "File type: " . filetype($f) . "<br>";

echo "Last accessed: " . date("Y-m-d H:i:s", fileatime($f)) . "<br>";

echo "Last modified: " . date("Y-m-d H:i:s", filemtime($f)) . "<br>";

echo "Created time: " . date("Y-m-d H:i:s", filectime($f)) . "<br>";
echo "Permissions: " . substr(sprintf('%o', fileperms($f)), -4) . "<br>";

// fileowner()
echo "Owner ID: " . fileowner($f) . "<br>";

// filegroup()
echo "Group ID: " . filegroup($f) . "<br>";

// fileinode()
echo "Inode: " . fileinode($f) . "<br>";

// copy()
copy("data.php", "out.txt");
echo "File copied<br>";

// rename()
rename("out.txt", "newname.txt");
echo "File renamed<br>";

// is_file()
if (is_file("newname.txt")) {
    echo "It is a file<br>";
}

// mkdir()
mkdir("testFolder");
echo "Folder created<br>";

// is_dir()
if (is_dir("testFolder")) {
    echo "It is a directory<br>";
}

// unlink()  (delete file)
unlink("newname.txt");
echo "File deleted<br>";

// rmdir()  (delete folder)
rmdir("testFolder");
echo "Folder deleted<br>";
function filecheck($d){
    if(is_dir($d)){
        $files=scandir($d);
        $files=array_diff($files,array('.','..'));
        foreach($files as $file){
            if(is_file("$d/$file")){
                echo $file."<br>";
            }
            elseif(is_dir("$d/$file")){
                //echo $file."<br>";
                filecheck("$d/$file");
            }
        }
    }
}
filecheck("cse3");
//$fi = fopen("newfile.txt", "x");
//fwrite("$fi", "Created using x mode");
/*
$fi = fopen("newfile.txt", "r+");
fwrite($fi, "Start-");   // writes at beginning
rewind($fi);

$fi = fopen("newfile.txt", "w+");
fwrite($fi, "New Content");
rewind($fi);

$fi = fopen("newfile.txt", "a+");
fwrite($fi, "New Content");
rewind($fi);*/
$fi = fopen("b.txt", "x+");
fwrite($fi, "Hello X+ Mode");
rewind($fi);




fclose($file);
?>





