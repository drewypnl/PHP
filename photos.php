<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
<h1>My Photos</h1>
<?php
/*Script name: displayGallery
* Description: Displays all the photos that are stored
 * in a specified directory
 */
//mkdir("C:/MAMP/htdocs/mynewdir");
$dir = "C:/MAMP/htdocs/Pics/";
$dh = opendir($dir);
while($filename = readdir($dh))
{
    $filepath = $dir.$filename;
    if(is_file($filepath) and preg_match("/.jpg$",$filename))
    {
        $gallery[] = $filepath;
    }
}
sort($gallery);
foreach ($gallery as $image)
{
    echo "<hr />";
    echo "<img src='$image' /><br />";
}
?>
</body><footer>Finished List</footer></html>



