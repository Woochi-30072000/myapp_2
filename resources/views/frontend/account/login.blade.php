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
        <div class="team-details-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-30">
                        <div class="section-title text-center mb-15">
                            <span class="sub-title">Login</span>
                            <h2 class="title">Get in <span>Touch</span></h2>
                            <p>Meat provide well shaped fresh and the organic meat well <br> animals is Humans have hunted schistoric</p>
                        </div>
                        <form action=""  method="POST">
                            @csrf
                            <div class="contact-form-wrap">
                                <div class="form-grp">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="form-grp">
                                    <input name="password" type="text" placeholder="Your password *" required>
                                </div>

                                <button type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->
@endsection


