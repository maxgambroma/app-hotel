<div class="row">


<div class="small-12    large-12  columns">
<form  data-abide  action="<?php echo base_url(); ?>index.php/obmp/availability/?<?php echo $_SERVER['QUERY_STRING']; ?>" method="post"   name="booking" id="booking">

    <fieldset>
        <?php
        
        // prendo i dati del post
        $camera = $this->input->post('cm_rooms_id');
        // controllo le tipologie selezionate
        foreach ($this->input->post('num') as $key => $value) {
            // se selezionate 
            if ($value != 0) {
                
                // ho i dettagli della camare
                $ris = $room[$camera[$key]];
                print_r($ris);
                ?>       
                <div class="row">
                    <div class="large-1" >
                    </div>             
                    <div class="large-11" >
                        <?php ?> 
                    </div>             
                </div>
            <?php
            }
        }
        ?>         
    </fieldset>   
    
    
    
    
    
    <fieldset> 
<legend><?php echo $lg_tex['guest_details']; ?></legend>
<h5> <?php echo $lg_tex['your_privacy_is_guaranteed']; ?></h5>

<div class="row">
<div class=" small-12 large-6 columns">
<p>
<label><?php echo $lg_tex['first_name']; ?>: <small>required</small>
<input name="preno_nome" type="text" id="preno_nome" required  />
</label>
<small class="error"><?php echo $lg_tex['first_name']; ?> is required </small>
</p>
</div>  
<div class="small-12 large-6 columns">
<p>
<label><?php echo $lg_tex['last_name']; ?>: <small>required</small>
<input name="preno_cogno" type="text" id="preno_cogno" required  />
</label>
<small class="error"><?php echo $lg_tex['last_name']; ?> is required </small>
</p>                   
</div>  
</div>
<div class="row">
<div class=" small-12 large-6 columns">

<p>
<label><?php echo $lg_tex['e-mail']; ?>: <small>required</small>
<input name="preno_email"  type="email" class="email_jquery"  id="preno_email" required />
</label>
<small class="error"><?php echo $lg_tex['e-mail']; ?> address is required.</small>
</p>
</div>  
<div class="small-12 large-6 columns">
<p>
<label><?php echo $lg_tex['confirm_e-mail ']; ?>: <small>required</small>
<input name="o_email_conf" type="email" class="email_jquery"  id="o_email_conf" required data-equalto="preno_email" />
</label>
<small class="error"><?php echo $lg_tex['confirm_e-mail ']; ?> did not match</small>
</p>      
</div>  
</div>

<div class="row">
<div class=" small-12 large-6 columns">
    <p>
<label> <?php echo $lg_tex['city']; ?>: <small>required</small>
<input name="preno_city" type="text" id="preno_city"  required "/>
</label>
<small class="error"><?php echo $lg_tex['city']; ?> is required </small>
</p>
</div>  

<div class="small-12 large-6 columns">
<p>
<label><?php echo $lg_tex['country']; ?>: <small>required</small>
<select name="preno_country" id="preno_country"  required="" data-invalid="" > 
<option value="">Select Country</option>
<option style="font-weight: bold" value="Australia" phone-code="61"> Australia</option>
<option style="font-weight: bold" value="Canada" phone-code="1"> Canada</option>
<option style="font-weight: bold" value="France" phone-code="33"> France</option>
<option style="font-weight: bold" value="Germany" phone-code="49"> Germany</option>
<option style="font-weight: bold" value="Ireland" phone-code="353"> Ireland</option>
<option style="font-weight: bold" value="Italy" phone-code="39"> Italy</option>
<option style="font-weight: bold" value="Spain" phone-code="34"> Spain</option>
<option style="font-weight: bold" value="Switzerland" phone-code="41"> Switzerland</option>
<option style="font-weight: bold" value="USA" phone-code="phone-code"> USA</option>
<option style="font-weight: bold" value="United Kingdom" phone-code="44"> United Kingdom</option>
</select>
</label>
<small class="error"><?php echo $lg_tex['country']; ?>is required </small>
</p>

