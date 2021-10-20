<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				
				<div class="card-body">
					<form action="<?=base_url('welcome/store')?>" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" required="">
						</div>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="1">Admin</option>
								<option value="2">Author</option>
							</select>
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