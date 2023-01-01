@extends('layouts.user')

@section('content')
    <ul>
        <li class="flex gap-2 justify-between mb-1">
            <div class="py-2 px-4">ガチで東京の人しか解けない！</div>
            <a href="quiz/1">
                <button class="bg-blue-600 font-semibold text-white py-2 px-4 rounded">
                    #東京の難読地名クイズ
                </button>
            </a>
        </li>
        <li class="flex gap-2 justify-between">
            <div class="py-2 px-4">広島県民なら解けて当然？</div>
            <a href="quiz/2">
                <button class="bg-blue-600 font-semibold text-white py-2 px-4 rounded">
                    #広島の難読地名クイズ
                </button>
            </a>
        </li>
    </ul>
@endsection