</div>  
</div>

<div class="row">
<div class="small-4 large-4 columns">
<p>
<label><?php echo $lg_tex['international_code']; ?> <small>required</small>
    <input name="tel_stato" type="text" id="tel_stato" placeholder="+99"  pattern="number" required />
</label>
<small class="error"><?php echo $lg_tex['international_code']; ?> is required </small>
</p>
</div>
<div class="small-4 large-4 columns">
<p>
<label><?php echo $lg_tex['domestic_code']; ?><small>required</small>
<input name="tel_prefisso" type="text" placeholder="09"   pattern="number" required  />
</label>
<small class="error"><?php echo $lg_tex['domestic_code']; ?> is required </small>
</p>
</div>
<div class="small-4 large-4 columns">
<p>
<label><?php echo $lg_tex['phone_number']; ?><small>required</small>
<input name="tel_nemero" type="text" id="tel_nemero" placeholder="999999999"  pattern="number" required  />
</label>
<small class="error"><?php echo $lg_tex['phone_number']; ?> is required </small>        </p>
</div>
</div>


</fieldset>


<fieldset>
<legend><?php echo $lg_tex['notes_for_the_property']; ?></legend>



<div class="row">
<div class="small-12 large-6 columns">
<p>

<label><?php echo $lg_tex['i_would_like_to_notify_my_arrival_time']; ?>
<select name="preno_arr_ore" id="preno_arr_ore">
<option>--</option>
<option value="1">01 AM</option>
<option value="2">02 AM</option>
<option value="3">03 AM</option>
<option value="4">04 AM</option>
<option value="5">05 AM</option>
<option value="6">06 AM</option>
<option value="7">07 AM</option>
<option value="8">08 AM</option>
<option value="9">09 AM </option>
<option value="10">10 AM</option>
<option value="11">11 AM</option>
<option value="12">12 AM</option>
<option value="13">01 PM</option>
<option value="14">02 PM </option>
<option value="15">03 PM</option>
<option value="16">04 PM</option>
<option value="17">05 PM</option>
<option value="18">06 PM </option>
<option value="19">07 PM </option>
<option value="20">08 PM</option>
<option value="21">09 PM </option>
<option value="22">10 PM </option>
<option value="23">11 PM </option>
<option value="24">12 PM</option>
</select>
</label>
</p>
</div>
<div class="small-12 large-6 columns">
<p>
<label> <?php echo $lg_tex['newsletter']; ?>:
<input name="newsletter" type="checkbox" id="newsletter" value="1" checked="checked" />
</label>
</p>

</div>

</div>


<p>
<label><?php echo $lg_tex['special_requests']; ?>
<textarea name="preno_note" cols="60" rows="4" id="preno_note"></textarea>
</label>
</p>



</fieldset>
    
<fieldset>
<legend><?php echo $lg_tex['cancellation_policy']; ?></legend>
<h4>  <?php echo $lg_tex['cancellation_without_penalty_until']; ?>
<?php // echo @date("D M j Y", strtotime(sottrazione_gg($preno_dal, $giorni_cancallazione))); ?>
</h4> 
</fieldset>
    
<fieldset>
<legend><?php echo $lg_tex['credit_card']; ?></legend>
<h4><?php echo $lg_tex['no_pre-payment']; ?></h4>


<div class="row">
    <div class="small-12 large-6 columns">
        
<p>
<label><?php echo $lg_tex['Holder']; ?>: <small>required</small>
<input name="preno_cc_holder" type="text" id="preno_cc_holder" required  />
</label>
<small class="error"><?php echo $lg_tex['Holder']; ?> is required.</small>
</p>

    </div>
    <div class="small-12 large-6 columns">
        

