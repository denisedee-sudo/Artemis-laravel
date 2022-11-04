<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="m-5 p-3">
            <div class="text-jsan text-jindigo ">
                <a href="{{ route('admin.tables.create') }}"
                    class="hover-carmine text-jindigo">Add Doctor</a>
            </div>
            <table class="min-w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col"
                        class="py-4 px-2 text-jsan text-jindigo text-start">
                            Name
                        </th>
                        <th scope="col"
                        class="py-4 px-2 text-jsan text-jindigo text-start">
                            Status
                        </th>
                        <th scope="col" class="py-4 px-2 text-jsan text-jindigo text-start">
                           Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td
                                class="py-4 px-2 text-jsan text-jindigo text-center">
                                {{ $table->name }}
                            </td>
                            <td
                                class="py-4 px-2 text-jsan text-jindigo text-center">
                                {{ $table->status->name }}
                            </td>
                            <td class="py-4 px-2 text-jsan text-jindigo text-center">
                                    <a href="{{ route('admin.tables.edit', $table->id) }}"
                                        class="btn btn-jindigo hover-maxy text-bubbles">Edit</a>
                            </td>
                            <td class="py-4 px-2 text-jsan text-jindigo text-center">
                                    <form
                                        class=""
                                        method="POST"
                                        action="{{ route('admin.tables.destroy', $table->id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-jindigo hover-maxy" type="submit">Delete</button>
                                    </form>
                            </td>
                            {{-- <td class="py-4 px-2 text-jsan text-jindigo text-center">
                                <div class="">
                                    <a href="{{ route('admin.tables.edit', $table->id) }}"
                                        class="btn btn-jindigo hover-maxy text-bubbles">Edit</a>
                                    <form
                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                        method="POST"
                                        action="{{ route('admin.tables.destroy', $table->id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-jindigo hover-maxy" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td> --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>
    </div>
</x-admin-layout>
