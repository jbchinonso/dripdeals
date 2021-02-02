<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Name</th>
                                <th class="column3">Email</th>
                                <th class="column4">Phone</th>
								<th class="column5">Message</th>
								<th class="column6">Delete</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                            
                              foreach($contacts as $message){
                            
                            ?>
								<tr>
									<td class="column1">2017-09-29 01:22</td>
									<td class="column2"><?php echo $message->name ?></td>
									<td class="column3"><?php echo $message->email ?></td>
									<td class="column4"><?php echo str_replace('-', '', $message->phone) ?></td>
									<td class="column5"><?php echo $message->message ?></td>
									<td class="column6">Delete</td>
								</tr>
							
							<?php } ?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>