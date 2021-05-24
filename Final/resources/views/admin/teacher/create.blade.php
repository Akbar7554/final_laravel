<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
</head>
<body>
        <div class="container">
          <div class="row mt-5">
           <div class="col-md-8 offset-md-2">
             <div class="card">
                <div class="card-header" style="background-color: #ADEFD1FF;">
                    <h4 align ="center">Create Teacher</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ URL::to('add-teacher') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Teacher Name</label>
                            <input type="text" class="form-control" name="name" id="">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="phone_number" id="">
                        </div>

                        <div class="form-group">
                        
                            <select name="dep_id" class="form-control">
                                <option>Select Department</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id }}" >{{ $department->name }}</option>
                                @endforeach
                            </select>
                        
                        </div>

                        <div class="form-group">
                        
                            <select name="dep_id" class="form-control">
                                <option>Select Course</option>
                                @foreach($courses as $course)
                                <option value="{{ $course->id }}" >{{ $course->name }}</option>
                                @endforeach
                            </select>
                        
                        </div>

                        <div class="form-group">
                        
                            <select name="dep_id" class="form-control">
                                <option>Select Session</option>
                                @foreach($sessions as $session)
                                <option value="{{ $session->id }}" >{{ $session->name }}</option>
                                @endforeach
                            </select>
                        
                        </div>

                        <div class="form-group">
                        
                            <select name="dep_id" class="form-control">
                                <option>Select Section</option>
                                @foreach($sections as $section)
                                <option value="{{ $section->id }}" >{{ $section->title }}</option>
                                @endforeach
                            </select>
                        
                        </div>


                        <div class="form-group">
                        
                            <select name="dep_id" class="form-control">
                                <option>Select Department</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id }}" >{{ $department->name }}</option>
                                @endforeach
                            </select>
                        
                        </div>

                        <div class="form-group">
                            <label for="">Short Code</label>
                            <input type="text" class="form-control" name="short_code" id="">
                        </div>

                        

                        <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a class="btn btn-secondary" href="{{URL::to('all-courses')}}">Back</a>
                        </div>
                    </form>
             </div>
            </div>
         </div>
        </div>   
        </div>
</body>
</html>