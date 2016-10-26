<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$today = date('Y-m-d');
// print_r($partenze);     
// print_r($partiti);     
// print_r($fermate); media camere   
// // print_r($conti_aperti); 
// 
/**
           [tipologia_id] => 7
            [nome_tipologia] => Doppia Uso
            [nome_tipologia_en] => Dus
            [foglio_id] => 278661
            [hotel_id] => 4
            [conto_id] => 222142
            [preno_id] => 121466
            [in_conto] => 2015-10-04
            [out_preno] => 2015-10-08
            [stato_camera] => 8
            [preno_agenzia] => 31
            [camera_id] => 92
            [numero_camera] => 229
            [camere_piano] => 1
            [tipologia_camera] => 2
            [in_conto_time] => 2015-10-04 20:13:15
            [out_conto] => 2015-10-07
            [conti_stato_camere] => 8
            [foglio_utente_id] => 
            [foglio_data_record] => 2015-10-07 20:13:37
            [nome_cliente] => Shani
            [cognome_cliente] => Doron
            [pulizia_id] => 208
            [cambio_biancheria] => 
            [pulizia_stato] => 2
            [pulizia_data] => 2015-10-08
            [pulizia_note] => 
            [pulizia_data_record] => 2015-10-08 08:54:07
//print_r($menu); 
// print_r($arrivi);
//print_r($conti_aperti);
/*


 */
// dati di defoult



if ( ( !$this->input->get('scelta')  ) OR ( $this->input->get('scelta') == 'conti_aperti')) {
    $scelta = $conti_aperti;
}
if ($this->input->get('scelta') == 'partiti') {
    $scelta = $partiti;
}
if ($this->input->get('scelta') == 'partenze') {
    $scelta = $partenze;
}

if ($this->input->get('scelta') == 'rifatte') {
    $scelta = $rifatte;
}
if ($this->input->get('scelta') == 'arrivi') {
    $scelta = 'arrivi';
}

if ($this->input->get('scelta') == 'controllo') {
    $scelta = $controllo ;}



?>

<?php
if ($scelta <> 'arrivi') {

    foreach ($scelta as $row) {
// coloro le partenze
        if ($row->out_preno > $today) {
            $colorediv = 'room_fermata';
            $stato = 'Fermata';
        } else {
            $colorediv = 'room_partenza';
            $stato = 'Partenza';
        }
        
        if( $row->in_conto == $today ){
            $colorediv = 'room_arrivi_ok';
            $stato = 'Arrivato';
            
        }
        
        
        ?>
        <!-- quadrato -->
        <a href="<?php echo base_url(); ?>index.php/apphotel/risorsa?conto_id=<?php echo $row->conto_id; ?>&foglio_id=<?php echo $row->foglio_id; ?>&hotel_id=<?php echo $row->hotel_id; ?> ">
            <div class='<?php echo $colorediv; ?>'  >
                <div class="row">
                    <div class="large-4  small-4 columns">
                        <i class="fi-check" title="Pronta" ></i>
                        <?php echo ''; ?>
                    </div>
                    <div class="large-4 small-4 columns">
                        <i class="fi-alert" title="Manutenzione"   ></i>
                        <?php echo ''; ?>
                    </div>
                    <div class="large-4 small-4  columns">
                        <i class="fi-dollar-bill" title="Adebbiti"  ></i>
                        <?php echo ''; ?>
                    </div>
                </div>
                <h2><?php echo $row->numero_camera; ?></h2>
                <span data-tooltip aria-haspopup="true" class="has-tip"
                      title="<?php echo $row->nome_tipologia; ?> :
                      <?php echo $row->cognome_cliente . ' ' . $row->nome_cliente; ?>  
                      In : <?php echo $row->in_conto; ?>
                      Out : <?php echo $row->out_preno; ?> " >
                    <p><?php echo $stato ?></p>
                </span>
            </div>
        </a> 
        <!-- / quadrato -->
        <?php
    }
} ?>
        
 <?php
// arrivi
if ($scelta == 'arrivi') {
    foreach ($arrivi as $rowarrivi) {
        if ($rowarrivi->tipologia_camera == $rowarrivi->nome_tipologia) {
            $bcolore = 'room_arrivi_ok';
        } else {
            $bcolore = 'room_arrivi_ko';
        }
        ?>
        <!-- quadrato -->
        <a  href="<?php echo base_url(); ?>?hotel_id=<?php echo $rowarrivi->hotel_id; ?>" >
            <div class='<?php echo $bcolore; ?>'  >
                <span data-tooltip aria-haspopup="true" class="has-tip"
                      title="Preparare come <?php echo $rowarrivi->nome_tipologia; ?>">
                    <h2><?php echo $rowarrivi->numero_camera; ?></h2>
                </span>
            </div>
        </a>

        <!-- / quadrato -->
        <?php
    }
}
?>
