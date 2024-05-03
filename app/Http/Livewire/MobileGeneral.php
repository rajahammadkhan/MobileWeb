<?php

namespace App\Http\Livewire;
use App\Models\MobileGeneralInfo;
use Livewire\Component;

class MobileGeneral extends Component
{
    public $mobile,$general,$generalId,$res_width,$res_height,$res_ppi,$size,$release_date,$os,$ui,$audio,$torch,$browser;
    public function render()
    {
        return view('livewire.mobile-general');
    }

    public function storegeneral()
    {
        $this->validate($this->getValidationRules());
        $general = MobileGeneralInfo::where('mobile_id',$this->mobile)->first();
        if (empty($general)) {
            $general = new MobileGeneralInfo();
        } 
        $general->mobile_id = $this->mobile;
        $general->res_width = $this->res_width;
        $general->res_height = $this->res_height;
        $general->res_ppi = $this->res_ppi;
        $general->size = $this->size;
        $general->release_date = $this->release_date;
        $general->os = $this->os;
        $general->ui = $this->ui;
        $general->audio = $this->audio;
        $general->torch = $this->torch;
        $general->browser = $this->browser;
        if (empty($general->id)) {
            $general->created_by = auth()->user()->id;
            $general->save();
            $this->showGeneralData($this->mobile);
            session()->flash('message', 'Mobile General Info Added Successfully!');
        } else {
            $general->updated_by = auth()->user()->id;
            $general->update();
            $this->showGeneralData($this->mobile);
            session()->flash('message', 'Mobile General Info Updated Successfully!');
        }
    }

    private function getValidationRules()
    {
        return [
            'res_width' => 'required|integer|min:-32768|max:32767',
            'res_height' => 'required|integer|min:-32768|max:32767',
            'res_ppi' => 'required|integer|min:-32768|max:32767',
            'size' => 'required|numeric',
            'release_date' => 'required|date',
            'os' => 'required|string',
            'ui' => 'required|string',
            'audio' => 'required|string',
            'torch' => 'required|string',
            'browser' => 'required|string',
        ];
    }

    public function showGeneralData($id)
    {
        $general = MobileGeneralInfo::where('mobile_id',$id)->first();
        if ($general) {
        $this->generalId = $general->id;
        $this->res_width = $general->res_width;
        $this->res_height = $general->res_height;
        $this->res_ppi = $general->res_ppi;
        $this->size = $general->size;
        $this->release_date = $general->release_date;
        $this->os = $general->os;
        $this->ui = $general->ui;
        $this->audio = $general->audio;
        $this->torch = $general->torch;
        $this->browser = $general->browser;
        }
    }
}
