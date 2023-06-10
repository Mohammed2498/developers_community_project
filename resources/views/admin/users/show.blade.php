<x-admin-layout>
    <x-slot:pageName>
        Users
    </x-slot:pageName>
    <x-slot:slot>
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            @if ($user->profile->image)
                                <img src="{{ asset('storage/' . $user->profile->image) }}" class="img-fluid mb-3 "
                                     alt="user">
                            @endif
                        </div>
                        <div class="col-lg-9">
                            <h4>{{ $user->name }}</h4>
                            <p>{{ $user->email }}</p>
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="btn btn-primary-rgba"><i
                                        class="feather icon-message-square mr-2"></i>مراسلة
                                </button>
                                <button type="button" class="btn btn-success-rgba"><i
                                        class="feather icon-phone mr-2"></i>اتصل
                                    الان
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="p-1">الدولة :</th>
                                        <td class="p-1">{{ $user->profile->country }} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-1"> المدينة :</th>
                                        <td class="p-1">{{ $user->profile->city }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-1">تاريخ الميلاد :</th>
                                        <td class="p-1">{{ $user->profile->birthdate }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:slot>
</x-admin-layout>
