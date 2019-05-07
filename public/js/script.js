function hitungHarga() {
    var jenis = document.getElementById('jenis').value
    var hargaJenis
    if (jenis == 'Paspor Biasa') {
        hargaJenis = 300000
    } else if (jenis == 'E-Paspor') {
        hargaJenis = 600000
    } else {
        hargaJenis = 0
    }

    var harga = document.getElementById('harga')
    var hargabio = document.getElementById('hargabio')
    var biaya = document.getElementById('biaya')
    var totalbiaya = document.getElementById('totalbiaya')

    harga.value = "Rp " + hargaJenis
    hargabio.value = "Rp " + 55000

    var total = Number(hargaJenis) + Number(55000)
    biaya.value = total
    totalbiaya.value = "Rp " + total

}

$('#submit').on("click", function () {
    var biaya = document.getElementById('biaya').value
    var title = document.getElementById('myModalLabel')
    var content = document.getElementById('modalContent')

    if (biaya > 0) {
        $('#myModal').modal('show');
    } else {
        title.innerHTML = "Gagal"
        content.innerHTML = "Silahkan isi formulir permohonan dengan benar"
        $('#myModal').modal('show');
    }
});
