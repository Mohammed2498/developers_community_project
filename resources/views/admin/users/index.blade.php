<x-admin-layout title="Subscribers">
    <x-slot:action>
        <div class="widgetbar">
        <a href="{{ route('admin.users.create') }} ">
            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>
            Add New User</button>
        </a>
        </div>
    </x-slot:action>
    <x-slot:pageName>
        Users
    </x-slot:pageName>
    <x-slot:slot>
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Subscribers</h5>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card-body">
{{--                    <x-flash-message/>--}}
                    <div class="table-responsive">
                        <table id="default-datatable" class="display table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th> Username</th>
                                <th> Email</th>
                                <th>Country</th>
                                <th>City</th>
                                <th> Birthdate</th>
                                <th>QR Code</th>
                                <th>User Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if ($user->profile->image)
                                            <img src="{{ asset('storage/' . $user->profile->image) }}" alt=""
                                                 height="50px" width="50px">
                                        @endif
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->profile->country }}</td>
                                    <td>{{ $user->profile->city }}</td>
                                    <td>{{ $user->profile->birthdate }}</td>
                                    <td>
                                        <a class="btn btn-primary " href="{{ route('users.qrcode', $user->id) }}">Generate QR Code</a>
                                    </td>
                                    <td>
                                        <span id="user-status-{{ $user->id }}">{{ $user->status }}</span>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.users.updateStatus', $user->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm {{ $user->status === 'active' ? 'btn-danger' : 'btn-primary' }}">
                                                {{ $user->status === 'active' ? 'Deactivate' : 'Activate' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-success">Show</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                              class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:slot>
</x-admin-layout>
