<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>

<body>
  <h1>内容確認</h1>
    <dl>
      <dt>お名前</dt>
      <dd class="confirm">{{ $content["last_name"] }} {{ $content["first_name"] }}</dd>
    </dl>
    <dl>
      <dt>性別</dt>
      <dd class="confirm">
      @if($content["gender"]=== 1)
        男性
      @else
        女性
      @endif
      </dd>
    </dl>
    <dl>
      <dt>メールアドレス</dt>
      <dd class="confirm">{{ $content["email"] }}</dd>
    </dl>
    <dl>
      <dt>郵便番号</dt>
      <dd class="confirm">{{ $content["postcode"] }}</dd>
    </dl>
    <dl>
      <dt>住所</dt>
      <dd class="confirm">{{ $content["address"] }}</dd>
    </dl>
    <dl>
      <dt>建物名</dt>
      <dd class="confirm">{{ $content["building_name"] }}</dd>
    </dl>
    <dl>
      <dt>ご意見</dt>
    <dd class="confirm">{{ $content["opinion"] }}</dd>
    </dl>
    <a href="/thanks">送信</a>
  <a href="/fix>修正する</a>
</body>

</html>