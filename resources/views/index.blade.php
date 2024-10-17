@extends('layout.nav')

@section('content')

    <body>

        <main id="main">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= About Section ======= -->
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 about-img">
                            <img src="website/assets/img/hero-carousel/note-3.jpg" alt="">
                        </div>

                        <div class="col-lg-6 content">
                            <h2>نظام ادارة المهام الشخصية </h2>
                            <h3> نظام مبسط لأدارة المهام الشخصية يقوم بالاتي</h3>

                            <ul>
                                <li><i class="bi bi-check-circle"></i>اضافة المهام الشخصية </li>
                                <li><i class="bi bi-check-circle"></i>تعديل وحزف المهام </li>
                                <li><i class="bi bi-check-circle"></i> تحديد اولوية المهام</li>
                            </ul>

                        </div>


                    </div>

                </div>
            </section><!-- End About Section -->
         
        </main><!-- End #main -->


    </body>

    </html>

@stop
