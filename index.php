<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="cont">
    <div class="head">
    
    </div>
    <div class="main">
        <div class="tab">
        <?php
        $conn=new mysqli('172.16.131.125','','','');
        $sql="SELECT * FROM";
        $result=$conn->query($sql);

        echo("<table>");
        echo("<tr>
        <th>cos</th>
        </tr>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row['cos']."</td>");
            echo("</tr>");
        }
        echo("</table>");

        ?>
        </div>
    </div>
    <div class="side">123

    
    </div>
    <div class="footer">21345456

    
    </div>


</div>
    
</body>
</html>