<!--page content-->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<h3 class="box-title m-b-0">Games Table</h3>
			<p class="text-muted m-b-15">All games in 1 place!!</p>
			<p class="box-title m-b-10">
				<a href="<?= base_url("admin/games/create") ?>" class="text-success">Add new Games</a>
			</p>

			<p class="box-title m-b-30">
				<a href="<?= base_url("admin/games/create_costume") ?>" class="text-primary">Add new Games with custom teams</a>
			</p>

			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
					<tr>
						<th>ID</th>
						<th>School / District / Team name</th>
						<th>School / District / Team name</th>
						<th>Place</th>
						<th>Time</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Game Type</th>
						<th>Sport Type</th>
						<th>Observer name</th>
						<th>Status</th>
						<th>Options</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($game as $key => $value) { ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td><?= $value->schools_1_name . " / " . $value->regions_1_name . " / " . $value->teams_1_name; ?></td>
							<td><?= $value->schools_2_name . " / " . $value->regions_2_name . " / " . $value->teams_2_name; ?></td>
							<td><?= $value->place; ?></td>
							<td><?= gmdate("Y-m-d", $value->time); ?></td>
							<td><?= $value->age; ?></td>
							<td>
								<?php if ($value->gender == 2) {
									echo "Both";
								} elseif ($value->gender == 1) {
									echo "Male";
								} else {
									echo "Female";
								}
								?>
							</td>
							<td><?= $value->game_type; ?></td>
							<td><?= $value->sport_name; ?></td>
							<td><?= $value->observer_name; ?></td>
							<td><?php if($value->status == 1){ echo "Active"; }else{echo "Inactive ";} ?></td>
							<td>
								<?php if ($value->status == 1) { ?>
									<a href="<?= base_url("admin/games/change-status/$value->id") ?>"
									   data-toggle="tooltip"
									   data-placement="top" title="Deactivate"
									   class="btn btn-danger btn-circle tooltip-danger"><i class="fa fa-power-off"></i></a>
								<?php } else { ?>
									<a href="<?= base_url("admin/games/change-status/$value->id") ?>"
									   data-toggle="tooltip"
									   data-placement="top" title="Activate"
									   class="btn btn-success btn-circle tooltip-success"><i
											class="fa fa-power-off"></i></a>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
