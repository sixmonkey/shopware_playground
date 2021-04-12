<?php declare(strict_types=1);

namespace Sixmonkey\SomeCustomField\Extension\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Runtime;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CustomFieldFooExtension extends EntityExtension
{
    /**
     * @param \Shopware\Core\Framework\DataAbstractionLayer\FieldCollection $collection
     * @return void
     */
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new StringField('foo_bar', 'fooBar'))->addFlags(new Runtime())
        );
    }

    /**
     * @return string
     */
    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}
