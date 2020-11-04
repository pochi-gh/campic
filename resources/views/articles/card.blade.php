 <!-- Card -->
 <div class="card card-cascade wider reverse mt-3 main-card">
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="{{$article->image}}" alt="Card image cap" height="380" width="360">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">
     <!-- Title -->
    <div class="d-flex flex-row">
      <h5 class="card-title">
        <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
          {{ $article->title }}
        </a>
      </h5>
    @if( Auth::id() === $article->user_id )
      <!-- dropdown -->
      <div class="ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button type="button" class="btn btn-link text-muted m-0 p-2">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
              <i class="fas fa-pen mr-1"></i>内容の更新
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
              <i class="fas fa-trash-alt mr-1"></i>内容の削除
            </a>
          </div>
        </div>
      </div>
      <!-- dropdown -->
      <!-- modal -->
      <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $article->title }}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    @endif
    </div>
    <div class="font-weight-bold indigo-text py-2">
      {{$article->user->name}}
      {{ $article->created_at->format('Y/m/d H:i') }} {{--この行を変更--}}
    </div>
  </div>
</div>
