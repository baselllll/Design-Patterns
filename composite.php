<?php

/**
 * Interface IMenu
 */
interface IMenu
{
    public function render();
}


/**
 * Class MenuItem (Leaf)
 */
class MenuItem implements IMenu
{
    private $text;
    private $url;

    public function __construct($text, $url)
    {
        $this->text = $text;
        $this->url = $url;
    }

    public function render()
    {
        return '<a href="'.$this->url.'">'.$this->text.'</a>';
    }
}


/**
 * Class MenuGroup (Composite)
 */
class MenuGroup implements IMenu
{
    private $items = [];

    private $text;
    private $url;

    public function __construct($text = null, $url = null)
    {
        $this->text = $text;
        $this->url = $url;
    }

    public function addChildren(IMenu $item)
    {
        array_push($this->items, $item);
    }

    public function render()
    {
        $html = "";

        if($this->text && $this->url) {
            $html .= '<a href="'.$this->url.'">'.$this->text.'</a>';
        }

        $html .= "<ul class='menu'>";

        foreach($this->items as $item) {
            $html .= '<li>' . $item->render() . '</li>';
        }

        $html .= "</ul>";

        return $html;
    }
}
$menu = new MenuGroup();
$menu->addChildren(new MenuItem("Home", "#"));
$menu->addChildren(new MenuItem("About", "#"));
$menu->addChildren(new MenuItem("Contact US", "#"));
echo $menu->render();
