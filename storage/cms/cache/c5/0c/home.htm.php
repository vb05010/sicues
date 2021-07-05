<?php 
use RainLab\Pages\Classes\Page;
class Cms5cb10a336d03e608299981_03f4827e63451a09e76ee1d783090b46Class extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}
}
