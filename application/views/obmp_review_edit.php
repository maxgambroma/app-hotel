<!--  obmp_review_edit.php  -->
<fieldset>
    <legend>obmp_review:</legend>	

    <?php if ($this->input->get('error')) { ?>
        <p>
        <div class="error"><?php echo $this->lang->line($this->input->get('error'), FALSE); ?> </div> 
    </p>
<?php } ?>

<?php
// Change the css classes to suit your needs    
$attributes = array('class' => '', 'id' => '');
echo form_open('obmp_review/edit/?' . $_SERVER['QUERY_STRING'], $attributes);
?>   


<p>
    <input id="review_id" type="hidden" name="review_id"  value="<?php echo (!set_value('review_id')) ? $rs_obmp_review->review_id : set_value('review_id'); ?>"  />
<p>
    <span class="required">*</span>       <input id="hotel_id" type="hidden" name="hotel_id"  value="<?php echo (!set_value('hotel_id')) ? $rs_obmp_review->hotel_id : set_value('hotel_id'); ?>"  />
<p>
    <span class="required">*</span>       <input id="preno_id" type="hidden" name="preno_id"  value="<?php echo (!set_value('preno_id')) ? $rs_obmp_review->preno_id : set_value('preno_id'); ?>"  />
<p>
    <span class="required">*</span>       <input id="conto_id" type="hidden" name="conto_id"  value="<?php echo (!set_value('conto_id')) ? $rs_obmp_review->conto_id : set_value('conto_id'); ?>"  />
<p>
<?php echo lang('postazione_id', 'postazione_id'); ?> <span class="required">*</span>
<?php echo form_error('postazione_id'); ?>
    <input id="postazione_id" type="text" name="postazione_id"  value="<?php echo (!set_value('postazione_id')) ? $rs_obmp_review->postazione_id : set_value('postazione_id'); ?>"  />
</p>

<p>
<?php echo lang('camera_numero', 'camera_numero'); ?> <span class="required">*</span>
<?php echo form_error('camera_numero'); ?>
    <input id="camera_numero" type="text" name="camera_numero"  value="<?php echo (!set_value('camera_numero')) ? $rs_obmp_review->camera_numero : set_value('camera_numero'); ?>"  />
</p>

<p>
<?php echo lang('nome', 'nome'); ?> <span class="required">*</span>
<?php echo form_error('nome'); ?>
    <input id="nome" type="text" name="nome"  value="<?php echo (!set_value('nome')) ? $rs_obmp_review->nome : set_value('nome'); ?>"  />
</p>

<p>
<?php echo lang('stato', 'stato'); ?> <span class="required">*</span>
<?php echo form_error('stato'); ?>
    <input id="stato" type="text" name="stato"  value="<?php echo (!set_value('stato')) ? $rs_obmp_review->stato : set_value('stato'); ?>"  />
</p>

<p>
    <?php echo lang('user_type', 'user_type'); ?> <span class="required">*</span>        <?php echo form_error('user_type'); ?>
    <?php // Change the values in this array to populate your dropdown as required ?>
    <?php
    // $options = array('' => 'Please Select'    
    //                   );
    // or FORM DB
    foreach ($rs_data as $value) {
        $options[$value->id] = $value->nome;
    }
    ?>
<?php echo form_dropdown('user_type', $options, (!set_value('user_type')) ? $rs_obmp_review->user_type : set_value('user_type') ) ?>
</p>                                             

