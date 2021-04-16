<?php
    require "functions.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $thisList = $_POST["list"];
        $thisShortListName = $_POST["shortname"];
        $thisLongListName = $_POST["longname"];
        $thisPart = $_POST["part"];
        $thisInterface = $_POST["interface"];
    }
    else {
        $thisList = "";
        $thisShortListName = "";
        $thisLongListName = "";
        $thisPart = "";
        $thisInterface = "";
    }
    
    $title = "TOSEC DAT to MAME Software List Translator";
    $dats_dir = dats_dir();
    
    echo "<!DOCTYPE HTML>\n";
    echo "<html>\n";

    echo "<head>\n";
    echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">\n";
    echo "<title>$title</title>\n";
    echo "</head>\n\n";
    
    echo "<body>\n";
    echo "<div style=\"width: 50%; margin: auto; text-align: center;\">\n";
    echo "<h1>$title</h1>\n";
    
    echo "<form method=\"post\">\n";
    echo "<h2>Select TOSEC List</h2>\n";
    echo "<select id=\"lists\" name=\"list\">\n";
    
    $filelist = scandir($dats_dir);
    
    foreach($filelist as $file) {
        $path = input_path($file);
        
        if(!in_array($file, restricted_files()) && is_file($path)) {
            if($_SERVER["REQUEST_METHOD"] == "POST" && $path == $thisList)
                echo "<option value=\"$path\" selected>$file</option>\n";
            else
                echo "<option value=\"$path\">$file</option>\n";
        }
    }
    
    echo "</select>\n";
    echo "<h2>Short List Name</h2>\n";
    echo "<input type=\"text\" style=\"width:300px;\" id=\"shortname\" name=\"shortname\" value=\"$thisShortListName\"><br><br><br>\n";
    echo "<h2>Long List Name</h2>\n";
    echo "<input type=\"text\" style=\"width:300px;\" id=\"longname\" name=\"longname\" value=\"$thisLongListName\"><br><br><br>\n";
    echo "<h2>Part Name</h2>\n";
    echo "<input type=\"text\" id=\"part\" name=\"part\" value=\"$thisPart\"><br><br><br>\n";
    echo "<h2>Interface Name</h2>\n";
    echo "<input type=\"text\" id=\"interface\" name=\"interface\" value=\"$thisInterface\"><br><br><br>\n";
    echo "<input type=\"submit\" value=\"Make Software List\">\n";
    echo "</form>\n";
    echo "</div>\n";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        makeList($thisList, $thisShortListName, $thisLongListName, $thisPart, $thisInterface);
    }
    
    echo "</body>";
?>
