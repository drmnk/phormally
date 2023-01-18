<?php

namespace App\Enums;

/*
 * Пока что не до конца представляю себе полный набор свойств и методов,
 * которые требуются от этого Энума. Ну начнём помаленьку, по-крайней
 * мере необходимо в момент понимать, к какому из примитивных типов относится
 * поле и какие валидаторы для какого типа нужны
 */

enum FieldType: string
{
    case EMAIL = 'email';
    case STRING = 'string';
    case BOOLEAN = 'boolean';
    case URL = 'url';

    /*
     * Да, пока что мы только по факту переписали value из кейсов,
     * но думаю что в будущем будет больше дататипов, для которых
     * будет необходим набор из нескольких правил валидации
     */
    public function validatorRules(): array
    {
        return match ($this) {
            self::EMAIL => ['email'],
            self::STRING => ['string'],
            self::BOOLEAN => ['boolean'],
            self::URL => ['url']
        };
    }
}
