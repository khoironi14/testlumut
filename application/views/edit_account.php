<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				
				<div class="card-body">
					<form action="<?=base_url('welcome/update')?>" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" value="<?=$edit['username']?>" class="form-control" required="" readonly>
						</div>
						
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" value="<?=$edit['name']?>"  class="form-control" required="">
						</div>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="1" <?php if($edit['role']==1){echo "selected";} ?>>Admin</option>
								<option value="2" <?php if($edit['role']==2){echo "selected";} ?>>Author</option>
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