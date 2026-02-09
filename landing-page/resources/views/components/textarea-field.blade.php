<label for="{{ $name }}">{{ $label }}</label>
<textarea name="{{ $name }}" rows="6" class="outline-1 outline-gray-800 rounded-md py-2 px-3"
    placeholder="{{ $label }}"></textarea>

@error($name)
    <p class="text-red-500">{{ $message }}</p>
@enderror
