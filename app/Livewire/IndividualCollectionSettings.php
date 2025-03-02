<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Focus;
use Number;

class IndividualCollectionSettings extends Component
{
    public $collection;
    public $collectionTitle;
    public $collectionDescription;
    public $collectionBaseAmount;
    public $collectionAmount;
    public $collectionStatus;
    public $collectionPayType;
    public $collectionReceivingNumber;
    public $collectionCurrency;
    public $date;
    public function mount($collection = null) 
    {   
        $this->collection = $collection;
        // dd($collection);
        $this->collectionTitle = $collection->title;
        $this->collectionDescription = $collection->description;
        $this->collectionCurrency = $collection->currency;
        $this->collectionBaseAmount = number_format($collection->cost);
        $this->collectionAmount = number_format($collection->desired_amount);
        $this->collectionStatus = $collection->status;
        $this->collectionPayType = $collection->payment_type;
        $this->collectionReceivingNumber = User::where('id', auth()->id())->get()->value('phone');
        // dd($this->collectionReceivingNumber);
        $this->date = $collection->created_at;

    }

    public function updateCollection() 
    {
        $collection = Focus::where('id', $this->collection->id)->first();
        $collection->title = $this->collectionTitle;
        $collection->description = $this->collectionDescription;
        $collection->status = $this->collectionStatus;
        $collection->cost = (float) str_replace(",", "", $this->collectionBaseAmount);
        $collection->desired_amount = (float) str_replace(",", "", $this->collectionAmount);;
        // $collection->payment_type = $this->collectionPayType;
        // $collection-> = $this->collectionReceivingNumber;
        // $collection->currency = $this->collectionCurrency;
        // dd($collection);
        $collection->save();
        
    }
    public function render()
    {
        return view('livewire.individual-collection-settings');
    }
}
