<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $perPage = 5;
    public $search = '';
    public $userId;

    public function mount()
    {
        $this->search = '';
    }

    public function resetPage()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::when($this->search, function ($query, $search)
            {
                return $query
                    ->with('role')
                    ->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
            })->paginate($this->perPage)
        ]);
    }
}
