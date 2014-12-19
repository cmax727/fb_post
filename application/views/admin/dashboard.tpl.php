<div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Listed Jobs  </h1>

	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
<!--				  start message-yellow 
				<div id="message-yellow">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
					<td class="yellow-right"><a class="close-yellow"><img src="<?=base_url()?>images/table/icon_close_yellow.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				  end message-yellow 
				
				  start message-red 
				<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Error. <a href="">Please try again.</a></td>
					<td class="red-right"><a class="close-red"><img src="<?=base_url()?>images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				  end message-red 
				
				  start message-blue 
				<div id="message-blue">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="blue-left">Welcome back. <a href="">View my account.</a> </td>
					<td class="blue-right"><a class="close-blue"><img src="<?=base_url()?>images/table/icon_close_blue.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				  end message-blue 
			
				  start message-green 
				<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Product added sucessfully. <a href="">Add new one.</a></td>
					<td class="green-right"><a class="close-green"><img src="<?=base_url()?>images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				  end message-green -->
          <?php ErrorHelper::renderErrors(); ?>
          <?php ErrorHelper::renderMessages(); ?>
<!--  start div select page -->
		
<div id="select-page" style="padding:10px">
				<h2>Choose Page  (Currently Selected : Fan Page Name)</h2>
				  	<select class=""  name="fanpage" >
              <option value="">All</option>
              <?php foreach ($fan_pages as $key=>$value):?>
                <option value="<?=$value->id?>"><?=$value->name?></option>
              <?php endforeach; ?>  
            </select>
		</div>
		 		<!--  end div select page -->
                
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Job Title</a>	</th>
					<!--<th class="table-header-repeat line-left minwidth-1"><a href="">City</a></th>
					<th class="table-header-repeat line-left"><a href="">Duration</a></th>
					<th class="table-header-repeat line-left"><a href="">Start Date</a></th>-->
					<th class="table-header-repeat line-left"><a href="">Published on Page</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
        <?php $this->load->view('admin/helpers/item.tpl.php', array('jobs' => $jobs)); ?>
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="#" class="page-far-left"></a>
				<a href="#" class="page-left"></a>
        <div id="page-info">Page <span id="current_page">1</span> / <span id="all_pages"><?=ceil($count)?></span></div>
				<a href="#" class="page-right"></a>
				<a href="#" class="page-far-right"></a>
			</td>
			
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
