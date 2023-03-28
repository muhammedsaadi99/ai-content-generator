<?php
class BaseTemplate
{
    public function extend($template)
    {
        // include the template file
        include $template;
    }

    public function renderBlock($blockName)
    {
        return '';
    }
}
