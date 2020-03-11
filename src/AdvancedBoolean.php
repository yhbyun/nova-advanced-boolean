<?php

namespace Yhbyun\NovaAdvancedBoolean;

use Laravel\Nova\Fields\Boolean;

class AdvancedBoolean extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'advanced-boolean';

    public function options(array $options)
    {
        return $this->withMeta([
            'options' => $options,
        ]);
    }
}
