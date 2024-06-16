@props(['disabled' => false])

<label class="input input-bordered flex items-center gap-4">
    <x-dynamic-component
            :component="$icon"
    />
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'grow']) !!}/>

</label>
