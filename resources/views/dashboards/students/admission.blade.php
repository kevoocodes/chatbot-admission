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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Chatbot Admission</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Student Admission</li>
                    </ol>
                </div>
                <h4 class="page-title">Student Admission</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Student Admission</h4>
                    <p class="text-muted mb-3">Multstep Form</p>

                    <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h3>Student Details</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameBilling"
                                            class="col-lg-3 col-form-label">Firstname</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="firstname" type="text"
                                                class="form-control">
                                        </div>
                                        @error('firstname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Middlename
                                            No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="middlename" type="text"
                                                class="form-control">
                                        </div>
                                        @error('middlename')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Lastname
                                        </label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" name="lastname" type="text"
                                                class="form-control">
                                        </div>
                                        @error('lastname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Email
                                            Address</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="email" type="text"
                                                class="form-control">
                                        </div>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address
                                            1</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress1Billing" name="address" rows="4" class="form-control"></textarea>
                                        </div>
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Date of Birth
                                        </label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="dateOfBirth" type="date"
                                                class="form-control">
                                        </div>
                                        @error('dateOfBirth')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">Region of
                                            residence</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityBilling" name="region" type="text"
                                                class="form-control">
                                        </div>
                                        @error('region')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Postal
                                            Address
                                        </label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceBilling" name="postalCode" type="text"
                                                class="form-control">
                                        </div>

                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="flexRadioDefault1" value="male">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="flexRadioDefault2" value="female" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nationality</label>
                                        <select name="nationality" class="form-control">
                                            <option value="">-- select one --</option>
                                            <option value="afghan">Afghan</option>
                                            <option value="albanian">Albanian</option>
                                            <option value="algerian">Algerian</option>
                                            <option value="american">American</option>
                                            <option value="andorran">Andorran</option>
                                            <option value="angolan">Angolan</option>
                                            <option value="antiguans">Antiguans</option>
                                            <option value="argentinean">Argentinean</option>
                                            <option value="armenian">Armenian</option>
                                            <option value="australian">Australian</option>
                                            <option value="austrian">Austrian</option>
                                            <option value="azerbaijani">Azerbaijani</option>
                                            <option value="bahamian">Bahamian</option>
                                            <option value="bahraini">Bahraini</option>
                                            <option value="bangladeshi">Bangladeshi</option>
                                            <option value="barbadian">Barbadian</option>
                                            <option value="barbudans">Barbudans</option>
                                            <option value="batswana">Batswana</option>
                                            <option value="belarusian">Belarusian</option>
                                            <option value="belgian">Belgian</option>
                                            <option value="belizean">Belizean</option>
                                            <option value="beninese">Beninese</option>
                                            <option value="bhutanese">Bhutanese</option>
                                            <option value="bolivian">Bolivian</option>
                                            <option value="bosnian">Bosnian</option>
                                            <option value="brazilian">Brazilian</option>
                                            <option value="british">British</option>
                                            <option value="bruneian">Bruneian</option>
                                            <option value="bulgarian">Bulgarian</option>
                                            <option value="burkinabe">Burkinabe</option>
                                            <option value="burmese">Burmese</option>
                                            <option value="burundian">Burundian</option>
                                            <option value="cambodian">Cambodian</option>
                                            <option value="cameroonian">Cameroonian</option>
                                            <option value="canadian">Canadian</option>
                                            <option value="cape verdean">Cape Verdean</option>
                                            <option value="central african">Central African</option>
                                            <option value="chadian">Chadian</option>
                                            <option value="chilean">Chilean</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="colombian">Colombian</option>
                                            <option value="comoran">Comoran</option>
                                            <option value="congolese">Congolese</option>
                                            <option value="costa rican">Costa Rican</option>
                                            <option value="croatian">Croatian</option>
                                            <option value="cuban">Cuban</option>
                                            <option value="cypriot">Cypriot</option>
                                            <option value="czech">Czech</option>
                                            <option value="danish">Danish</option>
                                            <option value="djibouti">Djibouti</option>
                                            <option value="dominican">Dominican</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="east timorese">East Timorese</option>
                                            <option value="ecuadorean">Ecuadorean</option>
                                            <option value="egyptian">Egyptian</option>
                                            <option value="emirian">Emirian</option>
                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                            <option value="eritrean">Eritrean</option>
                                            <option value="estonian">Estonian</option>
                                            <option value="ethiopian">Ethiopian</option>
                                            <option value="fijian">Fijian</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="finnish">Finnish</option>
                                            <option value="french">French</option>
                                            <option value="gabonese">Gabonese</option>
                                            <option value="gambian">Gambian</option>
                                            <option value="georgian">Georgian</option>
                                            <option value="german">German</option>
                                            <option value="ghanaian">Ghanaian</option>
                                            <option value="greek">Greek</option>
                                            <option value="grenadian">Grenadian</option>
                                            <option value="guatemalan">Guatemalan</option>
                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                            <option value="guinean">Guinean</option>
                                            <option value="guyanese">Guyanese</option>
                                            <option value="haitian">Haitian</option>
                                            <option value="herzegovinian">Herzegovinian</option>
                                            <option value="honduran">Honduran</option>
                                            <option value="hungarian">Hungarian</option>
                                            <option value="icelander">Icelander</option>
                                            <option value="indian">Indian</option>
                                            <option value="indonesian">Indonesian</option>
                                            <option value="iranian">Iranian</option>
                                            <option value="iraqi">Iraqi</option>
                                            <option value="irish">Irish</option>
                                            <option value="israeli">Israeli</option>
                                            <option value="italian">Italian</option>
                                            <option value="ivorian">Ivorian</option>
                                            <option value="jamaican">Jamaican</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="jordanian">Jordanian</option>
                                            <option value="kazakhstani">Kazakhstani</option>
                                            <option value="kenyan">Kenyan</option>
                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                            <option value="kuwaiti">Kuwaiti</option>
                                            <option value="kyrgyz">Kyrgyz</option>
                                            <option value="laotian">Laotian</option>
                                            <option value="latvian">Latvian</option>
                                            <option value="lebanese">Lebanese</option>
                                            <option value="liberian">Liberian</option>
                                            <option value="libyan">Libyan</option>
                                            <option value="liechtensteiner">Liechtensteiner</option>
                                            <option value="lithuanian">Lithuanian</option>
                                            <option value="luxembourger">Luxembourger</option>
                                            <option value="macedonian">Macedonian</option>
                                            <option value="malagasy">Malagasy</option>
                                            <option value="malawian">Malawian</option>
                                            <option value="malaysian">Malaysian</option>
                                            <option value="maldivan">Maldivan</option>
                                            <option value="malian">Malian</option>
                                            <option value="maltese">Maltese</option>
                                            <option value="marshallese">Marshallese</option>
                                            <option value="mauritanian">Mauritanian</option>
                                            <option value="mauritian">Mauritian</option>
                                            <option value="mexican">Mexican</option>
                                            <option value="micronesian">Micronesian</option>
                                            <option value="moldovan">Moldovan</option>
                                            <option value="monacan">Monacan</option>
                                            <option value="mongolian">Mongolian</option>
                                            <option value="moroccan">Moroccan</option>
                                            <option value="mosotho">Mosotho</option>
                                            <option value="motswana">Motswana</option>
                                            <option value="mozambican">Mozambican</option>
                                            <option value="namibian">Namibian</option>
                                            <option value="nauruan">Nauruan</option>
                                            <option value="nepalese">Nepalese</option>
                                            <option value="new zealander">New Zealander</option>
                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                            <option value="nicaraguan">Nicaraguan</option>
                                            <option value="nigerien">Nigerien</option>
                                            <option value="north korean">North Korean</option>
                                            <option value="northern irish">Northern Irish</option>
                                            <option value="norwegian">Norwegian</option>
                                            <option value="omani">Omani</option>
                                            <option value="pakistani">Pakistani</option>
                                            <option value="palauan">Palauan</option>
                                            <option value="panamanian">Panamanian</option>
                                            <option value="papua new guinean">Papua New Guinean</option>
                                            <option value="paraguayan">Paraguayan</option>
                                            <option value="peruvian">Peruvian</option>
                                            <option value="polish">Polish</option>
                                            <option value="portuguese">Portuguese</option>
                                            <option value="qatari">Qatari</option>
                                            <option value="romanian">Romanian</option>
                                            <option value="russian">Russian</option>
                                            <option value="rwandan">Rwandan</option>
                                            <option value="saint lucian">Saint Lucian</option>
                                            <option value="salvadoran">Salvadoran</option>
                                            <option value="samoan">Samoan</option>
                                            <option value="san marinese">San Marinese</option>
                                            <option value="sao tomean">Sao Tomean</option>
                                            <option value="saudi">Saudi</option>
                                            <option value="scottish">Scottish</option>
                                            <option value="senegalese">Senegalese</option>
                                            <option value="serbian">Serbian</option>
                                            <option value="seychellois">Seychellois</option>
                                            <option value="sierra leonean">Sierra Leonean</option>
                                            <option value="singaporean">Singaporean</option>
                                            <option value="slovakian">Slovakian</option>
                                            <option value="slovenian">Slovenian</option>
                                            <option value="solomon islander">Solomon Islander</option>
                                            <option value="somali">Somali</option>
                                            <option value="south african">South African</option>
                                            <option value="south korean">South Korean</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="sri lankan">Sri Lankan</option>
                                            <option value="sudanese">Sudanese</option>
                                            <option value="surinamer">Surinamer</option>
                                            <option value="swazi">Swazi</option>
                                            <option value="swedish">Swedish</option>
                                            <option value="swiss">Swiss</option>
                                            <option value="syrian">Syrian</option>
                                            <option value="taiwanese">Taiwanese</option>
                                            <option value="tajik">Tajik</option>
                                            <option value="tanzanian">Tanzanian</option>
                                            <option value="thai">Thai</option>
                                            <option value="togolese">Togolese</option>
                                            <option value="tongan">Tongan</option>
                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian
                                            </option>
                                            <option value="tunisian">Tunisian</option>
                                            <option value="turkish">Turkish</option>
                                            <option value="tuvaluan">Tuvaluan</option>
                                            <option value="ugandan">Ugandan</option>
                                            <option value="ukrainian">Ukrainian</option>
                                            <option value="uruguayan">Uruguayan</option>
                                            <option value="uzbekistani">Uzbekistani</option>
                                            <option value="venezuelan">Venezuelan</option>
                                            <option value="vietnamese">Vietnamese</option>
                                            <option value="welsh">Welsh</option>
                                            <option value="yemenite">Yemenite</option>
                                            <option value="zambian">Zambian</option>
                                            <option value="zimbabwean">Zimbabwean</option>
                                        </select>

                                    </div>
                                </div>
                            </div>



                            <h5>Next of kin</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Name of
                                            Parent</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="parent" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Parent
                                            Phonenumber</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="parentPhonenumber" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </fieldset><!--end fieldset-->

                        <h3>Academic Information</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">Name of
                                            Secondary School</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" name="o_level_school_name"
                                                type="text" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameShipping" class="col-lg-3 col-form-label">Secondary
                                            Location</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" name="secondary_location" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Name of
                                            HighSchool</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyShipping" name="name_of_high_school" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">High
                                            School Location</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressShipping" name="txtEmailAddressShipping"
                                                type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Secondary Certificate</label>
                                        <input type="file" name="secondary_certificate" id=""
                                            class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">High School Certificate</label>
                                        <input type="file" name="high_school_certificate" id=""
                                            class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Diploma Certificate</label>
                                        <input type="file" name="diploma_certificate" id=""
                                            class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-3 col-form-label">Diploma
                                            Corse</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" name="diploma_course" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtStateProvinceShipping"
                                            class="col-lg-3 col-form-label">University Name</label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping" name="universit_name" type="text"
                                                class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">

                            </div>
                        </fieldset><!--end fieldset-->

                        <h3>Program Selection</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group>
                                      <label for="">Session
                                        Name</label>
                                        <select class="form-control" name="session_name" id="">
                                            <option>Choose below</option>
                                            <option value="everning">Everning</option>
                                            <option value="moring">Morning</option>

                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Select
                                            Course</label>
                                        <div class="col-lg-9">
                                            <select id="" name="course_id" class="form-control
                                                class="select2 form-control mb-3 custom-select">

                                                @foreach ($courses as $course)
                                                    <option value="{{$course->id}}">{{ $course->courseName }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->



                        </fieldset><!--end fieldset-->

                        <h3>Confirm Detail</h3>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </form><!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

</div><!-- container -->

<!--  Modal content for the above example -->
@include('layouts/student_layout/top_navigation_modal')



<footer class="footer text-center text-sm-left">
    &copy; 2024 <span class="text-muted d-none d-sm-inline-block float-right">Developed<i
            class="mdi mdi-heart text-danger"></i>kevoocodes</span>
</footer><!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->


<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="https://mannatthemes.com/metrica_mvc5/plugins/apexcharts/apexcharts.min.js"></script>

<script src="https://mannatthemes.com/metrica_mvc5/plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="{{ asset('assets/pages/jquery.form-wizard.init.js') }}"></script>

<link href="https://mannatthemes.com/metrica_mvc5/plugins/select2/select2.min.css" rel="stylesheet"
    type="text/css" />

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/b1f8b849-3245-4f9c-ad67-ac5311c41bf1/webchat/config.js" defer></script>
</body>


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/forms-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:51:01 GMT -->

</html>