<p>
<label> <?php echo $lg_tex['type_of_credit_card']; ?>: <small>required</small>
<select name="preno_cc_tip" id="preno_cc_tip" required="" data-invalid=""  >
<option value="">Seleziona cc</option>
<option value="vi">Visa</option>
<option value="ax">American Express</option>
<option value="dc">Diners Club</option>
<option value="mc">MasterCard</option>
<option value="eu">Eurocard</option>
<option value="jc">JCB</option>
</select>
</label>
<small class="error"><?php echo $lg_tex['type_of_credit_card']; ?> is required </small>
</p>

    </div>
    
</div>


<div class="row">
    <div class="small-12 large-6 columns">
        
<p>
<label><?php echo $lg_tex['number']; ?>: <small>required</small>
<input name="preno_cc_n" type="text" id="preno_cc_n" pattern="card" required  />
</label>
<small class="error"> <?php echo $lg_tex['number']; ?> is required and must be a number</small>
</p>

    </div>
    <div class="small-12 large-6 columns">
        
<p>
<label><?php echo $lg_tex['expiry_date']; ?>: <small>required</small>
<input name="preno_cc_scad" type="text" id="preno_cc_scad"  required   />
</label>
<small class="error"><?php echo $lg_tex['expiry_date']; ?> is required </small>
</p>
    </div>
    
</div>





</fieldset>

<input name="submit_booking" class="button  expand round success" type="submit" value="<?php echo $lg_tex['confirm_booking']; ?>">

<h5> <?php echo $lg_tex['you_receive_e-mail']; ?> </h5>




      <input name="hotel_id" type="hidden" id="hotel_id" value="<?php echo $hotel_id ; ?>" />
      <input name="preno_dal" type="hidden" id="preno_dal" value="<?php echo $preno_dal ?>" />
      <input name="preno_al" type="hidden" id="preno_al" value="<?php echo $preno_al; ?>" />
      <input name="preno_in_data" type="hidden" id="preno_in_data2" value="<?php echo date("Y-m-d H:i:s"); ?>" />
      <input name="preno_trattamento" type="hidden" id="preno_trattamento2" value="BB" />
      <input name="preno_stato" type="hidden" id="preno_stato" value="1" />
      <input name="preno_doc_form" type="hidden" id="preno_doc_form" value="1" />
            
      <input name="preno_mercato" type="hidden" id="preno_mercato" value="<?php echo $mercato;?>" />
      
      <input name="ref_site" type="hidden" id="ref_site" value="<?php echo $ref_site; ?>" />
      <input name="ref_agency" type="hidden" id="ref_agency" value="<?php  echo $ref_agency; ?>" />
      <input name="ref_event" type="hidden" id="ref_event" value="<?php echo $ref_event; ?>" />
      <input name="ref_session" type="hidden" id="ref_session2" value="<?php echo $ref_session; ?>" />
      <input name="ref_cookie" type="hidden" id="ref_cookie2" value="<?php echo $ref_cookie; ?>" />
      
      <input name="obm_cliente_pass" type="hidden" id="obm_cliente_pass" value="55555" />
      <?php /* da sistema  */?>
      <input name="utente_id" type="hidden" id="utente_id" value="999" />
      <?php /* chi effetua la preno  metto 999 */?>
      <input name="obm_cliente_id" type="hidden" id="obm_cliente_id3" />
      <?php /* cfornito dal sistema  */?>
      <?php /* <input name="preno_id" type="hidden" id="preno_id" />auto incremento   */?>
      <input name="preno_cc_s_cod" type="hidden" id="0" />
      <?php /* 0 non lo inserisco   */?>




















</form>
</div>
</div>


     <script>
    $(function() {
    // Clienti prezzi web 
    $('#preno_country').change(function(){
   
//   var camara_cm = $('#preno_country').val();
    var camara_cm = $('#preno_country').attr('phone-code', value);


$('input#tel_stato').val(camara_cm');

    });

    });


document.write(camara_cm);

    </script>
