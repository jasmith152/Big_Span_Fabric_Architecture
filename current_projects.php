<?php
$page_title = 'Current Projects Page';
$matatag_description = '';
include('header_inside.php');
?>
  <div class="content_inside">
  <table id="tabler_format" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr valign="top">
    <td>
	<?php
$file_contents = file_get_contents('content/current_project.txt');
echo stripslashes($file_contents);
?></td>
  </tr>
</table>
</div><!-- end .content -->
<?php include ('footer.php'); ?>