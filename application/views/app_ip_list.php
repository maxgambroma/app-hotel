<?php
//  app_ip_list.php
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
            <caption>app_ip</caption>
            <thead>
                <tr>
                    <th><?php echo $this->lang->line('app_ip_id'); ?></th>
                    <th><?php echo $this->lang->line('ip_aderss'); ?></th>
                    <th><?php echo $this->lang->line('Livello'); ?></th>
                    <th><?php echo $this->lang->line('data'); ?></th>    
                </tr>
            </thead>
            <tbody> 
                <?php foreach ($rs_app_ip as $val) { ?>
                    <tr> 
                        <td><a href = '<?php echo base_url(); ?>index.php/app_ip/edit/?app_ip_id=<?php echo $val->app_ip_id; ?>'><?php echo $val->app_ip_id; ?></a></td>
                        <td><?php echo $val->ip_aderss; ?></td>
                        <td><?php echo $val->Livello; ?></td>
                        <td><?php echo $val->data; ?></td>         
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <fieldset>
                <a href="
                   <?php echo base_url(); ?>index.php/app_ip/insert/?<?php echo $_SERVER['QUERY_STRING'] ?>"> <input type="button" value="Insert Record" class="button" /></a>
            </fieldset>  
        </div>
    </fieldset>
</div>