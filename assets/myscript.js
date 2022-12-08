const flashdata = $('.flash-data').data('flashdata')

if(flashdata){
    swal({
        title: 'Komentar',
        text: 'berhasil' + flashdata,
        type: 'success'
    })
}