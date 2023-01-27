@extends('layouts/layout')

@section('content')
    <div class="container p-5 m-5 ">

        <h1 class={{ route('index') }}>Add Member</h1>
        <div class="row m-5">
                
                <button class="btn btn-primary p-3 m-3 ">Add User</button>
            <table class="table bg-white">
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
                    <tr>
                        <td>qwe</td>
                        <td>qwe</td>
                        <td>qwe</td>
                        <td>qwe</td>
                        <td class="d-flex gap-3">
                        
                            <a href='#' class="btn btn-success">Edit</a>
                            <a href='#' class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
