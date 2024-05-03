<?php

namespace App\Http\Livewire;
use App\Models\MobileBattery;
use Livewire\Component;

class MobileBatteryInfo extends Component
{
    public $mobile,$battery,$is_remove,$batteryId,$capacity,$fast_charging;

    public function render()
    {
        return view('livewire.mobile-battery-info');
    }

    public function storeBattery()
    {
        $this->validate($this->getValidationRules());
        $battery = MobileBattery::where('mobile_id',$this->mobile)->first();
        if (empty($battery)) {
            $battery = new MobileBattery();
        } 
        $battery->mobile_id = $this->mobile;
        $battery->is_remove = $this->is_remove;
        $battery->capacity = $this->capacity;
        $battery->fast_charging = $this->fast_charging;
    
        if (empty($battery->id)) {
            $battery->created_by = auth()->user()->id;
            $battery->save();
            $this->showData($this->mobile);
            session()->flash('message', 'Mobile Battery Added Successfully!');
        } else {
            $battery->updated_by = auth()->user()->id;
            $battery->update();
            $this->showData($this->mobile);
            session()->flash('message', 'Mobile Battery Updated Successfully!');
        }

       
    }

    private function getValidationRules()
    {
        return [
            'is_remove' => 'required|boolean',
            'capacity' => 'required|string',
            'fast_charging' => 'required|string',
          ];
    }

    public function showData($id)
    {
        $battery = MobileBattery::where('mobile_id',$id)->first();
        if ($battery) {
        $this->batteryId = $battery->id;
        $this->is_remove = $battery->is_remove;
        $this->capacity = $battery->capacity;
        $this->fast_charging = $battery->fast_charging;
        }
    }
    


}
