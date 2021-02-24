@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Tutors</h1> 
    <div>
        <a style="margin: 19px;" href="{{ route('tutors.create')}}" class="btn btn-primary">New tutor</a>
        </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name Buisness</td>
          <td>Type Document</td>
          <td>Document Number</td>
          <td>Name</td>
          <td>Second Name</td>
          <td>Last Name</td>
          <td>Country</td>
          <td>Province</td>
          <td>Municipy</td>
          <td>Status</td>
          <td>Email</td>
          <td>Number</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tutors as $tutor)
        <tr>
            <td>{{$tutor->id}}</td>
            <td>{{$tutor->nameBuisness}}</td>
            <td>{{$tutor->typeDocument}}</td>
            <td>{{$tutor->documentNumber}}</td>
            <td>{{$tutor->name}}</td>
            <td>{{$tutor->secondName}}</td>
            <td>{{$tutor->lastName}}</td>
            <td>{{$tutor->country}}</td>
            <td>{{$tutor->province}}</td>
            <td>{{$tutor->municipy}}</td>
            <td>{{$tutor->status}}</td>
            <td>{{$tutor->email}}</td>
            <td>{{$tutor->number}}</td>
            <td>
                <a href="{{ route('tutors.edit',$tutor->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('tutors.destroy', $tutor->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>
@endsection
