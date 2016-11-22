<?php 

//print_r($rs_preno); 

// [preno_id] => 135608
//            [hotel_id] => 
//            [preno_in_data] => 2016-09-20 13:18:57
//            [preno_importo] => 5615
//            [preno_impoto_mod] => 5615
//            [preno_dal] => 2016-10-04
//            [preno_al] => 2016-10-09
//            [preno_n_notti] => 5
//            [preno_arr_ore] => 
//            [preno_trattamento] => BB
//            [t1] => 1
//            [q1] => 1
//            [p1] => 55
//            [t2] => 2
//            [q2] => 10
//            [p2] => 60
//            [t3] => 4
//            [q3] => 5
//            [p3] => 84
//            [t4] => 7
//            [q4] => 1
//            [p4] => 0
//            [t5] => 3
//            [q5] => 1
//            [p5] => 48
//            [t6] => 0
//            [q6] => 0
//            [p6] => 0
//            [preno_nome] => 
//            [preno_cogno] => gruppo Don Giuseppe 
//            [preno_agenzia] => 
//            [voucher_id] => 
//            [allotment_id] => 
//            [preno_cc_tip] => 0
//            [preno_cc_n] => 
//            [preno_cc_scad] => 
//            [preno_tel] => 
//            [preno_fax] => 
//            [preno_email] => 
//            [preno_mercato] => 
//            [preno_note] => 
//            [preno_doc_fax] => 0
//            [preno_doc_email] => 0
//            [preno_doc_form] => 0
//            [preno_doc_mail] => 0
//            [preno_doc_vaglia] => 0
//            [preno_doc_woucher] => 0
//            [preno_pag_modalita] => 1
//            [preno_caparra] => 
//            [preno_stato] => 1
//            [data_opzione] => 
//            [cancella_data_record] => 
//            [cancella_user] => 
//            [cancella_pass] => 
//            [preno_data_record] => 2016-09-20 13:29:22
//            [agenda_utente_id] => 12
//            [agenzia_id] => 
//            [agenzia_tipologia] => 
//            [agenzia_nome] => 
//            [agenzia_via] => 
//            [agenzia_citta] => 
//            [agenzia_state] => 
//            [agenzia_country] => 
//            [agenzia_cap] => 
//            [agenzia_tel] => 
//            [agenzia_fax] => 
//            [agenzia_email] => 
//            [agenzia_web] => 
//            [agenzia_par_iva] => 
//            [agenzia_par_cf] => 
//            [agenzia_referente] => 
//            [agenzia_banca_nome] => 
//            [agenzia_banca_iban] => 
//            [agenzia_banca_swift] => 
//            [agenzia_banca_iata] => 
//            [agenzia_cc_tipo] => 
//            [agenzia_cc_nome] => 
//            [agenzia_cc_numero] => 
//            [agenzia_cc_scadenza] => 
//            [agenzia_cc_cod_sicurezza] => 
//            [agenzia_login] => 
//            [agenzia_password] => 
//            [agenzia_ab_web] => 
//            [agenzia_ab_affiliati] => 
//            [agenzia_ad_vis] => 
//            [agenzia_ab_sospeso] => 
//            [agenzia_data_record] => 
//            [agenzie_utente_id] => 
//            [Tot_cam] => 18
//            [Singola] => 1
//            [Doppia_Uso] => 1
//            [Doppia] => 10
//            [Matrimoniale] => 1
//            [Matri_Balcone] => 0
//            [Tripla] => 5
//            [Quadrupla] => 0
//            [Junior_Suit] => 0
//            [Quintupla] => 0


?>

<!--  checklist_preno_add.php  -->
<fieldset>
<legend>Check List:<?php echo $rs_preno[0]->preno_id ; ?>  <?php echo $rs_preno[0]->preno_cogno ; ?> Arrivo-> <?php echo $rs_preno[0]->preno_dal ; ?> <?php echo $rs_preno[0]->agenzia_nome ; ?> Camere <?php echo $rs_preno[0]->Tot_cam ; ?> </legend>		


<?php
// Change the css classes to suit your needs    
$attributes = array('class' => '', 'id' => '');
echo form_open(uri_string() . '?' . $_SERVER['QUERY_STRING'], $attributes);
?>   
<input id="hotel_id" type="hidden" name="hotel_id"  value="<?php echo $rs_preno[0]->hotel_id ; ?>"  />
<input id="preno_id" type="hidden" name="preno_id"  value="<?php echo $rs_preno[0]->preno_id ; ?>"  />
<input id="data_check" type="hidden" name="data_check"  value="<?php echo date('Y-m-d') ; ?>"  />
 <input id="preno_dal" type="hidden" name="preno_dal"  value="<?php echo $rs_preno[0]->preno_dal ; ?>"  />
<input id="utente_id" type="hidden" name="utente_id"  value="<?php // echo  $res_preno[0]->utente_id; ?>"  />

