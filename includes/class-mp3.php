<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or https://www.getid3.org                        //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// /demo/demo.simple.php - part of getID3()                    //
// Sample script for scanning a single directory and           //
// displaying a few pieces of information for each file        //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////

//die('Due to a security issue, this demo has been disabled. It can be enabled by removing line '.__LINE__.' in '.$_SERVER['PHP_SELF']);

// include getID3() library (can be in a different directory if full path is specified)
require_once dirname( __FILE__) . ('/../library/getid3/getid3.php');

// Initialize getID3 engine
$getID3 = new getID3;

$DirectoryToScan = 'C:\xampp\htdocs\imas_radio\wp-content\imasmp3/'; // change to whatever directory you want to scan
$dir = opendir($DirectoryToScan);
;
?>