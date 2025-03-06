<div {{ $attributes->merge(['class' => 'flex flex-col gap-6 ']) }}>
    <div class="rounded-md dark:bg-neutral-800  bg-neutral-200 border border-neutral-500 dark:border-neutral-700">
        <div class="px-10 py-8">{{ $slot }}</div>
    </div>
</div>
