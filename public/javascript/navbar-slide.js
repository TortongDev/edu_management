

    let open_slide1    = document.querySelector('#open-slide');
    let close_slide   = document.querySelector('.close-slide');
    let on_open       = document.querySelector('.on-open');
    let menu = 1;
    open_slide1.addEventListener('click' , ()=>{
        if(menu === 1) {
            close_slide.classList.add('on-open')
            menu = 0
            console.log(menu);
        } else {
            close_slide.classList.remove('on-open')
            menu = 1
            console.log(menu);

        }
    })