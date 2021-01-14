<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Articles Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('article_controleur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Article Id</th>
						<th>Article Statut</th>
						<th>Categorie Id</th>
						<th>Redacteur Id</th>
						<th>Article Titre</th>
						<th>Article Slug</th>
						<th>Article Image</th>
						<th>Article Date</th>
						<th>Article Contenu</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_articles as $t){ ?>
                    <tr>
						<td><?php echo $t['article_id']; ?></td>
						<td><?php echo $t['article_statut']; ?></td>
						<td><?php echo $t['categorie_id']; ?></td>
						<td><?php echo $t['redacteur_id']; ?></td>
						<td><?php echo $t['article_titre']; ?></td>
						<td><?php echo $t['article_slug']; ?></td>
						<td><?php echo $t['article_image']; ?></td>
						<td><?php echo $t['article_date']; ?></td>
						<td><?php echo $t['article_contenu']; ?></td>
						<td>
                            <a href="<?php echo site_url('article_controleur/edit/'.$t['article_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('article_controleur/remove/'.$t['article_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
