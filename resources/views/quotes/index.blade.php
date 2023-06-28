@extends('layouts.app')

@section('main')
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="grid mb-5">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search-users" class="mb-2 block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for quotes">
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="table-auto">
                <thead class="text-xs text-gray-700 uppercase bg-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tag
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($quotes as $quote)
                    <tr class="bg-white border-b text-black hover:bg-gray-300">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap text-lg">
                            {{ $quote['name'] }}
                        </th>
                        <td class="px-6 py-4">
                             <span
                                 class="bg-yellow-100 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-600">
                                {{ $quote->author->name }}
                             </span>
                        </td>
                        <td class="px-6 py-4">
                             <span
                                 class="bg-blue-100 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-600">
                                    {{ $quote->category->name }}
                                </span>
                        </td>
                        <td class="px-6 py-4">
                            @foreach($quote->tags as $tag)
                                <span
                                    class="bg-green-100 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-600">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $quotes->links() }}
    </div>
@endsection
