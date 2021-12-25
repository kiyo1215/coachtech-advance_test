<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" href="css/reset.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>
<body>
  <div class="thanks">
    <h1>ご意見いただきありがとうございました</h1>
    <a href="#">トップページへ</a>
  </div>
</body>
</html>

<style>
  body {
    position: relative;
    height: 100vh;
  }
  .thanks {
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
  }
  h1 {
    margin-bottom: 100px;
  }
  a {
    text-decoration: none;
    display: block;
    background-color: black;
    color: white;
    height: 30px;
    width: 130px;
    line-height: 30px;
    cursor: pointer;
    margin: 0 auto;
  }
</style>