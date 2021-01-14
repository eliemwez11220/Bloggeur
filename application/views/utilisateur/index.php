<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Utilisateurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('utilisateur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id User</th>
						<th>Statut</th>
						<th>Password</th>
						<th>Username</th>
						<th>Role Utilisateur</th>
						<th>Date Creation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($utilisateurs as $U){ ?>
                    <tr>
						<td><?php echo $U['id_user']; ?></td>
						<td><?php echo $U['statut']; ?></td>
						<td><?php echo $U['password']; ?></td>
						<td><?php echo $U['username']; ?></td>
						<td><?php echo $U['role_utilisateur']; ?></td>
						<td><?php echo $U['date_creation']; ?></td>
						<td>
                            <a href="<?php echo site_url('utilisateur/edit/'.$U['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('utilisateur/remove/'.$U['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
