<?php include ('./componant/header-template.php'); ?>
<div class="grid-main">
<?php include ('./componant/aside-template.php'); ?>
<article>
    <section id="box-container">
        <h4><i class="fa-solid fa-database"></i> แก้ไขข้อมูลเจ้าหน้าที่ / คุณครู</h4>
    </section>
    <section id="box-container">
        <div class="form-grid-2">
            <div class="form-group">
                <label for="" class="label-1">ชื่อ</label>
                <input type="text" class="w3-input w3-border" name="PER_FNAME">
            </div>
            <div class="form-group">
                <label for="" class="label-1">นามสกุล</label>
                <input type="text" class="w3-input w3-border" name="PER_LNAME">
            </div>
            <div class="form-group">
                <label for="" class="label-1">อีเมล</label>
                <input type="text" class="w3-input w3-border" name="PER_EMAIL">
            </div>
            <div class="form-group">
                <label for="" class="label-1">เบอร์โทรศัพท์</label>
                <input type="text" class="w3-input w3-border" name="PER_TEL">
            </div>
            <div class="form-group">
                <label for="" class="label-1">Username</label>
                <input type="text" class="w3-input w3-border" name="PER_USERNAME">
            </div>
            <div class="form-group">
                <label for="" class="label-1">Password</label>
                <input type="text" class="w3-input w3-border" name="PER_PASSWORD">
            </div>
        </div>
        <button class="w3-button w3-blue">บันทึก</button>
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
                   <tr>
                        <td>1</td>
                        <td>Kittithat Charoenkhet</td>
                        <td>tortong@gmail.com</td>
                        <td>000-000-0000</td>
                        <td>tortong91</td>
                        <td>123456</td>
                        <td>
                            <button class="w3-button w3-orange w3-tiny">แก้ไข</button>
                            <button class="w3-button w3-red w3-tiny">ลบ</button>
                        </td>
                   </tr>
                   <tr>
                        <td>2</td>
                        <td>Kittithat Charoenkhet</td>
                        <td>tortong@gmail.com</td>
                        <td>000-000-0000</td>
                        <td>tortong91</td>
                        <td>123456</td>
                        <td>
                            <button class="w3-button w3-orange w3-tiny">แก้ไข</button>
                            <button class="w3-button w3-red w3-tiny">ลบ</button>
                        </td>
                   </tr>
                   <tr>
                        <td>3</td>
                        <td>Kittithat Charoenkhet</td>
                        <td>tortong@gmail.com</td>
                        <td>000-000-0000</td>
                        <td>tortong91</td>
                        <td>123456</td>
                        <td>
                            <button class="w3-button w3-orange w3-tiny">แก้ไข</button>
                            <button class="w3-button w3-red w3-tiny">ลบ</button>
                        </td>
                   </tr>
                </tbody>
            </table>
        </div>

    </section>
</article>

</div>

<script src="./public/js/service_teacher.js"></script>