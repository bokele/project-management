<div {{ $attributes->merge(['class' => 'flex flex-col gap-6']) }}>
    <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
        <div class="px-10 py-8">{{ $slot }}</div>
    </div>
</div>
