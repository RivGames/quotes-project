@extends('layouts.app')

@section('main')
    <div class="flex items-center justify-center h-screen">
        <div
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $quote['name'] }}</h5>
            <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Author: {{ $quote->author->name }}</p>
            <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Category: {{ $quote->category->name }}</p>
            <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">
                @foreach($quote->tags as $tag)
                    <span class="bg-green-100 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900">
                        {{ $tag->name }}
                    </span>
                @endforeach
            </p>
            <a href="{{ route('quotes.random') }}">
                <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Next
                </button>
            </a>
        </div>
    </div>

@endsection
