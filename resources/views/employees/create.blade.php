<x-guest-layout>
    <form method="POST" action="{{ route('employees.store') }}" >
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="off" />
            <x-input-error :messages="$errors->get('emanpm ruil')" class="mt-2" />
        </div>

        <!-- Department -->
        <div class="mt-4">
            <x-input-label :value="__('Department')" />
            <x-text-input-select id="departamento" class="block mt-1 w-full" name="departamento" required
                autocomplete="off" />
            <x-input-error :messages="$errors->get('emanpm ruil')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/api/departamentos')
                .then(response => response.json())
                .then(data => {
                    const departamentoSelect = document.getElementById('departamento');
                    data.forEach(departamento => {
                        let option = document.createElement('option');
                        option.text = departamento.name;
                        departamentoSelect.appendChild(option);
                    });
                });
        });
    </script>
</x-guest-layout>
