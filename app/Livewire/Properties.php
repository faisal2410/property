<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use Illuminate\View\View;
use Livewire\WithPagination;

class Properties extends Component
{
    use WithPagination;
    public $numberOfPaginatorsRendered;
    protected $paginationTheme='bootstrap';

    public function render():View
    {

        $properties=Property::paginate();
        return view('livewire.properties',compact('properties'));
    }
}
