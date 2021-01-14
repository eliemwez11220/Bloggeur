<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Utilisateur Edit</h3>
            </div>
			<?php echo form_open('utilisateur/edit/'.$utilisateur['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="statut" class="control-label">Statut</label>
						<div class="form-group">
							<select name="statut" class="form-control">
								<option value="">select</option>
								<?php 
								$statut_values = array(
									'offline'=>'Bloquer',
									'online'=>'Debloquer',
								);

								foreach($statut_values as $value => $display_text)
								{
									$selected = ($value == $utilisateur['statut']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $utilisateur['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $utilisateur['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="role_utilisateur" class="control-label">Role Utilisateur</label>
						<div class="form-group">
							<input type="text" name="role_utilisateur" value="<?php echo ($this->input->post('role_utilisateur') ? $this->input->post('role_utilisateur') : $utilisateur['role_utilisateur']); ?>" class="form-control" id="role_utilisateur" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_creation" class="control-label">Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo ($this->input->post('date_creation') ? $this->input->post('date_creation') : $utilisateur['date_creation']); ?>" class="has-datetimepicker form-control" id="date_creation" />
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