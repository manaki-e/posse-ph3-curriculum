<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-Question-Detail') }}
        </h2>
    </x-slot>


    <div class="flex flex-col max-w-4xl mx-auto">

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center table-fixed w-full">
                        <thead class="border-b bg-gray-50">
                            <tr>
                                <th scope="col" width="10" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    Question
                                </th>
                                <th scope="col" width="10" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    question_en
                                </th>
                                <th scope="col" width="10" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    question_image
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-2xl font-semibold">
                                    {{ $question[0]->question }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-2xl font-semibold">
                                    {{ $question[0]->question_image }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 flex justify-center items-center">
                                    <img class="block h-32" src="{{ asset('/storage/img/' . $question[0]->question_image . '.' . $question[0]->question_extension) }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <form method="POST" action="">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH" />
                        <input type="hidden" name="id" id="inputId" />
                    </form>
                    <table class="min-w-full text-center table-fixed table-fixed w-full">
                        <thead class="border-b bg-gray-50">
                            <tr>
                                <th scope="col" width="10" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    Choice
                                </th>
                                <th scope="col" width="10" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    valid
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($question[0]->choices as $choice)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $choice->choice }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        @if ($choice->valid == 1)
                                        {{ __('正解') }}
                                        @elseif ($choice->valid == 0)
                                        {{ __('不正解') }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 overflow-hidden sm:rounded-lg flex justify-center items-center">
            <button class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                <a class="block w-full h-full py-3 px-8" href="{{ route('admin.question.edit', ['id'=>$question[0]->id]) }}">{{ __('この問題を修正する') }}</a>
            </button>
        </div>
    </div>
</x-app-layout>
