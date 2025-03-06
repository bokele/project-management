


<select {!! $attributes->merge([
    'class' =>
        'block w-full pl-3 pr-10 py-2 text-base leading-6 border-1  rounded-md border-neutral-200 ring-neutral-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 focus:outline-none focus:shadow-outline-blue focus:ring-inset focus:ring-neutral-600 sm:text-sm sm:leading-5',
]) !!}>
    {{ $slot }}
</select>
