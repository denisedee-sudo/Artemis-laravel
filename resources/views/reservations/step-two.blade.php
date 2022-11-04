<x-guest-layout>
    <div class="container px-5 py-5 text-center">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <br><br>
                    <div class="my-3">
                        <img class="img-fluid col-6 rounded"
                            src="{{asset('images/calendar.png')}}" alt="img" />
                    </div>
                    <div class="flex">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Book an Appointment</h3>

                            <form method="POST" action="{{ route('reservations.store.step.two') }}">
                                @csrf
                                <div class="sm:col-span-6 pt-5">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Available doctors</label>
                                    <div class="mt-1">
                                        <select id="table_id" name="table_id"
                                            class="block border rounded py-2 px-3">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                    {{ $table->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('table_id')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-6 p-4 flex justify-between">
                                    <a href="{{ route('reservations.step.one') }}"
                                        class="btn btn-jindigo hover-maxy">Previous</a>
                                    <button type="submit"
                                        class="btn btn-jindigo hover-maxy">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
