<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\withPagination;
class AdminUser extends Component
{
    use withPagination;


    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $users = User::where('name','LIKE', '%'.$this->search.'%')
            ->orWhere('email','LIKE', '%'.$this->search.'%')
            ->paginate(10);
        return view('livewire.admin-user', compact('users'));
    }

    public function LimiarPage()
    {
        $this->reset('page');
    }
}
