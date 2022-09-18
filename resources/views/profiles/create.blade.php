@extends('layout')
  
@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-start mt-5">
                    <h2>Add New Profile</h2>
                </div>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}">< Back</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
             
            <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Full Name:</strong>
                            <input type="text" name="name" value="{{ old('name') }}"  class="form-control" placeholder="Full Name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Designation:</strong>
                            <input type="text" name="designation" value="{{ old('designation') }}" class="form-control" placeholder="Designation">
                            @if ($errors->has('designation'))
                                <span class="text-danger">{{ $errors->first('designation') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Father's Name:</strong>
                            <input type="text" name="father_name" value="{{ old('father_name') }}" class="form-control" placeholder="Father Name">
                            @if ($errors->has('father_name'))
                                <span class="text-danger">{{ $errors->first('father_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mother's Name:</strong>
                            <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="form-control" placeholder="Mother's Name">
                            @if ($errors->has('mother_name'))
                                <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Present Address:</strong>
                            <input type="text" name="present_address" value="{{ old('present_address') }}" class="form-control" placeholder="Present Address">
                            @if ($errors->has('present_address'))
                                <span class="text-danger">{{ $errors->first('present_address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permanent Address:</strong>
                            <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="form-control" placeholder="Permanent Address">
                             @if ($errors->has('permanent_address'))
                                <span class="text-danger">{{ $errors->first('permanent_address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>E-mail Address:</strong>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="E-mail Address">
                             @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date Of Birth:</strong>
                            <input type="text" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" placeholder="Date Of Birth">
                             @if ($errors->has('date_of_birth'))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone Number">
                             @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Religion:</strong>
                            <div>
                                <select name="religion" value="{{ old('religion') }}" id="pet-select">
                                    <option value="">--Please choose an option--</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Hinduism</option>
                                    <option value="3">Christianity</option>
                                    <option value="4">Buddhism</option>
                                </select>
                            </div>
                             @if ($errors->has('religion'))
                                <span class="text-danger">{{ $errors->first('religion') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            
                            <div>
                                <input type="radio" id="Male" name="gender" value="1" checked>
                                <label for="Male">Male</label>
                                <input type="radio" id="Female" name="gender" value="2">
                                <label for="Female">Female</label>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image Upload:</strong>
                            <input type="file" value="{{ old('image') }}" name="image" class="form-control" placeholder="Name">
                             @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Marital Status:</strong>
                            <div>
                                <input type="radio"  id="married" name="marital_status" value="married" checked>
                                <label for="married">Married</label>
                                <input type="radio"  id="unmarried" name="marital_status" value="unmarried">
                                <label for="unmarried">Un Married</label>
                            </div>
                             
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <br>
                        <div class="form-group">
                            <strong>Career Objective:</strong>
                            <textarea class="form-control"  style="height:150px" name="career_objective" value="{{ old('career_objective') }}" placeholder="Career Objective"></textarea>
                             @if ($errors->has('career_objective'))
                                <span class="text-danger">{{ $errors->first('career_objective') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection