		<!-- Modal -->
<div id="directories" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-body">
										<?php
											$mission_query = mysqli_query($conn,"select * from content where title  = 'Directories' ")or die(mysqli_error());
											$mission_row = mysqli_fetch_array($mission_query);
										?>
										<h4>Kuruppanthara, Kottayam</h4>
							<p>
								4343 CJ Buildings Market Road<br>
								Mob:+91 9846730065<br>
								Email:abjinstitute@gmail.com
								
							</p>
							<h5>Mon to Fri 9am to 6 pm</h5>
							<p>Send us your query anytime!</p>
							
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>

</div>
</div>