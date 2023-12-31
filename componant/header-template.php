<style>
    header {
        width: 100%;
        height: 50px;
        background-color: var(--bgHeader);
        display: flex;
        align-items: center;
        color:var(--colorHeader);
        padding-inline: 20px;
    }
    nav {
        width: 100%;
        height: 50px;
        background-color: var(--bgNav);
        display: flex;
        align-items: center;
        color:var(--colorNav);
    }
    nav ul {
        list-style: none;
        padding-inline: 20px;
    }
    nav ul li {
        display: inline;
        padding-inline-end: 25px;
        padding-block: 20px;
    }
    nav ul li a {
        color: var(--colorNav);
        text-decoration: none;
    }
    nav ul li:hover  ul.dropdown-menu {
        display: block;
        transition: 1s;
    }
    ul.dropdown-menu {
        transition: 1s;
        display: none;
        position: absolute;
        background-color: var(--bgDropdownMenu);
        color: white;
        top: 54px;
        left: 0px;
        padding:0;
        margin:0;
        width: 200px !important;
    }
    ul.dropdown-menu li {
        display: block;
        padding: 5px;
        width: 200px !important;
    }
    ul.dropdown-menu li:hover {
        background-color: var(--hover);
        transition: .7s
    }
    ul.dropdown-menu li a {
        color: var(--colorDropdownMenu) ;
    }
    
@media only screen and (max-width: 600px) {
    header > h3 {
        font-size: 1.2rem;
    }

  }

</style>
<header>
    <h3>Kenji Farm Management</h3>
</header>
<nav class="box-shadow">
    <ul class="mobile">
        <li><i class="fa fa-bars" id="open-slide"></i></li>
    </ul>
    <div class="close-slide">
        <ul class="mobile-list">
        <li><a href="">หน้าหลัก</a></li>
        <li style="position: relative">
            <a href="#">จัดการข้อมูลเจ้าหน้าที่
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="customer">เพิ่มเจ้าหน้าที่</a></li>
                <li><a href="group-customer">จัดกลุ่มเจ้าหน้าที่</a></li>

            </ul>
        </li>
        <li style="position: relative">
            <a href="student">จัดการข้อมูลสินค้า 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>จัดการข้อมูลประเภทสินค้า</li>
                <li>จัดการข้อมูลสินค้า</li>
                <li>จัดการข้อมูล Partner</li>
            </ul>
        </li>
        <li style="position: relative">
            <a href="school">รายงานข้อมูล 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>ข้อมูลสินค้า</li>
                <li>ข้อมูลการขาย</li>
                <li>ยอดสั่ง</li>
            </ul>
        </li>
        <li>
            <a href="news">อัพเดทข่าวสาร / ประชาสัมพันธ์</a>
        </li>
        <li style="position: relative">
            <a href="report">ข้อมูลรายงาน 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>เพิ่มบุคลากร</li>
                <li>จัดกลุ่มบุคลากร</li>
            </ul>
        </li>
        </ul>
    </div>
    <ul class="desktop">
        <?php
            $linkToIndex = $router->generate('index');
            $customer = $router->generate('customer');
            $groupCustomer = $router->generate('group-customer');
        ?>
        <li><a href="<?php echo $linkToIndex; ?>">หน้าหลัก</a></li>
        <li style="position: relative">
            <a href="#">จัดการข้อมูลเจ้าหน้าที่
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $customer; ?> ">เพิ่มเจ้าหน้าที่</a></li>
                <li><a href="<?php echo $groupCustomer; ?>">จัดกลุ่มเจ้าหน้าที่</a></li>

            </ul>
        </li>
        <li style="position: relative">
            <a href="student">จัดการข้อมูลสินค้า 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>จัดการข้อมูลประเภทสินค้า</li>
                <li>จัดการข้อมูลสินค้า</li>
                <li>จัดการข้อมูล Partner</li>
            </ul>
        </li>
        <li style="position: relative">
            <a href="school">รายงานข้อมูล 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>ข้อมูลสินค้า</li>
                <li>ข้อมูลการขาย</li>
                <li>ยอดสั่ง</li>
            </ul>
        </li>
        <li>
            <a href="news">อัพเดทข่าวสาร / ประชาสัมพันธ์</a>
        </li>
        <li style="position: relative">
            <a href="report">ข้อมูลรายงาน 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>เพิ่มบุคลากร</li>
                <li>จัดกลุ่มบุคลากร</li>
            </ul>
        </li>
    </ul>
</nav>
<script src="./public/javascript/navbar-slide.js"></script>