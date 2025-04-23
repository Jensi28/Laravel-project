@extends('layout.master')

@section('title' , "About-page")

@section('content')

<div>
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">

            <div class="d-flex justify-content-between align-items-center">
              <h2>Task</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Task</li>
              </ol>
            </div>

          </div>
        </section><!-- End Breadcrumbs Section -->
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
        <div class="container">

          <div class="row">
            <button class="btn btn-primary"><a class="nav-link scrollto" href="{{ url('task-create')}}">Task-create</a></button>
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>SNo</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1; @endphp
        @foreach ($data as $key=>$value)
        <tr>
            <td>{{ $i}}</td>
            <td>{{ $value['title'] }}</td>
            <td>{{ $value['description'] }}</td>
            <td><a href="{{url('task-edit')}}/{{$value['id']}}">Edit</a> || <a href="{{url('task-delete')}}/{{$value['id']}}" onclick="confirm('Are you sure to delete?')">Delete</a></td>
        </tr>
        @php $i++;  @endphp
        @endforeach

    </tbody>

</table>

          </div>
        </div>
      </section><!-- End About Section -->

      </main><!-- End #main -->
</div>
@stop
