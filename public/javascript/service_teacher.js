
const btn = document.querySelector('form').addEventListener('submit', (e)=>{
    e.preventDefault()
    Swal.fire({
        title: 'บันทึกเรียบร้อย',
        text: 'ท่านได้ทำการบันทึกข้อมูล "เจ้าหน้าที่" เรียบร้อยครับ',
        icon: 'success'
    }).then(res=>{
        let objData = new FormData();
        objData.append('FIRST_NAME',document.querySelector('[name="FIRST_NAME"]').value)
        objData.append('LAST_NAME',document.querySelector('[name="LAST_NAME"]').value)
        objData.append('PHONE_NUMBER',document.querySelector('[name="PHONE_NUMBER"]').value)
        objData.append('EMAIL',document.querySelector('[name="EMAIL"]').value)
        objData.append('USERNAME',document.querySelector('[name="USERNAME"]').value)
        objData.append('PASSWORD',document.querySelector('[name="PASSWORD"]').value)
        objData.append('PER_STATUS',document.querySelector('[name="PER_STATUS"]').value)
        fetch('./services/save_customer.php', {
            method: 'POST',  
            body: objData
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.log(error));
    })
})