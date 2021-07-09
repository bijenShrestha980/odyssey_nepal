@extends ('layout')

@section ('content')


<!-- Start Banner Hero -->
<section class="bg-light">
    <div class="container py-4">
        <div class="row align-items-center justify-content-between">
            <div class="contact-header col-lg-4" style="animation: transitionIn 2s;">
                <h1 class="h2 pb-3 text-primary">Contact Us</h1>
                <p class="light-300 size">
                    <i class='bx-fw bx bx-home bx-md' style="color: #000"></i> Tokha-5, Kathmandu, Nepal
                </p>
                <p class="light-300 size">
                    <i class='bx-fw bx bx-phone bx-md' style="color: #000"></i> 01-5907305, 9808429293
                </p>
                <p class="light-300 size">
                    <i class='bx-fw bx bx-mail-send bx-md' style="color: #000"></i><a class="text-decoration-none" href="mailto:odysseynepal@outlook.com"> odysseynepal@outlook.com</a>
                </p>
                <p class="light-300 size">
                    <i class='bx-fw bx bxs-window-alt bx-md' style="color: #000"></i><a class="text-decoration-none" href="https://odsseynepal.org.np"> odsseynepal.org.np</a>
                </p>
                <ul class="team-member-caption list-inline light-300">
                    <li class="list-inline-item m-0">
                        <a class="" target="_blank" href="https://www.facebook.com/odysseyynepal">
                            <i class='bx bxl-facebook-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="" target="_blank" href="https://twitter.com/NepalOdyssey/status/1400059472026820609?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3ANepalOdyssey%7Ctwgr%5EeyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3R3ZWV0X2VtYmVkX2NsaWNrYWJpbGl0eV8xMjEwMiI6eyJidWNrZXQiOiJjb250cm9sIiwidmVyc2lvbiI6bnVsbH19%7Ctwcon%5Etimelinechrome&ref_url=https%3A%2F%2Flocalhost%2Fodyssey%2Findex.php">
                            <i class='bx bxl-twitter bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="" target="_blank" href="https://www.instagram.com/odysseyynepal/?fbclid=IwAR0lltjzHYv6y_BKoWVEVWKK5A217zo3RT-B5B8EX99M890VWSRqLKUnaV4">
                            <i class='bx bxl-instagram bx-md'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact-img col-lg-5 align-items-end col-md-4">
                <img src="{{ URL::asset('img/banner-img-01.svg') }}">
            </div>
        </div>
    </div>
</section>
<!-- End Banner Hero -->

<!-- Start Contact -->
<section class="container py-5">

    <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3 pb-5">Connect with us!</h1>

    <div class="row pb-4">
        <div class="col-lg-7">

            <div class="contact row mb-4">
                <div class="contact-icon col-lg-3 col-3">
                    <div class="py-3 mb-2 text-center border rounded text-secondary">
                        <i class='display-6 bx bx-news'></i>
                    </div>
                </div>
                <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                    <li class="h3 mb-0">Chief Secretary</li>
                    <li class="text-primary h6">Mr. Anil Tamang</li>
                    <li class="text-primary h6">+977-9808429293</li>
                </ul>
            </div>

            <div class="contact row mb-4">
                <div class="contact-icon col-lg-3 col-3">
                    <div class="border py-3 mb-2 text-center border rounded text-secondary">
                        <i class='bx bx-laptop display-6'></i>
                    </div>
                </div>
                <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                    <li class="h3 mb-0">Communication and IT Department</li>
                    <li class="text-primary h6">Mr. Bijen Shrestha (HOD)</li>
                    <li class="text-primary h6">+977-9843504673</li>
                </ul>
            </div>

            <div class="contact row mb-4">
                <div class="contact-icon col-lg-3 col-3">
                    <div class="border py-3 mb-2 text-center border rounded text-secondary">
                        <i class='bx bx-money display-6'></i>
                    </div>
                </div>
                <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                    <li class="h3 mb-0">Treasurer</li>
                    <li class="text-primary h6">Mr. Yelung Bahing Rai (HOD)</li>
                    <li class="text-primary h6">+977-9813037570</li>
                </ul>
            </div>

        </div>

    </div>
</section>
<!-- End Contact -->
@endsection