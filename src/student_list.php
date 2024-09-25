<?php
    // โดยที่ $ชื่อตัวแปร = new mysqli($servername, $username, $password, $dbname)
    $connect = new mysqli('db', 'root', 'Cpe123456', 'university');

    // ทำการ check connection ว่าถูกต้องหรือไม่
    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
    }
    $sql = "SELECT * FROM students";
    $result = $connect->query($sql);
?>
        <table>
            <thead>
                <tr>
                    <td width="5%">Code</td>
                    <td width="25%">Name</td>
                    <td width="25%">Gender</td>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td width="5%"><?php echo $row["student_code"];?></td>
                    <td width="25%"><?php echo $row["student_name"];?></td>
                    <td width="25%"><?php echo $row["gender"];?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>