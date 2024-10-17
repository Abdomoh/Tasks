@extends('layout.nav')

@section('content')

    <body>
        <main id="main">

            <section id="servicess" dir="rtl">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2> قائمة المهام اليومية</h2>
                    </div>
                    @include('errors._message')
                    <div class="col-lg-6">
                        تعديل بيانات المهام
                    </div><br>
                    <div class="row">
                        <form method="POST" action="{{ route('tasks.update', $task->id) }}" dir="rtl">
                            @csrf
                            @method('PUT')
                            <div class="info-wrap">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $task->title }}" id="title" placeholder="  العنوان" required>
                                        @error('title')
                                            <span class="form-text text-danger">{{ $message }}</s>
                                            @enderror
                                            <br>
                                            <select name="catogry_id" class="form-control">
                                                <option value="" selected disabled>اختر اولوية المهام </option>

                                                @foreach ($categoryies as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $task->catogry_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach


                                            </select>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md- form-group mt-3 mt-md-0">
                                        <label for=""> الموضوع</label>
                                        <textarea type="text" class="form-control" name="description" id="description" placeholder="الموضوع">{{ $task->description }}</textarea>
                                        @error('description')
                                            <span class="form-text text-danger">{{ $message }}</s>
                                            @enderror
                                            <br>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">تعديل</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>

                        </form>
                    </div>


                </div>


            </section><!-- End Services Section -->
        </main>
    </body>
@stop
