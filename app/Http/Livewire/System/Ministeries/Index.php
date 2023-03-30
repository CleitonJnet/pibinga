<?php

namespace App\Http\Livewire\System\Ministeries;

use App\Models\Ministeries;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $ministeries = Ministeries::paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'ministerios'
        );
        return view('livewire.system.ministeries.index',compact('ministeries'));
    }
}
