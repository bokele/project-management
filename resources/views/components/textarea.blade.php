<textarea rows="3" {!! $attributes->merge([
    'class' =>
        'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
]) !!}>

    {{ $slot }}
</textarea>
