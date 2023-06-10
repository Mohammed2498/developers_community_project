
<x-admin-layout >
    <x-slot:pageName>
        Edit User Profile
    </x-slot:pageName>
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('admin.users.update',$user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.users.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
