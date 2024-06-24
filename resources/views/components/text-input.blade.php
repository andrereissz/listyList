@props(['disabled' => false])

<label class="input input-bordered flex items-center bg-base-100">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'grow placeholder-gray-500']) !!} />
</label>
