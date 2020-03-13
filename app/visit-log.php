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
	                     			<h2>3 Visitors</h2>
	                     		</div>
	                     		<div class="col-md-7">
	                     			<span class="log-date">
		                     			<input id="flatpickr">
		                     		</span>
	                     		</div>
	                     		<div class="col-md-2 log-type">
	                     			<select class="custom-select custom-select-sm visit-drop-height">
										<option value="1">All Visitors</option>
										<option value="2">My Visitors</option>
										<option value="3">Currently Signed In</option>
	                              	</select>
	                     		</div>
	                     		<div class="col-md-1">
	                     			<button class="btn btn-secondary btn-lg" type="button"><b>Export</b></button>
	                     		</div>
	                     	</div>
	                    </div>
                    </div>
                    <div class="card-body">
	                  	<!-- <div class="tw-mx-auto tw-text-center tw-my-8 js-emptyState no-visits">
	                  		<img src="img/background/no-visitors.png"" alt="" class="empty-visitors">
	                  		<h2 data-test-empty-entries-list-message="" class="tw-mt-8 tw-font-normal grayDark">
						          No visitors yet
						    </h2>
	                  	</div> -->
						<table class="table table-striped my-4 w-100" id="datatable2">
							<thead>
							   <tr>
							   	<th class="hide-plus" data-priority="1"></th>
							        <th class="log-w1">
							          	<div class="table-cell tw-align-middle tw-pl-1 ember-view log-chk">
							       			<input class="js-entry-checkbox" type="checkbox">
							       		</div>
							        </th>
							        <th></th>
							        <th class="sort-alpha" data-priority="2">Vistor Name</th>
							        <th>Purpose of visit</th>
							        <th>Host Name</th>
							        <th>Private Notes</th>
							        <th>Date</th>
							        <th class="sort-numeric">Signed In</th>
							        <th>Signed Out</th>
							        <th></th>
							    </tr>
							</thead>
							<tbody>
							    <tr class="gradeX">
							    	<td class="hide-plus"></td>
							       	<td class="log-w1">
							       		<div class="table-cell tw-align-middle tw-pl-1 ember-view log-chk">
							       			<input class="js-entry-checkbox" type="checkbox">
							       		</div>
							       	</td>
									<td class="log-pic">
										<a href="#" class="table-cell tw-align-middle tw-p-2" style="width:50px">
										    <img data-test-entry-thumbnail="" alt="" class="log-circle js-entry-feed-photo" src="img/user/02.jpg" width="70">
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
							        <td>Mar 6, 2020</td>
							        <td> <span class="grayDark">2:06 pm</span></td>
							        <td>
							        	<div class="table-cell tw-px-2 grayDark ember-view">
							        		<button data-test-entry-feed-sign-out="" class="log-btn log-btn--smaller log-btn--brandHoverFill print-display-none" type="button">
										      Sign out
										    </button>
							        	</div>
							        </td>
							        <td>
							        	<div id="ember573" class="ember-view ember-basic-dropdown-trigger " role="button" tabindex="0" data-ebd-id="ember571-trigger" aria-owns="ember-basic-dropdown-content-ember571" data-toggle="dropdown" aria-expanded="false">
									        <div data-test-options-handle="" class="js-entry-action-menu-trigger">
												<svg class="js-entry-action-menu-icon" width="18" height="4" viewBox="0 0 18 4" xmlns="http://www.w3.org/2000/svg"><path d="M1.8 3.604a1.8 1.8 0 0 0 1.8-1.802 1.8 1.8 0 1 0-1.8 1.802zm7.2 0a1.8 1.8 0 0 0 1.8-1.802A1.8 1.8 0 1 0 9 3.604zm7.2 0A1.8 1.8 0 0 0 18 1.802a1.8 1.8 0 1 0-1.8 1.802z" fill="#898B91" fill-rule="evenodd"></path></svg>
									        </div>
									    </div>
							        	<div class="dropdown-menu animated fadeIn" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
							        		<a class="dropdown-item" href="#"><i class="icon-logout"></i>&nbsp;&nbsp;Sign out</a>
							        		<a class="dropdown-item" href="#"><i class="icon-envelope-open"></i>&nbsp;&nbsp;Refer to Workwise</a>
							        		<a class="dropdown-item" href="#"><i class="icon-trash"></i>&nbsp;&nbsp;Delete visitor</a>
							        	</div>
							        </td>
							    </tr>
							    <tr class="gradeX">
							    	<td class="hide-plus"></td>
							       	<td class="log-w1">
							       		<div class="table-cell tw-align-middle tw-pl-1 ember-view log-chk">
							       			<input class="js-entry-checkbox" type="checkbox">
							       		</div>
							       	</td>
									<td class="log-pic">
										<a href="#" class="table-cell tw-align-middle tw-p-2" style="width:50px">
										    <img data-test-entry-thumbnail="" alt="" class="log-circle js-entry-feed-photo" src="img/user/02.jpg" width="70">
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
							        <td>Mar 6, 2020</td>
							        <td> <span class="grayDark">2:06 pm</span></td>
							        <td>
							        	<div class="signout-padding">
							            	<span class="grayDark">2:36 pm</span>
							            </div>
							        </td>
							        <td>
							        	<div id="ember573" class="ember-view ember-basic-dropdown-trigger " role="button" tabindex="0" data-ebd-id="ember571-trigger" aria-owns="ember-basic-dropdown-content-ember571" data-toggle="dropdown" aria-expanded="false">
									        <div data-test-options-handle="" class="js-entry-action-menu-trigger">
												<svg class="js-entry-action-menu-icon" width="18" height="4" viewBox="0 0 18 4" xmlns="http://www.w3.org/2000/svg"><path d="M1.8 3.604a1.8 1.8 0 0 0 1.8-1.802 1.8 1.8 0 1 0-1.8 1.802zm7.2 0a1.8 1.8 0 0 0 1.8-1.802A1.8 1.8 0 1 0 9 3.604zm7.2 0A1.8 1.8 0 0 0 18 1.802a1.8 1.8 0 1 0-1.8 1.802z" fill="#898B91" fill-rule="evenodd"></path></svg>
									        </div>
									    </div>
							        	<div class="dropdown-menu animated fadeIn" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
							        		<a class="dropdown-item" href="#"><i class="icon-logout"></i>&nbsp;&nbsp;Sign out</a>
							        		<a class="dropdown-item" href="#"><i class="icon-envelope-open"></i>&nbsp;&nbsp;Refer to Workwise</a>
							        		<a class="dropdown-item" href="#"><i class="icon-trash"></i>&nbsp;&nbsp;Delete visitor</a>
							        	</div>
							        </td>
							    </tr>
							    <tr class="gradeX">
							    	<td class="hide-plus"></td>
							       	<td class="log-w1">
							       		<div class="table-cell tw-align-middle tw-pl-1 ember-view log-chk">
							       			<input class="js-entry-checkbox" type="checkbox">
							       		</div>
							       	</td>
									<td class="log-pic">
										<a href="#" class="table-cell tw-align-middle tw-p-2" style="width:50px">
										    <img data-test-entry-thumbnail="" alt="" class="log-circle js-entry-feed-photo" src="img/user/02.jpg" width="70">
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
							        <td>Mar 6, 2020</td>
							        <td> <span class="grayDark">2:06 pm</span></td>
							        <td>
							        	<div class="table-cell tw-px-2 grayDark ember-view">
							        		<button data-test-entry-feed-sign-out="" class="log-btn log-btn--smaller log-btn--brandHoverFill print-display-none" type="button">
										      Sign out
										    </button>
							        	</div>
							        </td>
							        <td>
							        	<div id="ember573" class="ember-view ember-basic-dropdown-trigger " role="button" tabindex="0" data-ebd-id="ember571-trigger" aria-owns="ember-basic-dropdown-content-ember571" data-toggle="dropdown" aria-expanded="false">
									        <div data-test-options-handle="" class="js-entry-action-menu-trigger">
												<svg class="js-entry-action-menu-icon" width="18" height="4" viewBox="0 0 18 4" xmlns="http://www.w3.org/2000/svg"><path d="M1.8 3.604a1.8 1.8 0 0 0 1.8-1.802 1.8 1.8 0 1 0-1.8 1.802zm7.2 0a1.8 1.8 0 0 0 1.8-1.802A1.8 1.8 0 1 0 9 3.604zm7.2 0A1.8 1.8 0 0 0 18 1.802a1.8 1.8 0 1 0-1.8 1.802z" fill="#898B91" fill-rule="evenodd"></path></svg>
									        </div>
									    </div>
							        	<div class="dropdown-menu animated fadeIn" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
							        		<a class="dropdown-item" href="#"><i class="icon-logout"></i>&nbsp;&nbsp;&nbsp;Sign out</a>
							        		<a class="dropdown-item" href="#"><i class="icon-envelope-open"></i>&nbsp;&nbsp;&nbsp;Refer to Workwise</a>
							        		<a class="dropdown-item" href="#"><i class="icon-trash"></i>&nbsp;&nbsp;&nbsp;Delete visitor</a>
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
