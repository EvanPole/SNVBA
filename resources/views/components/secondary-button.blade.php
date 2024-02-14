<button {{ $attributes->merge(['type' => 'button', 'class' => 'border border-blue-950 rounded px-4 py-2 text-blue-950 duration-200 hover:duration-200 hover:bg-slate-100']) }}>
    {{ $slot }}
</button>