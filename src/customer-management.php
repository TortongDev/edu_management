<?php


 include ('./componant/header-template.php'); ?>
<div class="grid-main">
<?php include ('./componant/aside-template.php'); ?>
<article>
    <section id="box-container">
        <h4><i class="fa-solid fa-database"></i> เพิ่มข้อมูลเจ้าหน้าที่ / พนักงาน</h4>
    </section>
    <section id="box-container">
    <form action="" method="post">    
    <div class="form-grid-2">
            <div class="form-group">
                <label for="" class="label-1">ชื่อ</label>
                <input type="text" class="w3-input w3-border" name="FIRST_NAME">
            </div>
            <div class="form-group">
                <label for="" class="label-1">นามสกุล</label>
                <input type="text" class="w3-input w3-border" name="LAST_NAME">
            </div>
            <div class="form-group">
                <label for="" class="label-1">อีเมล</label>
                <input type="text" class="w3-input w3-border" name="EMAIL">
            </div>
            <div class="form-group">
                <label for="" class="label-1">เบอร์โทรศัพท์</label>
                <input type="text" class="w3-input w3-border" name="PHONE_NUMBER">
            </div>
            <div class="form-group">
                <label for="" class="label-1">Username</label>
                <input type="text" class="w3-input w3-border" name="USERNAME">
            </div>
            <div class="form-group">
                <label for="" class="label-1">Password</label>
                <input type="text" class="w3-input w3-border" name="PASSWORD">
            </div>
            <div class="form-group">
                <label for="" class="label-1 line b">สถานะ</label> : &nbsp;
                <input type="radio" class="" value="2" name="PER_STATUS"> พนักงาน &nbsp;
                <input type="radio" class="" value="1" name="PER_STATUS"> ผู้ดูแลระบบ
            </div>
        </div>
        <button class="w3-button w3-blue" type="submit">บันทึก</button>
        <div class="list-table">
            <table class="w3-table-all">
                <thead>
                    <tr class="w3-blue">
                        <th>#</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>อีเมล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "./class/Connection.php";
                    require_once "./class/SelectService.php";

                    $conn = new Connection(true);
                    $stmt_select = new SelectService(Connection::$pdo);
                    $fetch = $stmt_select->SelectTable('SELECT * FROM `authen_admin` WHERE ?',array(1));
                    $number = 1;
                    while ($row = $fetch->fetch(PDO::FETCH_ASSOC)):
                    ?>
                    <tr>
                        <td><?php echo $number++; ?></td>
                        <td><?php echo $row['authen_username']; ?></td>
                        <td><?php echo $row['authen_username']; ?></td>
                        <td><?php echo $row['authen_username']; ?></td>
                        <td><?php echo $row['authen_username']; ?></td>
                        <td><?php echo $row['authen_username']; ?></td>
                        <td>
                            <a href="./form/edit-customer.php?<?php echo $row['authen_username']; ?>" class="w3-button w3-orange w3-tiny">แก้ไข</a>
                            <button class="w3-button w3-red w3-tiny">ลบ</button>
                        </td>
                   </tr>

                   <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </section>
</article>

</div>
</form>
    
<script src="./public/javascript/service_teacher.js"></script>
<?php include ('./componant/footer-template.php') ?>