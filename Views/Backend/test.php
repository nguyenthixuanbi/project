 <style type="text/css">
     .form-assign{
        position: fixed;
	    width: 40%;
	    z-index: 100;
	    top: 25%;
	    display: none;
	    padding: 1%;
     }
 </style>
<div class="col-md-2"></div>
<div class="col-md-8 ">
	<form method="post"  action="" class="form-assign bg-primary">
	  <div class="form-group">
	    <label for="namework" style="margin-top: 5px;">Assign work</label>
	    <input type="text" class="form-control" id="namework" name="namework" required>
	  </div>
	  <div class="form-group">
	    <label for="start">Start</label>
	    <input type="date" class="form-control" id="start" required name="start">
	    <label for="start">Deadline</label>
	    <input type="date" class="form-control" id="deadline" required name="deadline">
	  </div>
	  <button type="submit" style="margin-bottom: 5px;" class="btn btn-default submit">Submit</button>
	  <button type="reset" style="margin-bottom: 5px;" class="btn btn-danger cancel">Cancel</button>
	
	</form>
</div>