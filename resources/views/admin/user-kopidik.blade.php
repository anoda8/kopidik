<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="pt-3">
        <div class="card ml-3 mr-3 mb-3">
            <div class="card-body">
                <h4>Users Kopidik</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{$view == 'siswa' ? 'active' : ''}}" id="peserta-didik-tab" data-toggle="tab" href="#peserta-didik" role="tab" aria-controls="peserta-didik" wire:click="changeView('siswa')">Peserta Didik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$view == 'guru' ? 'active' : ''}}" id="guru-tab" data-toggle="tab" href="#guru" role="tab" aria-controls="guru" wire:click="changeView('guru')">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$view == 'admin' ? 'active' : ''}}" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" wire:click="changeView('admin')">Admin</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade {{$view == 'siswa' ? 'show active' : ''}}" id="peserta-didik" role="tabpanel" aria-labelledby="peserta-didik-tab">
                        @if ($view == 'siswa')
                            <div class="row mt-3">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-konfirmasi-generate-siswa">Generate User</button>
                                </div>
                            </div>
                            <table class="table table-striped table-condensed table-bordered mt-2">
                                <thead class="thead-inverse">
                                    <tr class="bg-dark">
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Terakhir Login</th>
                                        <th class="text-center">Reset Password</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users['usiswa'] as $index => $siswa)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            <div class="modal fade" id="modal-konfirmasi-generate-siswa" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            Body
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane fade {{$view == 'guru' ? 'show active' : ''}}" id="guru" role="tabpanel" aria-labelledby="guru-tab">
                        Guru
                    </div>
                    <div class="tab-pane fade {{$view == 'admin' ? 'show active' : ''}}" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        Admin
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
