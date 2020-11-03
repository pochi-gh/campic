@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="image" required class="form-control" rows="2" placeholder="画像のURL">{{ $article->image ?? old('image') }}</textarea>
</div>
