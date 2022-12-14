<x-guest-layout>
    <br><br>
    <div class="container text-center">
        <br><br>
        <div class="my-3">
            <img class="img-fluid col-6 rounded"
                src="{{asset('images/calendar.png')}}" alt="img" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h3 class="my-4 text-jindigo">Book an Appointment</h3>

                <form method="POST" action="{{ route('reservations.store.step.one') }}">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name
                        </label>
                        <div class="mt-1">
                            <input type="text" id="first_name" name="first_name"
                                value="{{ $reservation->first_name ?? '' }}"
                                class="block border rounded py-2 px-3" />
                        </div>
                        @error('first_name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name
                        </label>
                        <div class="mt-1">
                            <input type="text" id="last_name" name="last_name"
                                value="{{ $reservation->last_name ?? '' }}"
                                class="block border rounded py-2 px-3" />
                        </div>
                        @error('last_name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                        <div class="mt-1">
                            <input type="email" id="email" name="email"
                                value="{{ $reservation->email ?? '' }}"
                                class="block border rounded py-2 px-3" />
                        </div>
                        @error('email')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="tel_number" class="block text-sm font-medium text-gray-700"> Phone
                            number
                        </label>
                        <div class="mt-1">
                            <input type="number" placeholder="9xxxxxxxxx" min="9000000000" min="9999999999"   id="tel_number" name="tel_number"
                                value="{{ $reservation->tel_number ?? '' }}"
                                class="block border rounded py-2 px-3" />
                        </div>
                        @error('tel_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="res_date" class="m-1"> Appointment
                            Date
                        </label>
                        <div class="mt-1">
                            <input type="datetime-local" id="res_date" name="res_date"
                                min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                                class="block border rounded py-2 px-4" />
                        </div>
                        <span class="text-xs">Please choose a time between 08:00 -18:00.</span>
                        @error('res_date')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mt-6 p-4 flex justify-end">
                        <button type="submit" class="btn btn-jindigo hover-maxy">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
