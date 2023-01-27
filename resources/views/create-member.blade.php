@extends('layouts/layout')

@section('content')
    <div class="container p-5 m-5 ">

        <a href={{ route('index') }} class=" btn btn-primary padding-3 m-5">Back to homepage</a>

        <form>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" id="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" id="email">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Membership Type</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Membership</option>
                <option value="3">Gold</option>
                <option value="2">VIP</option>
              </select>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary p-2 mt-5">Submit</button>
          </div>
        </form>
    </div>
@endsection
