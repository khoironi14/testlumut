const flashData = $('.flash-data').data('flashdata');

// console.log(flashData);
if(flashData){
	Swal({
		title: flashData,
		text: '',
		type: 'success'
	});
}



const flashData2 = $('.flash-data1').data('flashdata');

// console.log(flashData);
if(flashData2){
	Swal({
		title: flashData2,
		text: '',
		type: 'error'
	});
}

$('.tombol-hapus').on('click',function(e){

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
	  title: 'Apakah Anda Yakin?',
	  text: "data akan terhapus!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus!',
	  cancelButtonText: 'batal'
	}).then((result) => {
	  if (result.value) {
	   document.location.href = href;
	  }
	})

});

 
