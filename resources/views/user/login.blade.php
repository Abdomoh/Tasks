@include('layout.head')
 
<section id="contact" class="contact">
    <div class="container">
        <br><br>
        @include('errors._message')
        <div class="card" >
          <div class="card-body">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
              
                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-12 info">
                            <i class="fa fa-user"></i>
                            <h4 class="text-center">  بيانات الدخول </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="subject" placeholder="الايميل" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="كلمة المرور" required>
                    </div>
                    <br>
                    <div class="text-center text-white"><button type="submit" name="submit" class="btn btn-success btn-block text-white">تسجيل دخول</button></div>
                </form>
              <br>
                <div class="text-center text-white"><a href="{{route('register')}}"><h6 style="color: red;"> انشاء حساب</h6></a></div>
              
            </div>
        </div>
    </div>
   </div>
</div>

</section><!-- End Contact Section -->

@include('layout.footer')