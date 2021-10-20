<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"><a href="<?php echo base_url('post/create') ?>" class="btn btn-success">Tambah</a></div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>title</th>
								
								<th>Content</th>
								<th>date</th>
								<th>Username</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($post as $data) {
								# code...
							?>
							<tr>
								<td><?=$data->title?></td>
								<td><?=$data->content?></td>
								<td><?=$data->date?></td>
								<td><?=$data->username ?></td>
								<td><a href="<?=base_url('post/edit/'.$data->idpost.'')?>" class="btn btn-success btn-sm">Edit</a> <a href="<?=base_url('post/hapus/'.$data->idpost.'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>