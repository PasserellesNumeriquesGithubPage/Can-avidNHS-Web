@extends('dashboard.user.admin.admin_dashboard')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/table.css') }}">

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CreateUser"
            id="create_user">Create</button>
        <!-- #Create User -->
        <div class="modal fade" id="CreateUser" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Create User</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user.create_user') }}" method="POST" enctype="multipart/form-data">
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="name">Complete Name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name') }}" required>
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email') }}" required>
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                                    id="age" value="{{ old('age') }}" required>
                                <span class="text-danger">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label>Gender:</label><br>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('gender') is-invalid @enderror"
                                        name="gender" id="gender_male" value="Male"
                                        {{ old('gender') === 'Male' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="gender_male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('gender') is-invalid @enderror"
                                        name="gender" id="gender_female" value="Female"
                                        {{ old('gender') === 'Female' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="gender_female">Female</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                    name="position" id="position" value="{{ old('position') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="department">Department:</label>
                                <select class="form-control @error('department') is-invalid @enderror" name="department"
                                    id="department" required>
                                    <option value="">Select Department</option>
                                    <option value="Mathematics"
                                        {{ old('department') === 'Mathematics' ? 'selected' : '' }}>Mathematics Department
                                    </option>
                                    <option value="Science" {{ old('department') === 'Science' ? 'selected' : '' }}>Science
                                        Department</option>
                                    <option value="English" {{ old('department') === 'English' ? 'selected' : '' }}>English
                                        Department</option>
                                    <option value="Filipino" {{ old('department') === 'Filipino' ? 'selected' : '' }}>
                                        Filipino Department</option>
                                    <option value="EdukPanlipunan"
                                        {{ old('department') === 'EdukPanlipunan' ? 'selected' : '' }}>E.S.P & Araling
                                        Panlipunan Department</option>
                                    <option value="Tle" {{ old('department') === 'Tle' ? 'selected' : '' }}>TLE
                                        Department</option>
                                    <option value="Mapeh" {{ old('department') === 'Mapeh' ? 'selected' : '' }}>Mapeh
                                        Department</option>
                                    <option value="SHS" {{ old('department') === 'SHS' ? 'selected' : '' }}>Senior High
                                        School Department</option>
                                    <option value="ALS" {{ old('department') === 'ALS' ? 'selected' : '' }}>Alternative
                                        Learning System Department</option>
                                    <option value="Non-teaching"
                                        {{ old('department') === 'Non-teaching' ? 'selected' : '' }}>Non-Teaching
                                        Department</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="role">Role:</label>
                                <select class="form-control @error('role') is-invalid @enderror" name="role"
                                    id="role" required>
                                    <option value="">Select Role</option>
                                    <option value="Admin" {{ old('role') === 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="Principal" {{ old('role') === 'Principal' ? 'selected' : '' }}>
                                        Principal
                                    </option>
                                    <option value="Registrar" {{ old('role') === 'Registrar' ? 'selected' : '' }}>
                                        Registrar
                                    </option>
                                    <option value="Faculty" {{ old('role') === 'Faculty' ? 'selected' : '' }}>Faculty
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label>
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                                    name="phone_number" id="phone_number" value="{{ old('phone_number') }}" required>
                                <span class="text-danger">
                                    @error('phone_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="picture">Upload a Picture:</label>
                                <input type="file" class="form-control-file @error('picture') is-invalid @enderror"
                                    name="picture" id="picture" accept="image/*" required>
                                <span class="text-danger">
                                    @error('picture')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- #End Create User -->
        <h1>User Table </h1>
        <table class="table table-x1 table-striped table-dark ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Position</th>
                    <th scope="col">Department</th>
                    <th scope="col">Role</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">images</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->user->email }}</td>
                        <td>{{ $profile->user->name }}</td>
                        <td>{{ $profile->age }}</td>
                        <td>{{ $profile->gender }}</td>
                        <td>{{ $profile->position }}</td>
                        <td>{{ $profile->department }}</td>
                        <td>{{ $profile->user->role }}</td>
                        <td>{{ $profile->phone_number }}</td>
                        <td>
                            @if ($profile->images)
                                <img src="{{ asset('storage/' . $profile->images) }}" alt="Profile Image"
                                    style="max-width: 50px; border-radius: 50%;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <button onclick="document.getElementById('id01').style.display='block'"
                                class="w3-button w3-light-green action-user-btn" data-toggle="actions"
                                data-target="#id01" data-user="{{ json_encode($profile) }}">Actions</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-bar w3-green">
                    <span onclick="document.getElementById('id01').style.display='none'"
                        class="w3-button w3-display-topright">&times;</span>
                    <div>
                        <button class="w3-bar-item w3-button edit-user-btn" onclick="openAction('EDITUser')">Edit
                            User</button>
                        <button class="w3-bar-item w3-button " onclick="openAction('VIEWUser')">VIEW User</button>
                        <button class="w3-bar-item w3-button" onclick="openAction('DELETEUser')">Delete User</button>
                    </div>
                </header>
                <div id="EDITUser" class="w3-container actions">
                    <form action="{{ route('user.update_user') }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <input type="hidden" class="form-control @error('id') is-invalid @enderror" name="id"
                            id="edit-user-id" value="{{ old('id') }}" required readonly>
                        <div class="form-group">
                            <label for="name">Complete Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="edit-user-name" value="{{ old('name') }}" required readonly>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="edit-user-email" value="{{ old('email') }}" required disabled>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                                id="edit-user-age" value="{{ old('age') }}" required>
                            <span class="text-danger">
                                @error('age')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Gender:</label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input @error('gender') is-invalid @enderror"
                                    name="gender" id="gender_male" value="Male"
                                    {{ old('gender') === 'Male' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="gender_male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input @error('gender') is-invalid @enderror"
                                    name="gender" id="gender_female" value="Female"
                                    {{ old('gender') === 'Female' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="gender_female">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror"
                                name="position" id="position" value="{{ old('position') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Department:</label>
                            <select class="form-control @error('department') is-invalid @enderror" name="department"
                                id="edit-user-department" required>
                                <option disabled>Select Department</option>
                                <option value="Mathematics" {{ old('department') === 'Mathematics' ? 'selected' : '' }}>
                                    Mathematics Department</option>
                                <option value="Science" {{ old('department') === 'Science' ? 'selected' : '' }}>Science
                                    Department</option>
                                <option value="English" {{ old('department') === 'English' ? 'selected' : '' }}>English
                                    Department</option>
                                <option value="Filipino" {{ old('department') === 'Filipino' ? 'selected' : '' }}>Filipino
                                    Department</option>
                                <option value="EdukPanlipunan"
                                    {{ old('department') === 'EdukPanlipunan' ? 'selected' : '' }}>E.S.P & Araling
                                    Panlipunan Department</option>
                                <option value="Tle" {{ old('department') === 'Tle' ? 'selected' : '' }}>TLE Department
                                </option>
                                <option value="Mapeh" {{ old('department') === 'Mapeh' ? 'selected' : '' }}>Mapeh
                                    Department</option>
                                <option value="SHS" {{ old('department') === 'SHS' ? 'selected' : '' }}>Senior High
                                    School Department</option>
                                <option value="ALS" {{ old('department') === 'ALS' ? 'selected' : '' }}>Alternative
                                    Learning System Department</option>
                                <option value="Non-teaching" {{ old('department') === 'Non-teaching' ? 'selected' : '' }}>
                                    Non-Teaching Department</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select class="form-control @error('role') is-invalid @enderror" name="role"
                                id="role" required>
                                <option disabled>Select Role</option>
                                <option value="Admin" {{ old('role') === 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="Principal" {{ old('role') === 'Principal' ? 'selected' : '' }}>Principal
                                </option>
                                <option value="Registrar" {{ old('role') === 'Registrar' ? 'selected' : '' }}>Registrar
                                </option>
                                <option value="Faculty" {{ old('role') === 'Faculty' ? 'selected' : '' }}>Faculty</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number:</label>
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                                name="phone_number" id="edit-user-phone_number" value="{{ old('phone_number') }}"
                                required>
                            <span class="text-danger">
                                @error('phone_number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

                <div id="VIEWUser" class="w3-container actions viewUSER" style="display:none">
                    <div class="col">
                        <span class="span_view_user">ID: </span><span class="value" id="view-user-id"></span><br>
                        <span class="span_view_user">Email: </span><span class="value" id="view-user-email"></span><br>
                        <span class="span_view_user">Complete Name: </span><span class="value"
                            id="view-user-name"></span><br>
                        <span class="span_view_user">Age: </span><span class="value" id="view-user-age"></span><br>
                        <span class="span_view_user">Gender: </span><span class="value"
                            id="view-user-gender"></span><br>
                        <span class="span_view_user">Position: </span><span class="value"
                            id="view-user-position"></span><br>
                        <span class="span_view_user">Department: </span><span class="value"
                            id="view-user-department"></span><br>
                        <span class="span_view_user">Role: </span><span class="value" id="view-user-role"></span><br>
                        <span class="span_view_user">Phone Number: </span><span class="value"
                            id="view-user-phone_number"></span><br>
                    </div>
                    <div class="col">
                        <img id="view-user-picture" src="" alt="User Picture"><br><br>
                    </div>
                </div>

                <div id="DELETEUser" class="w3-container actions" style="display:none">
                    <h2>Other actions</h2>

                    <button>Reset Password</button>

                    <form action="{{ route('user.delete.user') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="text" class="form-control @error('id') is-invalid @enderror" name="id"
                            id="delete-user-id" value="{{ old('id') }}" required readonly>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" name="id"
                            id="delete-user-picture" value="{{ old('id') }}" required readonly>
                        <button type="submit" class="delete-user-btn"
                            style="background-color: #DC0000; width:100px; height: 35px; border-radius: 5px;">DELETE</button>
                    </form>

                    <br><br>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/User/menu_user.js') }}"></script>
    <script src="{{ asset('js/User/edit_user.js') }}"></script>
    <script src="{{ asset('js/User/view_user.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
