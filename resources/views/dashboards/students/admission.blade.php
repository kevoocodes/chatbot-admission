<!--Form Wizard-->
<link rel="stylesheet" href="https://mannatthemes.com/metrica_mvc5/plugins/jquery-steps/jquery.steps.css">
@include('layouts/header')

<!-- leftbar-tab-menu -->
@include('layouts/student_layout/left_navigation')
<!-- end leftbar-tab-menu-->

<!-- Top Bar Start -->
@include('layouts/student_layout/top_bar')
<!-- Top Bar End -->



<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                        <li class="breadcrumb-item active">Wizard</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Wizard</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Jquery Steps Wizard</h4>
                    <p class="text-muted mb-3">A powerful jQuery wizard plugin that
                        supports accessibility and HTML5</p>

                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                        <h3>Seller Details</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Contact
                                            Person</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Mobile
                                            No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="txtLastNameBilling" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Landline
                                            No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" name="txtCompanyBilling" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Email
                                            Address</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address
                                            1</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Warehouse
                                            Address</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">Company Type</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityBilling" name="txtCityBilling" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Live Market
                                            A/C</label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceBilling" name="txtStateProvinceBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Product
                                            Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Product Sub
                                            Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </fieldset><!--end fieldset-->

                        <h3>Company Document</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">PAN
                                            Card</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameShipping" class="col-lg-3 col-form-label">VAT/TIN
                                            No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" name="txtLastNameShipping" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyShipping" class="col-lg-3 col-form-label">CST
                                            No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyShipping" name="txtCompanyShipping" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Service
                                            Tax No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressShipping" name="txtEmailAddressShipping"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-3 col-form-label">Company
                                            UIN</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" name="txtCityShipping" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtStateProvinceShipping"
                                            class="col-lg-3 col-form-label">Declaration</label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping" name="txtStateProvinceShipping"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </fieldset><!--end fieldset-->

                        <h3>Bank Details</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Name on Card</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" name="txtNameCard" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Credit Card
                                            Type</label>
                                        <div class="col-lg-9">
                                            <select id="ddlCreditCardType" name="ddlCreditCardType"
                                                class="form-control">
                                                <option value="">--Please Select--</option>
                                                <option value="AE">American Express</option>
                                                <option value="VI">Visa</option>
                                                <option value="MC">MasterCard</option>
                                                <option value="DI">Discover</option>
                                            </select>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Credit Card
                                            Number</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Card
                                            Verification Number</label>
                                        <div class="col-lg-9">
                                            <input id="txtCardVerificationNumber" name="txtCardVerificationNumber"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label">Expiration
                                            Date</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" name="txtExpirationDate" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </fieldset><!--end fieldset-->

                        <h3>Confirm Detail</h3>
                        <fieldset>
                            <div class="p-3">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">I agree with the Terms and
                                        Conditions.</span>
                                </label>
                            </div>
                        </fieldset><!--end fieldset-->
                    </form><!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

</div><!-- container -->

<!--  Modal content for the above example -->
@include('layouts/student_layout/top_navigation_modal')



@include('layouts/footer')
<script src="https://mannatthemes.com/metrica_mvc5/plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="{{ asset('assets/pages/jquery.form-wizard.init.js') }}"></script>
