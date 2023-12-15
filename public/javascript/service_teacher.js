
const btn = document.querySelector('form').addEventListener('submit', (e)=>{
    e.preventDefault()
    Swal.fire({
        title: 'บันทึกเรียบร้อย',
        text: 'ท่านได้ทำการบันทึกข้อมูล "เจ้าหน้าที่" เรียบร้อยครับ',
        icon: 'success'
    }).then(res=>{
        let objData = new FormData();
        objData.append('USERNAME','111')
        objData.append('PASSWORD','222')
        fetch('./services/save_customer.php', {
            method: 'POST',  
            body: objData
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.log(error));
    })
})