<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-Question-List') }}
        </h2>
    </x-slot>

    @foreach ($contents[0]->questions as $question)
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="px-6 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                    <div class="text-gray-900 ml-8">
                        {{ $question->question }}
                    </div>
                    <ul class="flex gap-4">
                        <li class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                            <a class="block w-full h-full py-3 px-8"
                                href="{{ route('admin.question.detail', ['id' => $question->id]) }}">{{ __('詳細') }}</a>
                        </li>
                        <li class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                            <a class="block w-full h-full py-3 px-8" href="">{{ __('削除') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 overflow-hidden sm:rounded-lg flex justify-center items-center">
            <button
                class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md bg-purple-600 text-white">
                <a href="{{ route('admin.question.create') }}">{{ __('新規作成') }}</a>
            </button>
        </div>
    </div>
</x-app-layout>
