<?php
//  checklist_preno_list.php
?>    

<div>
    <fieldset> 
        <?php if ($this->input->get('error')) { ?>
            <div class="error">
                <p>
                    <?php echo $this->lang->line($this->input->get('error'), FALSE); ?>
                </p>
            </div> 
        <?php } ?>
        <div> <?php echo $pagination; ?> </div>
        <table  id='tablesorter' class='tablesorter' >
            <caption>checklist_preno</caption>
            <thead>
                <tr>
                    <th><?php echo $this->lang->line('checklist_id'); ?></th>
                    <th><?php echo $this->lang->line('hotel_id'); ?></th>
                    <th><?php echo $this->lang->line('preno_id'); ?></th>
                    <th><?php echo $this->lang->line('preno_dal'); ?></th>
                    <th><?php echo $this->lang->line('email'); ?></th>
                    <th><?php echo $this->lang->line('email_pms'); ?></th>
                    <th><?php echo $this->lang->line('lista'); ?></th>
                    <th><?php echo $this->lang->line('lista_pms'); ?></th>
                    <th><?php echo $this->lang->line('pagamento'); ?></th>
                    <th><?php echo $this->lang->line('tassa'); ?></th>
                    <th><?php echo $this->lang->line('proforma'); ?></th>
                    <th><?php echo $this->lang->line('proforma_pms'); ?></th>
                    <th><?php echo $this->lang->line('bonifico'); ?></th>
                    <th><?php echo $this->lang->line('importo'); ?></th>
                    <th><?php echo $this->lang->line('note'); ?></th>
                    <th><?php echo $this->lang->line('data_check'); ?></th>
                    <th><?php echo $this->lang->line('utente_id'); ?></th>
                    <th><?php echo $this->lang->line('data_record'); ?></th>    
                </tr>
            </thead>
            <tbody> 
                <?php foreach ($rs_checklist_preno as $val) { ?>
                    <tr> 
                        <td><a href = '<?php echo base_url(); ?>index.php/checklist_preno/edit/?checklist_id=<?php echo $val->checklist_id; ?>'><?php echo $val->checklist_id; ?></a></td>
                        <td><?php echo $val->hotel_id; ?></td>
                        <td><?php echo $val->preno_id; ?></td>
                        <td><?php echo $val->preno_dal; ?></td>
                        <td><?php echo $val->email; ?></td>
                        <td><?php echo $val->email_pms; ?></td>
                        <td><?php echo $val->lista; ?></td>
                        <td><?php echo $val->lista_pms; ?></td>
                        <td><?php echo $val->pagamento; ?></td>
                        <td><?php echo $val->tassa; ?></td>
                        <td><?php echo $val->proforma; ?></td>
                        <td><?php echo $val->proforma_pms; ?></td>
                        <td><?php echo $val->bonifico; ?></td>
                        <td><?php echo $val->importo; ?></td>
                        <td><?php echo $val->note; ?></td>
                        <td><?php echo $val->data_check; ?></td>
                        <td><?php echo $val->utente_id; ?></td>
                        <td><?php echo $val->data_record; ?></td>         
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <fieldset>
                <a href="
                   <?php echo base_url(); ?>index.php/checklist_preno/insert/?<?php echo $_SERVER['QUERY_STRING'] ?>"> <input type="button" value="Insert Record" class="button" /></a>
            </fieldset>  
        </div>
    </fieldset>
</div>