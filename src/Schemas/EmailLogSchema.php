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
            Attributes\LongTextAttribute::make('to'),
            Attributes\LongTextAttribute::make('subject'),
            Attributes\LongTextAttribute::make('body'),
            Attributes\LongTextAttribute::make('headers'),
            Attributes\LongTextAttribute::make('attachments'),
            Attributes\LongTextAttribute::make('cc'),
            Attributes\LongTextAttribute::make('bcc'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
