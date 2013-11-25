<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
    $url = $_GET["uri"];
    $xml = simplexml_load_file($url);
    $child = $xml->children();
    $child2 = $child->children();

    
?>
    <div id=Content>
    <h1>
        <?php echo $xml->getName()?>
    </h1>
    <h2>
        <?php echo $child->getName()?>
    </h2>

    <table>
        <?php
        echo ("<tr>");
            foreach ($child->children() as $child2){
            echo ("<th>");
                echo $child2->getName();
            echo ("</th>");
            }
        echo ("</tr>");
        ?>

        <?php
            foreach($xml->children() as $child){
        echo ("<tr>");
            foreach ($child->children() as $child2){
                echo ("<td>");
                    echo $child2;
                echo ("</td>");
            }
        echo ("</tr>");
            }
        ?>

    </table>
<br>
<form action="index.php" method="post" style="text-align:center;">
<input type="submit" value ="Back">
</form>
</div>

</body>
</html>
