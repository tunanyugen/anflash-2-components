<?php

namespace Components\c010f8beca6bb4a64b99ce748ea5d2a5d\HomeSlider;

use App\Utilities\ExtendedComponent;

class c443a15b633144d68bad0b885c88ea52c extends ExtendedComponent
{
    protected string $uuid = "c443a15b633144d68bad0b885c88ea52c";
    protected string $group_id = "c010f8beca6bb4a64b99ce748ea5d2a5d";
    protected string $name = "HomeSlider";
    protected string $description = "Slider for banner at homepage";
    // variables used in pug template
    protected array $variables = [
        
    ];
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
    protected array $input_types = [
        
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("$this->type.$this->group_id.$this->name.$this->uuid");
    }
}