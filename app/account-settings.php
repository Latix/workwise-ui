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
                                        Location details
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label><small><b>COMPANY NAME</b></small>&nbsp;<span class="required">*</span></label>
                                    <input class="form-control" type="text" value="Workwise">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label><small><b>LOCATION NAME</b></small>&nbsp;<span class="required">*</span></label>
                                    <input class="form-control" type="text" value="HQ">
                                </div>
                            </div>
                            <div class="row">
                                <div id="locationField" class="col-md-6 form-group">
                                    <label><small><b>ADDRESS</b></small>&nbsp;<span class="required">*</span></label>
                                    <input id="autocomplete" class="form-control" type="text" onFocus="geolocate()">
                                </div>
                                <div class="col-md-2 form-group">
                                    <label><small><b>ADDRESS LINE 2</b></small></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-8 form-group">
                                    <button class="invite-btn" type="button"><i class="icon-plus"></i>&nbsp;&nbsp;Save location info</button>
                                </div>
                            </div>
                        </form>
                        <div class="tw-mt-8">
                          <form>
                            <fieldset class="brand-header">
                              <h2 class="tw-mt-8">Branding</h2>
                              <div class="border rounded tw-p-4 tw-mt-8">
                                <div class="flex flex-center">
                                  <div style="width:32px;height:32px;margin:0 9px" class="flex-none">
                                    <img src="https://dashboard.envoy.com/assets/images/features/logo-upload-a650f9885fc9c8c19099f6f4dd05eb79.svg" alt="">
                                  </div>
                                  <div class="flex-auto tw-px-4 brand-logo-h4">
                                    <h4>Logo</h4>
                                    <p class="tw-m-0">
                                      Upload a logo that will appear on your Visitors kiosk, badges, and invite emails.
                                    </p>
                                  </div>
                                </div>
                                <div class="tokenized-form tw-mb-4">
                                  <div id="ember368" class="columns droppable js-logo-upload ember-view">
                                    <div class="flex-none tw-mt-8 flex">
                                      <div class="flex-none flex flex-center tw-mr-16 rounded js-logo" style="width:200px;height:200px">
                                          <img class="rounded tw-mx-auto" src="https://envoyuserentries.s3.amazonaws.com/device_configs/81594/company-logo-normal/work-wise-small-1584082966.png?1584082966" style="max-width:200px;max-height:200px;" alt="Your logo image">
                                      </div>
                                      <div class="dv-col-5">
                                        <div class="uploadButton tw-mb-4">
                                          <input accept="image/png,image/gif,image/jpeg" id="ember369" class="js-file-upload-input ember-view" type="file">
                                          <span class="btn btn--small btn--brand">Select file</span>
                                            <a class="btn btn--small btn--hoverFill tw-ml-2" tabindex="-1" data-test-delete-logo=""><em class="fa fa-upload"></em> Upload</a>
                                        </div>
                                        <p class="account-h5">
                                          We recommend uploading a transparent PNG cropped to the edges of your logo and up to 1000px wide or 600px tall.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="border rounded tw-p-4 tw-mt-8">
                                <div class="flex flex-center">
                                  <div style="width:32px;height:32px;margin:0 9px" class="flex-none">
                                    <img src="https://dashboard.envoy.com/assets/images/features/accent-color-e06ba3d83160258b5c64b17055afda58.svg" alt="">
                                  </div>
                                  <div class="flex-auto tw-px-4 brand-logo-h4">
                                    <h4>Accent color</h4>
                                    <p class="tw-m-0">
                                      Choose a custom accent color for the details on your iPad and pre-registration emails.
                                    </p>
                                  </div>
                                </div>
                                <div class="tokenized-form tw-mb-4">
                                  <div id="ember368" class="columns droppable js-logo-upload ember-view color-pikr">
                                    <h4 class="color-label">Choose a color</h4>
                                    <div class="tw-mt-8 flex account-color">
                                      <input class="jscolor flex-none flex flex-center rounded tw-p-4 tw-mr-16 border-box tw-text-center cursor-pointer border ember-col-pick ember-view" value="0a7878">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <h2 class="tw-mt-8">Advanced settings</h2>
                              <div class="border rounded tw-p-4 tw-mt-8">
                                <div class="flex flex-center">
                                  <div style="width:32px;height:32px;margin:0 9px" class="flex-none">
                                    <img src="https://dashboard.envoy.com/assets/images/features/accent-color-e06ba3d83160258b5c64b17055afda58.svg" alt="">
                                  </div>
                                  <div class="flex-auto tw-px-4 brand-logo-h4">
                                    <h4>Export full visitor history</h4>
                                    <p class="tw-m-0">
                                      Download a CSV file of all visitor data.
                                    </p>
                                  </div>
                                  <button class="btn btn--small btn--brand tw-mr-2" data-ember-action="" data-ember-action-389="389">
                                    Export
                                  </button>
                                </div>
                              </div>
                              <div class="border rounded tw-p-4 tw-mt-8">
                                <div class="flex flex-center">
                                  <div style="width:32px;height:32px;margin:0 9px" class="flex-none">
                                    <img src="https://dashboard.envoy.com/assets/images/features/accent-color-e06ba3d83160258b5c64b17055afda58.svg" alt="">
                                  </div>
                                  <div class="flex-auto tw-px-4 brand-logo-h4">
                                    <h4>Deactivate location</h4>
                                    <p class="tw-m-0">
                                      Temporarily disable sign-ins at this location.
                                    </p>
                                  </div>
                                  <button class="btn btn--small btn--brand tw-mr-2 btn-disable" data-ember-action="" data-ember-action-389="389">
                                    Deactivate
                                  </button>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-container"><span class="footer-copy"></span></footer>
</div>
<?php include_once('layouts/footer.php'); ?>
