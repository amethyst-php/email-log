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
            Attributes\LongTextAttribute::make('from'),
            Attributes\ArrayAttribute::make('to'),
            Attributes\LongTextAttribute::make('subject'),
            Attributes\LongTextAttribute::make('body'),
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
