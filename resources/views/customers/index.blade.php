<x-layouts.app>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Customes') }}
                </h2>
            </div>



        </div>
        <div class="py-12">
            <x-alert-message />
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                        <div class="min-w-full align-middle">


                            <x-link-button
                                href="{{ route('customers.create') }}">{{ __('Add New Customer') }}</x-link-button>


                            <table class="min-w-full divide-y divide-gray-200 border mt-4">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-900 uppercase tracking-wider ">{{ __('N') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-900 uppercase tracking-wider">{{ __('Code') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">{{ __('Name') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">{{ __('Email') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">{{ __('Phone Number') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">

                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                    @foreach ($customers as $customer)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $customer->code }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $customer->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $customer->email }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $customer->phone_number }}
                                            </td>

                                            {{-- <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ str($customer->address)->limit(50) }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{-- {{ $task->user?->name }} --}}
                                            {{-- </td> --}}
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                <x-link-button
                                                    href="{{ route('customers.edit', $customer) }}">{{ __('Edit') }}</x-link-button>
                                                <form action="{{ route('customers.destroy', $customer) }}"
                                                    class="inline-block" method="POST"
                                                    onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-2">
                            {{ $customers->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- </x-slot> --}}
</x-layouts.app>
