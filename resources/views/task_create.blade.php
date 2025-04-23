@extends('layout.master')

@section('title' , "task")

@section('content')

<div>
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
            @if($message = Session :: get('sucess'))
            <span class="text-primary">{{ $message}}</span>
            @endif

            <div class="d-flex justify-content-between align-items-center">
              <h2>Task</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Task</li>
              </ol>
            </div>

          </div>
        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

              <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                  <form action="{{url('task-save')}}" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" >
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="description" id="description" placeholder="Description" >
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->


      </main><!-- End #main -->
</div>
@stop
