<?php
    require("/finalproject/includes/config.php"); 

    $data= $_POST['search'];
    $query = $_GET["title"];
    $search_sql= ("SELECT * FROM `TVshows` WHERE `title` LIKE '%data%'") ;
    $search_query=mysql_query($search_sql);
    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($search_query, JSON_PRETTY_PRINT));

?>