<?php foreach($jobs as $value): ?> 
  <tr class="alternate-row job_item">
    <td><input  type="checkbox" value ="<?=$value->id?>"/></td>
    <td><?=$value->title ?></td>
  <!--  <td><?=$value->country_state ?></td>
    <td><a href=""><?=$value->duration ?></a></td>
    <td><?= $value->day . '/' . $value->month . '/' . $value->year ?></td> -->
    <td><a href="">
          <?php foreach($fan_pages as $val): ?>
          <?php if($val->id == $value->fan_page_id) echo($val->name); ?>
          <?php endforeach; ?>
      </a></td>
    <td class="options-width">
    <a href="<?=base_url() . 'admin/main/postjobform/' . $value->id?>" title="Edit" class="icon-1 info-tooltip" ></a>
    <a onclick="javascript:main.deleteItem(this, <?php echo $value->id?>)"  title="Delete" class="icon-2 info-tooltip"></a>
    </td>
  </tr>
 <?php endforeach; ?> 
