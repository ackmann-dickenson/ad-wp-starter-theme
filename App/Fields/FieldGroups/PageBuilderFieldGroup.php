<?php

namespace AD\App\Fields\FieldGroups;

use AD\App\Fields\Layouts\Hero;
use AD\App\Fields\Layouts\Image;
use AD\App\Fields\Layouts\ContentArea;
use AD\App\Fields\FieldGroups\RegisterFieldGroups;

use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\FlexibleContent;

/**
 * Class PageBuilderFieldGroup
 *
 * @package AD\App\Fields\PageBuilderFieldGroup
 */
class PageBuilderFieldGroup extends RegisterFieldGroups
{
    /**
     * Register Field Group via Wordplate
     */
    public function registerFieldGroup()
    {
        register_extended_field_group([
            'title'    => __('Page Builder', 'mc-starter'),
            'fields'   => $this->getFields(),
            'location' => [
                Location::if('page_template', 'templates/page-builder.php')
            ],
            'style' => 'default'
        ]);
    }

    /**
     * Register the fields that will be available to this Field Group.
     *
     * @return array
     */
    public function getFields()
    {
        return [
            FlexibleContent::make(__('Modules', 'mc-starter'))
                ->buttonLabel(__('Add Module', 'mc-starter'))
                ->layouts([
                    (new ContentArea())->fields(),
                    (new Hero())->fields(),
                    (new Image())->fields(),
                ])
        ];
    }
}
