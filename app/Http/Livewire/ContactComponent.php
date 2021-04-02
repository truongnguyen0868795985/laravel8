<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactComponent extends Component
{
    public $contact;

    public function render()
    {
        return view('livewire.contact-component')
            ->layout('layouts.app')
            ->slot('slot');
    }

    // public function mount($contact)
    // {
    //     $this->contact = $contact;
    // }

    public function delete()
    {
        Log::info('Delete from contact');
        Contact::find($this->contact['id'])->delete();
        $this->emitUp('delete', $this->contact['id']);
    }
}
