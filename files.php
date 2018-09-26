<html>
<body>
<?
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<a href='$entry'>$entry\n</a><br>";
        }
    }

    closedir($handle);
}

?>
</body>
</html>