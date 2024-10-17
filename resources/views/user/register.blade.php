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
                            <h4 class="text-center"> انشاء حساب جديد</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
              
                <form method="POST" action="{{ route('register')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-md-6 form-group">
                              <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="  الاسم" required><br>
                        
                              <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder="  الايميل" required><br>

                               
                            </div>
                           
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                
                                <input type="password" class="form-control" name="password" id="password" placeholder="كلمة المرور" required><br>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder=" تأكيد كلمة المرور" required>
                            </div>
                        </div>
                        <br>
                        <div class="text-center"> <button type="submit" class="btn btn-success btn-block text-white" value="انشاء حساب "> <i class="fa fa-plus"></i> انشاء حساب </button>

                        </div>
                        <p>  هل لديك حساب بالفعل ؟ <a href="https://bootstrapmade.com/" class="text-blue">اضغط هنا لتسجيل الدخول</a></p>
                </form>
              
            </div>
        </div>
    </div>
   </div>
</div>

</section><!-- End Contact Section -->

@include('layout.footer')