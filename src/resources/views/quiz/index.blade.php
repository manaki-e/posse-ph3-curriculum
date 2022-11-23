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
        <h1>{{ $contents[$id - 1]->content }}</h1>
        <ol class="main">
            @foreach ($contents[$id - 1]->questions as $i => $question)
                <li class="questions">
                    <h2 class="question">{{ $i + 1 }}. この地名はなんて読む？</h2>
                    <div class="picture">
                        <img src="../img/{{ $question->question_image }}.png" alt={{ $question->question }}>
                    </div>
                    <div class="optionBox">
                        @foreach ($question->choices as $j => $choice)
                            <button class="option" id="{{ $i + 1 }}-{{ $j + 1 }}"
                                data-answer="{{ $choice->valid }}"
                                onclick="selectProcess({{ $i + 1 }}, {{ $j + 1 }}, {{ $choice->valid }})">
                                {{ $choice->choice }}
                            </button>
                        @endforeach
                    </div>
                    <div class="answerBox displayNone">
                        <p class="resultText"></p>
                        <p class="answerSentence">
                            正解は「
                            <span class="answer"></span>
                            」です！
                        </p>
                    </div>
                </li>
            @endforeach
        </ol>
    </main>
</body>

</html>
