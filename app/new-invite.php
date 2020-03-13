<?php include_once('layouts/header.php'); ?>
<div class="wrapper">
    <!-- NavBar Header -->
    <?php include_once('layouts/nav-header.php'); ?>
    <!-- Sidebar Nav -->
    <?php include_once('layouts/sidebar.php'); ?>
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
         	<div class="container-fluid">
         		<div class="card">
		            <div class="card-header">
		                <div class="card-title">
		                    <div class="row">
	                     		<div class="col-md-6 invite-new">
	                     			<h2>
		                     			<a href="#" id="ember1905" class="navBack active ember-view">      
		                     				<svg class="navBack-icon" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
		                     					<path d="M0 10.995C0 17.063 4.937 22 11.005 22 17.067 22 22 17.064 22 10.995 22 4.933 17.067 0 11.005 0 4.937 0 0 4.933 0 10.995zm20 0C20 15.96 15.966 20 11.006 20 6.04 20 2 15.96 2 10.996 2 6.035 6.04 2 11.004 2 15.965 2 20 6.033 20 10.994zm-13.71.707l3.998 3.998 1.414-1.414-2.292-2.292h6.583v-2H9.41l2.292-2.29-1.414-1.414-3.998 3.998a.998.998 0 0 0 0 1.414z" fill-rule="nonzero" fill="#282C36"></path>
		                     				</svg>
										</a>
		                     			Single Invite
		                     		</h2>
	                     		</div>
		                    </div>
		                </div>
		            </div>
                    <div class="card-body">
                    	<form>
                    		<div class="row">
                    			<div class="col-md-8 form-group">
	                    			<label><small><b>VISITOR TYPE</b></small></label>
	                    			<select class="custom-select custom-select-sm visit-drop-height">
										<option value="1">Visitor</option>
	                              	</select>
	                    		</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-4 form-group">
                    				<label><small><b>ARRIVAL DATE</b></small>&nbsp;<span class="required">*</span></label>
	                     			<input id="flatpickr">
                    			</div>
                    			<div class="col-md-4 form-group">
	                    			<label><small><b>ARRIVAL TIME</b></small><span class="required">*</span></label>
	                    			<select class="custom-select custom-select-sm visit-drop-height">
										<option value="1">12:45 pm</option>
										<option value="1">1:00 pm</option>
										<option value="1">1:15 pm</option>
	                              	</select>
	                    		</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-8 form-group">
	                    			<label><small><b>FULL NAME</b></small>&nbsp;<span class="required">*</span></label>
	                    			<input class="form-control" type="text" placeholder="Enter full name">
	                    		</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-8 form-group">
	                    			<label><small><b>VISITOR EMAIL ADDRESS</b></small>&nbsp;<span class="required">*</span></label>
	                    			<input class="form-control" type="email" placeholder="Enter email">
	                    		</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-8 form-group">
	                    			<label><small><b>PHONE NUMBER</b></small>&nbsp;<span class="required">*</span></label>
	                    			<input class="form-control" type="text" placeholder="Enter phone number">
	                    		</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-8 form-group">
                    				<label><small><b>PRIVATE NOTE</b></small></label>
                    				<textarea class="form-control note-editor note-editor-margin" rows="5"></textarea>
                    			</div>
                    		</div>
                    		<div class="row text-right">
                    			<div class="col-md-8 form-group">
                    				<button class="invite-btn" type="button"><i class="icon-paper-plane"></i>&nbsp;&nbsp;Invite</button>
                    			</div>
                    		</div>
                    	</form>
                    </div>
                </div>
         	</div>
	    </div>
	</section>
    <footer class="footer-container"><span class="footer-copy"></span></footer>
</div>
<?php include_once('layouts/footer.php'); ?>
