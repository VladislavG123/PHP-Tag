<?php

abstract class BaseTag
{
    private $name;
    private $attributes;
    private $isSelfClosing;
    private $body;

    function __construct(string $name, array $attributes = [])
    {
        $this->body = new Body();
        $this->isSelfClosing = false;
        $this->name = $name;
        $this->attributes = new Attributes($attributes);
    }

    public function setAttributes($key, $value = null)
    {
        $this->attributes->setAttribute($key, $value);
    }

    public function selfClosing()
    {
        $this->isSelfClosing = true;
    }

    public function prependBody($body)
    {
        $this->body->prependBody($body);

        return $this;
    }

    public function appendBody($body)
    {
        $this->body->appendBody($body);

        return $this;
    }

    public function __toString() : string
    {
        $result = "<$this->name ";

        $result .= $this->attributes;

        $result .=  $this->isSelfClosing ? " />" : ">$this->body</$this->name>";

        return $result;
    }

    public function appendTo(BaseTag $tag)
    {
        $tag->appendBody($this);

        return $this;
    }

    public function prependTo(BaseTag $tag)
    {
        $tag->prependBody($this);

        return $this;
    }

}