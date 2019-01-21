<?php

namespace Railken\Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class EmailLogSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name'),
            Attributes\LongTextAttribute::make('from')
                ->setRequired(true),
            Attributes\ArrayAttribute::make('to')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('subject')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('body')
                ->setRequired(true),
            Attributes\ArrayAttribute::make('headers'),
            Attributes\ArrayAttribute::make('attachments'),
            Attributes\ArrayAttribute::make('cc'),
            Attributes\ArrayAttribute::make('bcc'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
