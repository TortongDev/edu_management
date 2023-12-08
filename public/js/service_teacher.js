
const btn = document.querySelector('button').addEventListener('click', ()=>{
    Swal.fire({
        title: 'Test',
        text: 'Body Test',
        icon: 'success'
    }).then(res=>{
        console.log(res);
    })
})