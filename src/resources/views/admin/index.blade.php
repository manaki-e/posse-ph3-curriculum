<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-List') }}
        </h2>
    </x-slot>

    @foreach ($contents as $content)
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="px-6 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                    <div class="text-gray-900 ml-8">
                        {{ $content->content }}
                    </div>
                    <ul class="flex gap-4">
                        <li>
                            <form action="{{ route('admin.up', ['pos' => $content->pos]) }}" method="POST">
                                @csrf
                                @if ($loop->first)
                                <button class="block w-full h-full py-2 px-2 rounded mr-1">↑</button>
                                @else
                                <button type="submit"
                                    class="block w-full h-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded mr-1"
                                    data-id="{{ $content->pos }}">↑</button>
                                @endif
                            </form>
                        </li>
                        <li class="mr-16">
                            <form action="{{ route('admin.down', ['pos' => $content->pos]) }}" method="POST">
                                @csrf
                                @if ($loop->last)
                                    <button class="block w-full h-full py-2 px-2 rounded mr-1">↓</button>
                                @else
                                    <button type="submit"
                                        class="block w-full h-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded mr-1"
                                        data-id="{{ $content->pos }}">↓</button>
                                @endif
                            </form>
                        </li>
                        <li class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                            <a class="block w-full h-full py-3 px-8"
                                href="{{ route('admin.question', ['id' => $content->id]) }}">{{ __('設問一覧') }}</a>
                        </li>
                        <li class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                            <a class="block w-full h-full py-3 px-8"
                                href="{{ route('admin.edit', ['id' => $content->id]) }}">{{ __('編集') }}</a>
                        </li>
                        <li class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                            <form method="POST" action="{{ route('admin.destroy', ['id' => $content->id]) }}">
                                @csrf
                                <button class="block w-full h-full py-3 px-8"
                                    type="submit">{{ __('削除') }}</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 overflow-hidden sm:rounded-lg flex justify-center items-center">
            <button class="border border-solid border-purple-600 shadow-sm rounded-md bg-purple-600 text-white">
                <a class="block w-full h-full py-3 px-8" href="{{ route('admin.create') }}">{{ __('新規作成') }}</a>
            </button>
        </div>
    </div>
</x-app-layout>
