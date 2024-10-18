@extends('layout.nav')

@section('content')

    <body>
        <main id="main">
            <!-- ======= Catogry Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>التصنيفات </h2>
                        <p> جميع المهام بناء علي التصنيفات</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">

                                <li data-filter="*" class="filter-active">الكل</li>
                                <li data-filter=".filter-app">مهام ذات اولوية عالية </li>
                                <li data-filter=".filter-card">مهام ذات اولوية متوسطة </li>
                                <li data-filter=".filter-web">مهام ذات اولوية منخفضة </li>
                                <li data-filter=".filter-desk">مهام عديمة الاولوية </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($huighTasks as $task)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $task->title }}</h5>
                                        <p class="card-text">{{ $task->description }}</p>
                                        



                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($mediumTasks as $task)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $task->title }}</h5>
                                        <p class="card-text">{{ $task->description }}</p>



                                    </div>
                                </div>
                            </div>
                        @endforeach



                        @foreach ($lowTasks as $task)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $task->title }}</h5>
                                        <p class="card-text">{{ $task->description }}</p>



                                    </div>
                                </div>
                            </div>
                        @endforeach




                        @foreach ($notTasks as $task)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-desk">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $task->title }}</h5>
                                        <p class="card-text">{{ $task->description }}</p>


                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </section><!-- End Catogry Section -->





        </main><!-- End #main -->


    </body>


    </html>

@stop
