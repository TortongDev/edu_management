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
        padding-inline-end: 10px;
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

</style>
<header>
    <h3>Welcome</h3>
</header>
<nav class="box-shadow">
    <ul>
        <li><a href="index">หน้าหลัก</a></li>
        <li style="position: relative">
            <a href="teacher">จัดการข้อมูลบุคลากร 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">เพิ่มบุคลากร</a></li>
                <li><a href="#">จัดกลุ่มบุคลากร</a></li>

            </ul>
        </li>
        <li style="position: relative">
            <a href="student">จัดการข้อมูลนักเรียน 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>เพิ่มบุคลากร</li>
                <li>จัดกลุ่มบุคลากร</li>
            </ul>
        </li>
        <li style="position: relative">
            <a href="school">จัดการข้อมูลวิชาเรียน 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>เพิ่มบุคลากร</li>
                <li>จัดกลุ่มบุคลากร</li>
            </ul>
        </li>
        <li style="position: relative">
            <a href="school">จัดการข้อมูลโรงเรียน 
                <i class="fa-solid fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>เพิ่มบุคลากร</li>
                <li>จัดกลุ่มบุคลากร</li>
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