document.getElementById('btn-submit').addEventListener('click', () => {
    const nama = document.getElementById('frm-nama').value
    const pesan = document.getElementById('frm-pesan').value

    document.getElementById('ctr-review').innerHTML += `<div class="col-md m-3">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title nama">${nama}</h5>
                    <p class="card-text review">${pesan}</p>
                </div>
                </div>
            </div>`
    
})

document.getElementById('btn-beli').addEventListener('click', () => {
    
})