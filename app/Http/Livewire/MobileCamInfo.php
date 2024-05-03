<?php

namespace App\Http\Livewire;
use App\Models\MobileCam;
use Livewire\Component;

class MobileCamInfo extends Component
{
    public $mobile,$cam,$camId,$type_id,$no_of_cams,$cam_size,$cam_text,$led,$face_detection,$geo;
    public function render()
    {
        return view('livewire.mobile-cam-info');
    }

    public function storecam()
    {
        $this->validate($this->getValidationRules());
        $cam = MobileCam::where('mobile_id',$this->mobile)->first();
        if (empty($cam)) {
            $cam = new MobileCam();
        } 
        $cam->mobile_id = $this->mobile;
        $cam->type_id = $this->type_id;
        $cam->no_of_cams = $this->no_of_cams;
        $cam->cam_size = $this->cam_size;
        $cam->cam_text = $this->cam_text;
        $cam->led = $this->led;
        $cam->face_detection = $this->face_detection;
        $cam->geo = $this->geo;
        if (empty($cam->id)) {
            $cam->created_by = auth()->user()->id;
            $cam->save();
            $this->showCam($this->mobile);
            session()->flash('message', 'Mobile Cam Info Added Successfully!');
        } else {
            $cam->updated_by = auth()->user()->id;
            $cam->update();
            $this->showCam($this->mobile);
            session()->flash('message', 'Mobile Cam Info Updated Successfully!');
        }
    }

    private function getValidationRules()
    {
        return [
            'type_id' => 'required|integer|min:-32768|max:32767',
            'no_of_cams' => 'required|integer|min:-32768|max:32767',
            'cam_size' => 'required|integer|between:-32768,32767',
            'cam_text' => 'required|string',
            'led' => 'required|boolean',
            'face_detection' => 'required|boolean',
            'geo' => 'required|boolean',
        ];
    }

    public function showCam($id)
    {
        $cam = MobileCam::where('mobile_id',$id)->first();
        if ($cam) {
        $this->camId = $cam->id;
        $this->type_id = $cam->type_id;
        $this->no_of_cams = $cam->no_of_cams;
        $this->cam_size = $cam->cam_size;
        $this->cam_text = $cam->cam_text;
        $this->led = $cam->led;
        $this->face_detection = $cam->face_detection;
        $this->geo = $cam->geo;
        }
    }
}
