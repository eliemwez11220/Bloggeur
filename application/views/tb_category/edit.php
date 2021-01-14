<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Category Edit</h3>
            </div>
			<?php echo form_open('tb_category/edit/'.$tb_category['categorie_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="categorie_nom" class="control-label">Categorie Nom</label>
						<div class="form-group">
							<input type="text" name="categorie_nom" value="<?php echo ($this->input->post('categorie_nom') ? $this->input->post('categorie_nom') : $tb_category['categorie_nom']); ?>" class="form-control" id="categorie_nom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_date" class="control-label">Categorie Date</label>
						<div class="form-group">
							<input type="datetime" name="categorie_date" value="<?php echo ($this->input->post('categorie_date') ? $this->input->post('categorie_date') : $tb_category['categorie_date']); ?>" class="form-control" id="categorie_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_details" class="control-label">Categorie Details</label>
						<div class="form-group">
							<textarea name="categorie_details" class="form-control" id="categorie_details"><?php echo ($this->input->post('categorie_details') ? $this->input->post('categorie_details') : $tb_category['categorie_details']); ?></textarea>
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
