


<select {!! $attributes->merge([
    'class' =>
        'block w-full pl-3 pr-10 py-2 text-base leading-6 border-2  rounded-md border-gray-200 ring-indigo-300 dark:border-indigo-700 dark:bg-indigo-900 dark:text-indigo-300 focus:outline-none focus:shadow-outline-blue focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-5',
]) !!}>
    {{ $slot }}
</select>
