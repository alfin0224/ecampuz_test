$(function(){

  $('#tgl_berangkat_dan_kembali').on('change', function(){
    var data = $(this).data('daterangepicker');
    var durasi = data.endDate.diff(data.startDate, 'days') + 1;
    $('#durasi').val(durasi);
  });
  $('#tgl_berangkat_dan_kembali').trigger('change');


  $('#kode_klasifikasi').on('change', function(){
    var data = $(this).val() + "/";
    $('#kode_klasifikasi1').val(data);
  });
  

  //data_master pegawai
  $(document).on('click', '.tombolTambahDataPegawai', function () {
    $('#judulModal').html('Tambah Data Pegawai');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', base_url + 'pegawai/tambahPegawai');

    $('#nip').val('');
    $('#nama').val('');
    $('#golongan').val('').trigger('change');
    $('#jabatan').val('').trigger('change');
    $('#keterangan_jabatan').val('');
  });

  $(document).on('click', '.tampilModalUbahPegawai', function () {
    // console.log('oke');
    $('#judulModal').html('Ubah Data Pegawai');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', base_url + 'pegawai/ubahPegawai');

    const id = $(this).data('id');

    $.ajax({
      url: base_url + 'pegawai/getById',
      data : {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        // console.log(data);
        // console.log(data.sendiri[0].id_pejabat_ttd_spt); 
        $('#id').val(data[0].id_pegawai);
        $('#nip').val(data[0].nip);
        $('#nama').val(data[0].nama_pegawai);
        $('#golongan').val(data[0].id_golongan).trigger('change');
        $('#jabatan').val(data[0].id_jabatan).trigger('change');
        $('#keterangan_jabatan').val(data[0].ket_jabatan);
      }
    });

  }); 

  $(document).on('click', '.hapusPegawai', function () { 
    $('.modal-body form').attr('action', base_url + 'pegawai/hapusPegawai');
    const id = $(this).data('id');
    $('#idHapus').val(id);
  });
  // end data_master pegawai

  //data_master pejabat_ttd
  $(document).on('click', '.tombolTambahDataPejabatTTD', function () {
    $('#judulModal').html('Tambah Data Pejabat TTD');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', base_url + 'pejabatttd/tambahDataPejabatTTD');

    $('#nip').val('').trigger('change');
  });

  $(document).on('click', '.hapusPejabat', function () {  
    $('.modal-body form').attr('action', base_url + 'pejabatttd/hapusPejabat');
    const id = $(this).data('id');
    $('#idHapus').val(id);
  });

  // // end data_master pejabat_ttd



  $('.tampilModalUbahSpt').on('click', function(){
    // $('#judulModal').html('Ubah Data SPT');
    // $('.modal-footer button[type=submit]').html('Ubah Data');
    // $('.modal-body form').attr('action', 'http://localhost/sppd/admin/spt/ubahSpt');                               
  // //   $('#nama_pd').attr('disabled', '');
  // //   $('.select2-selection__choice').remove();

  // //   // $('#spt').val('');
  const id = $(this).data('id');


  console.log(id);
  $.ajax({
    url: 'http://localhost/sppd/admin/spt/'+id,
    data : {id : id},
    method: 'post',
    dataType: 'json',
    success: {
        // console.log(data);
        // var no_spt= data[0].no_spt;
        // var explode = no_spt.split("/");
        // $('#no_urut_spt').val(explode[1]);
        // $('#bulan_romawi').val(explode[4]);
        // $('#tanggal_spt').val(data[0].tgl_spt);
        // $('#durasi').val(data[0].durasi);
        // $('#kota_brgkt').val(data[0].kota_brgkt);
      }
    });
});
  //end spt

  //spd
  $('.tombolTambahDataSppd').on('click', function(){
    $('#judulModal').html('Tambah Data SPPD');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', 'http://localhost/sppd/Spd/simpan_data_spd/');
    // $('#nama_pd').removeAttr('disabled', '');

  });

  $('.tampilModalUbahSppd').on('click', function(){
    // console.log('oke');
    $('#judulModal').html('Ubah Data SPPD');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/sppd/admin/spt/detail_spd/ubahSppd');
    // $('#nama_multi').removeClass('select2-blue');
  //   // $('#nama_pd').removeAttr('multiple');
  //   // $('#nama_pd').removeAttr('data-placeholder');
  //   // $('#nama_pd').removeAttr('data-dropdown-css-class');

  //   //   var element2 = "<select class='form-control select2' id='element2' name='mpd'>"+
  //   //   "<option value=''>Pelaksana 1</option>"+
  //   //   "<option value=''>Pelaksana 2</option>"+
  //   //   "<option value=''>Pelaksana 3</option>"+
  //   //   "<option value=''>Pelaksana 4</option>"+
  //   //   "<option value=''>Pelaksana 5</option>"+
  //   //   "<option value=''>Pelaksana 6</option>"+
  //   //   "<option value=''>Pelaksana 7</option>"+
  //   //   "</select>";                               
  //   //   $('#pelaksana #nama_single').text(element2);

  //   // const id = $(this).data('id');

  //   // console.log(id);
  //   // $.ajax({
  //   //   url: 'http://localhost/sppd/admin/data_master/kota/getUbahKota',
  //   //   data : {id : id},
  //   //   method: 'post',
  //   //   dataType: 'json',
  //   //   success: function(data){
  //   //     // console.log(data);
  //   //     $('#kota').val(data.kota);
  //   //   }
  //   // });

});
  //end spd

  //surat masuk

  $(document).on('click', '.hapusSuratMasuk', function () {
    $('.modal-body form').attr('action', base_url + 'suratmasuk/hapusSuratMasuk');
    const id = $(this).data('id');
    $('#idHapus').val(id);
  });

  //end_surat_masuk

  //surat_keluar
  $(document).on('click', '.hapusSuratKeluar', function () { 
    $('.modal-body form').attr('action', base_url + 'suratkeluar/hapusSuratKeluar');
    const id = $(this).data('id');
    $('#idHapus').val(id);
  });
  //end_surat_keluar

  //data_pengguna
  $('.tombolTambahDataPengguna').on('click', function(){
    $('#judulModal').html('Tambah Data Pengguna');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', 'http://localhost/sppd/admin/data_pengguna/tambahPenggguna');

    $('#username').val('');
    $('#nama').val('');
    $('#foto').val('');
  });

  $('.tampilModalUbahPengguna').on('click', function(){
    // console.log('oke');
    $('#judulModal').html('Ubah Data Pengguna');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/sppd/admin/data_pengguna/ubahPengguna');

    // const id = $(this).data('id');

    // console.log(id);
    // $.ajax({
    //   url: 'http://localhost/sppd/admin/data_master/kota/getUbahKota',
    //   data : {id : id},
    //   method: 'post',
    //   dataType: 'json',
    //   success: function(data){
    //     // console.log(data);
    //     $('#kota').val(data.kota);
    //   }
    // });

  });
  //end data_pengguna

});