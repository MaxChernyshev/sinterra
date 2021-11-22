<div>
    <div class="container mb-2 mt-2">
        <div class="row">
            <div class="col-lg-4">
                <form>
                    <div class="form-group">
                        <div class="input-group input-group-md">
                            <input type="text" wire:model="search" class="form-control form-control-md" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-md btn-default" style="border: 1px solid lightgrey">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <form>
                    <button wire:model="resetPage" class="btn btn-md btn-primary">
                        Skip
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>User email</th>
                                <th>User role</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role->role }}</td>
                                    <td class="project-actions text-right">
                                        {{--                                        <form--}}
                                        {{--                                            action="{{ route('admin.users.edit', ['user' => $user]) }}"--}}
                                        {{--                                            method="post" class="float-left m-1">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            @method('POST')--}}
                                        {{--                                            <button type="submit" class="btn btn-danger btn-sm">--}}
                                        {{--                                                <i class="fas fa-pensil-alt"></i>--}}
                                        {{--                                                Edit--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </form>--}}
                                        <a class="btn btn-success btn-sm float-left m-1" href="{{ route('admin.users.edit', ['user' => $user]) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.users.destroy', ['user' => $user]) }}"
                                            method="post" class="float-left m-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Confirm deleting')">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="m-5">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
