<?php include "db.php"; ?>
<html>
<body>
    <div style="display:blockline">
        <?php
            $stmt=$pdo->prepare("SELECT * FROM member");
            $stmt->execute();
        ?>
            <?php while($row=$stmt->fetch()):?>
                <div>
                <?php  
                    echo "ชื่อสมาชิก:" . $row["name"] . "<br>";
                    echo "ที่อยู่:" . $row["address"] . "<br>";
                    echo "อีเมล:" . $row["email"] . "<br>";?>
                    <a href="workshop4.php?username=<?=$row["username"]?>" >
                    <img src='member_photo/<?=$row["username"]?>.jpg' width="100px"><br>
             </a>   
             <?php  echo "<hr>\n";?>
                    
                </div>
            <?php endwhile; ?>
        </div>
</body>
</html>