<div class="row">
    
<div class="small-12 large-4 columns">

<p>
    <?php echo lang('email', 'email'); ?> 
    <?php echo form_error('email'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="email" name="email" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('email', '1' ); ?> />
    <?php echo lang('si', 'email', 'class=""'); ?>
    <br>
    <input id="email" name="email" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('email', '0' ); ?> />
<?php echo lang('no', 'email', 'class=""'); ?>
</p>


<p>
    <?php echo lang('email_pms', 'email_pms'); ?> 
    <?php echo form_error('email_pms'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="email_pms" name="email_pms" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('email_pms', '1' ); ?> />
    <?php echo lang('si', 'email_pms', 'class=""'); ?>
    <br>
    <input id="email_pms" name="email_pms" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('email_pms', '0' ); ?> />
<?php echo lang('no', 'email_pms', 'class=""'); ?>
</p>


<p>
    <?php echo lang('lista', 'lista'); ?> 
    <?php echo form_error('lista'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="lista" name="lista" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('lista', '1' ); ?> />
    <?php echo lang('si', 'lista', 'class=""'); ?>
    <br>
    <input id="lista" name="lista" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('lista', '0'); ?> />
<?php echo lang('no', 'lista', 'class=""'); ?>
</p>



</div>
    
    
    <div class="small-12 large-4 columns">

     

<p>
    <?php echo lang('lista_pms', 'lista_pms'); ?> 
    <?php echo form_error('lista_pms'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="lista_pms" name="lista_pms" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('lista_pms', '1' ); ?> />
    <?php echo lang('si', 'lista_pms', 'class=""'); ?>
    <br>
    <input id="lista_pms" name="lista_pms" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('lista_pms', '0' ); ?> />
<?php echo lang('no', 'lista_pms', 'class=""'); ?>
</p>


<p>
    <?php echo lang('pagamento', 'pagamento'); ?> 
    <?php echo form_error('pagamento'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="pagamento" name="pagamento" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('pagamento', '1' ); ?> />
    <?php echo lang('si', 'pagamento', 'class=""'); ?>
    <br>
    <input id="pagamento" name="pagamento" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('pagamento', '0' ); ?> />
<?php echo lang('no', 'pagamento', 'class=""'); ?>
</p>


<p>
    <?php echo lang('tassa', 'tassa'); ?> 
    <?php echo form_error('tassa'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="tassa" name="tassa" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('tassa', '1'); ?> />
    <?php echo lang('si', 'tassa', 'class=""'); ?>
    <br>
    <input id="tassa" name="tassa" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('tassa', '0' ); ?> />
<?php echo lang('no', 'tassa', 'class=""'); ?>
</p>


<p>
    <?php echo lang('proforma', 'proforma'); ?> 
    <?php echo form_error('proforma'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="proforma" name="proforma" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('proforma', '1' ); ?> />
    <?php echo lang('si', 'proforma', 'class=""'); ?>
    <br>
    <input id="proforma" name="proforma" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('proforma', '0' ); ?> />
<?php echo lang('no', 'proforma', 'class=""'); ?>
</p>   
        
    </div>   
    
    
<div class="small-12 large-4 columns">

<p>
    <?php echo lang('proforma_pms', 'proforma_pms'); ?> 
    <?php echo form_error('proforma_pms'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="proforma_pms" name="proforma_pms" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('proforma_pms', '1'); ?> />
    <?php echo lang('si', 'proforma_pms', 'class=""'); ?>
    <br>
    <input id="proforma_pms" name="proforma_pms" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('proforma_pms', '0' ); ?> />
<?php echo lang('no', 'proforma_pms', 'class=""'); ?>
</p>


<p>
    <?php echo lang('bonifico', 'bonifico'); ?> 
    <?php echo form_error('bonifico'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="bonifico" name="bonifico" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('bonifico', '1' ); ?> />
    <?php echo lang('si', 'bonifico', 'class=""'); ?>
    <br>
    <input id="bonifico" name="bonifico" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('bonifico', '0'); ?> />
<?php echo lang('no', 'bonifico', 'class=""'); ?>
</p>


<p>
<?php echo lang('importo', 'importo'); ?> 
<?php echo form_error('importo'); ?>
    <input id="importo" type="text" name="importo"  value="<?php echo  set_value('importo'); ?>"  />
</p>

</div>
    
    
</div>

<div class="row">
<div class="small-12 large-12 columns">



<p>
<?php echo lang('note', 'note'); ?>
    <?php echo form_error('note'); ?>


<?php echo form_textarea(array('name' => 'note', 'rows' => '5', 'cols' => '80', 'value' =>  set_value('note'))) ?>
</p>


<p>
<?php echo form_submit('submit', 'Submit', 'class="button"'); ?>
</p>

</div>

</div>


<?php echo form_close(); ?>
</fieldset>


