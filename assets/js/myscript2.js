const flashData = $('.flash-data').data('flashdata');

// console.log(flashData);
if(flashData){
	Swal({
		title: flashData,
		text: '',
		type: 'error'
	});
}