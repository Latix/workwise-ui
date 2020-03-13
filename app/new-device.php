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
		                     			<a href="devices.php" id="ember1905" class="navBack active ember-view">      
		                     				<svg class="navBack-icon" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
		                     					<path d="M0 10.995C0 17.063 4.937 22 11.005 22 17.067 22 22 17.064 22 10.995 22 4.933 17.067 0 11.005 0 4.937 0 0 4.933 0 10.995zm20 0C20 15.96 15.966 20 11.006 20 6.04 20 2 15.96 2 10.996 2 6.035 6.04 2 11.004 2 15.965 2 20 6.033 20 10.994zm-13.71.707l3.998 3.998 1.414-1.414-2.292-2.292h6.583v-2H9.41l2.292-2.29-1.414-1.414-3.998 3.998a.998.998 0 0 0 0 1.414z" fill-rule="nonzero" fill="#282C36"></path>
		                     				</svg>
										</a>
		                     			New Tablet
		                     		</h2>
	                     		</div>
		                    </div>
		                </div>
		            </div>
                    <div class="card-body">
                    	<section class="clearfix tw-mt-4 tw--mx-4 tw-px-8">
                            <div class="dv-col dv-new-col-7 tw-px-4">
                                <div class="device--new-steps tw-mt-4">
                                    <label class="dv-h5">
                                        <svg class="inline-block tw-align-middle" width="18" height="18" viewBox="0 0 18 18">
                                            <g fill="none" fill-rule="evenodd">
                                            <circle cx="9" cy="9" r="9" fill="#00914b"></circle>
                                            <text fill="#FFF" font-family="CeraPRO-tw-font-semibold, Cera PRO" font-size="12" font-weight="tw-font-semibold">
                                              <tspan data-test-number="true" x="5.5" y="12">1</tspan>
                                            </text>
                                            </g>
                                        </svg>
                                        Get the Workwise Visitors app
                                    </label>
                                    <ul class="tw-mt-4">
                                        <li class="tw-mb-2">
                                            <span>On your tablet, open the App Store.</span>
                                        </li>
                                        <li class="tw-mb-2">
                                            <span>Search for and download Workwise Visitors Management.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="device--new-steps tw-mt-4">
                                    <label class="dv-h5">
                                        <svg class="inline-block tw-align-middle" width="18" height="18" viewBox="0 0 18 18">
                                            <g fill="none" fill-rule="evenodd">
                                            <circle cx="9" cy="9" r="9" fill="#00914b"></circle>
                                            <text fill="#FFF" font-family="CeraPRO-tw-font-semibold, Cera PRO" font-size="12" font-weight="tw-font-semibold">
                                              <tspan data-test-number="true" x="5.5" y="12">2</tspan>
                                            </text>
                                            </g>
                                        </svg>
                                        Enter the device code 
                                    </label>
                                    <ul class="tw-mt-4">
                                        <li class="tw-mb-2">
                                            <span>Open the Workwise Visitors app.</span>
                                        </li>
                                        <li class="tw-mb-2">
                                            <span>Find the six digit device pairing code and type it below.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dv-bottom">
                                    <input data-test-device-token="" size="8" maxlength="6" autofocus="" id="ember79" class="addNewDevice tw-my-8 ember-text-field ember-view" type="text">
                                    <button data-test-add-ipad-button="" class="btn btn--brand tw-mr-4 tw-mt-4 dv-pad" data-ember-action="" data-ember-action-80="80">
                                        Pair Device
                                    </button>
                                </div>
                            </div>
                            <div class="div-col div-new-col-5 tw-mt-2">
                                <div>
                                    <div class="tw-text-center dv-img">
                                        <img src="img/background/ipad.png" alt="ipad example" style="width: 360px; height: 500px;">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
         	</div>
	    </div>
	</section>
    <footer class="footer-container"><span class="footer-copy"></span></footer>
</div>
<?php include_once('layouts/footer.php'); ?>
