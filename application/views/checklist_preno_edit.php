
<!--  checklist_preno_edit.php  -->
<fieldset>
    <legend>checklist_preno:</legend>	

    <?php if ($this->input->get('error')) { ?>
        <p>
        <div class="error"><?php echo $this->lang->line($this->input->get('error'), FALSE); ?> </div> 
    </p>
<?php } ?>

<?php
// Change the css classes to suit your needs    
$attributes = array('class' => '', 'id' => '');
echo form_open(uri_string() . '?' . $_SERVER['QUERY_STRING'], $attributes);
?>     



<input id="checklist_id" type="hidden" name="checklist_id"  value="<?php echo (!set_value('checklist_id')) ? $rs_checklist_preno->checklist_id : set_value('checklist_id'); ?>"  />
<input id="hotel_id" type="hidden" name="hotel_id"  value="<?php echo (!set_value('hotel_id')) ? $rs_checklist_preno->hotel_id : set_value('hotel_id'); ?>"  />
<input id="preno_id" type="hidden" name="preno_id"  value="<?php echo (!set_value('preno_id')) ? $rs_checklist_preno->preno_id : set_value('preno_id'); ?>"  />
<input id="data_check" type="hidden" name="data_check"  value="<?php echo (!set_value('data_check')) ? $rs_checklist_preno->data_check : set_value('data_check'); ?>"  />
<input id="utente_id" type="hidden" name="utente_id"  value="<?php echo (!set_value('utente_id')) ? $rs_checklist_preno->utente_id : set_value('utente_id'); ?>"  />
<input id="data_record" type="hidden" name="data_record"  value="<?php //echo ( !set_value('data_record')) ? $rs_checklist_preno->data_record  : set_value('data_record');   ?>"  />


<p>
<?php echo lang('preno_dal', 'preno_dal'); ?> <span class="required">*</span>
<?php echo form_error('preno_dal'); ?>
    <input id="preno_dal" type="text" name="preno_dal"  value="<?php echo (!set_value('preno_dal')) ? $rs_checklist_preno->preno_dal : set_value('preno_dal'); ?>"  />
</p>

<p>
    <?php echo lang('email', 'email'); ?> <span class="required">*</span>
    <?php echo form_error('email'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="email" name="email" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('email', '1', $rs_checklist_preno->email === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('email', 'si', 'class=""'); ?>
    <br>
    <input id="email" name="email" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('email', '0', $rs_checklist_preno->email === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('email', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('email_pms', 'email_pms'); ?> <span class="required">*</span>
    <?php echo form_error('email_pms'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="email_pms" name="email_pms" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('email_pms', '1', $rs_checklist_preno->email_pms === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('email_pms', 'si', 'class=""'); ?>
    <br>
    <input id="email_pms" name="email_pms" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('email_pms', '0', $rs_checklist_preno->email_pms === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('email_pms', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('lista', 'lista'); ?> <span class="required">*</span>
    <?php echo form_error('lista'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="lista" name="lista" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('lista', '1', $rs_checklist_preno->lista === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('lista', 'si', 'class=""'); ?>
    <br>
    <input id="lista" name="lista" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('lista', '0', $rs_checklist_preno->lista === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('lista', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('lista_pms', 'lista_pms'); ?> <span class="required">*</span>
    <?php echo form_error('lista_pms'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="lista_pms" name="lista_pms" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('lista_pms', '1', $rs_checklist_preno->lista_pms === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('lista_pms', 'si', 'class=""'); ?>
    <br>
    <input id="lista_pms" name="lista_pms" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('lista_pms', '0', $rs_checklist_preno->lista_pms === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('lista_pms', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('pagamento', 'pagamento'); ?> <span class="required">*</span>
    <?php echo form_error('pagamento'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="pagamento" name="pagamento" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('pagamento', '1', $rs_checklist_preno->pagamento === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('pagamento', 'si', 'class=""'); ?>
    <br>
    <input id="pagamento" name="pagamento" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('pagamento', '0', $rs_checklist_preno->pagamento === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('pagamento', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('tassa', 'tassa'); ?> <span class="required">*</span>
    <?php echo form_error('tassa'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="tassa" name="tassa" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('tassa', '1', $rs_checklist_preno->tassa === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('tassa', 'si', 'class=""'); ?>
    <br>
    <input id="tassa" name="tassa" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('tassa', '0', $rs_checklist_preno->tassa === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('tassa', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('proforma', 'proforma'); ?> <span class="required">*</span>
    <?php echo form_error('proforma'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="proforma" name="proforma" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('proforma', '1', $rs_checklist_preno->proforma === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('proforma', 'si', 'class=""'); ?>
    <br>
    <input id="proforma" name="proforma" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('proforma', '0', $rs_checklist_preno->proforma === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('proforma', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('proforma_pms', 'proforma_pms'); ?> <span class="required">*</span>
    <?php echo form_error('proforma_pms'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="proforma_pms" name="proforma_pms" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('proforma_pms', '1', $rs_checklist_preno->proforma_pms === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('proforma_pms', 'si', 'class=""'); ?>
    <br>
    <input id="proforma_pms" name="proforma_pms" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('proforma_pms', '0', $rs_checklist_preno->proforma_pms === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('proforma_pms', 'no', 'class=""'); ?>
</p>


<p>
    <?php echo lang('bonifico', 'bonifico'); ?> <span class="required">*</span>
    <?php echo form_error('bonifico'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="bonifico" name="bonifico" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('bonifico', '1', $rs_checklist_preno->bonifico === "1" ? TRUE : FALSE ); ?> />
    <?php echo lang('bonifico', 'si', 'class=""'); ?>
    <br>
    <input id="bonifico" name="bonifico" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('bonifico', '0', $rs_checklist_preno->bonifico === "0" ? TRUE : FALSE ); ?> />
<?php echo lang('bonifico', 'no', 'class=""'); ?>
</p>


<p>
<?php echo lang('importo', 'importo'); ?> <span class="required">*</span>
<?php echo form_error('importo'); ?>
    <input id="importo" type="text" name="importo"  value="<?php echo (!set_value('importo')) ? $rs_checklist_preno->importo : set_value('importo'); ?>"  />
</p>

<p>
<?php echo lang('note', 'note'); ?>
    <?php echo form_error('note'); ?>


<?php echo form_textarea(array('name' => 'note', 'rows' => '5', 'cols' => '80', 'value' => (!set_value('note')) ? $rs_checklist_preno->note : set_value('note'))) ?>
</p>



<p>
<?php echo form_submit('submit', 'Submit', 'class="button"'); ?>
</p>
<?php echo form_close(); ?>
</fieldset>                


    