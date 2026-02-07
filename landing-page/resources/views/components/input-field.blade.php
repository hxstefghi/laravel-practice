<label for="{{ $name }}">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $label }}"
    class="py-2 px-3 outline-1 outline-gray-800 rounded-md">

@error($name)
    <p class="text-red-500">{{ $message }}</p>
@enderror
