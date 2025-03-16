<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('messages.register_') }} | {{ __('messages.my_account') }}</title>
    <meta name="description" content="Ipe Tano hosts reviews and ratings to help consumers shop with confidence and deliver rich insights to help businesses improve the experiences and products they offer.">
    <meta name="author" content="Tanzania Product Review Company Limited">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('themes/img/favicon.ico')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme-image.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>



</head>
<style>
.auth-wrapper .authentication-form {
    width: 100%;
    max-width: 700px;
    /* Set a max-width to make the form look neat */
    margin: 0 auto;
}

@media (max-width: 768px) {
    .auth-wrapper .authentication-form {
        width: 100%;
        height:100vh;
    }
     .authentication-form {
            padding: 15px; /* Adjust padding */
        }
        .col-6 {
            margin-bottom: 15px; /* Add space between input fields on small screens */
        }
        .sign-btn button {
            width: 100%; /* Make the button take full width */
        }
        .logo-centered{
            position:relative;
            top:2em;
        }
}

.btn-theme:hover{
   border-radius:1px solid #000;
   color:#B28910;
   border: 1px solid #B28910;
}
.btn-theme{
    height:4em!important;
    width:20em;
}

</style>

<body>
<div class="auth-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <img height="60" src="{{asset('themes/img/ipetano-logo-primary.png')}}" alt="Ipe Tano Logo">
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <p>{{ __('messages.join_us') }}</p>
                    <form action="{{ url('register') }}" method="post" id="registrationForm">
                        @csrf

                        <div class="row g-3"> <!-- Added g-3 to reduce gap -->
                            <div class="col-6 form-group">
                                <input type="name" class="form-control" placeholder="{{ __('messages.first_name') }}" name="first_name" value="" required>
                                <i class="ik ik-user" style="position:relative;top:-2em!important"></i>
                            </div>
                            <div class="col-6 form-group">
                                <input type="name" class="form-control" placeholder="{{ __('messages.last_name') }}" name="last_name" value="" required>
                                <i class="ik ik-user" style="position:relative;top:-2em!important"></i>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12 form-group">
                                <select class="form-control select2" name="gender" required="">
                                    <option value="">{{ __('messages.select_gender') }}</option>
                                    <option value="male">{{ __('messages.male') }}</option>
                                    <option value="female">{{ __('messages.female') }}</option>
                                </select>
                                <i class="ik ik-users" style="position:relative;top:-2em!important"></i>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-12 form-group">
                                <p style="color:#b3a6a6">{{ __('messages.dob') }}</p>
                                <input type="date" class="form-control" name="dob" value="" required>
                                <i class="ik ik-calendar" style="position:relative;top:-2em!important"></i>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-6 form-group">
                                <select class="form-control select2" name="region_id" required="">
                                    <option value="">{{ __('messages.select_region') }}</option>
                                    @foreach ($regions as $key)
                                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endforeach
                                </select>
                                <i class="ik ik-map" style="position:relative;top:-2em!important"></i>
                            </div>
                            <div class="col-6 form-group">
                                <input type="number" class="form-control" placeholder="{{ __('messages.phone_number') }}" name="phone" value="" required>
                                <i class="fa fa-mobile" style="position:relative;top:-2em!important"></i>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control" placeholder="{{ __('messages.email') }}" name="email" value="" required>
                                <i class="fa fa-envelope" style="position:relative;top:-2em!important"></i>
                            </div>
                            <div class="col-6 form-group">
                                <input type="password" class="form-control" placeholder="{{ __('messages.password') }}" name="password" required>
                                <i class="ik ik-lock" style="position:relative;top:-2em!important"></i>
                            </div>
                        </div>

                        <div class="sign-btn text-center text-dark">
                            <button type="button" class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#termsModal">
                                {{ __('messages.create_account') }}
                            </button>
                        </div>
                    </form>

                    <div class="register">
                        <p style="color:#b3a6a6">{{ __('messages.have_account') }} <a href="{{ url('login') }}"> {{ __('messages.signin') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody" style="max-height: 400px; overflow-y: auto;">
               <h6>Terms and Conditions</h6>
                <p><strong>July 2021</strong></p>
                <p>These user terms and conditions (hereinafter referred to as the "User Terms") apply to any use of Ipe Tano's website (hereinafter referred to as the "Website"), including - but not limited to - www.IpeTano.com.</p>
                <p>The Website is supplied by Tanzania Product Review Company Limited ("Ipe Tano"). In these User Terms, the words "we", "us" and "ours" refer to Ipe Tano.</p>
                <p>These User Terms are deemed to include all other operating rules, policies, and guidelines that are referred to herein or that we may otherwise publish on the Website (as such, rules, policies and guidelines may be amended from time to time), including without limitation:</p>
                <ul>
                    <li>Our "Guidelines for the use of the Ipe Tano Services" (hereinafter referred to as the "User Guidelines"), which are located at <a href="https://legal.IpeTano.com/for-reviewers/guidelines-for-reviewers" target="_blank">legal.IpeTano.com/for-reviewers/guidelines-for-reviewers</a></li>
                    <li>Our Privacy Policy, which is located at <a href="https://legal.IpeTano.com/for-reviewers/end-user-privacyterms" target="_blank">legal.IpeTano.com/for-reviewers/end-user-privacyterms</a></li>
                </ul>
                <p>In the event of any conflict between the terms contained herein and those of the User Guidelines, the User Guidelines will govern and control.</p>
                <p>By using the Website, you accept to be subject to the User Terms, including the User Guidelines. If you do not accept these User Terms, you are not permitted to use the Website and are kindly requested not to use the Website any further. The registration as a user requires your express acceptance of these User Terms.</p>
                <h6>THE SERVICES ON THE WEBSITE</h6>
                <p><strong>1. Registered User</strong></p>
                <p><strong>1.1</strong> Ipe Tano grants you the non-exclusive, non-transferable, revocable, limited right to access and use the Website. In order to gain full access and use of the Website, you must create a profile and register as a user (hereinafter referred to as "Registered User").</p>
                <p><strong>1.2</strong> You are only permitted to register one profile per person on the Website. The profile is personal, and you must not transfer it to others.</p>
                <p><strong>1.3</strong> In order to become a Registered User, you need a password. You choose your own password which must be used with your email address when logging onto the Website. Alternatively, we send the password to you. The password is personal, and you must not transfer it or in other ways make it available to others. It is your responsibility to ensure that the password does not fall into the hands of a third party. If you become aware that the password is or may have been compromised, you are obligated to inform us hereof. We can and will change the password if there is a risk that the password has been compromised or is used in violation of the User Terms.</p>
                <p><strong>1.4</strong> During the registration process, you must choose a username. The username will be shown on the Website whenever you write or comment on reviews or produce user-generated content (see 2.1 below) on the Website. Therefore, you must consider whether you wish to use a username from which you can be identified by others. The username must not (i) be offensive or in other ways insulting, (ii) contain the terms "Guest", "Admin", ".dk", ".com", etc. or (iii) contain characteristics which belong to a third party, including names of famous persons, or personal names to which you do not own the rights. You warrant that your username does not infringe on any rights (including any intellectual property rights) belonging to any third party and/or pertaining to the User Terms.</p>
                <p><strong>1.5</strong> Changes to the username may only be made by us. If you want to change your username, please contact us at <a href="mailto:support@IpeTano.com">support@IpeTano.com</a>.</p>
                <p><strong>1.6</strong> We are entitled at any time, without notice and without prejudice, to delete, suspend or change your profile in the event of your violation or suspected violation of these User Terms or applicable law. When deleting your profile, you will no longer have access to services on the Website which require your registration and/or login as a Registered User. When deleting your profile, we reserve the right to delete the user-generated content (see 2.1) you have made on the Website.</p>
                <p><strong>1.7</strong> Furthermore, we reserve the right, at any time and without notice or explanation, to delete your profile and user-generated content (see 2.1). In this case, our disclaimer applies without limitations.</p>
                <p><strong>1.8</strong> You are not permitted to gain access or attempt to gain access to the parts of the Website requiring user registration if you are not a Registered User.</p>
                <h6>User-Generated Content from Registered Users</h6>
                <p><strong>2.1</strong> You hereby grant us the worldwide, non-exclusive, perpetual, irrevocable, royalty-free right and license to publish, display, reproduce, modify, create derivative works of and commercially exploit any material, information, notifications, reviews, articles or other types of communication (hereinafter referred to as the "User-Generated Content" or "UGC") which you create on the Website as a Registered User. We may freely use and transfer the UGC and disclose the UGC to third parties.</p>
                <p><strong>2.2</strong> Registered Users are liable for the UGC they publish on the Website.</p>
                <p><strong>2.3</strong> Registered Users warrant that all UGC posted on the Website is correct and true (where they state facts) or genuinely held (where they state opinions).</p>
                <p><strong>2.4</strong> UGC must relate to a company or organization from which the Registered User has purchased or can otherwise document using the company's or organization's products or services.</p>
                <p><strong>2.5</strong> You may not publish UGC regarding companies to which you have personal or professional relations.</p>
                  <p><strong>2.6</strong> Registered Users must not, and must not allow any third party to, publish UGC on the website which:</p>
                <ul>
                    <li>is of a marketing nature or has marketing purposes,</li>
                    <li>is unlawful, deceptive, misleading, fraudulent, threatening, abusive, harassing, libellous, defamatory, tortious, obscene, pornographic or profane, has sexist, political or racial character, violates other people's rights, including any intellectual property rights, rights of privacy and/or rights of publicity,</li>
                    <li>is offensive or in any way breaches any applicable local, national or international law or regulation,</li>
                    <li>violates these User Terms, including the User Guidelines, reveals any personal information about another individual, including another person's name, address, phone number, email address, credit card information or any other information that could be used to track, contact or impersonate that person,</li>
                    <li>has a disloyal or unlawful purpose and/or content (or promotes unlawful purposes), or</li>
                    <li>is technically harmful (including without limitation computer viruses, logic bombs, Trojan horses, worms, harmful components, corrupted data or other malicious software, harmful data or conduct).</li>
                </ul>
                  <p><strong>2.7</strong> Contributors of UGC warrant in every context that the UGC is lawful and in compliance with the User Terms. If Ipe Tano receives notice or otherwise becomes aware that UGC violates current legislation and/or the User Terms, we may delete the UGC without any notice, and we - dependent on the character of the violation - may inform the violated party and/or the authorities of the violation. Our right to delete will not be conditioned on an explanation, although we will strive to inform the Registered User about the deletion and the reason hereof.</p>
                <p><strong>2.8</strong> The Registered User hereby grants us the right to initiate and take any legal actions which we deem necessary in case of infringement of the Registered User's UGC. The Registered User must guarantee to indemnify us for any claims which may be made against us as a consequence of the Registered User's violation of the User Terms or current legislation. The Registered User must indemnify and hold us harmless from and against any claim or loss due to third party claims against us resulting from the UGC of the Registered User.</p>
                <p><strong>2.9</strong> We may at any time request information about the UGC from the Registered User, including documentation supporting the information included in the UGC, e.g., documentation evidencing that the UGC is based on an actual buying experience in an actual customer relation to the company to which the UGC relates.</p>
                 <h6><strong>GENERAL TERMS</strong></h6>
                <p><strong>3. Rights</strong></p>
                <p><strong>3.1</strong> The Website and the services we offer via the Website, including all underlying technology and intellectual property rights embodied therein, are and remain our sole and exclusive property, and no license or any other right is granted to any such underlying technology. If you provide feedback, ideas or suggestions regarding the Website or the services offered on the Website ("Feedback"), we are free to fully exploit such Feedback.</p>
                <p><strong>3.2</strong> The content on the Website, including but not limited to the intellectual property rights, text, characteristics, graphics, icons, photos, calculations, references and software is or will be our property or the property of a third party (other than the Registered User) and is protected by Tanzania law and applicable international legislation, including without limitation applicable copyright and trademark laws.</p>
                <h6><strong>INTELLECTUAL PROPERTY RIGHTS</strong></h6>
                <p><strong>3.3</strong> Unauthorized copying, distribution, presentation, or other use of the Website or part thereof is a violation of Tanzania law and may thus result in civil and/or criminal penalties.</p>
                <p><strong>3.4</strong> To the fullest extent permitted by law, the rights to free use of the UGC are transferred to us irrevocably, without any time limitation and without territorial limitations, by submitting the UGC to us.</p>
                <p><strong>3.5</strong> Downloading and other digital copying of the content on the Website or parts thereof are only permitted for personal non-commercial use unless otherwise agreed with us in writing or allowed under applicable mandatory law.</p>
                <p><strong>3.6</strong> All company names, trademarks, and other business characteristics on the Website are or will be our property or the property of a third party (other than the Registered User) and must only be used for business purposes upon prior approval from us or the third-party owner, respectively.</p>

                <h6><strong>PERSONAL DATA</strong></h6>
                <p><strong>4.1</strong> We perform different types of processing of personal data in connection with the use of the Website. Our processing of personal data takes place under observance of our Privacy Policy.</p>
                <p>By accepting these User Terms, you confirm to have read and accepted our Privacy Policy.</p>
                 <h6><strong>DISCLAIMERS</strong></h6>
                <p><strong>5.1</strong> THE WEBSITE, CONTENT, AND SERVICES OFFERED ON THE WEBSITE ARE PROVIDED 'AS IS' AND 'AS AVAILABLE' WITHOUT REPRESENTATIONS OR WARRANTIES OF ANY KIND. IPE TANO EXPRESSLY DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS, IMPLIED, OR STATUTORY, INCLUDING WITHOUT LIMITATION ANY WARRANTIES OF NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. THE WEBSITE AND SERVICES MAY BE MODIFIED, UPDATED, INTERRUPTED, SUSPENDED, OR DISCONTINUED AT ANY TIME WITHOUT NOTICE OR LIABILITY.</p>
                <p><strong>5.2</strong> We make no representations or warranties with respect to any UGC published on the Website. Notwithstanding the foregoing, Ipe Tano may at all times investigate and edit (including anonymizing) UGC, e.g., if such actions are (i) prompted by third-party requests, (ii) required under applicable law, or (iii) necessary for the UGC's compliance with our User Guidelines.</p>
                <p><strong>5.3</strong> We disclaim all liability for the content of UGC. Our non-liability applies, without limitation, to any UGC, including UGC which has been edited by us (see 5.2). We are not liable for any links to third-party websites in the UGC, including for the content of the page to which the UGC links.</p>
                <p><strong>5.4</strong> Recommendations, reviews, comments, etc., of specific companies, services, e-businesses, etc., on the Website are provided by Registered Users and are not endorsements made by us. We disclaim all liability for the content of the Website. The use of our services is, in any respect, the sole responsibility of the Registered Users. We cannot be held liable for the availability of the Website.</p>
                <h6><strong>6. Limitation of Liability</strong></h6>
                    <p><strong>6.1</strong> WE SHALL IN NO CASE BE HELD LIABLE, WHETHER IN CONTRACT, TORT (INCLUDING NEGLIGENCE) OR OTHERWISE FOR DAMAGES FOR THE USE OF THE WEBSITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, INCLUDING:</p>
                    <ul>
                        <li>(I) LOSS OF PROFITS, CONTRACTS, TURNOVER, BUSINESS, BUSINESS OPPORTUNITY, LOSS OR CORRUPTION OF DATA OR RECOVERY OF DATA, GOODWILL, SECURITY BREACH RESULTING FROM A FAILURE OF THIRD PARTY TELECOMMUNICATIONS AND/OR THE INTERNET, ANTICIPATED SAVINGS OR REVENUE (REGARDLESS OF WHETHER ANY OF THESE ARE DIRECT, INDIRECT OR CONSEQUENTIAL).</li>
                        <li>(II) ANY LOSS OR DAMAGE ARISING IN CONNECTION WITH LIABILITIES TO THIRD PARTIES (WHETHER DIRECT, INDIRECT OR CONSEQUENTIAL).</li>
                        <li>(III) ANY INDIRECT, SPECIAL, PUNITIVE, INCIDENTAL OR CONSEQUENTIAL LOSS OR DAMAGE WHATSOEVER.</li>
                    </ul>
                    <p><strong>6.2</strong> OUR TOTAL AGGREGATE LIABILITY, INCLUDING WITHOUT LIMITATION LIABILITY FOR BREACH OF CONTRACT, MISREPRESENTATION (WHETHER TORTIOUS OR STATUTORY), TORT (INCLUDING NEGLIGENCE), BREACH OF STATUTORY DUTY OR OTHERWISE, ARISING FROM OR IN CONNECTION WITH THE USER TERMS, THE WEBSITE OR OUR SERVICES WILL NEVER FOR ANY AND ALL ACTIONABLE CIRCUMSTANCES EXCEED ONE HUNDRED THOUSAND SHILLINGS (100,000TSH). YOU FURTHER AGREE THAT NO CLAIMS OR ACTIONS ARISING OUT OF, OR RELATED TO, THE USE OF OUR WEBSITE OR SERVICES OR THESE USER TERMS MAY BE BROUGHT BY YOU MORE THAN ONE (1) YEAR AFTER THE ACTIONABLE EVENT. NOTHING IN THE USER TERMS EXCLUDES OR LIMITS EITHER PARTY'S LIABILITY FOR MATTERS WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>
                    <h6><strong>7. Other User Terms</strong></h6>
                    <p><strong>7.1</strong> We may at any time, in our sole discretion, revise or change these User Terms. We will make an effort to provide reasonable advance notice of any such changes. We may at any time, in our own discretion and without notice, close, change or reorganize the Website. As a Registered User, you accept to be covered by the at all times current User Terms. Any revision or change of the User Terms will be stated on the Website. We will furthermore strive to inform the Registered Users about the change of the User Terms. The Registered Users agree that the continued use of the Website after any posted modified version of the User Terms is an acceptance of the modified User Terms.</p>
                    <p><strong>7.2</strong> Should any of these User Terms be regarded as unlawful or without effect and therefore not to be enforced, this will not have any effect on the applicability and enforcement of the remaining part of the User Terms.</p>

                    <h6><strong>8. Term and Termination</strong></h6>
                    <p><strong>8.1</strong> We may terminate your right to access and use the services offered on the Website at any time for any reason without liability. If we do so, or if you elect to delete your profile, any rights granted to you herein will immediately cease. Sections 2-10 will survive any termination of the User Terms.</p>

                    <h6><strong>9. Applicable Law and Venue</strong></h6>
                    <p><strong>9.1</strong> The User Terms and the relationship between you and Ipe Tano are governed by the laws of United Republic of Tanzania, without regard to the conflicts of law provisions thereof. Any disputes must be brought exclusively in courts located in Dar es Salaam, Tanzania, and the parties hereby consent to the jurisdiction of such courts.</p>
                   <h6><strong>10. Copyright Dispute Policy</strong></h6>
                    <p><strong>10.1</strong> It is Ipe Tano's policy to (i) block access to or remove material that it believes in good faith to be copyrighted material that has been illegally copied and distributed by any of our advertisers, affiliates, content providers, or members or users; and (ii) remove and discontinue service to repeat offenders. Ipe Tano has adopted a policy toward copyright infringement in accordance with the Digital Millennium Copyright Act or DMCA (posted at <a href="http://www.copyright.gov/legislation/dmca.pdf" target="_blank">http://www.copyright.gov/legislation/dmca.pdf</a>). This policy is available at <a href="https://legal.IpeTano.com/for-everyone/copyright" target="_blank">legal.IpeTano.com/for-everyone/copyright</a> and contains instructions for contacting Ipe Tano's Designated Agent to Receive Notification of Claimed Infringement ("Designated Agent").</p>

                    <h6><strong>11. Miscellaneous</strong></h6>
                    <p><strong>11.1</strong> You acknowledge and agree that these User Terms constitute the complete and exclusive agreement between you and Ipe Tano concerning your use of the Website and supersede and govern all prior proposals, agreements, or other communications.</p>
                    <p><strong>11.2</strong> Nothing contained in these User Terms can be construed as creating any agency, partnership, or other form of joint enterprise between us. Our failure to require your performance of any provision hereof will not affect our full right to require such performance at any time thereafter, nor may our waiver of a breach of any provision hereof be taken or held to be a waiver of the provision itself. You may not assign any rights granted to you hereunder, and any such attempts are void.</p>
                    <h6><strong>12. Contact</strong></h6>
                    <p><strong>12.1</strong> You may contact Ipe Tano via email at <a href="mailto:support@IpeTano.com">support@IpeTano.com</a> or the following mailing address:</p>
                    <p>Ipe Tano,<br>
                    Tanzania Product Review Company Limited,<br>
                    Dar es Salaam, Tanzania</p>
            </div>

            <div class="modal-footer">
                <button type="button" id="myButton" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit"class="btn btn-primary" onclick="submitForm()">Accept and Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalBody = document.getElementById('modalBody');
        const acceptBtn = document.getElementById('acceptTermsBtn');
        const submitFormBtn = document.getElementById('submitFormButton');
        const registrationForm = document.getElementById('registrationForm');

        // Initially disable the button
        acceptBtn.disabled = true;

        // Function to check if modal is scrolled to the bottom
        modalBody.addEventListener('scroll', function () {
            const isAtBottom = modalBody.scrollHeight === modalBody.scrollTop + modalBody.clientHeight;

            if (isAtBottom) {
                acceptBtn.disabled = false; // Enable the button when scrolled to the bottom
            }
        });


        document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form from default submission

        // Perform validation here if needed


});
    });


    function submitForm() {
        // Trigger form submission here
        document.getElementById("registrationForm").submit(); // Replace with your actual form ID
    }
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/screenfull/dist/screenfull.js') }}"></script>
</body>

</html>
>>>>>>> 5e6b8e62922d018065a42b2417e17ea55dc80ae4
