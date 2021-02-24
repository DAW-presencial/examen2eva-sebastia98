@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a tutor</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tutors.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Buisness Name:</label>
              <input type="text" class="form-control" name="nameBuisness"/>
          </div>
          <div class="form-group">
            <label for="email">Type Document:</label>
            <input type="text" class="form-control" name="typeDocument"/>
          </div>
          <div class="form-group">
            <label for="last_name">Document Number:</label>
            <input type="text" class="form-control" name="documentNumber"/>
        </div>
          <div class="form-group">
              <label for="last_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          
          <div class="form-group">
              <label for="city">Second Name:</label>
              <input type="text" class="form-control" name="secondName"/>
          </div>
          <div class="form-group">
              <label for="country">Last Name:</label>
              <input type="text" class="form-control" name="lastName"/>
          </div>
          <div class="form-group">
              <label for="job_title">Country:</label>
              <input type="text" class="form-control" name="country"/>
          </div> 
          <div class="form-group">
            <label for="job_title">Province:</label>
            <input type="text" class="form-control" name="province"/>
        </div>      
          <div class="form-group">
            <label for="job_title">Municipy:</label>
            <input type="text" class="form-control" name="municipy"/>
        </div>
        <div class="form-group">
          <label for="job_title">Status:</label><br>
          <select name="status" class="form-select">
            <option value="Empleado">Empleado</option>
            <option value="Desempleado">Desempleado</option>
            <option value="Jubilado">Jubilado</option>
            <option value="Pensionista">Pensionista</option>
          </select>
      </div> 
        <div class="form-group">
            <label for="job_title">Email:</label>
            <input type="text" class="form-control" name="email"/>
        </div> 
        <div class="form-group">
            <label for="job_title">Mobile:</label>
            <input type="text" class="form-control" name="number"/>
        </div>                
          <button type="submit" class="btn btn-primary">Add tutor</button>
      </form>
  </div>
</div>
</div>
@endsection