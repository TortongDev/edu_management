<?php include ('./componant/header-template.php'); ?>
<div class="grid-main">
<?php include ('./componant/aside-template.php'); ?>
<div id="wrapper-container">
    <label for="" class="label-1">ชื่อ</label>
    <input type="text" class="w3-input w3-border" name="PER_FNAME"><br>
    <label for="" class="label-1">นามสกุล</label>
    <input type="text" class="w3-input w3-border" name="PER_LNAME"><br>
    <label for="" class="label-1">อีเมล</label>
    <input type="text" class="w3-input w3-border" name="PER_EMAIL"><br>
    <label for="" class="label-1">เบอร์โทรศัพท์</label>
    <input type="text" class="w3-input w3-border" name="PER_TEL"><br>
    <label for="" class="label-1">Username</label>
    <input type="text" class="w3-input w3-border" name="PER_USERNAME"><br>
    <label for="" class="label-1">Password</label>
    <input type="text" class="w3-input w3-border" name="PER_PASSWORD">
    <br>
        <button class="w3-button w3-blue">บันทึก</button>
    <div class="list-table">
        <table class="w3-table">
            <thead class="w3-blue">
                <tr>
                    <th>#</th>
                    <th>ชื่อ - นามสกุล</th>
                    <th>อีเมล</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>Kittithat Charoenkhet</td>
                <td>tortong@gmail.com</td>
                <td>000-000-0000</td>
                <td>tortong91</td>
                <td>123456</td>
            </tbody>
        </table>
    </div>

</div>
</div>
