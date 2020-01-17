<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$top = "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <title>Design Patterns</title>
  </head>
  <body><div class=\"container pt-4\">
  <h1>Design Patterns</h1>";
$bottom = "<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
  </body>
</html>";

echo $top;
$all = scandir('.');
foreach ($all as $item) {
    if(is_dir($item) && (strpos($item, '.') === false)) {
        echo "<div class=\"card\"><div class=\"card-body\">
                <h2>" . ucfirst($item) . "</h2>
                <div class=\"list-group list-group-horizontal\">";

        $allnested = scandir('./' . $item . '/');
        foreach ($allnested as $nesteditem) {
            if(is_dir('./' . $item . '/'. $nesteditem) && (strpos($nesteditem, '.') === false)) {
                echo "<a href=\"" . $nesteditem ."\" target=\"_blank\" class=\"list-group-item \">" . ucfirst($nesteditem) . "</a>";
            }
        }

        echo "</div></div></div>";
    }
}
echo $bottom;