<nav class="tab-bar">
    <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" aria-expanded="false"><span></span></a>
    </section>
    <section class="right tab-bar-section">
        <h1 class="title">Camere  <?php echo $conto['0']->numero_camera; ?> in  <?php echo $status; ?></h1>
    </section>
</nav>
<aside class="left-off-canvas-menu">
    <ul class="off-canvas-list">
        <li><label>AppHotel</label></li>
         <li><a href='<?php echo base_url(); ?>?scelta=<?php echo 'conti_aperti'; ?>&hotel_id=<?php echo $hotel_id; ?>' >Occupate</a></li>
        <li><a href='<?php echo base_url(); ?>?scelta=<?php echo 'partiti'; ?>&hotel_id=<?php echo $hotel_id; ?>' >Partite</a></li>
        <li><a href='<?php echo base_url(); ?>?scelta=<?php echo 'partenze'; ?>&hotel_id=<?php echo $hotel_id; ?>' >In Partenza</a></li>
        <li><a href='<?php echo base_url(); ?>?scelta=<?php echo 'arrivi'; ?>&hotel_id=<?php echo $hotel_id; ?>' >In Arrivo</a></li>
         <li><a href='<?php echo base_url(); ?>?scelta=<?php echo 'rifatte'; ?>&hotel_id=<?php echo $hotel_id; ?>' >Rifatte </a></li>
		 <li><a href="<?php echo base_url(); ?>index.php/guasti/?hotel_id=<?php echo $hotel_id; ?>" >Manutentore</a></li>
    </ul>
</aside>