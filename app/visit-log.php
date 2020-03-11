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
                     		<div class="col-md-6 visit-logs">
                     			<h2>3 Visitors</h2>
                     		</div>
                     		<div class="col-md-6 text-right">
                     			<button class="btn btn-secondary btn-lg" type="button">Export</button>
                     		</div>
                     	</div>
                     </div>
                  </div>
                  <div class="card-body">
                  	<!-- <div class="tw-mx-auto tw-text-center tw-my-8 js-emptyState no-visits">
                  		<img src="https://dashboard.envoy.com/assets/images/empty-state/no-visitors-ed7de080c92d4da65b849aed8d5589f3.png" alt="" class="empty-visitors">
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
	                            <th class="sort-numeric">signed in</th>
	                            <th>signed out</th>
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
	                            	<div class="table-cell tw-align-middle tw-px-2 grayDark ember-view">
	                            		<button data-test-entry-feed-sign-out="" class="log-btn log-btn--smaller log-btn--brandHoverFill print-display-none" type="button">
									      Sign out
									    </button>
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
	                            	<span class="grayDark">2:36 pm</span>
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
	                            	<div class="table-cell tw-align-middle tw-px-2 grayDark ember-view">
	                            		<button data-test-entry-feed-sign-out="" class="log-btn log-btn--smaller log-btn--brandHoverFill print-display-none" type="button">
									      Sign out
									    </button>
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
<!-- Datatables-->
<script src="vendor/datatables.net/js/jquery.dataTables.js"></script>
<script src="vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="vendor/datatables.net-keytable/js/dataTables.keyTable.js"></script>
<script src="vendor/datatables.net-responsive/js/dataTables.responsive.js"></script>
<script src="vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<!-- =============== APP SCRIPTS ===============-->