<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<?php  foreach( £rooms AS $row ) {  ?>


<!-- quadrato -->
<a href="<?php echo base_url(); ?>index.php/apphotel/risorsa?camara_id=<?php echo $row->camara_id; ?>&hotel_id=<?php echo $row->hotel_id; ?> ">

	<div class='<?php echo 'rooms'; ?>'  >

		<h2><?php echo $row->numero_camera; ?></h2>

		<span data-tooltip aria-haspopup="true" class="has-tip"
			  title="<?php echo $row->nome_tipologia; ?> :
						 " >
			<p><?php echo '' ?></p>


		</span>
	</div>
</a>
<!-- / quadrato -->

<?php  } ?>