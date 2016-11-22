
<!--  app_ip_add.php  -->
 <fieldset>
    <legend>app_ip:</legend>		

	<?php // Change the css classes to suit your needs    
	$attributes = array('class' => '', 'id' => '');	           
        echo form_open( uri_string() . '?'. $_SERVER['QUERY_STRING'], $attributes); ?>   

<p>       <input id="app_ip_id" type="hidden" name="app_ip_id"  value="<?php echo set_value('app_ip_id'); ?>"  />
<p>
         <?php echo lang('ip_aderss', 'ip_aderss'); ?> <span class="required">*</span>
        <?php echo form_error('ip_aderss'); ?>
       <input id="ip_aderss" type="text" name="ip_aderss"  value="<?php echo set_value('ip_aderss'); ?>"  />
</p>

<p>
         <?php echo lang('Livello', 'Livello'); ?>
        <?php echo form_error('Livello'); ?>
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php 
                        $options = array('50' => 'Master', 
                        '51' => 'Personale'
                        );
       
         
                      ?>
       <?php echo form_dropdown('Livello', $options, set_value('Livello'))?>
</p>                                             
                        <p> <span class="required">*</span>       <input id="data" type="hidden" name="data"  value="<?php echo set_value('data'); ?>"  />

<p>
        <?php echo form_submit( 'submit', 'Submit', 'class="button"'); ?>
</p>

<?php echo form_close(); ?>
</fieldset>
