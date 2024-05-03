<?php

namespace App\Http\Livewire;
use App\Models\ProcessorSize;
use App\Models\ProcessorType;
use App\Models\MobileMemory;
use Livewire\Component;

class MobileMemoryInfo extends Component
{
    public $mobile,$sizes,$types,$memory,$memoryId,$card_supported,$supported_card_size,$ram_1,$ram_2,$built_in_memory_1,$built_in_memory_2,$no_of_process,$process_text,$chipset,$gpu,$process_size_id,$processor_type_id;
    public function render()
    {
        $this->sizes = ProcessorSize::get()->toArray();
        $this->types = ProcessorType::get()->toArray();
        return view('livewire.mobile-memory-info');
    }

    public function storememory()
    {
        $this->validate($this->getValidationRules());
        $memory = MobileMemory::where('mobile_id',$this->mobile)->first();
        if (empty($memory)) {
            $memory = new MobileMemory();
        } 
        $memory->mobile_id = $this->mobile;
        $memory->card_supported = $this->card_supported;
        $memory->supported_card_size = $this->supported_card_size;
        $memory->ram_1 = $this->ram_1;
        $memory->ram_2 = $this->ram_2;
        $memory->built_in_memory_1 = $this->built_in_memory_1;
        $memory->built_in_memory_2 = $this->built_in_memory_2;
        $memory->no_of_process = $this->no_of_process;
        $memory->process_text = $this->process_text;
        $memory->chipset = $this->chipset;
        $memory->gpu = $this->gpu;
        $memory->process_size_id = $this->process_size_id;
        $memory->processor_type_id = $this->processor_type_id;
        if (empty($memory->id)) {
            $memory->created_by = auth()->user()->id;
            $memory->save();
            $this->showmemory($this->mobile);
            session()->flash('message', 'Mobile Memory Info Added Successfully!');
        } else {
            $memory->updated_by = auth()->user()->id;
            $memory->update();
            $this->showmemory($this->mobile);
            session()->flash('message', 'Mobile Memory Info Updated Successfully!');
        }
    }

     private function getValidationRules()
    {
        return [
            'supported_card_size' => 'required|integer|min:-32768|max:32767',
            'ram_1' => 'required|integer|min:-32768|max:32767',
            'ram_2' => 'required|integer|min:-32768|max:32767',
            'built_in_memory_1' => 'required|integer|min:-32768|max:32767',
            'built_in_memory_2' => 'required|integer|min:-32768|max:32767',
            'no_of_process' => 'required|integer|min:-32768|max:32767',
            'card_supported' => 'required|boolean',
            'process_text' => 'required|string',
            'chipset' => 'required|string',
            'gpu' => 'required|string',
        ];
    }

    public function showmemory($id)
    {
        $memory = MobileMemory::where('mobile_id',$id)->first();
        if ($memory) {
        $this->memoryId = $memory->id;
        $this->card_supported = $memory->card_supported;
        $this->supported_card_size = $memory->supported_card_size;
        $this->ram_1 = $memory->ram_1;
        $this->ram_2 = $memory->ram_2;
        $this->built_in_memory_1 = $memory->built_in_memory_1;
        $this->built_in_memory_2 = $memory->built_in_memory_2;
        $this->no_of_process = $memory->no_of_process;
        $this->process_text = $memory->process_text;
        $this->chipset = $memory->chipset;
        $this->gpu = $memory->gpu;
        $this->process_size_id  = $memory->process_size_id;
        $this->processor_type_id   = $memory->processor_type_id;
        }
    }
}
