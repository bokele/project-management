<textarea rows="3" {!! $attributes->merge([
    'class' =>
        'block w-full rounded-md border-0 py-1.5 text-neutral-900 shadow-sm ring-1 ring-inset ring-neutral-700 placeholder:text-neutral-400 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 focus:ring-2 focus:ring-inset focus:ring-neutral-600 sm:text-sm sm:leading-6',
]) !!}>

    {{ $slot }}
</textarea>
