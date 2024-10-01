@extends('frontend.layout.main')

@section('content')
<!-- main-area -->
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="../uploads/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area">
        <div class="contact-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="contact-content">
                        <div class="section-title mb-15">
                            <span class="sub-title">Experien</span>
                            <h2 class="title">Get in <span>Touch</span></h2>
                        </div>
                        <p>Meat provide well shaped fresh and the organic meat well <br> animals is Humans have hunted schistoric</p>
                        <form action=""  method="POST">
                            @csrf
                            <div class="contact-form-wrap">
                                <div class="form-grp">
                                    <input name="name" type="text" placeholder="Your Name *" required>
                                </div>
                                <div class="form-grp">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="form-grp">
                                    <input name="phone" type="text" placeholder="Your phone *" required>
                                </div>
                                <div class="form-grp">
                                    <input name="address" type="text" placeholder="Your address *" required>
                                </div>
                                <div class="form-grp">
                                    <select name="gender" class="form-control" id="">
                                        <option value="">chose gender</option>
                                        <option value="1">male</option>
                                        <option value="0">fe male</option>
                                    </select>
                                </div>
                                <div class="form-grp">
                                    <input name="password" type="text" placeholder="Your password *" required>
                                </div>
                                <div class="form-grp">
                                    <input name="confirm_password" type="text" placeholder="Your password *" required>
                                </div>

                                <button type="submit">Create Account</button>
                            </div>
                        </form>
                        {{-- <p class="ajax-response mb-0"></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->
@endsection

