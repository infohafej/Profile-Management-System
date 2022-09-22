@extends('layout')
   
@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-start mt-5">
                        <h2>Edit Post</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}">< Back</a>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          
            <form action="{{ route('profiles.update',$profile->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
           
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Full Name:</strong>
                            <input type="text" name="name" value="{{ $profile->name }}"  class="form-control" placeholder="Full Name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Designation:</strong>
                            <input type="text" name="designation" value="{{ $profile->designation }}" class="form-control" placeholder="Designation">
                            @if ($errors->has('designation'))
                                <span class="text-danger">{{ $errors->first('designation') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Father's Name:</strong>
                            <input type="text" name="father_name" value="{{ $profile->father_name }}" class="form-control" placeholder="Father Name">
                            @if ($errors->has('father_name'))
                                <span class="text-danger">{{ $errors->first('father_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mother's Name:</strong>
                            <input type="text" name="mother_name" value="{{ $profile->mother_name }}" class="form-control" placeholder="Mother's Name">
                            @if ($errors->has('mother_name'))
                                <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Present Address:</strong>
                            <input type="text" name="present_address" value="{{ $profile->present_address }}" class="form-control" placeholder="Present Address">
                            @if ($errors->has('present_address'))
                                <span class="text-danger">{{ $errors->first('present_address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permanent Address:</strong>
                            <input type="text" name="permanent_address" value="{{ $profile->permanent_address }}" class="form-control" placeholder="Permanent Address">
                             @if ($errors->has('permanent_address'))
                                <span class="text-danger">{{ $errors->first('permanent_address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>E-mail Address:</strong>
                            <input type="text" name="email" value="{{ $profile->email }}" class="form-control" placeholder="E-mail Address">
                             @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date Of Birth:</strong>
                            <input type="text" name="date_of_birth" value="{{ $profile->date_of_birth }}" class="form-control" placeholder="Date Of Birth">
                             @if ($errors->has('date_of_birth'))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            <input type="number" name="phone" value="{{ $profile->phone }}" class="form-control" placeholder="Phone Number">
                             @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Religion:</strong>
                            <div>
                                <select name="religion" id="pet-select">
                                    <option value="">--Please choose an option--</option>
                                    <option value="1" {{ ($profile->religion=="1")? "selected" : "" }}>Islam</option>
                                    <option value="2" {{ ($profile->religion=="2")? "selected" : "" }}>Hinduism</option>
                                    <option value="3" {{ ($profile->religion=="3")? "selected" : "" }}>Christianity</option>
                                    <option value="4" {{ ($profile->religion=="4")? "selected" : "" }}>Buddhism</option>
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
                                <input type="radio" id="Male" name="gender" value="1" {{ ($profile->gender=="1") ? "checked" : "" }}>
                                <label for="Male">Male</label>
                                <input type="radio" id="Female" name="gender" value="2" {{ ($profile->gender=="2")? "checked" : "" }}>
                                <label for="Female">Female</label>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image Upload:</strong>
                            <input type="file" value="{{ $profile->image }}" name="image" class="form-control" placeholder="Name">
                             @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Marital Status:</strong>
                            <div>
                                <input type="radio"  id="married" name="marital_status" value="married" {{ ($profile->marital_status=="married") ? "checked" : "" }}>
                                <label for="married">Married</label>
                                <input type="radio"  id="unmarried" name="marital_status" value="unmarried" {{ ($profile->marital_status=="unmarried") ? "checked" : "" }}>
                                <label for="unmarried">Un Married</label>
                            </div>
                             
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <br>
                        <div class="form-group">
                            <strong>Career Objective:</strong>
                            <textarea class="form-control"  style="height:150px" name="career_objective"  placeholder="Career Objective">{{ $profile->career_objective }}</textarea>
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