@extends('layout')
 
@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel 9 Profile Management System</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="{{ route('profiles.create') }}"> + Create New profile</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">

            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-3">
                    <span>{{ $message }}</span>
                </div>
            @endif

            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th width="180px">Action</th>
                </tr>
                @foreach ($profiles as $profile)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>
                        <form action="{{ route('profiles.destroy',$profile->id) }}" method="post">
           
                            <a class="btn btn-info btn-sm text-white" href="{{ route('profiles.show',$profile->id) }}">Show</a>
            
                            <a class="btn btn-primary btn-sm" href="{{ route('profiles.edit',$profile->id) }}">Edit</a>
           
                            @csrf
                            @method('DELETE')
              
                            <button type="submit" onclick="return confirm('Are you sure?');" title="Delete" class="btn btn-sm btn-danger"> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection