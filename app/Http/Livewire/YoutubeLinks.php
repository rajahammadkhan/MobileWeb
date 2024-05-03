<?php

namespace App\Http\Livewire;
use App\Models\YoutubeVideos;
use Livewire\Component;

class YoutubeLinks extends Component
{
    public $videoLinks = [''];
    public $mobile, $youtubeId;

    public function render()
    {
        return view('livewire.youtube-links');
    }

    public function addVideoLink()
    {
        $this->videoLinks[] = '';
    }

    public function removeVideoLink($index)
    {
        unset($this->videoLinks[$index]);
        $this->videoLinks = array_values($this->videoLinks);
    }

    public function saveVideoLinks()
    {
        $this->validate([
            'videoLinks.*' => 'required|string', 
        ]);

        $youtube = YoutubeVideos::where('mobile_id', $this->mobile)->first();

        if (!$youtube) {
            $youtube = new YoutubeVideos();
            $youtube->mobile_id = $this->mobile;
        }

        $youtube->video_link = json_encode($this->videoLinks); 

        if (empty($youtube->id)) {
            $youtube->created_by = auth()->user()->id;
            $youtube->save();
            $this->showYoutube($this->mobile);
            session()->flash('message', 'Video Links Added Successfully!');
        } else {
            $youtube->updated_by = auth()->user()->id;
            $youtube->update();
            $this->showYoutube($this->mobile);
            session()->flash('message', 'Video Links Updated Successfully!');
        }
    }

    private function getValidationRules()
    {
        return [
            'video_link' => 'required|string',
        ];
    }

    public function showYoutube($id)
    {
        $youtube = YoutubeVideos::where('mobile_id', $id)->first();

        if ($youtube) {
            $this->youtubeId = $youtube->id;
            $this->videoLinks = json_decode($youtube->video_link, true); // Decode JSON to array
        }
    }

}
