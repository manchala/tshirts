<?php echo form_open('team/create'); ?>

<div class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Your Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTeamName">Team Name</label>
    <div class="controls">
      <input type="text" id="inputTeamName" name="inputTeamName" placeholder="Team Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputFile">Shirt Design</label>
    <div class="controls">
      <input type="file" id="inputFile" name="inputFile" placeholder="Choose a File">
    </div>
  </div>
  <div class="form-actions">
    <div class="btn btn-primary" >
      <?php echo form_submit('submit','Create Team'); ?>
  </div> 
  </div>
</div>
<?php echo form_close(); ?>