<?php foreach ($messages as $message): ?>
  <div id="message-green">
  <table border="0" width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td class="green-left"><?php echo $message?></td>
    <td class="green-right"><a class="close-green"><img src="<?=base_url()?>images/table/icon_close_green.gif"   alt="" /></a></td>
  </tr>
  </table>
  </div>
<?php endforeach;?>