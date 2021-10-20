<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				
				<div class="card-body">
					<form action="<?=base_url('post/store')?>" method="post">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Content</label>
							<textarea name="content" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" value="<?=$this->session->userdata('username')?>" class="form-control" readonly required="">
						</div>
						
						<div class="form-group">
							<button class="btn btn-success" btn-sm>Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>