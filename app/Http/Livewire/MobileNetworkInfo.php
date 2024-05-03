<?php

namespace App\Http\Livewire;
use App\Models\MobileNetwork;
use Livewire\Component;

class MobileNetworkInfo extends Component
{
    public $mobile,$network,$networkId,$wlan,$bluetooth,$radio,$usb,$data,$g2,$g3,$g4,$g5;
    public function render()
    {
        return view('livewire.mobile-network-info');
    }

    public function storenetwork()
    {
        $this->validate($this->getValidationRules());
        $network = MobileNetwork::where('mobile_id',$this->mobile)->first();
        if (empty($network)) {
            $network = new MobileNetwork();
        } 
        $network->mobile_id = $this->mobile;
        $network->wlan = $this->wlan;
        $network->bluetooth = $this->bluetooth;
        $network->radio = $this->radio;
        $network->usb = $this->usb;
        $network->data = $this->data;
        $network->g2 = $this->g2;
        $network->g3 = $this->g3;
        $network->g4 = $this->g4;
        $network->g5 = $this->g5;
        if (empty($network->id)) {
            $network->created_by = auth()->user()->id;
            $network->save();
            $this->shownetwork($this->mobile);
            session()->flash('message', 'Mobile Network Info Added Successfully!');
        } else {
            $network->updated_by = auth()->user()->id;
            $network->update();
            $this->shownetwork($this->mobile);
            session()->flash('message', 'Mobile Network Info Updated Successfully!');
        }
    }

    private function getValidationRules()
    {
        return [
            'wlan' => 'required|string',
            'bluetooth' => 'required|string',
            'radio' => 'required|string',
            'usb' => 'required|string',
            'data' => 'required|string',
            'g2' => 'required|string',
            'g3' => 'required|string',
            'g4' => 'required|string',
            'g5' => 'required|string',
        ];
    }

    public function shownetwork($id)
    {
        $network = MobileNetwork::where('mobile_id',$id)->first();
        if ($network) {
        $this->networkId = $network->id;
        $this->wlan = $network->wlan;
        $this->bluetooth = $network->bluetooth;
        $this->radio = $network->radio;
        $this->usb = $network->usb;
        $this->data = $network->data;
        $this->g2 = $network->g2;
        $this->g3 = $network->g3;
        $this->g4 = $network->g4;
        $this->g5 = $network->g5;
        }
    }
}
