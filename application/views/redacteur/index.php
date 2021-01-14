<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Redacteurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('redacteur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Redacteur Id</th>
						<th>Redacteur Specialite</th>
						<th>Date Creation</th>
						<th>Redacteur Nom</th>
						<th>Redacteur Adresse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_redacteurs as $t){ ?>
                    <tr>
						<td><?php echo $t['redacteur_id']; ?></td>
						<td><?php echo $t['redacteur_specialite']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['redacteur_nom']; ?></td>
						<td><?php echo $t['redacteur_adresse']; ?></td>
						<td>
                            <a href="<?php echo site_url('redacteur/edit/'.$t['redacteur_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('redacteur/remove/'.$t['redacteur_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
