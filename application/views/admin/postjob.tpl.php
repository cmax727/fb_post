<!--
<style type="text/css">
  label.error{
    color: white;
    line-height: 14px;
    height: 38px;
    width: 120px;
    background: url(<?=base_url()?>/images/forms/error_right.gif) right no-repeat;
    margin-left: 30px;
    position: absolute;
  }
  
  table#id-form td{
    position: relative;
  }
</style> -->
<?php
  $months = array(
      1 => 'Jan',
      2 => 'Feb',
      3 => 'Mar',
      4 => 'Apr',
      5 => 'May',
      6 => 'Jun',
      7 => 'Jul',
      8 => 'Aug',
      9 => 'Sep',
      10 => 'Oct',
      11 => 'Nov',
      12 => 'Dec',
  );
?>
<style type="text/css">
  
  label.error{
    margin-left: 10px;
  }
  
</style>


<div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add product</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="<?=base_url()?>images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="<?=base_url()?>images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
    <form id="adding_form"  enctype="multipart/form-data"  method="POST" action="<?=base_url()?>admin/main/savejob">
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Add Job Details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Review and Post</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
    <input id="job_id" type="hidden" name="id" value="<?php echo (isset($job)) ? $job->id : 0 ;?>"
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
		<th valign="top">Choose Fan Page:</th>
		<td>	
		<select  class="" name="fan_page_id">
      <?php foreach ($fan_pages as $key=>$value):?>
        <option value="<?=$value->id?>" <?php echo (isset($job) && $job->fan_page_id == $value->id) ? 'selected' : '' ;?>><?=$value->name?></option>
      <?php endforeach; ?>  
		</select>
		</td>
		<td></td>
		</tr>
      <tr>
			<th valign="top">Job Title:</th>
			<td><input type="text" style="width: 375px !important; border: 1px solid grey; background: none;" class="inp-form" name="title" value="<?php echo (isset($job)) ? $job->title : '' ;?>" size="50" /></td>
			<td></td>
		</tr>
    	<tr>
		<th valign="top">Description:</th>
		<td><textarea  style="height:400px;"  class="form-textarea" name="description"><?php echo (isset($job)) ? $job->description : '' ;?></textarea></td>
		<td></td>
	</tr>
   <?php /* ?>
		<tr>
			<th valign="top">City and State:</th>
			<td><input type="text" class="inp-form" name="country_state" value="<?php echo (isset($job)) ? $job->country_state : '' ;?>" /></td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">Start Date:</th>
		<td class="noheight">
		
			<table border="0" cellpadding="0" cellspacing="0">
			<tr  valign="top">
				<td>
<!--				<form id="chooseDateForm" action="#">-->
				
				<select id="d" class="styledselect-day" name="day">
					<option value="" >dd</option>
          <?php for($i = 1; $i < 32; $i++):?>
            <option value="<?=$i ?>" <?php echo (isset($job) && $job->day == $i) ? 'selected="selected"' : '' ;?>><?=$i?></option>
          <?php endfor; ?>
				</select>
				</td>
				<td>
					<select id="m" class="styledselect-month" name="month">
						<option value="">mmm</option>
            <?php for($i = 1; $i <= 12; $i++):?>
              <option value="<?=$i ?>" <?php echo (isset($job) && $job->month == $i) ? 'selected="selected"' : '' ;?>><?=$months[$i]?></option>
            <?php endfor; ?>
					</select>
				</td>
				<td>
					<select  id="y"  class="styledselect-year" name="year">
          <?php for($i = 2012; $i <= 2018; $i++):?>
            <option value="<?=$i ?>" <?php echo (isset($job) && $job->year == $i) ? 'selected="selected"' : '' ;?>><?=$i?></option>
          <?php endfor; ?>
					</select>
<!--					</form>-->
				</td>
				<td><a href=""  id="date-pick"><img src="<?=base_url()?>images/forms/icon_calendar.jpg"   alt="" /></a></td>
			</tr>
			</table>
		
		</td>
		<td></td>
	</tr>
	
		<tr>
			<th valign="top">Duration:</th>
			<td><input type="text" class="inp-form" name="duration"  value="<?php echo (isset($job)) ? $job->duration : '' ;?>" /></td>
			<td></td>
		</tr>
    <?php */ ?>
    <tr>
			<th valign="top">Rate:</th>
			<td> <select class="select" name="rate">
          <option value="FULLY PAID" <?php echo (isset($job) && strtoupper($job->rate) == 'FULLY PAID') ? 'selected="selected"' : '' ;?>>FULLY PAID</option>
              <option value="LOW BUDGET" <?php echo (isset($job) && strtoupper($job->rate) == 'LOW BUDGET') ? 'selected="selected"' : '' ;?>>LOW BUDGET</option>
              <option value="UNPAID" <?php echo (isset($job) && strtoupper($job->rate) == 'UNPAID') ? 'selected="selected"' : '' ;?>>UNPAID</option>
           </select>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Link to Apply:</th>
			<td><input type="text" col="60" class="inp-form" name="link_to_apply"  value="<?php echo (isset($job)) ? $job->link_to_apply : '' ;?>" /></td>
			<td>
<!--			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>-->
			</td>
		</tr>
		
		
		
	
	<tr>
	<th>Image:</th>
	<td><input type="file" class="file_1" name="image" value='<?php echo (isset($job)) ? $job->image : '' ;?>' />
    <div style="float:right;">
      <div class="bubble-left"></div>
      <div class="bubble-inner">JPEG, GIF 5MB max per image</div>
      <div class="bubble-right"></div>
    </div>
  </td>
	<td>
	</td>
	</tr>
  <?php if (!empty($job->image)): ?>
  <tr>
	<th>Current Image</th>
	<td>
    <image src="<?=base_url() . 'images/jobs/' . $job->id . '/' . $job->image?>" width="100"  height="100"/>
  </td>
	<td></div>
	</tr>
	<?php endif; ?>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<?php if (empty($job->id)) :?>
       <input type="reset" value="" class="form-reset"  />
      <?php endif; ?>
		</td>
		<td></td>
	</tr>
	</table>
	<!-- end id-form  -->
  </form>
	</td>
	<td>
	<!--  start related-activities -->
	<div id="related-activities">
		
		
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="<?=base_url()?>images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 
</div>
<!--  end content-table-inner  -->