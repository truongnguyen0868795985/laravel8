<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactsComponent extends Component
{

    public $contacts =  [];

    public $newContact;

    protected $listeners = ['delete' => 'delete'];

    public function mount()
    {
        $this->contacts = Contact::get()->toArray();
        Log::info('Contacts mount called');
    }

    public function render()
    {
        Log::info('Contacts render called');
        return view('livewire.contacts-component');
    }

    public function addContact()
    {
        $this->contacts[] = [
            'id' => '3',
            'name' => '3',
            'email' => 'test@example.com',
            'phone' => '123456'
        ];
    }

    public function delete($id)
    {
        $this->contacts = Contact::where('id', '!=', $id)->get()->toArray();

        // $arr = $this->contacts;
        // for ($i = 0; $i < count($arr); $i++) {
        //     if ($arr[$i]['id'] == $id) {
        //         array_splice($arr, $i, 1);
        //     }
        // }

        // $this->contacts = $arr;
        // dd($this->contacts);
    }
}
