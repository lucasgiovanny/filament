@props([
    'label' => null,
])

<fieldset
    {{
        $attributes->class([
            'fi-fieldset rounded-xl border border-gray-200 p-6 dark:border-white/10',
        ])
    }}
>
    @if (filled($label))
        <legend class="-ms-2 px-2 text-sm font-medium leading-6">
            {{ $label }}
        </legend>
    @endif

    {{ $slot }}
</fieldset>
