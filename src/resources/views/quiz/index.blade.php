<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../js/app.js"></script>
</head>

<body>
    <main>
      {{ $contents }}
        <ol id="wrapper">
            <div class="main">
                <li class="question">1. この地名はなんて読む？</li>
                <div class="picture">
                    <img src="../img/takanawa.png" alt="たかなわ">
                </div>
                <div class="optionBox">
                    <button class="option" id="1-1" onclick="selectProcess('1', '1')">たかなわ</button>
                    <button class="option" id="1-2" onclick="selectProcess('1', '2')">たかわ</button>
                    <button class="option" id="1-3" onclick="selectProcess('1', '3')">こうわ</button>
                </div>
                <div class="answerBox correctBox">
                    <p class="correctResult">正解！</p>
                    <p class="answerSentence">正解は「たかなわ」です！</p>
                </div>
                <div class="answerBox wrongBox">
                    <p class="wrongResult">不正解！</p>
                    <p class="answerSentence">正解は「たかなわ」です！</p>
                </div>
            </div>
        </ol>
    </main>
</body>

</html>
