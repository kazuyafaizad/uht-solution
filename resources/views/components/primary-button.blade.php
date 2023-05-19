<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-accent']) }}>
    {{ $slot }}
</button>
