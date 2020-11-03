@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="image" required class="form-control" rows="2" placeholder="画像のURL">{{ old('image') }}</textarea>
</div>
