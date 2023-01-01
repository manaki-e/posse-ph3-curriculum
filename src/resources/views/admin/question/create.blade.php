<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-Question-Create') }}
        </h2>
    </x-slot>


    <div class="flex justify-center items-center font-sans text-gray-900 antialiased">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.question.store') }}" method="POST">
                @csrf

                <!-- Question-->
                <div class="mb-6">
                    <x-input-label for="question" :value="__('設問(漢字)')" />
                    <x-text-input id="question" class="block mt-1 w-full" type="text" name="question" :value="old('question')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Question-->
                <div class="mb-6">
                    <x-input-label for="question_en" :value="__('設問(ローマ字)')" />
                    <x-text-input id="question_en" class="block mt-1 w-full" type="text" name="question_en"
                        :value="old('question_en')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice_1-->
                <div class="mb-6">
                    <x-input-label for="choice_1" :value="__('選択肢-1')" />
                    <x-text-input id="choice_1" class="block mt-1 w-full" type="text" name="choice_1"
                        :value="old('choice_1')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice_2-->
                <div class="mb-6">
                    <x-input-label for="choice_2" :value="__('選択肢-2')" />
                    <x-text-input id="choice_2" class="block mt-1 w-full" type="text" name="choice_2"
                        :value="old('choice_2')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice_3-->
                <div class="mb-6">
                    <x-input-label for="choice_3" :value="__('選択肢-3')" />
                    <x-text-input id="choice_3" class="block mt-1 w-full" type="text" name="choice_3"
                        :value="old('choice_3')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- answer -->
                {{-- <x-input-label :value="__('答えの選択肢')" />
                <div class="grid w-full grid-cols-3 space-x-2 rounded-xl bg-gray-200 p-2">
                    <div class="flex justify-center items-center">
                        <x-input-label for="answer_1" :value="__('選択肢-1')" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white" />
                        <x-radio-input id="answer_1" class="" type="radio" name="answer" :value="old('answer')"
                            required autofocus />
                    </div>
                    <div class="flex justify-center items-center">
                        <x-input-label for="answer_2" :value="__('選択肢-2')" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white" />
                        <x-radio-input id="answer_2" class="" type="radio" name="answer" :value="old('answer')"
                            required autofocus />
                    </div>
                    <div class="flex justify-center items-center">
                        <x-input-label for="answer_3" :value="__('選択肢-3')" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white" />
                        <x-radio-input id="answer_3" class="" type="radio" name="answer" :value="old('answer')"
                            required autofocus />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div> --}}

                <div class="max-w-7xl mx-auto">
                    <div class="p-6 overflow-hidden sm:rounded-lg flex justify-center items-center gap-10">
                        <button class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md w-40">
                            <a href="{{ route('admin.question') }}">{{ __('設問一覧へ戻る') }}</a>
                        </button>
                        <button
                            class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md bg-purple-600 text-white w-40"
                            type="submit">
                            作成する
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
