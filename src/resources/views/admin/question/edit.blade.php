<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-Question-Edit') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center font-sans text-gray-900 antialiased">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.question.update', ['id' => $question[0]->id - 1]) }}" method="POST">
                @csrf

                <!-- Question-->
                <div class="mb-6">
                    <x-input-label for="question" :value="__('設問(漢字)')" />
                    <x-text-input id="question" class="block mt-1 w-full" type="text" name="question"
                        value="{{ old('content', $question[0]->question) }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Question-->
                <div class="mb-6">
                    <x-input-label for="question_en" :value="__('設問(ローマ字)')" />
                    <x-text-input id="question_en" class="block mt-1 w-full" type="text" name="question_en"
                        value="{{ old('content', $question[0]->question_image) }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice-->
                @foreach ($question[0]->choices as $choice)
                    <div class="mb-6">
                        <x-input-label for="{{ 'choice_' . $loop->iteration }}" :value="__('選択肢-' . $loop->iteration)" />
                        <x-text-input id="{{ 'choice_' . $loop->iteration }}" class="block mt-1 w-full" type="text"
                            name="{{ 'choice_' . $loop->iteration }}"
                            value="{{ old('choice_' . $loop->iteration, $choice->choice) }}" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                @endforeach

                <!-- answer -->
                <x-input-label :value="__('答えの選択肢')" />
                <div class="mb-6 flex">
                    <div class="w-full">
                        <x-radio-input id="answer_1" class="" type="radio" name="answer" value="1"
                            required autofocus />
                        <x-input-label id="answer-1" for="answer_1" :value="__('選択肢-1')"
                            class="mt-1 px-4 py-3 cursor-pointer border border-solid border-gray-300 -mr-1 text-black bg-white block text-center peer-checked:bg-blue-400 peer-checked:text-white" />
                    </div>
                    <div class="w-full">
                        <x-radio-input id="answer_2" class="" type="radio" name="answer" value="2"
                            required autofocus />
                        <x-input-label id="answer-2" for="answer_2" :value="__('選択肢-2')"
                            class="mt-1 px-4 py-3 cursor-pointer border border-solid border-gray-300 -mr-1 text-black bg-white block text-center peer-checked:bg-blue-400 peer-checked:text-white" />
                    </div>
                    <div class="w-full">
                        <x-radio-input id="answer_3" class="" type="radio" name="answer" value="3"
                            required autofocus />
                        <x-input-label id="answer-3" for="answer_3" :value="__('選択肢-3')"
                            class="mt-1 px-4 py-3 cursor-pointer border border-solid border-gray-300 -mr-1 text-black bg-white block text-center peer-checked:bg-blue-400 peer-checked:text-white" />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                @for ($i = 0; $i < 3; $i++)
                    @if ($question[0]->choices[$i]->valid == 1)
                        <script>
                            document.getElementById(id).click();
                        </script>
                    @endif
                @endfor

                <div class="max-w-7xl mx-auto">
                    <div class="p-6 overflow-hidden sm:rounded-lg flex justify-center items-center gap-10">
                        <button class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md w-40">
                            <a href="{{ url()->previous() }}">{{ __('戻る') }}</a>
                        </button>
                        <button
                            class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md bg-purple-600 text-white w-40"
                            type="submit">
                            {{ __('更新する') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
