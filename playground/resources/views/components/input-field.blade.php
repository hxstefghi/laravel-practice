<label for="{{ $name }}">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) }}"
    class="px-3 py-2 outline-1 outline-gray-800 rounded-md mb-4">
<p class="text-red-500">
    @error($name)
        {{ $message }}
    @enderror
</p>
