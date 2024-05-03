<?php

namespace App\Http\Livewire;
use App\Models\MobileBody;
use Livewire\Component;

class MobileBodyInfo extends Component
{
    public $mobile,$body,$bodyId,$dim_width,$dim_height,$dim_wide,$weight,$colors,$no_of_sim;
    public function render()
    {
        return view('livewire.mobile-body-info');
    }

    public function storeBody()
    {
        $this->validate($this->getValidationRules());
        $body = MobileBody::where('mobile_id',$this->mobile)->first();
        if (empty($body)) {
            $body = new MobileBody();
        } 
        $colorsArray = explode(',', $this->colors);
        $body->mobile_id = $this->mobile;
        $body->dim_width = $this->dim_width;
        $body->dim_height = $this->dim_height;
        $body->dim_wide = $this->dim_wide;
        $body->weight = $this->weight;
        $body->colors = json_encode($colorsArray);
        $body->no_of_sim = $this->no_of_sim;
        if (empty($body->id)) {
            $body->created_by = auth()->user()->id;
            $body->save();
            $this->showbody($this->mobile);
            session()->flash('message', 'Mobile Body Added Successfully!');
        } else {
            $body->updated_by = auth()->user()->id;
            $body->update();
            $this->showbody($this->mobile);
            session()->flash('message', 'Mobile Body Updated Successfully!');
        }
    }

    private function getValidationRules()
    {
        return [
           'dim_width' => 'required|integer|min:-32768|max:32767',
            'dim_height' => 'required|integer|min:-32768|max:32767',
            'dim_wide' => 'required|integer|between:-32768,32767',
            'weight' => 'required|integer|min:-32768|max:32767',
            'colors' => 'required|string',
            'no_of_sim' => 'required|integer|min:-32768|max:32767',
        ];
    }

    public function showbody($id)
    {
        $body = MobileBody::where('mobile_id',$id)->first();
        if ($body) {
        $this->bodyId = $body->id;
        $this->dim_width = $body->dim_width;
        $this->dim_height = $body->dim_height;
        $this->dim_wide = $body->dim_wide;
        $this->weight = $body->weight;
        $this->colors = $body->colors;
        $this->no_of_sim = $body->no_of_sim;
        }
    }
}
