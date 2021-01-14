<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Categories Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Categorie Id</th>
						<th>Categorie Nom</th>
						<th>Categorie Date</th>
						<th>Categorie Details</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_categories as $t){ ?>
                    <tr>
						<td><?php echo $t['categorie_id']; ?></td>
						<td><?php echo $t['categorie_nom']; ?></td>
						<td><?php echo $t['categorie_date']; ?></td>
						<td><?php echo $t['categorie_details']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_category/edit/'.$t['categorie_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_category/remove/'.$t['categorie_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
