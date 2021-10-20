<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"><a href="<?php echo base_url('welcome/create') ?>" class="btn btn-success">Tambah</a></div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Username</th>
								
								<th>name</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($user as $data) {
								# code...
							?>
							<tr>
								<td><?=$data->username?></td>
								<td><?=$data->name?></td>
								<td><?php if ($data->role==1) {
									echo "admin";
								}else{
									echo "Author";
								} ?></td>
								<td><a href="<?=base_url('welcome/edit/'.$data->username.'')?>" class="btn btn-success btn-sm">Edit</a> <a href="<?=base_url('welcome/hapus/'.$data->username.'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>