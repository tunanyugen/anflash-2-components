<?php
namespace Src\HomeVR;

use Jenssegers\Blade\Blade;

class HomeVR
{
	// variables used in blade template
    protected array $variables = [];
	// define which type of input each variable uses
    // AVAILABLE TYPES
    // ckeditor: for writing articles, large content
    // checkbox: for toggling on/off
    // input: for writing name, title, small content
    // media-input: for inserting images/iframes
    // multi-media-input: for inserting multiple images/iframes
    // select: for selecting content from a dropdown list
    // sortable: for a draggable sorting input
    // tag-input: for selecting multiple tags
    // textarea: for writing notes
    protected array $input_types = [];
    
    public function api(){
        return json_encode([
            "message" => "API is working!"
        ]);
    }
	public function index()
	{
        $content = json_decode(file_get_contents('https://tunacoding.com/api/articles?&relations[]=user&relations[]=tags&page=1&title=&tag_ids[]=14&tag_ids[]=7&=&=vr&excluded_tag_ids[]=&=&=&order_by=&=&order_by_direction=desc&=Gi%E1%BA%A3m%20d%E1%BA%A7n'));
		$items = json_decode(file_get_contents('https://tunacoding.com/api/articles?&relations[]=user&relations[]=tags&page=1&title=&tag_ids[]=7&=&=vr&excluded_tag_ids[]=14&=&=category&order_by=&=&order_by_direction=desc&=Gi%E1%BA%A3m%20d%E1%BA%A7n'));
		$blade = new Blade([__DIR__.'/../../src/HomeVR'], __DIR__.'/../../cache');

		echo $blade->make('index', ['content' => $content->items[0], 'items' => $items->items])->render();
	}
}