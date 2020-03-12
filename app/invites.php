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
	                     		<div class="col-md-2 visit-logs log-counts">
	                     			<h2>1 Invite</h2>
	                     		</div>
	                     		<div class="col-md-6">
	                     			<span class="log-date">
		                     			<input id="flatpickr">
		                     		</span>
	                     		</div>
	                     		<div class="col-md-2 log-type">
	                     			<select class="custom-select custom-select-sm invite-drop-height">
										<option value="1">All Invites</option>
										<option value="2">My Invites</option>
	                              	</select>
	                     		</div>
	                     		<div class="col-md-2 text-right">
	                     			<a href="new-invite.php">
	                     				<button class="btn btn-secondary btn-lg invite-btn" type="button">New invite</button>
	                     			</a>
	                     		</div>
		                    </div>
		                </div>
		            </div>
                    <div class="card-body">
	                  	<!-- <div class="tw-mx-auto tw-text-center tw-my-8 js-emptyState no-visits">
	                  		<img src="img/background/no-invites.png" alt="" class="empty-visitors">
	                  		<h2 data-test-empty-entries-list-message="" class="tw-mt-8 tw-font-normal grayDark">
						          No visitors yet
						    </h2>
	                  	</div> -->
	                    <table class="table table-striped my-4 w-100" id="datatable2">
	                        <thead>
	                           <tr>
	                           	<th class="hide-plus" data-priority="1"></th>
			                        <th></th>
		                            <th class="sort-alpha" data-priority="2">Vistor Name</th>
		                            <th>Purpose of visit</th>
		                            <th>Invited by</th>
		                            <th>Private Notes</th>
		                            <th>Due at</th>
		                            <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr class="gradeX">
	                            	<td class="hide-plus"></td>
									<td class="log-pic">
										<a aria-hidden="true" href="/invites/8512902" class="table-cell tw-align-middle tw-p-2 tw-no-underline" style="width:50px">
									        <div data-test-entry-monogram="" class="monogram  two" style="background-color: hsl(172, 33%, 45%)">KA</div>
								        </a>
									</td>
		                            <td>
		                            	<b>Kamsi Kodi</b><br>
		                            </td>
		                            <td>
		                            	Visitor
		                            </td>
		                            <td>Niyi Adisa</td>
		                            <td><i>Come Early</i></td>
		                            <td>11:45 am</td>
		                            <td data-toggle="dropdown" aria-expanded="false">
		                            	<div id="ember573" class="ember-view ember-basic-dropdown-trigger " role="button" tabindex="0" data-ebd-id="ember571-trigger" aria-owns="ember-basic-dropdown-content-ember571" data-toggle="dropdown" aria-expanded="false">
									        <div data-test-options-handle="" class="js-entry-action-menu-trigger">
												<svg class="js-entry-action-menu-icon" width="18" height="4" viewBox="0 0 18 4" xmlns="http://www.w3.org/2000/svg"><path d="M1.8 3.604a1.8 1.8 0 0 0 1.8-1.802 1.8 1.8 0 1 0-1.8 1.802zm7.2 0a1.8 1.8 0 0 0 1.8-1.802A1.8 1.8 0 1 0 9 3.604zm7.2 0A1.8 1.8 0 0 0 18 1.802a1.8 1.8 0 1 0-1.8 1.802z" fill="#898B91" fill-rule="evenodd"></path></svg>
									        </div>
									    </div>
		                            	<div class="dropdown-menu animated fadeIn" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
		                            		<a class="dropdown-item" href="#"><i class="icon-action-redo"></i>&nbsp;&nbsp;Invite again</a>
		                            		<a class="dropdown-item" href="#"><i class="icon-trash"></i>&nbsp;&nbsp;Delete invite</a>
		                            	</div>
		                            </td>
	                            </tr>
	                        </tbody>
	                    </table>
                    </div>
                </div><!-- DATATABLE DEMO 3-->
         	</div>
	    </div>
	</section>
    <footer class="footer-container"><span class="footer-copy"></span></footer>
</div>
<?php include_once('layouts/footer.php'); ?>
