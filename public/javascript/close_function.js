const close_function = document.querySelectorAll('#close_function')
close_function.forEach(element => {
    element.addEventListener('click',function(){
        Swal.fire({
            title: 'แจ้งเตือน',
            icon: 'warning',
            text: 'ปิดฟังชันนี้ชั่วคราว'
        })
    })
});