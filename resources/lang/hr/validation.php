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

    'accepted' => ' :attribute mora biti prihvaćen.',
    'active_url' => ' :attribute nije točan URL.',
    'after' => ' :attribute mora biti datum prije :date.',
    'after_or_equal' => ' :attribute mora biti datum prije ili jednak :date.',
    'alpha' => ' :attribute može sadržavati samo slova.',
    'alpha_dash' => ' :attribute može sadržavati samo slova, brojeve, crtice i donje crtice.',
    'alpha_num' => ' :attribute može sadržavati samo slova i brojeve.',
    'array' => ' :attribute mora biti lista.',
    'before' => ' :attribute mora biti datum prije :date.',
    'before_or_equal' => ' :attribute mora biti datum prije ili jednak :date.',
    'between' => [
        'numeric' => ' :attribute mora biti između :min i :max.',
        'file' => ' :attribute mora biti između :min i :max kilobyte-a.',
        'string' => ' :attribute mora biti između :min i :max znakova.',
        'array' => ' :attribute mora imati između :min i :max članova.',
    ],
    'boolean' => ' :attribute polje mora biti točno ili netočno.',
    'confirmed' => ' :attribute potvrda ne odgovara.',
    'date' => ' :attribute nije datum.',
    'date_equals' => ' :attribute mora biti datum jednak :date.',
    'date_format' => ' :attribute ne odgovara formatu :format.',
    'different' => ' :attribute i :other moraju biti različiti.',
    'digits' => ' :attribute moraju biti :digits znamenke.',
    'digits_between' => ' :attribute mora biti između :min i :max znamenki.',
    'dimensions' => ' :attribute ima neodgovarajuće dimenzije slike.',
    'distinct' => ' :attribute field has a duplicate value.',
    'email' => ' :attribute mora biti odgovarajuća e-mail adresa.',
    'ends_with' => ' :attribute must end with one of the following: :values.',
    'exists' => 'Odabrano :attribute ne postoji.',
    'file' => ' :attribute mora biti datoteka.',
    'filled' => ' :attribute mora imati vrijednost.',
    'gt' => [
        'numeric' => ' :attribute mora biti veće od :value.',
        'file' => ' :attributemora biti veće od :value kilobyte-a.',
        'string' => ' :attribute mora imati više od :value znakova.',
        'array' => 'The :attribute mora imati više od :value članova.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ' :attribute mora biti slika.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ' :attribute mora biti cijeli broj.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute mora biti manje od :value.',
        'file' => ' :attribute mora biti manje od :value kilobyte-a.',
        'string' => ' :attribute mora imati manje od :value znakova.',
        'array' => ' :attribute mora imati manje od :value članov.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ' Ne smije biti veće od :max.',
        'file' => ' Ne smije biti veće od :max kilobyte-a.',
        'string' => ' Ne smije imati više od :max znakova.',
        'array' => ' Ne smije imati više od :max članova.',
    ],
    'mimes' => ' Mora biti datoteka tipa: :values.',
    'mimetypes' => ' Mora biti datoteka tipa: :values.',
    'min' => [
        'numeric' => ' Mora biti bar :min.',
        'file' => ' Mora imati bar :min kilobyte-a.',
        'string' => ' Mora imati bar :min znakova.',
        'array' => ' Mora imati bar :min članova.',
    ],
    'not_in' => ' selected :attribute is invalid.',
    'not_regex' => ' :attribute nije odgovarajući.',
    'numeric' => ' Mora biti broj.',
    'password' => ' Lozinka nije točna.',
    'present' => ' :attribute field must be present.',
    'regex' => ':attribute format nije odgovarajući.',
    'required' => ' Ovo polje je obavezno.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => ' :attribute mora biti :size.',
        'file' => ' :attribute mora biti :size kilobytes.',
        'string' => ' :attribute mora biti :size characters.',
        'array' => ' :attribute mora sadržati :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ' :attribute mora biti string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
