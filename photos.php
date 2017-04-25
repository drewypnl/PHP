<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
<?php
/*Script name: displayGallery
* Description: Dsplays all the photos that are stored
 * in a specified directory
 */

$dir = "C:/Users/Steve/Documents/Pics/";
$dh = opendir($dir);
while($filename = readdir($dh))
{
    $filepath = $dir.$filename;
    if(is_file($filepath) and ereg("/.jpg$",$filename))
    {
        $gallery[] = $filepath;
    }
}
sort($gallery);
foreach ($gallery as $image)
{
    echo "<hr />";
    echo ",img src='$image'' /><br />";
}

?>
</body>
</html>

