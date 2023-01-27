@extends('layouts/layout')

@section('content')
    <div class="container p-5 m-5 ">

        <a href={{ route('index') }} class=" btn btn-primary padding-3 m-5">Back to homepage</a>

        <form action="/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="text" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="membership_id" class="form-label">Membership Type</label>
                <select class="form-select" aria-label="Default select example" id="membership_id" name="membership_id">
                    <option selected>Select Membership</option>
                    @foreach($membership as $membersheep)
                    <option value={{ $membersheep->id }}> {{ $membersheep->membership_type}} - {{ $membersheep->membership_price}}</option>

                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="membership_expiration" class="form-label">Membership Expiration</label>
                <input class="form-control" type="date" id="membership_expiration" name="membership_expiration">
            </div>
            <div class="mb-3">
                <label for="trainer" class="form-label">
                    Trainer
                </label>
                <select class="form-select" name="trainer_id">
                    @foreach ($trainers as $trainer)
                        <option value="{{ $trainer->id }}">{{ $trainer->name }} - {{ $trainer->specialization }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary p-2 mt-5 " type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
