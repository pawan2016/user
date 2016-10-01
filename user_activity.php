<style>
.dataTables_length{display:block !important;}
</style>
<div class="ch-container">
    <div class="row my-container-class">
        <div id="content" class="col-lg-12 col-sm-12">
            <!-- content starts -->
            <div>
				<ul class="breadcrumb col-lg-12 col-sm-12">
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Activity Log</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="box col-lg-12 col-md-12 col-xs-12">
					<div class="box-inner">
						<div class="box-header well">
							<h2>Activity Log</h2>
						</div>
						<div class="box-content">
							<div class="row">
							<form method="post" id='form' action="<?php echo base_url('user/user_activity'); ?>" autcomplete="off"/>
							<div class="form-group col-lg-2 showmyprint">
                            <label class="control-label">From Date</label>
                             <input id="right_from" class="form-control" type="text" value="<?php echo $from_date; ?>" name="right_from">
                              </div>
                               <div class="form-group col-lg-2 showmyprint">
                              <label class="control-label">To Date</label>
                                <input id="right_to" class="form-control" type="text" value="<?php echo $to_date; ?>"  name="right_to">
                                  </div>
                                  <button  class="btn btn-primary" style="margin-left:1%;margin-bottom:15px;margin-top:25px;" name="submit" type="submit">Submit</button>
                                  <a id="reset_button" class="btn btn-primary" href="<?php base_url('user/user_activity'); ?>" style="margin-left:1%;margin-bottom:15px;margin-top:26px;">Reset</a>	
                                  </form>
							</div>
							<div id="stockReciptTable">
								<table id="user_activity" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
									<thead>
										<tr>
											<th class="text-center">Sr. No.</th>
											<th class="text-center">User Name</th>
											<th class="text-center">Activity</th>
											<th class="text-center">Date-time</th>
										</tr>
									</thead>
										<tbody>
											
									<?php $i=1;
										foreach($activityLists as $activity) 
	                                    {
									       ?>
										<tr>
											<td class="text-center"><?php echo $i++;?></td>
											<td class="center text-center"><?php echo strtoupper($activity->user_name);?></td>
											<td class="center text-center"><?php echo $activity->activity; ?></td>
											<td class="center text-center"><?php echo date('d/m/Y h:i:s A',strtotime($activity->createdOn)) ?></td>
											
										</tr>
									<?php }  ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div><!--/row-->
    <!-- content ends -->
		</div><!--/#content.col-md-0-->
	</div><!--/fluid-row-->
	<script type="text/javascript">
$(function() {
    $( "#right_from" ).datepicker({
	  dateFormat: "d/mm/yy",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
      $( "#right_to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
	$( "#right_from" ).datepicker({ defaultDate: new Date() });
    $( "#right_to" ).datepicker({
	  dateFormat: "d/mm/yy",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#right_from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
	// $('#right_from').datepicker('setDate', new Date());
	// $('#right_to').datepicker('setDate', new Date());
	
	

	
});
</script>