<p>
    <?php echo lang('pulizia_camera', 'pulizia_camera'); ?> <span class="required">*</span>
    <?php echo form_error('pulizia_camera'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="pulizia_camera" name="pulizia_camera" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('pulizia_camera', 1); ?> />
    <?php echo lang('pulizia_camera', 'pulizia_camera', 'class="">Radio option 1   '); ?>

    <input id="pulizia_camera" name="pulizia_camera" type="radio" class="" value="2" <?php echo $this->form_validation->set_radio('pulizia_camera', 2); ?> />
<?php echo lang('pulizia_camera', 'pulizia_camera', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('accoglienza', 'accoglienza'); ?> <span class="required">*</span>
    <?php echo form_error('accoglienza'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="accoglienza" name="accoglienza" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('accoglienza', 'option1'); ?> />
    <?php echo lang('accoglienza', 'accoglienza', 'class="">Radio option 1   '); ?>

    <input id="accoglienza" name="accoglienza" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('accoglienza', 'option2'); ?> />
<?php echo lang('accoglienza', 'accoglienza', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('rumore_camere', 'rumore_camere'); ?> <span class="required">*</span>
    <?php echo form_error('rumore_camere'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="rumore_camere" name="rumore_camere" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('rumore_camere', 'option1'); ?> />
    <?php echo lang('rumore_camere', 'rumore_camere', 'class="">Radio option 1   '); ?>

    <input id="rumore_camere" name="rumore_camere" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('rumore_camere', 'option2'); ?> />
<?php echo lang('rumore_camere', 'rumore_camere', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('spazio_camera', 'spazio_camera'); ?> <span class="required">*</span>
    <?php echo form_error('spazio_camera'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="spazio_camera" name="spazio_camera" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('spazio_camera', 'option1'); ?> />
    <?php echo lang('spazio_camera', 'spazio_camera', 'class="">Radio option 1   '); ?>

    <input id="spazio_camera" name="spazio_camera" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('spazio_camera', 'option2'); ?> />
<?php echo lang('spazio_camera', 'spazio_camera', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('spazi_comuni', 'spazi_comuni'); ?> <span class="required">*</span>
    <?php echo form_error('spazi_comuni'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="spazi_comuni" name="spazi_comuni" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('spazi_comuni', 'option1'); ?> />
    <?php echo lang('spazi_comuni', 'spazi_comuni', 'class="">Radio option 1   '); ?>

    <input id="spazi_comuni" name="spazi_comuni" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('spazi_comuni', 'option2'); ?> />
<?php echo lang('spazi_comuni', 'spazi_comuni', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('competenza_impiegati', 'competenza_impiegati'); ?> <span class="required">*</span>
    <?php echo form_error('competenza_impiegati'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="competenza_impiegati" name="competenza_impiegati" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('competenza_impiegati', 'option1'); ?> />
    <?php echo lang('competenza_impiegati', 'competenza_impiegati', 'class="">Radio option 1   '); ?>

    <input id="competenza_impiegati" name="competenza_impiegati" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('competenza_impiegati', 'option2'); ?> />
<?php echo lang('competenza_impiegati', 'competenza_impiegati', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('qualita_servizi', 'qualita_servizi'); ?> <span class="required">*</span>
    <?php echo form_error('qualita_servizi'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="qualita_servizi" name="qualita_servizi" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('qualita_servizi', 'option1'); ?> />
    <?php echo lang('qualita_servizi', 'qualita_servizi', 'class="">Radio option 1   '); ?>

    <input id="qualita_servizi" name="qualita_servizi" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('qualita_servizi', 'option2'); ?> />
<?php echo lang('qualita_servizi', 'qualita_servizi', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('dintorni', 'dintorni'); ?> <span class="required">*</span>
    <?php echo form_error('dintorni'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="dintorni" name="dintorni" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('dintorni', 'option1'); ?> />
    <?php echo lang('dintorni', 'dintorni', 'class="">Radio option 1   '); ?>

    <input id="dintorni" name="dintorni" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('dintorni', 'option2'); ?> />
<?php echo lang('dintorni', 'dintorni', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('colazione', 'colazione'); ?> <span class="required">*</span>
    <?php echo form_error('colazione'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="colazione" name="colazione" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('colazione', 'option1'); ?> />
    <?php echo lang('colazione', 'colazione', 'class="">Radio option 1   '); ?>

    <input id="colazione" name="colazione" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('colazione', 'option2'); ?> />
<?php echo lang('colazione', 'colazione', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('tariffa', 'tariffa'); ?> <span class="required">*</span>
    <?php echo form_error('tariffa'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="tariffa" name="tariffa" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('tariffa', 'option1'); ?> />
    <?php echo lang('tariffa', 'tariffa', 'class="">Radio option 1   '); ?>

    <input id="tariffa" name="tariffa" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('tariffa', 'option2'); ?> />
<?php echo lang('tariffa', 'tariffa', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('servizi_offerti', 'servizi_offerti'); ?> <span class="required">*</span>
    <?php echo form_error('servizi_offerti'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="servizi_offerti" name="servizi_offerti" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('servizi_offerti', 'option1'); ?> />
    <?php echo lang('servizi_offerti', 'servizi_offerti', 'class="">Radio option 1   '); ?>

    <input id="servizi_offerti" name="servizi_offerti" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('servizi_offerti', 'option2'); ?> />
<?php echo lang('servizi_offerti', 'servizi_offerti', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('foto', 'foto'); ?> <span class="required">*</span>
    <?php echo form_error('foto'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="foto" name="foto" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('foto', 'option1'); ?> />
    <?php echo lang('foto', 'foto', 'class="">Radio option 1   '); ?>

    <input id="foto" name="foto" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('foto', 'option2'); ?> />
<?php echo lang('foto', 'foto', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('indicazione_mappa', 'indicazione_mappa'); ?> <span class="required">*</span>
    <?php echo form_error('indicazione_mappa'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="indicazione_mappa" name="indicazione_mappa" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('indicazione_mappa', 'option1'); ?> />
    <?php echo lang('indicazione_mappa', 'indicazione_mappa', 'class="">Radio option 1   '); ?>

    <input id="indicazione_mappa" name="indicazione_mappa" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('indicazione_mappa', 'option2'); ?> />
<?php echo lang('indicazione_mappa', 'indicazione_mappa', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('giudizio_totale', 'giudizio_totale'); ?> <span class="required">*</span>
    <?php echo form_error('giudizio_totale'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="giudizio_totale" name="giudizio_totale" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('giudizio_totale', 'option1'); ?> />
    <?php echo lang('giudizio_totale', 'giudizio_totale', 'class="">Radio option 1   '); ?>

    <input id="giudizio_totale" name="giudizio_totale" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('giudizio_totale', 'option2'); ?> />
<?php echo lang('giudizio_totale', 'giudizio_totale', 'class="">Radio option 2   '); ?>
</p>


<p>
    <?php echo lang('prezzo_qualita', 'prezzo_qualita'); ?> <span class="required">*</span>
    <?php echo form_error('prezzo_qualita'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="prezzo_qualita" name="prezzo_qualita" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('prezzo_qualita', 'option1'); ?> />
    <?php echo lang('prezzo_qualita', 'prezzo_qualita', 'class="">Radio option 1   '); ?>

    <input id="prezzo_qualita" name="prezzo_qualita" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('prezzo_qualita', 'option2'); ?> />
<?php echo lang('prezzo_qualita', 'prezzo_qualita', 'class="">Radio option 2   '); ?>
</p>


<p>
<?php echo lang('commento_tex', 'commento_tex'); ?> <span class="required">*</span>
    <?php echo form_error('commento_tex'); ?>


    <?php echo form_textarea(array('name' => 'commento_tex', 'rows' => '5', 'cols' => '80', 'value' => (!set_value('commento_tex')) ? $rs_obmp_review->commento_tex : set_value('commento_tex'))); ?>
</p>
<p>
    <?php echo lang('raccomandi', 'raccomandi'); ?> <span class="required">*</span>
    <?php echo form_error('raccomandi'); ?>

    <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
    <input id="raccomandi" name="raccomandi" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('raccomandi', 'option1'); ?> />
    <?php echo lang('raccomandi', 'raccomandi', 'class="">Radio option 1   '); ?>

    <input id="raccomandi" name="raccomandi" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('raccomandi', 'option2'); ?> />
<?php echo lang('raccomandi', 'raccomandi', 'class="">Radio option 2   '); ?>
</p>


<p>
    <input id="ip_review" type="hidden" name="ip_review"  value="<?php echo (!set_value('ip_review')) ? $rs_obmp_review->ip_review : set_value('ip_review'); ?>"  />
<p>
    <input id="data_review" type="hidden" name="data_review"  value="<?php echo (!set_value('data_review')) ? $rs_obmp_review->data_review : set_value('data_review'); ?>"  />
<p>
    <input id="review_data_record" type="hidden" name="review_data_record"  value="<?php echo (!set_value('review_data_record')) ? $rs_obmp_review->review_data_record : set_value('review_data_record'); ?>"  />


<p>
<?php echo form_submit('submit', 'Submit', 'class="button"'); ?>
</p>
<?php echo form_close(); ?>
</fieldset>                
<br>
<div>
    <fieldset>

        <?php
        // Change the css classes to suit your needs    
        $atri = array('class' => '', 'id' => '');
        echo form_open('obmp_review/delete/?' . $_SERVER['QUERY_STRING'], $atri);
        ?>   <p>      
            <label for="review_id">Conferma cancellazione record Id review_id </label>        
            <input type="checkbox" name="CAX" value="10" />
            <input type="hidden" name="review_id" value="<?php echo (!set_value('review_data_record')) ? $rs_obmp_review->review_id : set_value('review_id'); ?>" />
        </p>
        <p>
<?php echo form_submit('submit', 'Cancella', 'class="button"'); ?>
        </p>
<?php echo form_close(); ?>
    </fieldset>
</div>