<?php if(count($errors)): ?>
  <?php foreach ($errors as $error): ?>
    <div id="message-red">
      <table border="0" width="100%" cellpadding="0" cellspacing="0">
      <tr>
      <td class="red-left"><?=$error?></td>
      <td class="red-right"><a class="close-red"><img src="<?=base_url()?>images/table/icon_close_red.gif"   alt="" /></a></td>
      </tr>
      </table>
    </div>
  <?php endforeach;?>
<?php endif; ?>