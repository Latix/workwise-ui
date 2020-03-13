<?php include_once('layouts/header.php'); ?>
<div class="wrapper">
    <!-- NavBar Header -->
    <?php include_once('layouts/nav-header.php'); ?>
    <!-- Sidebar Nav -->
    <?php include_once('layouts/sidebar.php'); ?>
    <section class="section-container">
        <div class="content-wrapper">
         	<div class="container-fluid">
         		<div class="card">
		            <div class="card-header">
		                <div class="card-title">
		                    <div class="row">
	                     		<div class="col-md-6 invite-new">
	                     			<h2>
		                     			Tablets
		                     		</h2>
	                     		</div>
                                <div class="col-md-6 text-right">
                                    <a href="new-device.php">
                                        <button class="btn btn-secondary btn-lg invite-btn" type="button">New Tablet</button>
                                    </a>
                                </div>
		                    </div>
		                </div>
		            </div>
                    <div class="card-body">
                        <div class="animated-container">
                            <ul class="list-reset tw-mt-4 flex flex-wrap dv-tw-pl-8 tw-pr-4" data-test-ipads-list="">
                                <li class="list-reset flex dv-col dv-col-12 lg-col-6 xl-col-4 tw-py-2 tw-pr-4 clearfix">
                                    <div class="clearfix bg-white border rounded tw-p-4 tw-pl-8 col-12">
                                        <div class="row">
                                            <div class="dv-col dv-col-11 tw-pb-2"></div>
                                            <div class="dv-col dv-col-1 tw-pb-2">
                                                <div id="ember573" class="ember-view ember-basic-dropdown-trigger" role="button" tabindex="0" data-ebd-id="ember571-trigger" aria-owns="ember-basic-dropdown-content-ember571" data-toggle="dropdown" aria-expanded="false">
                                                    <div data-test-options-handle="" class="js-entry-action-menu-trigger">
                                                        <svg class="js-entry-action-menu-icon" width="18" height="4" viewBox="0 0 18 4" xmlns="http://www.w3.org/2000/svg"><path d="M1.8 3.604a1.8 1.8 0 0 0 1.8-1.802 1.8 1.8 0 1 0-1.8 1.802zm7.2 0a1.8 1.8 0 0 0 1.8-1.802A1.8 1.8 0 1 0 9 3.604zm7.2 0A1.8 1.8 0 0 0 18 1.802a1.8 1.8 0 1 0-1.8 1.802z" fill="#898B91" fill-rule="evenodd"></path></svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu animated fadeIn" role="menu" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                                                    <a class="dropdown-item" href="#"><i class="icon-trash"></i>&nbsp;&nbsp;Remove Tablet</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix tw-mb-4">
                                            <div class="col col-5 tw-pr-2 ">
                                                <img data-test-ipad-icon="" style="max-height:100px" alt="iPad" src="img/background/ipad-air.png">
                                            </div>
                                            <div class="col col-7">
                                                <div class="tw-font-semibold grayDarker tw-mb-2" data-test-ipad-name="">
                                                    <div class="tw-break-words tw-break-all ember-view tablet-head">
                                                        Ipad
                                                    </div>
                                                    <div data-test-status="" class="deviceStatusContainer tw-font-semibold good rounded tw-px-2 tw-align-middle inline-block tw-whitespace-no-wrap h5 marg-ar">
                                                      <span data-test-status-icon="" class="deviceStatus small good"></span>
                                                      Operational
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="h5 list-reset device-list">
                                                <li class="list-reset row clearfix dv-tw-mb-2">
                                                    <div class="col dv-col-5 tw-pr-2 dv-col">Device type:</div>
                                                    <div class="dv-col-7">iPad (9.7-inch)</div>
                                                </li>
                                                <li class="list-reset row clearfix dv-tw-mb-2">
                                                    <div class="col dv-col-5 tw-pr-2 dv-col">OS version:</div>
                                                    <div class="dv-col-7">13.3.1</div>
                                                </li>
                                                <li class="list-reset row clearfix dv-tw-mb-2">
                                                    <div class="col dv-col-5 tw-pr-2 dv-col">IP address:</div>
                                                    <div class="dv-col-7">192.168.1.17</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p class="h5 tw-mt-8 tw-mb-0 tw-px-8">
                          Learn more about <a href="#" target="_blank" rel="noopener" tabindex="-1">managing visitor sign-in kiosks</a> in Workwise.
                        </p>
                    </div>
                </div>
         	</div>
	    </div>
	</section>
    <footer class="footer-container"><span class="footer-copy"></span></footer>
</div>
<?php include_once('layouts/footer.php'); ?>
