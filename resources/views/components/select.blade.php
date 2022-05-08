<div class="col-lg-6">
    <label for="{{ $field }}">{{ $name }}</label>
    <select name="{{ $field }}" class="form-control">
        <option value="">--Vui lòng chọn--</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
