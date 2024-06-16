@props(['disabled' => false])

<label class="input input-bordered flex items-center">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'grow']) !!}/>
</label>
