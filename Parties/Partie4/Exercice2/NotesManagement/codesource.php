<?php
if (isset($_GET["page"])) {
    $page = $_GET['page'];
    highlight_file("$page");
    echo "<h1></h1>";
}
