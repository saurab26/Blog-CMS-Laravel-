@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Profile')



@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Edit Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">Edit Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

          @include('backend.partials.message')

        {!! Form::model($user, [
                  'method' => 'PUT',
                  'url'  => 'edit-profile',
                  'id' => 'user-form'
              ]) !!}

            @include('backend.users.form',['hideRoleDropdown'=>true])

          {!! Form::close() !!} 
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  
@endsection

