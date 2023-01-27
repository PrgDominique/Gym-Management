@extends('layouts/layout')

@section('content')
    <div class="container p-5 m-5 ">

        <h1 class="">Member</h1>
        <a href='#' class="btn btn-primary p-3 m-3 ">Add User</a>
        <table class="table bg-white">
            <div class="row m-5">

                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Membership Type</th>
                        <th scope="col">Membership Expiration</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->membership_type }}</td>
                            <td>{{ $member->membership_expiration }}</td>

                            <td class="d-flex gap-3">

                                <a href='#' class="btn btn-success">Edit</a>
                                <a href='#' class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    </div>
@endsection
