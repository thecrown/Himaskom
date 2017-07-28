<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome To Bank Soal</title>
</head>
<link rel="stylesheet" href="<?php echo base_url('assets/	').'bootstrap/css/bootstrap.css'; ?>" />
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
  
<body>

<div class="container" align="center">
	<h1>Welcome To Bank Soal</h1>
		<form method="post" action="<?php echo base_url().'Front/search_name'; ?>">
	  <div class="form-group">
	    <label for="email" class="sr-only">Search :</label>
	    <input type="search" class="form-control" name="search" placeholder="Search by Name">
			<br />
			<button type="submit" class="btn btn-info">Search</button>
		</div>
	</form>

	<table class="table table-striped">
			<thead style="background-color:#909090;">
				<tr>
							<th>No</th>
							<th>Mata Kuliah</th>
							<th>Tahun</th>
							<th>Keterangan</th>
							<th>File</th>
							<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($name as $value) { ?>
					<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value->matkul ?></td>
							<td><?php echo $value->Tahun ?></td>
							<td><?php echo $value->Keterangan ?></td>
							<td><?php echo $value->File ?></td>
							<td><a href="<?php echo base_url('assets/file/banksoal/'); echo $value->File; ?>" target="_blank"><button class="btn btn-info"><i class="fa fa-download bigicon"></i></button></a></td>
					</tr>
					<?php $i++; ?>
					<?php } ?>
			</tbody>
	</table>
<?php echo $pagination ?>
</div>
</body>
</html>