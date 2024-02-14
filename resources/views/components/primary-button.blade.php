<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex gap-2 bg-blue-950 rounded px-4 py-2 text-white duration-200 hover:duration-200 hover:bg-blue-900 border border-blue-900']) }}>
    {{ $slot }}
</button>