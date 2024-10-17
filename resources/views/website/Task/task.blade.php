@extends('layout.nav')

@section('content')

    <body>
        <main id="main">



            <!-- ======= Services Section ======= -->
            <section id="servicess" dir="rtl">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2> قائمة المهام اليومية</h2>

                    </div>
                    @include('errors._message')
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-plus-circle-fill" style="font-size: 20px;"> </i> اضافة مهمة جديدة
                        </button>

                    </div><br>
                    <div class="row">
                        <form class="form-horizontal" action="{{ route('tasks.index') }}" method="GET">
                            <div class="row">
                                <div class="col-md-6">

                                    <input type="text" name="search" class="form-control" placeholder="ابحث بالعنوان">

                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-secondary btn-block">بحث </button>

                                </div>
                            </div><br>


                        </form>
                        @if (count($task) > 0)
                            @foreach ($task as $tas)
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $tas->title }}</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional
                                                content.</p>
                                            <a href="#"><i class="bi bi-pencil-square"
                                                    style="color: blue;font-size: 30px;"></i></a>

                                            <a href=""><i class="bi bi-file-x"
                                                    style="color: red;font-size: 30px;"></i>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>لاتوجد بيانات متطابقة</p>
                        @endif

                    </div>


                </div>
                <center>
                    {!! $task->links('vendor.pagination.bootstrap-4') !!}
                </center>

            </section><!-- End Services Section -->



            <!--  Model To Store Data    -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اضافة بيانات المهام الشخصية</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('tasks.store') }}">
                                @csrf
                                <div class="info-wrap">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="text" name="title" class="form-control"
                                                value="{{ old('title') }}" id="title" placeholder="  العنوان" required>
                                            @error('title')
                                                <span class="form-text text-danger">{{ $message }}</s>
                                                @enderror
                                                <br>
                                                <select name="catogry_id" class="form-control">
                                                    <option value="" selected disabled>اختر اولوية المهام </option>
                                                    @foreach ($catogry as $cat)
                                                        <option value="{{ $cat->id }}"
                                                            {{ old('catogry_id') == $cat->id ? 'selected' : '' }}>
                                                            {{ $cat->name }}
                                                        </option>
                                                    @endforeach



                                                </select>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md- form-group mt-3 mt-md-0">
                                            <label for=""> الموضوع</label>
                                            <textarea type="text" class="form-control" name="description" id="description" placeholder="الموضوع">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="form-text text-danger">{{ $message }}</s>
                                                @enderror
                                                <br>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                    <button type="submit" class="btn btn-primary">حفظ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--  End Model    -->

        </main><!-- End #main -->


    </body>


    </html>

@stop
