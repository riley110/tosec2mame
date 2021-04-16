<?php
    function restricted_files() {
        return array(".", "..", ".DS_Store", "info.txt");
    }
    
    function dats_dir() {
        return "./dats";
    }
    
    function input_path($dat) {
        return dats_dir() . "/$dat";
    }
    
    function checkVersion($str) {
        $version = "";
        
        if((substr($str, 0, 1) == "v") && is_numeric(substr($str, 1, 2)))
            return $str;
        else if(((substr($str, 0, 4) == "Rev ") || (substr($str, 0, 4) == "rev ")) && is_numeric(substr($str, 4, 5)))
            return $str;
        else
            return "";
    }
    
    function checkDemo($str) {
        $demoFlags = array("demo"=>"Demo",
                           "demo-kiosk"=>"Kiosk Demo",
                           "demo-playable"=>"Playable Demo",
                           "demo-rolling"=>"Rolling Demo",
                           "demo-slideshow"=>"Slideshow Demo");
        
        if(array_key_exists($str, $demoFlags)) {
            return $demoFlags[$str];
        }
        else {
            return "";
        }
    }
    
    function fixName($str) {
        $parts = explode(", ", $str);
        
        if(count($parts) == 2) {
            $part1 = $parts[0];
            $part2 = $parts[1];
                
            return "$part2 $part1";
        }
        
        return $str;
    }
    
    function checkSystem($str) {
        $systemFlags = array("+2", "+2a", "+3", "130XE", "3159", "3164", "A1000", "A1200", "A1200-A4000", "A2000", "A2000-A3000", "A2024", "A2500-A3000UX", "A3000", "A4000", "A4000T", "A500", "A500+", "A500-A1000-A2000", "A500-A1000-A2000-CDTV", "A500-A1200", "A500-A1200-A2000-A4000", "A500-A2000", "A500-A600-A2000", "A570", "A600", "A600HD", "AGA", "AGA-CD32", "Aladdin Deck Enhancer", "C16", "CD32", "CDTV", "Computrainer", "Doctor PC Jr.", "ECS", "ECS-AGA", "Executive", "Mega ST", "Mega-STE", "OCS", "OCS-AGA", "ORCH80", "Osbourne 1", "PIANO90", "PlayChoice-10", "Plus4", "Plus-4", "Primo-A", "Primo-A64", "Primo-B", "Primo-B64", "Pro-Primo", "ST", "STE", "ST-STE", "STE-Falcon", "TT", "TURBO-R GT", "TURBO-R ST", "VS DualSystem", "VS UniSystem", "XL-XE");
        
        if(in_array($str, $systemFlags))
            return $str;
        else
            return "";
    }
    
    function checkVideo($str) {
        $videoFlags = array("CGA", "EGA", "HGC", "MCGA", "MDA", "NTSC", "NTSC-PAL", "PAL", "PAL-60", "PAL-NTSC", "SVGA", "VGA", "XGA");
        
        if(in_array($str, $videoFlags))
            return $str;
        else
            return "";
    }
    
    function checkCountry($str) {
        $countryFlags = array("AE", "AL", "AS", "AT", "AU", "BA", "BE", "BG", "BR", "CA", "CH", "CL", "CN", "CS", "CY", "CZ", "DE", "DK", "EE", "EG", "ES", "EU", "FI", "FR", "GB", "GR", "HK", "HR", "HU", "ID", "IE", "IL", "IN", "IR", "IS", "IT", "JO", "JP", "KR", "LT", "LU", "LV", "MN", "MX", "MY", "NL", "NO", "NP", "NZ", "OM", "PE", "PH", "PL", "PT", "QA", "RO", "RU", "SE", "SG", "SI", "SK", "TH", "TR", "TW", "US", "VN", "YU", "ZA");
        
        return in_array($str, $countryFlags);
    }
    
    function parseCountry($str) {
        if(strlen($str) == 5) {
            $c1 = "";
            $c2 = "";
            
            $str2 = str_replace("-", " ", $str);
            
            if(sscanf($str2, "%s %s", $c1, $c2) == 2 && checkCountry($c1) && checkCountry($c2))
                return "$c1/$c2";
            else
                return "";
        }
        else if(strlen($str) == 2 && checkCountry($str))
            return $str;
        else
            return "";
    }
    
    function checkLanguage($str) {
        $languageFlags = array("ar", "bg", "bs", "cs", "cy", "da", "de", "el", "en", "eo", "es", "et", "fa", "fi", "fr", "ga", "gu", "he", "hi", "hr", "hu", "is", "it", "ja", "ko", "lt", "lv", "ms", "nl", "no", "pl", "pt", "ro", "ru", "sk", "sl", "sq", "sr", "sv", "th", "tr", "ur", "vi", "yi", "zh");
        
        return in_array($str, $languageFlags);
    }
    
    function parseLanguage($str) {
        $numLanguages = -1;
        
        if(strlen($str) == 5) {
            $c1 = "";
            $c2 = "";
            
            $str2 = str_replace("-", " ", $str);
            
            if(sscanf($str2, "%s %s", $c1, $c2) == 2 && checkLanguage($c1) && checkLanguage($c2))
                return "$c1/$c2";
            else
                return "";
        }
        else if(strlen($str) >= 8) {
            $str2 = str_replace("-", " ", $str);
            $str2_explode = explode(" ", $str2);
            
            $numLanguages = 0;
            
            foreach($str2_explode as $str2_part) {
                if(checkLanguage($str2_part))
                    $numLanguages++;
                else
                    break;
            }
            
            if((($numLanguages * 2) + ($numLanguages - 1)) == strlen($str))
                return "$numLanguages Languages";
            else
                return "";
        }
        else if(strlen($str) == 2 && checkLanguage($str))
            return $str;
        else if(strlen($str) >= 2 && sscanf($str, "M%d", $numLanguages) == 1 && $numLanguages <= 10)
            return "$numLanguages Languages";
        else
            return "";
    }
    
    function checkCopyright($str) {
        $copyFlags = array("CW"=>"Cardware",
                           "CW-R"=>"Cardware/Registered",
                           "FW"=>"Freeware",
                           "GW"=>"Giftware",
                           "GW-R"=>"Giftware/Registered",
                           "LW"=>"Licenceware",
                           "PD"=>"Public Domain",
                           "SW"=>"Shareware",
                           "SW-R"=>"Shareware/Registered");
        
        if(array_key_exists($str, $copyFlags)) {
            return $copyFlags[$str];
        }
        else {
            return "";
        }
    }
    
    function checkDev($str) {
        $devFlags = array("alpha"=>"Alpha",
                           "beta"=>"Beta",
                           "preview"=>"Preview",
                           "pre-release"=>"Pre-Release",
                           "proto"=>"Prototype");
        
        if(array_key_exists($str, $devFlags)) {
            return $devFlags[$str];
        }
        else {
            return "";
        }
    }
    
    function checkMedia($str) {
        $mediaFlags = array("Disc", "Disk", "File", "Part", "Side", "Tape");
        
        return in_array($str, $mediaFlags);
    }
    
    function parseMedia($str) {
        $media1 = "";
        $media2 = "";
        $unit1 = "";
        $unit2 = "";
        $unit3 = "";
        
        if(sscanf($str, "%s %s of %s %s %s", $media1, $unit1, $unit2, $media2, $unit3) == 5 && checkMedia($media1) && checkMedia($media2))
            return "$media1 $unit1 of $unit2 $media2 $unit3";
        else if(sscanf($str, "%s %s of %s", $media1, $unit1, $unit2) == 3 && checkMedia($media1))
            return "$media1 $unit1 of $unit2";
        else if(sscanf($str, "%s %s", $media1, $unit1) == 2 && checkMedia($media1))
            return "$media1 $unit1";
        else
            return "";
    }
    
    function validShortNameChar($char) {
        return (($char >= '0') && ($char <= '9')) || (($char >= 'a') && ($char <= 'z')) || ($char == '_');
    }
    
    function validFilenameChar($char) {
        $invalidChars = array('!', '$', '%', '/', ':', '\\');
        
        return (($char >= ' ') && ($char <= '~')) && !in_array($char, $invalidChars);
    }
    
    function MAX_FILENAME_LENGTH() {
        return 127;
    }
    
    function precedents() {
        return array("A", "a", "An", "Da", "Das", "De", "de", "Den", "Der", "Des", "Det", "Die", "Een", "El", "En", "Gli", "Het", "Il", "L", "La", "Las", "Le", "Les", "Lo", "Los", "L'", "Nel", "The", "the", "Une", "Uno");
    }
    
    function validateDat($dat) {
        $setsRead = 0;
        $headerRead = 0;
        
        foreach($dat->children() as $game) {
            $setName = "Set $setsRead";
            
            if($game->getName() != "game") {
                if(!$headerRead && $game->getName() == "header") {
                    $headerRead = 1;
                    continue;
                }
                
                echo "$setName: Invalid set tag " . $game->getName() . ".<br>\n";
                
                return 0;
            }
            else if(!$headerRead && $game->getName() == "game") {
                echo "Header is missing from this DAT file.<br>\n";
                
                return 0;
            }
            
            if(count($game->attributes()) != 1) {
                echo "$setName: Invalid number of game attributes.<br>\n";
                
                return 0;
            }
            
            foreach($game->attributes() as $gameName => $gameValue) {
                if($gameName != "name") {
                    echo "$setName: Invalid set attribute $gameName.<br>\n";
                    
                    return 0;
                }
                
                $setName = $gameValue;
            }
            
            $gameChildStep = 0;
            
            foreach($game->children() as $gameChild) {
                if($gameChildStep == 0 && $gameChild->getName() == "description") {
                    $gameChildStep++;
                }
                else if($gameChildStep == 1 && $gameChild->getName() == "rom") {
                    if(count($gameChild->attributes()) != 5) {
                        echo "$setName: Invalid number of ROM attributes.<br>\n";
                        
                        return 0;
                    }
                    
                    $romAttributeStep = 0;
                    $romAttributeError = 0;
                    
                    foreach($gameChild->attributes() as $romAttributeName => $romAttributeValue) {
                        switch($romAttributeStep) {
                                case 0:
                                    if($romAttributeName != "name")
                                        $romAttributeError = 1;
                                
                                    break;
                                case 1:
                                    if($romAttributeName != "size")
                                        $romAttributeError = 1;
                                
                                    break;
                                case 2:
                                    if($romAttributeName != "crc")
                                        $romAttributeError = 1;
                                
                                    break;
                                case 3:
                                    if($romAttributeName != "md5")
                                        $romAttributeError = 1;
                                
                                    break;
                                case 4:
                                    if($romAttributeName != "sha1")
                                        $romAttributeError = 1;
                                
                                    break;
                                default:
                                    break;
                        }
                        
                        if($romAttributeError) {
                            echo "$setName: Invalid ROM attribute $romAttributeName at position $romAttributeStep.<br>\n";
                        }
                        
                        $romAttributeStep++;
                    }
                }
                else {
                    echo "$setName: Invalid set subtag " . $gameChild->getName() . "at position $gameChildStep.<br>\n";
                    
                    return 0;
                }
            }
            
            $setsRead++;
        }
        
        return 1;
    }
    
    function makeList($list, $shortListName, $longListName, $part, $interface) {
        if(!file_exists($list)) {
            echo "<h1 color=\"red\">Datfile $list does not exist.</h1>";
            return 0;
        }
     
        $dat = simplexml_load_file($list) or die("<h1 color=\"red\">Error opening dat file $list.</h1>");
        
        if(!validateDat($dat)) {
            echo "<h1 color=\"red\">Attamped to load an invalid DAT. Check for errors and fix them.</h1>";
            return 0;
        }
        
        if(!file_exists("./output/"))
            die("<h1 color=\"red\">Output directory does not exist.<h1>");
        
        $exportName = "./output/$shortListName.xml";
        
        $export = fopen($exportName, "w") or die("<h1 color=\"red\">Error creating output file. Do you have the right directory permissions set?</h1>");
        
        $longListName = str_replace("&", "&amp;", $longListName);
        
        fwrite($export, "<?xml version=\"1.0\"?>\n");
        fwrite($export, "<!DOCTYPE softwarelist SYSTEM \"softwarelist.dtd\">\n");
        fwrite($export, "<!--\nThis file was generated directly from a TOSEC data file as available freely on tosecdev.org.\nCredit goes to the TOSECDEV team for building this vast database over the years.\n-->\n");
        fwrite($export, "<softwarelist name=\"$shortListName\" description=\"$longListName\">\n\n");

        $fixmeNum = 0;
        $fixmeParts = "\t<software name=\"_fixme\" supported=\"no\">\n" . "\t\t<description>_FIXME_</description>\n" . "\t\t<year>????</year>\n" . "\t\t<publisher>&lt;unknown&gt;</publisher>\n\n";
        
        $headerRead = 0;
        
        $descriptions = array();
        $filenames = array();
        $shortnames = array();
        $setParts = array();
        $setPartNums = array();

        foreach($dat->children() as $game) {
            if(!$headerRead) {
                $headerRead = 1;
                continue;
            }
            
            $isCompilation = 0;
            $isUnknown = 0;
            
            $elements1_invalid = 0;
            $elements2_first = 0;
            $elements2_invalid = 0;
            
            $gamedescription = str_replace("&", "&amp;", $game->description);
            
            if(strncmp($gamedescription, "ZZZ-UNK-", 8) == 0)
                $isUnknown = 1;
            
            if(!$isUnknown && (strstr($gamedescription, ") &") || strstr($gamedescription, "] &")))
                $isCompilation = 1;
            
            if(!$isCompilation && !$isUnknown) {
                $step_1 = 0;
                $description = "";
                $version = "";
                $demo = "";
                $shortdate = "";
                $fulldate = "";
                $publisher = "";
                $system = "";
                $video = "";
                $country = "";
                $language = "";
                $copyright = "";
                $devstatus = "";
                $mediatype = "";
                $medialabel = "";
                
                $elements1 = explode("(", $gamedescription);
                $elements2 = explode("[", $gamedescription);
                
                array_shift($elements2);
                
                foreach($elements1 as $element) {
                    $nextElement = 0;
                    
                    if($step_1 >= 3)
                        $element = substr($element, 0, strpos($element, ")"));
                    
                    while(!$nextElement && !$elements1_invalid) {
                        switch($step_1) {
                            case 0:
                                $tempdescription = "";
                                
                                $element = rtrim($element, " ");
                                
                                $parts = explode(" - ", $element);

                                foreach($parts as $namepart) {
                                    $parts2 = explode(", ", $namepart, 2);

                                    if(count($parts2) == 2) {
                                        $parts21 = $parts2[0];
                                        $parts22 = $parts2[1];

                                        $parts3 = explode(" ", $parts22, 2);
                                        $part3first = "";
                                        $part3last = "";

                                        if(count($parts3) == 2) {
                                            $part3first = $parts3[0];
                                            $part3last = $parts3[1];
                                            
                                            if(in_array($part3first, precedents())) {
                                                if(($version = checkVersion($part3last)) != "") {
                                                    $tempdescription = $tempdescription . "$part3first $parts21";
                                                }
                                                else {
                                                    $tempdescription = $tempdescription . "$part3first $parts21 $part3last";
                                                }
                                            }
                                            else {
                                                $tempdescription = $tempdescription . $namepart;
                                                //echo "$namepart<br>\n";
                                            }
                                        }
                                        else {
                                            if(in_array($parts22, precedents()) || $parts22 == "I")
                                                $tempdescription = $tempdescription . "$parts22 $parts21";
                                            else {
                                                $tempdescription = $tempdescription . $namepart;
                                                //echo "$namepart<br>\n";
                                            }
                                        }
                                    }
                                    else {
                                        $parts4 = explode(" ", $namepart);
                                        $parts4last = $parts4[count($parts4) - 1];
                                        
                                        if($version == "") {
                                            $tempVersion = checkVersion($parts4last);

                                            if($tempVersion != "") {
                                                $version = $tempVersion;
                                                
                                                array_pop($parts4);
                                                $tempdescription = $tempdescription . implode(" ", $parts4);
                                            }
                                            else {
                                                $tempdescription = $tempdescription . $namepart;
                                            }
                                        }
                                        else {
                                            $tempdescription = $tempdescription . $namepart;
                                        }
                                    }

                                    $tempdescription = $tempdescription . " - ";
                                }

                                $description = chop($tempdescription, " - ");
                                $nextElement = 1;

                                break;
                            case 1:
                                $demo = checkDemo(substr($element, 0, strpos($element, ")")));

                                if($demo != "")
                                    $nextElement = 1;

                                break;
                            case 2:
                                $tempdate = str_replace("x", "?", substr($element, 0, strpos($element, ")")));
                                $tempdate2 = str_replace("-", " ", $tempdate);

                                $year = "";
                                $month = "";
                                $day = "";

                                // can do more with dates!
                                if(sscanf($tempdate2, "%s %s %s", $year, $month, $day) == 3) {
                                    $fulldate = $tempdate;
                                }
                                else if(sscanf($tempdate2, "%s %s", $year, $month) == 2) {
                                    $fulldate = $tempdate;
                                }
                                
                                if(strlen($year) != 4 || !is_numeric(substr($year, 0, 2))) {
                                    $description = $description . "($element";
                                    $nextElement = 1;
                                    $step_1 = 0;
                                    break;
                                }

                                $shortdate = $year;

                                $nextElement = 1;

                                break;
                            case 3:
                                $parts = explode(" - ", $element);

                                if($element == "-")
                                    $publisher = "&lt;unknown&gt;";
                                else if(count($parts) >= 2) {
                                    $publisher = "";
                                    
                                    foreach($parts as $curPublisherPart) {
                                        $publisher = $publisher . fixName($curPublisherPart) . " - ";
                                    }
                                    
                                    $publisher = rtrim($publisher, " - ");
                                }
                                else
                                    $publisher = fixName($element);

                                $nextElement = 1;
                                break;
                            case 4:
                                $system = checkSystem($element);

                                if($system != "")
                                    $nextElement = 1;

                                break;
                            case 5:
                                $video = checkVideo($element);

                                if($video != "")
                                    $nextElement = 1;

                                break;
                            case 6:
                                $country = parseCountry($element);

                                if($country != "")
                                    $nextElement = 1;

                                break;
                            case 7:
                                $language = parseLanguage($element);

                                if($language != "")
                                    $nextElement = 1;

                                break;
                            case 8:
                                $copyright = checkCopyright($element);

                                if($copyright != "")
                                    $nextElement = 1;

                                break;
                            case 9:
                                $devstatus = checkDev($element);

                                if($devstatus != "")
                                    $nextElement = 1;

                                break;
                            case 10:
                                $mediatype = parseMedia($element);

                                if($mediatype != "")
                                    $nextElement = 1;

                                break;
                            case 11:
                                $medialabel = $element;
                                $nextElement = 1;
                                break;
                            case 12:
                            default:
                                $elements1_invalid = 1;
                                break;
                        }
                        if($elements1_invalid) {
                            echo "<b>Warning:</b> invalid description $gamedescription<br>\n";
                            break;
                        }

                        $step_1++;
                    }
                }

                if(!$elements1_invalid) {
                    $step_2 = 0;
                    $cracked = "";
                    $fixed = "";
                    $hacked = "";
                    $modified = "";
                    $pirated = "";
                    $trained = "";
                    $translated = "";
                    $overdump = "";
                    $underdump = "";
                    $virus = "";
                    $baddump = "";
                    $altdump = "";
                    $verified = "";
                    $moreinfo = array();
                    $is_bad = 0;

                    foreach($elements2 as $element) {
                        $nextElement = 0;
                        
                        $element = substr($element, 0, strpos($element, "]"));
                        
                        while(!$nextElement) {
                            switch($step_2) {
                                case 0:
                                    $cracker = "";
                                    $crackNum = -1;

                                    if($element == "cr") {
                                        $cracked = "Cracked";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 3) != "cr " && sscanf($element, "cr%d %s", $crackNum, $cracker) == 2) {
                                        $cracker = substr($element, strpos($element, " ") + 1);
                                        $cracked = "Cracked $crackNum by $cracker";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 3) != "cr " && sscanf($element, "cr%d", $crackNum) == 1) {
                                        $cracked = "Cracked $crackNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 3) == "cr " && sscanf($element, "cr %s", $cracker) == 1) {
                                        $cracker = substr($element, 3);
                                        $cracked = "Cracked by $cracker";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 1:
                                    $fixinfo = "";
                                    $fixNum = -1;

                                    if($element == "f") {
                                        $fixed = "Fixed";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "f " && sscanf($element, "f%d %s", $fixNum, $fixinfo) == 2) {
                                        $fixinfo = substr($element, strpos($element, " ") + 1);
                                        $fixed = "Fixed $fixNum $fixinfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "f " && sscanf($element, "f%d", $fixNum) == 1) {
                                        $fixed = "Fixed $fixNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "f " && sscanf($element, "f %s", $fixinfo) == 1) {
                                        $fixinfo = substr($element, 2);
                                        $fixed = "Fixed $fixinfo";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 2:
                                    $hackinfo = "";
                                    $hackNum = -1;

                                    if($element == "h") {
                                        $hacked = "Hacked";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "h " && sscanf($element, "h%d %s", $hackNum, $hackinfo) == 2) {
                                        $hackinfo = substr($element, strpos($element, " ") + 1);
                                        $hacked = "Hacked $hackNum $hackinfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "h " && sscanf($element, "h%d", $hackNum) == 1) {
                                        $hacked = "Hacked $hackNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "h " && sscanf($element, "h %s", $hackinfo) == 1) {
                                        $hackinfo = substr($element, 2);
                                        $hacked = "Hacked $hackinfo";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 3:
                                    $modInfo = "";
                                    $modNum = -1;

                                    if($element == "m") {
                                        $modified = "Modified";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "m " && sscanf($element, "m%d %s", $modNum, $modInfo) == 2) {
                                        $modInfo = substr($element, strpos($element, " ") + 1);
                                        $modified = "Modified $modNum $modInfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "m " && sscanf($element, "m%d", $modNum) == 1) {
                                        $modified = "Modified $modNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "m " && sscanf($element, "m %s", $modInfo) == 1) {
                                        $modInfo = substr($element, 2);
                                        $modified = "Modified $modInfo";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 4:
                                    $pirate = "";
                                    $pirateNum = -1;

                                    if($element == "p") {
                                        $pirated = "Pirated";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "p " && sscanf($element, "p%d %s", $pirateNum, $pirate) == 2) {
                                        $pirate = substr($element, strpos($element, " ") + 1);
                                        $pirated = "Pirated $pirateNum by $pirate";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "p " && sscanf($element, "p%d", $pirateNum) == 1) {
                                        $pirated = "Pirated $pirateNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "p " && sscanf($element, "p %s", $pirate) == 1) {
                                        $pirate = substr($element, 2);
                                        $pirated = "Pirated by $pirate";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 5:
                                    $trainer = "";
                                    $cheats = -1;
                                    $trainerNum = -1;

                                    if($element == "t") {
                                        $trained = "Trained";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "t " && sscanf($element, "t%d +%d %s", $trainerNum, $cheats, $trainer) == 3) {
                                        $trained = "Trained $trainerNum +$cheats by $trainer";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "t " && sscanf($element, "t +%d %s", $cheats, $trainer) == 2) {
                                        $trained = "Trained +$cheats by $trainer";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "t " && sscanf($element, "t%d +%d", $trainerNum, $cheats) == 2) {
                                        $trained = "Trained $trainerNum +$cheats";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "t " && sscanf($element, "t%d %s", $trainerNum, $trainer) == 2) {
                                        $trained = "Trained $trainerNum by $trainer";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "t " && sscanf($element, "t%d", $trainerNum) == 1) {
                                        $trained = "Trained $trainerNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "t " && sscanf($element, "t %s", $trainer) == 1) {
                                        $trained = "Trained by $trainer";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 6:
                                    $translateInfo = "";
                                    $translateNum = -1;

                                    if($element == "tr") {
                                        $translated = "Translated";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 3) != "tr " && sscanf($element, "tr%d %s", $translateNum, $translateInfo) == 2) {
                                        $translateInfo = substr($element, strpos($element, " ") + 1);
                                        $translated = "Translated $translateNum $translateInfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 3) != "tr " && sscanf($element, "tr%d", $translateNum) == 1) {
                                        $translated = "Translated $translateNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 3) == "tr " && sscanf($element, "tr %s", $translateInfo) == 1) {
                                        $translateInfo = substr($element, 3);
                                        $translated = "Translated $translateInfo";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 7:
                                    $overNum = -1;

                                    if($element == "o") {
                                        $overdump = "Overdumped";
                                        $nextElement = 1;
                                    }
                                    else if(sscanf($element, "o%d", $overNum) == 1) {
                                        $overdump = "Overdumped $overNum";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 8:
                                    $underNum = -1;

                                    if($element == "u") {
                                        $underdump = "Underdumped";
                                        $nextElement = 1;
                                    }
                                    else if(sscanf($element, "u%d", $underNum) == 1) {
                                        $underdump = "Underdumped $underNum";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 9:
                                    $virusinfo = "";
                                    $virusNum = -1;

                                    if($element == "v") {
                                        $virus = "Virus";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "v " && sscanf($element, "v%d %s", $virusNum, $virusinfo) == 2) {
                                        $virusinfo = substr($element, strpos($element, " ") + 1);
                                        $virus = "Virus $virusNum $virusinfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "v " && sscanf($element, "v%d", $virusNum) == 1) {
                                        $virus = "Virus $virusNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "v " && sscanf($element, "v %s", $virusinfo) == 1) {
                                        $virusinfo = substr($element, 2);
                                        $virus = "Virus $virusinfo";
                                        $nextElement = 1;
                                    }
                                    break;
                                case 10:
                                    $badinfo = "";
                                    $badNum = -1;

                                    if($element == "b") {
                                        $baddump = "Bad";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "b " && sscanf($element, "b%d %s", $badNum, $badinfo) == 2) {
                                        $badinfo = substr($element, strpos($element, " ") + 1);
                                        $baddump = "Bad $badNum $badinfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "b " && sscanf($element, "b%d", $badNum) == 1) {
                                        $baddump = "Bad $badNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "b " && sscanf($element, "b %s", $badinfo) == 1) {
                                        $badinfo = substr($element, 2);
                                        $baddump = "Bad $badinfo";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 11:
                                    $altinfo = "";
                                    $altNum = -1;

                                    if($element == "a") {
                                        $altdump = "Alt";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "a " && sscanf($element, "a%d %s", $altNum, $altinfo) == 2) {
                                        $badinfo = substr($element, strpos($element, " ") + 1);
                                        $altdump = "Alt $altNum $altinfo";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) != "a " && sscanf($element, "a%d", $altNum) == 1) {
                                        $altdump = "Alt $altNum";
                                        $nextElement = 1;
                                    }
                                    else if(substr($element, 0, 2) == "a " && sscanf($element, "a %s", $altinfo) == 1) {
                                        $altinfo = substr($element, 2);
                                        $altdump = "Alt $altinfo";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 12:
                                    if($element == "!") {
                                        $verified = "Verified";
                                        $nextElement = 1;
                                    }

                                    break;
                                case 13:
                                default:
                                    array_push($moreinfo, $element);
                                    $nextElement = 1;
                                    break;
                            }

                            $step_2++;
                        }
                    }

                    $description = rtrim($description, " ");
                    
                    $description2 = " (";

                    if($system != "")
                        $description2 = $description2 . "$system, ";

                    if($video != "")
                        $description2 = $description2 . "$video, ";

                    if($country != "")
                        $description2 = $description2 . "$country, ";

                    if($language != "")
                        $description2 = $description2 . "$language, ";

                    if($demo != "")
                        $description2 = $description2 . "$demo, ";

                    if($version != "")
                        $description2 = $description2 . "$version, ";

                    if($fulldate != "")
                        $description2 = $description2 . "$fulldate, ";

                    if($copyright != "")
                        $description2 = $description2 . "$copyright, ";

                    if($devstatus != "")
                        $description2 = $description2 . "$devstatus, ";

                    $partDescription = "";

                    if($mediatype != "")
                        $partDescription = $partDescription . "$mediatype, ";

                    if($medialabel != "")
                        $partDescription = $partDescription . "$medialabel, ";
                    
                    if($cracked != "")
                        $partDescription = $partDescription . "$cracked, ";

                    if($fixed != "")
                        $partDescription = $partDescription . "$fixed, ";

                    if($hacked != "")
                        $partDescription = $partDescription . "$hacked, ";

                    if($modified != "")
                        $partDescription = $partDescription . "$modified, ";

                    if($pirated != "")
                        $partDescription = $partDescription . "$pirated, ";

                    if($trained != "")
                        $partDescription = $partDescription . "$trained, ";

                    if($translated != "")
                        $partDescription = $partDescription . "$translated, ";

                    if($overdump != "") {
                        $partDescription = $partDescription . "$overdump, ";
                        $is_bad = 1;
                    }

                    if($underdump != "") {
                        $partDescription = $partDescription . "$underdump, ";
                        $is_bad = 1;
                    }

                    if($virus != "") {
                        $partDescription = $partDescription . "$virus, ";
                        $is_bad = 1;
                    }

                    if($baddump != "") {
                        $partDescription = $partDescription . "$baddump, ";
                        $is_bad = 1;
                    }

                    if($altdump != "")
                        $partDescription = $partDescription . "$altdump, ";

                    if($verified != "")
                        $partDescription = $partDescription . "$verified, ";

                    foreach($moreinfo as $info) {
                        $partDescription = $partDescription . "$info, ";
                    }

                    $description2 = $description2 . ")";
                    $description2 = str_replace(", )", ")", $description2);

                    $partDescription = trim($partDescription, ", ");

                    if($description2 != " ()")
                        $fullDescription = $description . $description2;
                    else
                        $fullDescription = $description;
                    }
            }
            else {
                if($isUnknown)
                    $fullDescription = "Unknown file \"" . ltrim($gamedescription, "ZZZ-UNK-") . "\"";
                else if($isCompilation)
                    $fullDescription = $gamedescription . " (compilation)";
                
                $shortdate = "????";
                $publisher = "&lt;unknown&gt;";
                $is_bad = 0;
                $partDescription = "";
            }
            
            $descriptionKey = "$fullDescription\\$shortdate\\$publisher";
        
            if($is_bad == 1)
                $badStr = " status=\"baddump\"";
            else
                $badStr = "";
            
            foreach($game->rom as $curRom) {
                $initFilename = strtolower(str_replace("&", "&amp;", $curRom["name"]));
                $size = $curRom["size"];
                $crc = $curRom["crc"];
                $sha1 = $curRom["sha1"];
                
                $filenameChars = str_split($initFilename);
                $filename = "";

                foreach($filenameChars as $fnchar) {
                    if(validFilenameChar($fnchar))
                        $filename = $filename . $fnchar;
                }

                if(array_key_exists("$filename", $filenames)) {
                    $dupNum = $filenames[$filename];
                    $dupNumStr = " ($dupNum)";
                    $dupNumStrLen = strlen($dupNumStr);

                    $fileExt = "." . pathinfo($filename)["extension"];
                    $fileExtLen = strlen($fileExt);

                    $baseFilename = basename($filename, $fileExt);

                    $filenames[$filename]++;

                    $baseFilename = substr($baseFilename, 0, MAX_FILENAME_LENGTH() - $dupNumStrLen - $fileExtLen);
                    $filename = $baseFilename . $dupNumStr . $fileExt;
                }
                else {
                    $fileExt = "." . pathinfo($filename)["extension"];
                    $fileExtLen = strlen($fileExt);

                    $baseFilename = basename($filename, $fileExt);

                    $filenames[$filename] = 1;

                    $baseFilename = substr($baseFilename, 0, MAX_FILENAME_LENGTH() - $fileExtLen);
                    $filename = $baseFilename . $fileExt;
                }
                
                if($elements1_invalid) {
                    $fixmeNum++;
                    
                    $fixmeParts = $fixmeParts . "\t\t<part name=\"$part" . $fixmeNum . "\" interface=\"$interface\">\n" . "\t\t\t<feature name=\"part_id\" value=\"$gamedescription\"/>\n" . "\t\t\t<dataarea name=\"rom\" size=\"$size\">\n" . "\t\t\t\t<rom name=\"$filename\" size=\"$size\" crc=\"$crc\" sha1=\"$sha1\"/>\n" . "\t\t\t</dataarea>\n" . "\t\t</part>\n";
                }
                else {
                    if(array_key_exists($descriptionKey, $setParts)) {
                        $curPartNum = $setPartNums[$descriptionKey] + 1;

                        $curPart = $setParts[$descriptionKey]
                        . "\t\t<part name=\"$part" . $curPartNum . "\" interface=\"$interface\">\n";
                        
                        if($partDescription != "")
                            $curPart = $curPart . "\t\t\t<feature name=\"part_id\" value=\"$partDescription\"/>\n";
                        
                        $curPart = $curPart . "\t\t\t<dataarea name=\"$part\" size=\"$size\">\n"
                        . "\t\t\t\t<rom name=\"$filename\" size=\"$size\" crc=\"$crc\" sha1=\"$sha1\"$badStr/>\n"
                        . "\t\t\t</dataarea>\n"
                        . "\t\t</part>\n";

                        $setParts[$descriptionKey] = $curPart;
                        $setPartNums[$descriptionKey]++;
                    }
                    else {
                        if(array_key_exists($fullDescription, $descriptions)) {
                            $dupDescNum = $descriptions[$fullDescription];
                            $dupDescNumStr = " ($dupDescNum)";

                            $descriptions[$fullDescription]++;

                            $fullDescription = $fullDescription . $dupDescNumStr;
                        }
                        else {
                            $descriptions[$fullDescription] = 1;
                        }
                        
                        $curPart = "\t\t<description>$fullDescription</description>\n" . "\t\t<year>$shortdate</year>\n" . "\t\t<publisher>$publisher</publisher>\n\n" . "\t\t<part name=\"$part" . "1" . "\" interface=\"$interface\">\n";
                        
                        if($partDescription != "")
                            $curPart = $curPart . "\t\t\t<feature name=\"part_id\" value=\"$partDescription\"/>\n";
                        
                        $curPart = $curPart .  "\t\t\t<dataarea name=\"$part\" size=\"$size\">\n"
                        . "\t\t\t\t<rom name=\"$filename\" size=\"$size\" crc=\"$crc\" sha1=\"$sha1\"$badStr/>\n"
                        . "\t\t\t</dataarea>\n"
                        . "\t\t</part>\n";

                        $setParts[$descriptionKey] = $curPart;
                        $setPartNums[$descriptionKey] = 1;
                    }
                }
            }
        }

        foreach(array_keys($setParts) as $curDescKey) {
            $curDescription = strtok($curDescKey, "\\");
            
            $tempShortName = "";
            
            if(strpos($curDescription, "("))
                $descriptionChars = str_split(strtolower(str_replace("&amp;", "", substr($curDescription, 0, strpos($curDescription, "(")))));
            else
                $descriptionChars = str_split(strtolower(str_replace("&amp;", "", $curDescription)));

            foreach($descriptionChars as $curDescChar) {
                if(strlen($tempShortName) == 8)
                    break;

                if(validShortNameChar($curDescChar)) {
                    $tempShortName = $tempShortName . $curDescChar;
                }
            }

            if($tempShortName == "") {
                $tempShortName = "_unk";
            }
            
            if(array_key_exists($tempShortName, $shortnames)) {
                $dupShortNum = $shortnames[$tempShortName];
                $shortName = $tempShortName . "_$dupShortNum";

                $shortnames[$tempShortName]++;
            }
            else {
                $shortName = $tempShortName;

                $shortnames[$tempShortName] = 1;
            }

            fwrite($export, "\t<software name=\"$shortName\" supported=\"no\">\n");
            fwrite($export, $setParts[$curDescKey]);
            fwrite($export, "\t</software>\n\n");
        }

        if($fixmeNum > 0) {
            fwrite($export, $fixmeParts);
            fwrite($export, "\t</software>\n\n");
        }

        fwrite($export, "</softwarelist>\n");

        fclose($export);

        echo "<h1>Successfully created software list $shortListName.</h1>\n";

        return 1;
    }
?>
