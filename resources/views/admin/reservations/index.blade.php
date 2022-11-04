<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="m-5 p-3">
            <div class="">
                <a href="{{ route('admin.reservations.create') }}"
                    class="hover-maxy text-bubbles text-jsan btn btn-jindigo">Add Appointment</a>
                
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bubbles align-items-center table-striped">
            
                    <thead class="bg-jindigo">
                        <tr>
                            <th scope="col"
                            class="py-4 px-2 mx-1 text-jsan text-bubbles text-center">
                                Name
                            </th>
                            <th scope="col"
                               class="py-4 px-2 mx-1 text-jsan text-bubbles text-center">
                                Email
                            </th>
                            <th scope="col"
                                class="py-4 px-2 mx-1 text-jsan text-bubbles text-center">
                                Date
                            </th>
                            <th scope="col"
                            class="py-4 px-2 mx-1 text-jsan text-bubbles text-center">
                                Doctor
                            </th>
                            <th scope="col" class="py-4 px-2 mx-1 text-jsan text-bubbles text-center">
                                Edit
                            </th>
                            <th scope="col" class="py-4 px-2 mx-1 text-jsan text-bubbles text-center">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td
                                    class="py-4 px-2 text-jsan text-jindigo text-center">
                                    {{ $reservation->first_name }} {{ $reservation->last_name }}
                                </td>
                                <td
                                    class="py-4 px-2 text-jsan text-jindigo text-center">
                                    {{ $reservation->email }}
                                </td>
                                <td
                                    class="py-4 px-2 text-jsan text-jindigo text-center">
                                    {{ $reservation->res_date }}
                                </td>
                                <td
                                    class="py-4 px-2 text-jsan text-jindigo text-center">
                                    {{ $reservation->table->name }}
                                </td>
                                <td class="py-4 px-2 text-jsan text-jindigo text-center">
                                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                            class="btn btn-jindigo text-bubbly hover-maxy">Edit</a>
                                </td>
                                <td class="py-4 px-2 text-jsan text-jindigo text-center">
                                    <form
                                            class=""
                                            method="POST"
                                            action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-jindigo text-bubbly hover-maxy" type="submit">Delete</button>
                                        </form>
                                </td>
                                {{-- <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                            class="btn btn-jindigo text-bubbly hover-maxy">Edit</a>
                                        <form
                                            class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                            method="POST"
                                            action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-jindigo text-bubbly hover-maxy" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
