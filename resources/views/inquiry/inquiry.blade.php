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
   <input type="hidden" name="id">
    <dl>
      <dt>お名前<span>※</span>
      </dt>
      <dd><input type="text" name="last_name" class="last_name" value="{{ old('last_name') }}">
      <input type="text" name="first_name" class="first_name" value="{{ old('first_name') }}">
      @if ($errors->has('last_name'))
        <div class="text-danger">
          {{ $errors->first('last_name') }}
        </div>
      @endif
      @if ($errors->has('first_name'))
        <div class="text-danger">
          {{ $errors->first('first_name') }}
        </div>
      @endif
      <div class="ex-name">
        <p class="example ex-name-wid">例）山田</p>
        <p class="example ex-name-wid">例）太郎</p>
      </div>
    </dd>
    </dl>
      <dl>
      <dt>性別<span>※</span></dt>
      <dd>
        <label><input type="radio" name="gender" value="1" class="gender" checked>男性</label>
        <label><input type="radio" name="gender" value="2" class="gender">女性</label>
      </dd>
    </dl>
    <dl>
      <dt>メールアドレス<span>※</span></dt>
      <dd><input type="email" name="email" class="email" value="{{ old('email') }}">
      @if ($errors->has('email'))
        <div class="text-danger">
          {{ $errors->first('email') }}
        </div>
      @endif
      <p class="example">例）test＠example.com</p></dd>
    </dl>
    <dl>
      <dt>郵便番号<span>※</span></dt>
      <dd>〒<input type="text" name="postcode" class="postcode" value="{{ old('postcode') }}">
      @if ($errors->has('postcode'))
        <div class="text-danger">
          {{ $errors->first('postcode') }}
        </div>
      @endif
      <p class="example">例）123-4567</p></dd>
    </dl>
    <dl>
      <dt>住所<span>※</span></dt>
      <dd><input type="text" name="address" class="address" value="{{ old('address') }}">
      @if ($errors->has('address'))
        <div class="text-danger">
          {{ $errors->first('address') }}
        </div>
      @endif
      <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p></dd>
    </dl>
    <dl>
      <dt>建物名</dt>
      <dd><input type="text" name="building_name" class="building_name" value="{{ old('building_name') }}">
      <p class="example">例）千駄ヶ谷マンション101</p></dd>
    </dl>
    <dl>
      <dt>ご意見<span>※</span></dt>
      <dd><textarea name="opinion" class="opinion">{{ old('opinion') }}</textarea>
      @if ($errors->has('opinion'))
      <div class="text-danger">
        {{ $errors->first('opinion') }}
      </div>
      @endif
    </dd>
    </dl>
    <button type="submit" class="btn">確認</button>
  </form>
</body>

</html>