@extends('frontend.layout.main')

@section('content')
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="uploads/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Team Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- team-details-area -->
    <section class="team-details-area">
        <div class="team-info-wrap team-info-bg" data-background="uploads/bg/team_info_bg.jpg">
            <div class="container">
                <div class="team-info-inner-wrap">
                    <div class="team-info-thumb">
                        <img src="uploads/avatar/avataa.jpg" alt="">
                    </div>
                    <div class="team-info-content">
                        <h2 class="title">{{ $auth->name}}</h2>
                        <div class="team-contact-list">
                            <ul class="list-wrap">
                                <li><i class="fas fa-certificate"></i>Phone: {{ $auth->phone}}</li>
                                <li><i class="fas fa-certificate"></i>Email: {{ $auth->email}}</li>
                            </ul>
                        </div> 
                        <span><i class="fas fa-map-marker-alt"></i>{{ $auth->address}}</span>
                        {{-- <div class="team-contact-list">
                            <ul class="list-wrap">
                                <li><i class="fas fa-certificate"></i>Phone: {{ $auth->phone}}</li>
                                <li><i class="fas fa-certificate"></i>Email: {{ $auth->email}}</li>
                            </ul>
                        </div> --}}
                        {{-- <div class="team-social-wrap">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="member-wrap">
                        <img src="uploads/icons/member_icon.png" alt="">
                        <span>Member</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details-area-end -->

    <section class="contact-area">
        <div class="contact-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="contact-content">
                        <div class="section-title mb-15">
                            <h2 class="title">Edit your <span>Profile</span></h2>
                        </div> 
                        <form action=""  method="POST">
                            @csrf
                            <div class="contact-form-wrap">
                                <div class="form-grp">
                                    <input name="name" value="{{ $auth->name}}" type="text" placeholder="Your Name *" required>
                                    @error('name')
                                        <div class="help-block">{{ $message}}</div>
                                    @enderror
                                </div>
                                <div class="form-grp">
                                    <input name="email" value="{{ $auth->email}}" type="email" placeholder="Your Email *" required>
                                    @error('email')
                                        <div class="help-block">{{ $message}}</div>
                                    @enderror
                                </div>
                                <div class="form-grp">
                                    <input name="phone" value="{{ $auth->phone}}" type="text" placeholder="Your phone *" required>
                                </div>
                                <div class="form-grp">
                                    <input name="address" value="{{ $auth->address}}" type="text" placeholder="Your address *" required>
                                </div>
                                <div class="form-grp">
                                    <select name="gender" class="form-control" id="">
                                        <option value="">chose gender</option>
                                        <option value="1" {{ $auth->gender == 1 ? 'selected' : ''}}>male</option>
                                        <option value="0" {{ $auth->gender == 0 ? 'selected' : ''}}>fe male</option>
                                    </select>
                                </div>
                                <div class="form-grp">
                                    <input name="password" type="text" placeholder="Nhập mật khẩu của bạn để hoàn thành update *" required>
                                    @error('password')
                                        <div class="help-block">{{ $message}}</div>
                                    @enderror
                                </div>

                                <button type="submit">Update Account</button>
                            </div>
                        </form>
                        {{-- <p class="ajax-response mb-0"></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main-area-end -->
@endsection


