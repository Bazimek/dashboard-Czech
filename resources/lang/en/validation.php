<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Toto pole musí být přijato.',
    'active_url'           => 'Toto není platná adresa URL.',
    'after'                => 'Toto musí být datum po :date.',
    'after_or_equal'       => 'Toto musí být datum po nebo rovno :date.',
    'alpha'                => 'Toto pole může obsahovat pouze písmena.',
    'alpha_dash'           => 'Toto pole může obsahovat pouze písmena, čísla, pomlčky a podtržítka.',
    'alpha_num'            => 'Toto pole může obsahovat pouze písmena a čísla.',
    'array'                => 'Toto pole musí být pole.',
    'attached'             => 'Toto pole je již připojeno.',
    'before'               => 'Toto musí být Datum před :date.',
    'before_or_equal'      => 'Toto musí být Datum před nebo rovno :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Toto pole musí být pravdivé nebo nepravdivé.',
    'confirmed'            => 'Potvrzení neodpovídá.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Toto není platné datum.',
    'date_equals'          => 'Toto musí být Datum rovnající se :date.',
    'date_format'          => 'To neodpovídá formátu :format.',
    'different'            => 'Tato hodnota se musí lišit od :other.',
    'digits'               => 'Musí to být :digits číslic.',
    'digits_between'       => 'To musí být mezi :min a :max číslicemi.',
    'dimensions'           => 'Tento obrázek má neplatné rozměry.',
    'distinct'             => 'Toto pole má duplicitní hodnotu.',
    'email'                => 'Musí to být platná e-mailová adresa.',
    'ends_with'            => 'To musí skončit jedním z následujících: :values.',
    'exists'               => 'Vybraná hodnota je neplatná.',
    'file'                 => 'Obsah musí být soubor.',
    'filled'               => 'Toto pole musí mít hodnotu.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'To musí být obraz.',
    'in'                   => 'Vybraná hodnota je neplatná.',
    'in_array'             => 'Tato hodnota neexistuje v roce :other.',
    'integer'              => 'To musí být celé číslo.',
    'ip'                   => 'Musí to být platná IP adresa.',
    'ipv4'                 => 'Musí to být platná adresa IPv4.',
    'ipv6'                 => 'Musí to být platná adresa IPv6.',
    'json'                 => 'Musí to být platný řetězec JSON.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'Musí to být soubor typu: :values.',
    'mimetypes'            => 'Musí to být soubor typu: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Hodnota musí být násobkem :value',
    'not_in'               => 'Vybraná hodnota je neplatná.',
    'not_regex'            => 'Tento formát je neplatný.',
    'numeric'              => 'Tohle musí být číslo.',
    'password'             => 'Heslo je nesprávné.',
    'present'              => 'Toto pole musí být přítomno.',
    'prohibited'           => 'Toto pole je zakázáno.',
    'prohibited_if'        => 'Toto pole je zakázáno, když :other je :value.',
    'prohibited_unless'    => 'Toto pole je zakázáno, pokud :other není v :values.',
    'regex'                => 'Tento formát je neplatný.',
    'relatable'            => 'Toto pole nemusí být spojeno s tímto zdrojem.',
    'required'             => 'Toto pole je nutné.',
    'required_if'          => 'Toto pole je vyžadováno, když je :other :value.',
    'required_unless'      => 'Toto pole je vyžadováno, pokud není :other v :values.',
    'required_with'        => 'Toto pole je vyžadováno, když je přítomen :values.',
    'required_with_all'    => 'Toto pole je vyžadováno, když je přítomno :values.',
    'required_without'     => 'Toto pole je vyžadováno, když :values není přítomen.',
    'required_without_all' => 'Toto pole je vyžadováno, pokud není přítomen žádný z :values.',
    'same'                 => 'Hodnota tohoto pole musí odpovídat hodnotě z :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'To musí začít s jedním z následujících: :values.',
    'string'               => 'To musí být řetězec.',
    'timezone'             => 'Musí to být platná zóna.',
    'unique'               => 'To již bylo přijato.',
    'uploaded'             => 'To se nepodařilo nahrát.',
    'url'                  => 'Tento formát je neplatný.',
    'uuid'                 => 'To musí být platný UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
