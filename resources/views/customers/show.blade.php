<x-layouts.app>
    <x-slot name="header">
        <div class="flex justify-between">




        </div>
        <div class="py-12">
            <x-alert-message />
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center ">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('File N') }}<sup>o</sup> {{ ' ' . $customer->code }}
                        </h2>
                    </div>
                    <div>
                        <div class="inline-flex gap-x-2">
                            <x-link-button
                                href="{{ route('customers.create') }}">{{ __('Edit Customer') }}</x-link-button>
                            <x-link-button
                                href="{{ route('customers.create') }}">{{ __('Delete Customer') }}</x-link-button>
                        </div>
                    </div>
                </div>
                <div class="bg-white  border overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="mt-auto flex border-b border-gray-200  dark:border-neutral-700 dark:divide-neutral-700">
                        <span
                            class="w-full py-3 px-4  gap-x-2 text-md font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs   dark:bg-neutral-900 dark:border-neutral-700 dark:text-white ">
                            Personal Information
                        </span>

                    </div>
                    <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                        <div class="min-w-full align-middle">


                            <div class="grid gap-4">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Type:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->type }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Name:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->name }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Email:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->email }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Phone Number:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->phone_number }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Industry:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->industry }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Address:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->address }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <dl class="flex flex-col sm:flex-row gap-1">
                                    <dt class="min-w-40">
                                        <span class="block text-md text-gray-500 dark:text-neutral-500">
                                            Desciption:</span>
                                    </dt>
                                    <dd>

                                        <span class="block text-md text-gray-500 dark:text-neutral-900">
                                            {{ $customer->description }}
                                        </span>
                                    </dd>
                                </dl>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="bg-white  border overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="mt-auto flex border-b border-gray-200  dark:border-neutral-700 dark:divide-neutral-700">
                        <span
                            class="w-full py-3 px-4  gap-x-2 text-md font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs   dark:bg-neutral-900 dark:border-neutral-700 dark:text-white ">
                            Lead and Stage Information
                        </span>

                    </div>
                    <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                        <div class="min-w-full align-middle">


                            <div class="grid gap-4">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Lead By:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->leadBy?->name }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Lead Source:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->leadSource?->name }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div>
                                        <dl class="flex flex-col sm:flex-row gap-1">
                                            <dt class="min-w-40">
                                                <span class="block text-md text-gray-500 dark:text-neutral-500">
                                                    Pipeline stage:</span>
                                            </dt>
                                            <dd>

                                                <span class="block text-md text-gray-500 dark:text-neutral-900">
                                                    {{ $customer->pipelineStage?->name }}
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white  border overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="mt-auto flex border-b border-gray-200  dark:border-neutral-700 dark:divide-neutral-700">
                        <span
                            class="w-full py-3 px-4  gap-x-2 text-md font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs   dark:bg-neutral-900 dark:border-neutral-700 dark:text-white ">
                            Pipeline Stage History and Notes
                        </span>

                    </div>
                    <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                        <div class="min-w-full align-middle">


                            <table class="min-w-full divide-y divide-gray-200 border mt-4">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-900 uppercase tracking-wider ">{{ __('N') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-900 uppercase tracking-wider">{{ __('System') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">{{ __('Pipeline Stage') }}</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span
                                                class="text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">{{ __('Note') }}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 divide-solid">



                                    @forelse ($customer->pipelineStageLogs as $pipelineStageLog)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $pipelineStageLog->created_at }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $customer->pipelineStage->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $customer->notes }}
                                            </td>

                                        </tr>

                                    @empty
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900"
                                                colspan='7'>
                                                <span>NO DATA</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- </x-slot> --}}
</x-layouts.app>
