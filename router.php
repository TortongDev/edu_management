
<?php
    include ('./config-cdn.php');
    $URI        = @$_SERVER['REQUEST_URI'];
    $URI_FILTER = explode('/', $URI);
    $URI_FILTER = end($URI_FILTER);
    $FILE_NAME = '/'.$URI_FILTER;
    $PACTH = array(
        '/index' => '/src/dashboard.php',
        '/report' => '/src/dashboard.php',
        '/show'=> '/src/main.html',
        '/student' => '/src/student-management.php',
        '/teacher' => '/src/teacher-management.php',
        '/school' => '/src/school-management.php',
        '/news'    => '/src/new-update.php',
        '/formTeacher' => '/src/form/form_teachers.php'
    );
    if(array_key_exists( $FILE_NAME,$PACTH)):  // start if ctrl + F name "check1"
        if(file_exists((dirname(__DIR__).'/edu_management'.$PACTH[$FILE_NAME]))): // start if ctrl + F name "check2"
            include (dirname(__DIR__).'/edu_management'.$PACTH[$FILE_NAME]);
        else:
            include ('./componant/not-found-page.html');
        endif; //end if ctrl + F name "check2"
    else: 
        include ('./componant/not-found-page.html');
    endif; //end if ctrl + F name "check1"
    ?>