@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Posts')



@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Edit Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li><a href="{{route('backend.blog.index')}}">Blog</a></li>
        <li class="active">Edit Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        {!! Form::model($post, [
                  'method' => 'PUT',
                  'route'  => ['backend.blog.update',$post->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

            @include('backend.blog.form')

          {!! Form::close() !!} 
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  
@endsection

@include('backend.blog.script')