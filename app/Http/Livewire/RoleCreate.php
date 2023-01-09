<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleCreate extends Component
{
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.role-create', [
            'permissions' => $permissions
        ]);
    }
    public $selectedPermissions = [];
    public $name = [];

    protected $rules = [
        'name' => 'required|unique:roles,name',
        'selectedPermissions' => 'required|array|min:1'
    ];
    public function formSubmit() {
        $this->validate();
        $role = Role::create(['name' => $this->name]);
        $role->syncPermissions($this->selectedPermissions);
        flash()->addSuccess('Role created successfully');
        return redirect()->route('role.index');

    }
}
