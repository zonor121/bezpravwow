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
'accepted' => 'Вы должны принять :attribute.',
'accepted_if' => 'Вы должны принять :attribute, когда :other равно :value.',
'active_url' => 'Поле :attribute должно быть действительным URL.',
'after' => 'Дата в поле :attribute должна быть после :date.',
'after_or_equal' => 'Дата в поле :attribute должна быть после или равной :date.',
'alpha' => 'Поле :attribute может содержать только буквы.',
'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, дефис и нижнее подчеркивание.',
'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
'array' => 'Поле :attribute должно быть массивом.',
'ascii' => 'Поле :attribute должно содержать только однобайтовые буквенно-цифровые символы и знаки.',
'before' => 'Дата в поле :attribute должна быть до :date.',
'before_or_equal' => 'Дата в поле :attribute должна быть до или равной :date.',
'between' => [
    'array' => 'Количество элементов в поле :attribute должно быть от :min до :max.',
    'file' => 'Размер файла в поле :attribute должен быть от :min до :max КБ.',
    'numeric' => 'Значение поля :attribute должно быть от :min до :max.',
    'string' => 'Количество символов в поле :attribute должно быть от :min до :max.',
],
'boolean' => 'Поле :attribute должно иметь значение true или false.',
'can' => 'Поле :attribute содержит недопустимое значение.',
'confirmed' => 'Поле :attribute не совпадает с подтверждением.',
'current_password' => 'Неверный пароль.',
'date' => 'Поле :attribute должно быть корректной датой.',
'date_equals' => 'Поле :attribute должно быть датой, равной :date.',
'date_format' => 'Поле :attribute должно соответствовать формату :format.',
'decimal' => 'Поле :attribute должно содержать :decimal десятичных знаков.',
'declined' => 'Поле :attribute должно быть отклонено.',
'declined_if' => 'Поле :attribute должно быть отклонено, когда :other равно :value.',
'different' => 'Значения полей :attribute и :other должны отличаться.',
'digits' => 'Длина цифрового поля :attribute должна быть :digits.',
'digits_between' => 'Длина цифрового поля :attribute должна быть от :min до :max.',
'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
'distinct' => 'Поле :attribute содержит повторяющееся значение.',
'doesnt_end_with' => 'Поле :attribute не должно заканчиваться одним из следующих значений: :values.',
'doesnt_start_with' => 'Поле :attribute не должно начинаться с одного из следующих значений: :values.',
'email' => 'Поле :attribute должно быть действительным email адресом.',
'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values.',
'enum' => 'Выбранное значение для :attribute недопустимо.',
'exists' => 'Выбранное значение для :attribute не существует.',
'extensions' => 'Файл в поле :attribute должен иметь одно из следующих расширений: :values.',
'file' => 'Поле :attribute должно быть файлом.',
'filled' => 'Поле :attribute должно быть заполнено.',
'gt' => [
    'array' => 'Количество элементов в поле :attribute должно быть больше :value.',
    'file' => 'Размер файла в поле :attribute должен быть больше :value КБ.',
    'numeric' => 'Значение поля :attribute должно быть больше :value.',
    'string' => 'Количество символов в поле :attribute должно быть больше :value.',
],
'gte' => [
    'array' => 'Количество элементов в поле :attribute должно быть :value или больше.',
    'file' => 'Размер файла в поле :attribute должен быть :value КБ или больше.',
    'numeric' => 'Значение поля :attribute должно быть :value или больше.',
    'string' => 'Количество символов в поле :attribute должно быть :value или больше.',
],
'hex_color' => 'Поле :attribute должно быть корректным шестнадцатеричным цветом.',
'image' => 'Поле :attribute должно быть изображением.',
'in' => 'Выбранное значение для :attribute недопустимо.',
'in_array' => 'Значение поля :attribute должно быть в списке :other.',
'integer' => 'Поле :attribute должно быть целым числом.',
'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
'ipv4' => 'Поле :attribute должно быть действительным IPv4-адресом.',
'ipv6' => 'Поле :attribute должно быть действительным IPv6-адресом.',
'json' => 'Поле :attribute должно быть JSON строкой.',
'lowercase' => 'Поле :attribute должно быть в нижнем регистре.',
'lt' => [
    'array' => 'Количество элементов в поле :attribute должно быть меньше :value.',
    'file' => 'Размер файла в поле :attribute должен быть меньше :value КБ.',
    'numeric' => 'Значение поля :attribute должно быть меньше :value.',
    'string' => 'Количество символов в поле :attribute должно быть меньше :value.',
],
'lte' => [
    'array' => 'Количество элементов в поле :attribute не должно превышать :value.',
    'file' => 'Размер файла в поле :attribute должен быть :value КБ или меньше.',
    'numeric' => 'Значение поля :attribute должно быть :value или меньше.',
    'string' => 'Количество символов в поле :attribute должно быть :value или меньше.',
],
'mac_address' => 'Поле :attribute должно быть действительным MAC-адресом.',
'max' => [
    'array' => 'Количество элементов в поле :attribute не может превышать :max.',
    'file' => 'Размер файла в поле :attribute не может быть больше :max КБ.',
    'numeric' => 'Значение поля :attribute не может быть больше :max.',
    'string' => 'Количество символов в поле :attribute не может превышать :max.',
],
'max_digits' => 'Поле :attribute не должно содержать больше :max цифр.',
'mimes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих MIME-типов: :values.',
'min' => [
    'array' => 'Количество элементов в поле :attribute должно быть не менее :min.',
    'file' => 'Размер файла в поле :attribute должен быть не менее :min КБ.',
    'numeric' => 'Значение поля :attribute должно быть не менее :min.',
    'string' => 'Количество символов в поле :attribute должно быть не менее :min.',
],
'min_digits' => 'Поле :attribute должно содержать не менее :min цифр.',
'missing' => 'Поле :attribute должно отсутствовать.',
'missing_if' => 'Поле :attribute должно отсутствовать, когда :other равно :value.',
'missing_unless' => 'Поле :attribute должно отсутствовать, если :other не равно :value.',
'missing_with' => 'Поле :attribute должно отсутствовать, когда присутствует :values.',
'missing_with_all' => 'Поле :attribute должно отсутствовать, когда присутствуют :values.',
'multiple_of' => 'Значение поля :attribute должно быть кратным :value.',
'not_in' => 'Выбранное значение для :attribute недопустимо.',
'not_regex' => 'Поле :attribute имеет неверный формат.',
'numeric' => 'Поле :attribute должно быть числом.',
'password' => [
    'letters' => 'Поле :attribute должно содержать хотя бы одну букву.',
    'mixed' => 'Поле :attribute должно содержать хотя бы одну заглавную и одну строчную букву.',
    'numbers' => 'Поле :attribute должно содержать хотя бы одну цифру.',
    'symbols' => 'Поле :attribute должно содержать хотя бы один символ.',
    'uncompromised' => 'Поле :attribute было обнаружено в утечке данных. Пожалуйста, выберите другое значение для :attribute.',
],
'present' => 'Поле :attribute должно присутствовать.',
'present_if' => 'Поле :attribute должно присутствовать, когда :other равно :value.',
'present_unless' => 'Поле :attribute должно присутствовать, если :other не равно :value.',
'present_with' => 'Поле :attribute должно присутствовать, когда присутствует :values.',
'present_with_all' => 'Поле :attribute должно присутствовать, когда присутствуют :values.',
'prohibited' => 'Поле :attribute запрещено.',
'prohibited_if' => 'Поле :attribute запрещено, когда :other равно :value.',
'prohibited_unless' => 'Поле :attribute запрещено, если :other не входит в :values.',
'prohibits' => 'Поле :attribute запрещает наличие :other.',
'regex' => 'Поле :attribute имеет неверный формат.',
'required' => 'Поле :attribute обязательно для заполнения.',
'required_array_keys' => 'Массив в поле :attribute должен содержать следующие ключи: :values.',
'required_if' => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
'required_if_accepted' => 'Поле :attribute обязательно, когда :other принято.',
'required_unless' => 'Поле :attribute обязательно для заполнения, если :other не входит в :values.',
'required_with' => 'Поле :attribute обязательно для заполнения, когда присутствует :values.',
'required_with_all' => 'Поле :attribute обязательно для заполнения, когда присутствуют :values.',
'required_without' => 'Поле :attribute обязательно для заполнения, когда :values отсутствует.',
'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не присутствует.',
'same' => 'Значения полей :attribute и :other должны совпадать.',
'size' => [
    'array' => 'Количество элементов в поле :attribute должно быть равно :size.',
    'file' => 'Размер файла в поле :attribute должен быть равен :size КБ.',
    'numeric' => 'Значение поля :attribute должно быть равно :size.',
    'string' => 'Количество символов в поле :attribute должно быть равно :size.',
],
'starts_with' => 'Поле :attribute должно начинаться с одного из следующих значений: :values.',
'string' => 'Поле :attribute должно быть строкой.',
'timezone' => 'Поле :attribute должно быть корректным часовым поясом.',
'unique' => 'Такое значение поля :attribute уже существует.',
'uploaded' => 'Загрузка поля :attribute не удалась.',
'uppercase' => 'Поле :attribute должно быть в верхнем регистре.',
'url' => 'Поле :attribute должно быть корректным URL.',
'ulid' => 'Поле :attribute должно быть корректным ULID.',
'uuid' => 'Поле :attribute должно быть корректным UUID.',
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