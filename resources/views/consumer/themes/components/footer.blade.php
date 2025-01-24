<style>
@media (max-width: 768px) {
  .feedback{
    margin-top:2em;
}
}

</style>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_1" aria-expanded="false"
                    aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                    <h3>{{ __('messages.quick_links')}}</h3>
                    <div class="circle-plus closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </a>
                <div class="collapse show" id="collapse_ft_1">
                    <ul class="links">
                        <li><a href="{{ url('/about-us') }}">{{ __('messages.about_us')}}</a></li>
                        {{-- <li><a href="#0">Faq</a></li> --}}
                        {{-- <li><a href="#0">Help</a></li> --}}
                        <li><a href="{{ url('login') }}">{{ __('messages.my_account')}}</a></li>
                        <li><a href="{{ url('register') }}">{{ __('messages.create_account')}}</a></li>
                        {{-- <li><a href="#0">Contacts</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  ">
                <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_2" aria-expanded="false"
                    aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                    <h3>{{ __('messages.categories')}}</h3>
                    <div class="circle-plus closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </a>
                <div class="collapse show" id="collapse_ft_2">
                    <?php $categories = App\Models\Category::take(10)->get(); ?>
                    <ul class="links">
                        @foreach ($categories as $key)
                        <li><a href="{{ url("category-businesses/".$key->category_name) }}">{{ __('messages.categories_list.' . strtolower(str_replace(' ', '_', $key->category_name))) }}</a></li>  
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_3" aria-expanded="false"
                    aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                    <h3>{{ __('messages.contacts')}}</h3>
                    <div class="circle-plus closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </a>
                <div class="collapse show" id="collapse_ft_3">
                    <ul class="contacts">
                        <li><i class="ti-home"></i>Mbezi Beach<br>Dar es salaam, Tanzania</li>
                        <li><i class="ti-headphone-alt"></i>+255674183107</li>
                        <li><i class="ti-email"></i><a href="#0" >info@ipetano.co.tz</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  ">
                <a data-bs-toggle="collapse" data-bs-target="#collapse_ft_4" aria-expanded="false"
                    aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                    <div class="circle-plus closed">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                    <h3>{{ __('messages.keep_in_touch')}}</h3>
                </a>
                <div class="collapse show feedback" id="collapse_ft_4">
                <a href="" class="btn_1 small" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 {{ __('messages.give_feedback')}}
                </a>



                {{-- feedback form start here --}}
               
                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:10000000!important" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title " id="exampleModalLabel" style="color:#7D6D0B"> {{ __('messages.wed_love')}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="feedbackForm">
                                        <div class="mb-3  ">
                                            <label for="name" class="form-label">{{ __('messages.name')}}</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="mb-3  ">
                                            <label for="email" class="form-label">{{ __('messages.email')}}</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="mb-3  ">
                                            <label for="phone" class="form-label">{{ __('messages.phone')}}</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <div class="mb-3  ">
                                            <label for="message" class="form-label">{{ __('messages.message')}}</label>
                                            <textarea class="form-control" id="message" name="message" rows="8" style="height: 200px;" required></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer  ">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.close')}}</button>
                                    <button type="submit" form="feedbackForm" onclick="submitForm()" class="btn btn_1 small">{{ __('messages.submit')}}</button>
                                </div>
                            </div>
                        </div>
                 </div>

               
               {{-- feedback form ends here --}}


                    <div class="follow_us">
                        <h5>{{ __('messages.follow_us')}}</h5>
                        <ul>
                            <li><a href="https://www.facebook.com/tzproductreview" target="_blank"><i class="ti-facebook"></i></a></li>
                            <li><a href="https://x.com/tzproductreview?s=21&t=4bQlmw6LveaTDtqCYVfcqQ" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.tiktok.com/@ipe.tano?_t=8qjC0Mnly10&_r=1" target="_blank"><i class="fab fa-tiktok"></i></li>
                            <li><a href="https://www.instagram.com/ipetano?igsh=eHlndTAxaTh5bTN1" target="_blank"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select  wow animate__slideInUp" id="lang-selector">
                           <select onchange="location = this.value;">
                                <option value="{{ url('/lang/en') }}" {{ App::getLocale() == 'en' ? 'selected' : '' }}>
                                    {{ __('messages.english') }}
                                </option>
                                <option value="{{ url('/lang/sw') }}" {{ App::getLocale() == 'sw' ? 'selected' : '' }}>
                                    {{ __('messages.swahili') }}
                                </option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6  wow animate__slideInUp">
                <ul id="additional_links">
                    <li>
                        <a href="#termsModal" data-bs-toggle="modal">{{ __('messages.terms_and_conditions') }}</a>
                    </li>
                    <li><a href="#privacyPolicyModal" data-bs-toggle="modal">{{ __('messages.privacy')}}</a></li>
                    <li><span>© <?php echo date("Y"); ?> Tanzania Product Review Company Limited</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<style>
    /* Custom class to ensure SweetAlert has the highest z-index */
    .high-z-index {
        z-index: 10000000000!important; /* Setting z-index to a high value */
    }
</style>

{{-- terms modal --}}
<div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">{{ __('messages.Preview_Privacy_Policy') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>{{ __('messages.select_version') }}</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('preview.privacy', 'Sera_ya_Faragha') }}" target="_blank" class="btn" style="border:1px solid rgb(178, 137, 16);color:#000">
                        {{ __('messages.swahili_version') }}
                    </a>
                    <a href="{{ route('preview.privacy', 'Privacy_Policy_for_Reviewers') }}" target="_blank" class="btn " style="background-color:rgb(178, 137, 16);color:#fff">
                        {{ __('messages.english_version') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- privacy policy modal --}}
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">{{ __('messages.Preview_Terms_and_Conditions') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>{{ __('messages.select_version') }}</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('preview.terms', 'Sheria_na_Masharti') }}" target="_blank" class="btn" style="border:1px solid rgb(178, 137, 16);color:#000">
                        {{ __('messages.swahili_version') }}
                    </a>
                    <a href="{{ route('preview.terms', 'Terms_and_Conditions_for_Reviewers') }}" target="_blank" class="btn " style="background-color:rgb(178, 137, 16);color:#fff">
                        {{ __('messages.english_version') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>





{{-- form submission js --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function submitForm() {
        event.preventDefault();
        // Show confirmation dialog before form submission with custom z-index
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to submit this feedback?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!',
          
        }).then((result) => {
            if (result.isConfirmed) {
                const formData = new FormData(document.getElementById("feedbackForm"));

                fetch('your-backend-url', { // Replace with your form handling URL
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire(
                            'Submitted!',
                            'Your feedback has been sent successfully.',
                            'success'
                        );
                        document.getElementById("feedbackForm").reset(); // Reset form on success
                    } else {
                        throw new Error('Submission failed');
                    }
                })
                .catch(error => {
                    Swal.fire(
                        'Oops!',
                        'Something went wrong with the submission.',
                        'error'
                    );
                });
            }
        });
    }
</script>



