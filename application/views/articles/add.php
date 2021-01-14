<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Article Add</h3>
            </div>
            <?php echo form_open('article_controleur/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="article_statut" class="control-label">Article Statut</label>
						<div class="form-group">
							<select name="article_statut" class="form-control">
								<option value="">select</option>
								<?php
								$article_statut_values = array(
									'online'=>'Publier',
									'offline'=>'Brouillon',
								);

								foreach($article_statut_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('article_statut')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_id" class="control-label">Tb Category</label>
						<div class="form-group">
							<select name="categorie_id" class="form-control">
								<option value="">select tb_category</option>
								<?php
								foreach($all_tb_categories as $tb_category)
								{
									$selected = ($tb_category['categorie_id'] == $this->input->post('categorie_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_category['categorie_id'].'" '.$selected.'>'.$tb_category['categorie_nom'].'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="redacteur_id" class="control-label">Tb Redacteur</label>
						<div class="form-group">
							<select name="redacteur_id" class="form-control">
								<option value="">select tb_redacteur</option>
								<?php
								foreach($all_tb_redacteurs as $tb_redacteur)
								{
									$selected = ($tb_redacteur['redacteur_id'] == $this->input->post('redacteur_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_redacteur['redacteur_id'].'" '.$selected.'>'.$tb_redacteur['redacteur_nom'].'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_titre" class="control-label"><span class="text-danger">*</span>Article Titre</label>
						<div class="form-group">
							<input type="text" name="article_titre" value="<?php echo $this->input->post('article_titre'); ?>" class="form-control" id="article_titre" />
							<span class="text-danger"><?php echo form_error('article_titre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_slug" class="control-label">Article Slug</label>
						<div class="form-group">
							<input type="text" name="article_slug" value="<?php echo $this->input->post('article_slug'); ?>" class="form-control" id="article_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_image" class="control-label">Article Image</label>
						<div class="form-group">
							<input type="file" name="article_image" value="<?php echo $this->input->post('article_image'); ?>" class="form-control" id="article_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_date" class="control-label">Article Date</label>
						<div class="form-group">
							<input type="text" name="article_date" value="<?php echo $this->input->post('article_date'); ?>" class="has-datetimepicker form-control" id="article_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="article_contenu" class="control-label">Article Contenu</label>
						<div class="form-group">
							<textarea name="article_contenu" class="form-control" id="article_contenu"><?php echo $this->input->post('article_contenu'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
