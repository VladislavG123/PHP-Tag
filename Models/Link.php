<?php


class Link extends BaseTag 
{
    public function __construct(array $attributes = [])
    {   
        parent::__construct('a', $attributes);
    }

    public function setHref($url)
    {
        return $this->setAttributes('href', $url);
    }
}
