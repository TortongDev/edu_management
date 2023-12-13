
const btn = document.querySelector('form').addEventListener('submit', ()=>{
    Swal.fire({
        title: 'บันทึกเรียบร้อย',
        text: 'ท่านได้ทำการบันทึกข้อมูล "เจ้าหน้าที่" เรียบร้อยครับ',
        icon: 'success'
    }).then(res=>{
        console.log(res);
    })
})