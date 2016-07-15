<!DOCTYPE html>
<!--
LOOMA php code file
Filename: looma-picture-player-manager.php
Description: The reorder images page.

Programmer name: Thomas Woodside, Charlie Donnelly, and Sam Rosenberg
Email: thomas.woodside@gmail.com, charlie.donnelly@menloschool.org, sam.rosenberg@menloschool.org
Owner: VillageTech Solutions (villagetechsolutions.org)
Date: 6/22/16
Revision: 0.1
-->
<html lang="en">
<?php
$page_title = 'Looma Picture Player';
include ('includes/header.php');
?>
<head>
    <link rel="stylesheet" href="css/looma-picture-player-manager.css">
</head>
<body>
<div class="main-container-horizontal container">
    <div class="col-md-offset-2 col-md-8">
        <ul id="img-thumbs">
            <?php
            $dir = new DirectoryIterator($dirname); // an iterator for every file in the given directory.
            // we plan to make the path to the directory a parameter to this file.
            foreach($dir as $item) {
                $filename = $item->getFilename();
                if (!strpos($filename, '-thumb')) //Only thumbnails will be loaded initially.
                {
                    $thumbnail = explode(".", $filename)[0];
                    if ($thumbnail == "")
                    {
                        continue;
                    }
                    $thumbnail .= "-thumb.jpeg";
                    if (file_exists("$dirname/$thumbnail")) {
                        echo "<li class='img-thumbnail'><img src='$dirname/$thumbnail' alt='thumbnail' data-text='$dirname/$filename'></li>";
                    }
                    else {
                        echo "<li class='img-thumbnail'><img src='$dirname/$filename' alt='thumbnail' data-text='$dirname/$filename'></li>";
                    }
                }
            }
            ?>
        </ul>
    </div>
    <button id="submit">
        
    </button>
</div>
<?php
/*include either, but not both, of toolbar.php or toolbar-vertical.php*/
include ('includes/toolbar.php');
/*include ('includes/toolbar-vertical.php'); */
include ('includes/js-includes.php');
?>
<script src="js/sortable.js"></script>
<script src="js/looma-picture-player-manager.js"></script>
</body>
</html>
