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
        {{-- {{ $item->toJson(JSON_UNESCAPED_UNICODE) }}<br> --}}
        <ol id="wrapper">
            <div class="main">
                <h1>{{ $contents[$id - 1]->content }}</h1>
                @foreach ($contents[$id - 1]->questions as $i => $question)
                    <li class="question">{{ $i + 1 }}. この地名はなんて読む？</li>
                    <div class="picture">
                        <img src="../img/{{ $question->question_image }}.png" alt={{ $question->question }}>
                    </div>
                    <div class="optionBox">
                        @foreach ($question->choices as $j => $choice)
                            <button class="option" id="{{ $i + 1 }}-{{ $j + 1 }}-{{ $choice->valid }}"
                                onclick="selectProcess({{ $i + 1 }}, {{ $j + 1 }}, {{ $choice->valid }})">{{ $choice->choice }}</button>
                        @endforeach
                    </div>
                    <div class="answerBox correctBox">
                        <p class="correctResult">正解！</p>
                        <p class="answerSentence">正解は「たかなわ」です！</p>
                    </div>
                    <div class="answerBox wrongBox">
                        <p class="wrongResult">不正解！</p>
                        <p class="answerSentence">正解は「たかなわ」です！</p>
                    </div>
                @endforeach
            </div>
        </ol>
    </main>
</body>

</html>
