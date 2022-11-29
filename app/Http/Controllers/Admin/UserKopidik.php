<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Livewire\Component;

class UserKopidik extends Component
{
    public $view = 'siswa';

    public function render()
    {
        $users['usiswa'] = User::whereRoleIs('siswa')->get();
        $users['uguru'] = User::whereRoleIs('guru')->get();
        $users['uadmin'] = User::whereRoleIs('guru')->get();
        return view('admin.user-kopidik', ['users' => $users]);
    }

    public function changeView($view)
    {
        $this->view = $view;
    }
}
