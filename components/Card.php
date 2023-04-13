<?php
class Card
{
    private $title = "title";
    private $body = [];

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function addElement($element)
    {
        $this->body[] = $element;
    }

    public function render()
    {
        $output = '<div class="card">';
        $output .= '<div class="card-header">' . $this->title . '</div>';
        $output .= '<hr align="center" class="card-separator">';
        $output .= '<div class="card-body">';
        foreach ($this->body as $element) {
            $output .= $element;
        }
        $output .= '</div>';
        $output .= '</div>';
        return $output;
    }
}
