<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    @if ( $id == 1 )
    <ul>
      <li>
        <p>１．この地名はなんて読む？：高輪</p>
        <p>こうわ、たかわ、たかなわ</p>
      </li>
      <li>
        <p>２．この地名はなんて読む？：亀戸</p>
        <p>かめいど、かめど、かめと</p>
      </li>
      <li>
        <p>３．この地名はなんて読む？：麹町</p>
        <p>かゆまち、おかとまち、こうじまち</p>
      </li>
    </ul>
    @elseif ( $id == 2 )
    <ul>
      <li>
        <p>１．この地名はなんて読む？：向洋</p>
        <p>むこうひら、むきひら、むかいなだ</p>
      </li>
    </ul>
    @endif
  </main>
</body>

</html>