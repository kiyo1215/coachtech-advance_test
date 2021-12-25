<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>
<body>
  <h1>お問い合わせ</h1>
  <form class="contact" action="/confirm" method="post">
  @csrf
  <input type="hidden" name="id" value="{{ $content->id }}">
    <dl>
      <dt>お名前<span>※</span>
      </dt>
      <dd><input type="text" name="last-name" class="first-name" value="{{ old('last-name') }}">
      <input type="text" name="first-name" class="second-name" value="{{ old('first-name') }}">
      <div class="ex-name">
        <p class="example ex-name-wid">例）山田</p>
        <p class="example ex-name-wid">例）太郎</p>
      </div>
    </dd>
    </dl>
      <dl>
      <dt>性別<span>※</span></dt>
      <dd>
        <label><input type="radio" name="gender" value="1" class="sex" checked>男性</label>
        <label><input type="radio" name="gender" value="2" class="sex">女性</label>
      </dd>
    </dl>
    <dl>
      <dt>メールアドレス<span>※</span></dt>
      <dd><input type="email" name="email" class="email" value="{{ old('email') }}">
      <p class="example">例）test＠example.com</p></dd>
    </dl>
    <dl>
      <dt>郵便番号<span>※</span></dt>
      <dd>〒<input type="text" name="postcode" class="postal-code" value="{{ old('postal-code') }}">
      <p class="example">例）123-4567</p></dd>
    </dl>
    <dl>
      <dt>住所<span>※</span></dt>
      <dd><input type="text" name="address" class="address-level1" value="{{ old('address') }}">
      <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p></dd>
    </dl>
    <dl>
      <dt>建物名</dt>
      <dd><input type="text" name="building_name" class="address-level2" value="{{ old('building') }}">
      <p class="example">例）千駄ヶ谷マンション101</p></dd>
    </dl>
    <dl>
      <dt>ご意見<span>※</span></dt>
      <dd><textarea name="opinion" class="message" value="{{ old('opinion') }}"></textarea></dd>
    </dl>
    <button type="submit" class="btn">確認</button>
  </form>
</body>

</html>