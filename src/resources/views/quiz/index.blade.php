@extends('layouts.user')

@section('content')
    <h1 class="text-4xl text-green-700 text-center font-semibold">{{ $contents[0]->content }}</h1>

    <ol class="m-auto max-w-2xl p-2">
        @foreach ($contents[0]->questions as $i => $question)
            <li class="mt-8">
                <h2 class="relative font-semibold p-3 before:content-[''] before:bottom-0 before:absolute before:w-32 before:border before:border-2 before:border-solid before:border-blue-300">{{ $i + 1 }}. この地名はなんて読む？</h2>
                <div>
                    <img class="w-full" src="../img/{{ $question->question_image }}.png" alt={{ $question->question }}>
                </div>
                <div class="optionBox">
                    @foreach ($question->choices as $j => $choice)
                        <button class="w-full cursor-pointer my-1 p-4 font-bold box-border tracking-widest bg-white text-left border-solid border-gray-300 border shadow-sm" id="{{ $i + 1 }}-{{ $j + 1 }}" data-answer="{{ $choice->valid }}"
                            onclick="selectProcess({{ $i + 1 }}, {{ $j + 1 }}, {{ $choice->valid }})">
                            {{ $choice->choice }}
                        </button>
                    @endforeach
                </div>
                <div class="answerBox bg-gray-200 w-full p-5 box-border hidden mt-4">
                    <p class="resultText relative inline-block mb-2 pb-1 font-semibold leading-5 tracking-widest before:content-[''] before:absolute before:bottom-0 before:w-full before:border-solid before:border-2"></p>
                    <p class="tracking-wider">
                        正解は「
                        <span class="answer"></span>
                        」です！
                    </p>
                </div>
            </li>
        @endforeach
    </ol>
@endsection
