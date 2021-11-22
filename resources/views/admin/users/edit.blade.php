@extends('admin.layouts.layout')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h5 class="box-title">Editing user: <strong class="text-red text-uppercase">"{{ $user->name }}"</strong></h5>
                            </div>
                            <form role="form" method="POST" action="{{ route('admin.users.update', ['user' => $user]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h6 class="text-left text-uppercase text-red"><u>User Name</u></h6>
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') ?? $user->name }}" required>
                                    </div>

                                    <h6 class="text-left text-uppercase text-red"><u>User email</u></h6>
                                    <div class="form-group">
                                        <label for="email"></label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') ?? $user->email }}" required>
                                    </div>

                                    <h6 class="text-left text-uppercase text-red"><u>User Role</u></h6>
                                    <div class="form-group">
                                        <label for="role_id"></label>
                                        <select class="form-control @error('role_id') is-invalid @enderror" id="role_id" name="role_id">
                                            @foreach($roles as $key => $value)
                                                <option value="{{ $value }}" @if($value == $user->role->id) selected="selected" @endif" required>{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <h6 class="text-left text-uppercase text-red"><u>New Password</u></h6>
                                    <div class="form-group">
                                        <label for="password"></label>
                                        <input type=password name="password" class="form-control @error('name') is-invalid @enderror" id="password" required>
                                    </div>

                                    <h6 class="text-left text-uppercase text-red"><u>Confirm New Password</u></h6>
                                    <div class="form-group">
                                        <label for="password"></label>
                                        <input type=password name="password" class="form-control @error('name') is-invalid @enderror" id="password" required>
                                    </div>
                                    <!--
                                    TODO new password confirmation
                                    -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <a href="{{ URL::previous() }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        // image uploading in categories.create and categories.edit blades
        let wrapper = document.querySelectorAll('.custom-file');
        let arrWrapper = [...wrapper]
        if (wrapper) {
            arrWrapper.forEach(group => {
                let file = group.querySelector('.custom-file-input')
                let label = group.querySelector('.custom-file-label')
                file.addEventListener('change', function () {
                    let fileName = this.value.split('\\').pop();
                    label.classList.add("selected")
                    label.innerHTML = fileName;
                });
            })
        }
    </script>
    <style>
        .ck-editor__editable_inline {
            min-height: 250px;
        }
    </style>


@endsection
