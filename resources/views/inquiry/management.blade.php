<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/management.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>

<body>
  <h1>管理システム</h1>
  <div class="serch">
    <form class="contact">
      <div class="name_gender">
        <dl>
          <dt>お名前</dt>
          <dd class="confirm">
            <input type="text" name="name">
          </dd>
        </dl>
        <dl>
          <dt>性別</dt>
          <dd class="confirm">
            <label><input type="radio" name="gender" value="全て" class="gender">全て</label>
            <label><input type="radio" name="gender" value="1" class="gender">男性</label>
            <label><input type="radio" name="gender" value="2" class="gender">女性</label>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>登録日</dt>
        <dd class="confirm">
          <input type="" name="date">
          <span>-</span>
          <input type="" name="date">
        </dd>
      </dl>
      <dl>
        <dt>メールアドレス</dt>
        <dd class="confirm">
          <input type="email" name="email">
        </dd>
      </dl>
        <button type="submit" class="btn">検索</button>
      </form>
      <a href="#">リセット</a>
    </div>

    <div class="paginate">
      {{ $inquiries->links() }}

    </div>
    <div class="result">
    <table>
        <tr>
          <th>ID</th>
          <th>お名前</th>
          <th>性別</th>
          <th>メールアドレス</th>
          <th>ご意見</th>
        </tr>
      @foreach($contents as $contents)
        <tr>
          <td>{{$contents->id}}</td>
          <td>{{$contents->last_name}} {{$contents->first_name}}</td>
          <td>
            @if($contents->gender === 1)
              <p>男性</p>
            @else
              <p>女性</p>
            @endif
          </td>
          <td>{{$contents->email}}</td>
          <td class="opinion-list">{{$contents->opinion}}</td>
          <td>
            <form method="post" action="/delete">
            @csrf
              <input type="hidden"name="id" value="{{ $contents->id }}">
              <button type="submit" class="delete">削除</button>
            </form>
          </td>
        </tr>
      @endforeach
      </table>
    </div>

</body>

</html>