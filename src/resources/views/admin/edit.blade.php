<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-Edit') }}
        </h2>
    </x-slot>


    <div class="flex justify-center items-center font-sans text-gray-900 antialiased">
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.update', ['id' => $content->id]) }}" method="POST">
                @csrf

                <!-- Content-->
                <div class="mb-6">
                    <x-input-label for="content" :value="__('問題タイトル')" />
                    <input type="text" id="content" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="content" value="{{ old('content', $content->content) }}" required autofocus>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="max-w-7xl mx-auto">
                    <div class="py-6 overflow-hidden sm:rounded-lg flex justify-between items-center gap-10">
                        <button class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md w-5/12">
                            <a href="{{ route('admin') }}">{{ __('問題一覧へ戻る') }}</a>
                        </button>
                        <button
                            class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md bg-purple-600 text-white w-5/12"
                            type="submit">
                            {{ __('更新する') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
