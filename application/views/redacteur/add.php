<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Redacteur Add</h3>
            </div>
            <?php echo form_open('redacteur/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="redacteur_specialite" class="control-label"><span class="text-danger">*</span>Redacteur Specialite</label>
						<div class="form-group">
							<input type="text" name="redacteur_specialite" value="<?php echo $this->input->post('redacteur_specialite'); ?>" class="form-control" id="redacteur_specialite" />
							<span class="text-danger"><?php echo form_error('redacteur_specialite');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_creation" class="control-label">Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo $this->input->post('date_creation'); ?>" class="has-datetimepicker form-control" id="date_creation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="redacteur_nom" class="control-label">Redacteur Nom</label>
						<div class="form-group">
							<input type="text" name="redacteur_nom" value="<?php echo $this->input->post('redacteur_nom'); ?>" class="form-control" id="redacteur_nom" />
							<span class="text-danger"><?php echo form_error('redacteur_nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="redacteur_adresse" class="control-label">Redacteur Adresse</label>
						<div class="form-group">
							<textarea name="redacteur_adresse" class="form-control" id="redacteur_adresse"><?php echo $this->input->post('redacteur_adresse'); ?></textarea>
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