<template>
    <Head title="PendingTasks" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Pending Tasks</h1>

            <div class="bg-white py-6 mt-4">
                <h1 class="font-[semibold] text-xl p-3">Pending Assessments</h1>
                <div>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div
                                class="p-1.5 min-w-full inline-block align-middle"
                            >
                                <div class="overflow-hidden">
                                    <table
                                        class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-700"
                                    >
                                        <thead class="bg-neutral-900">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Task Type
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Student Name
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Department
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Due Date
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-center text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            confirm = !confirm
                                                        "
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            markCompleted =
                                                                !markCompleted
                                                        "
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            assessment =
                                                                !assessment
                                                        "
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            markCompleted =
                                                                !markCompleted
                                                        "
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white py-6 mt-6">
                <h1 class="font-[semibold] text-xl p-3">Pending Feedback</h1>
                <div>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div
                                class="p-1.5 min-w-full inline-block align-middle"
                            >
                                <div class="overflow-hidden">
                                    <table
                                        class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-700"
                                    >
                                        <thead class="bg-neutral-900">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Task Type
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Student Name
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Department
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Due Date
                                                </th>
                                                <th
                                                    class="px-6 py-3 text-center text-xs font-[semibold] text-black-200 uppercase"
                                                    scope="col"
                                                >
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    John Brown
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    CCN
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    10-mar-2024
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            feedback = !feedback
                                                        "
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            markCompleted =
                                                                !markCompleted
                                                        "
                                                    >
                                                        Mark Completed
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

    <div
        v-show="assessment"
        class="absolute w-svw h-full modal inset-0"
        @click="assessment = !assessment"
    >
        <FeedbackComponent
            task-type="Assessment"
            @close-modal="assessment = !assessment"
        />
    </div>
    <div
        v-show="feedback"
        class="absolute w-svw h-full modal inset-0"
        @click="feedback = !feedback"
    >
        <FeedbackComponent
            task-type="Feedback"
            @close-modal="feedback = !feedback"
        />
    </div>
    <div
        v-show="markCompleted"
        class="absolute w-svw h-full modal inset-0"
        @click="markCompleted = !markCompleted"
    >
        <MarkComplete @close-modal="markCompleted = !markCompleted" />
    </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import StatusComponent from "@/Components/StatusComponent.vue";
import { ref } from "vue";
import MarkAccessed from "@/Components/MarkAccessed.vue";
import FeedbackComponent from "@/Components/FeedbackComponent.vue";
import MarkComplete from "@/Components/MarkComplete.vue";

const assessment = ref(false);
const feedback = ref(false);

const markCompleted = ref(false);
const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/supervisor",
        icon: "LogoIcon",
    },
    {
        Name: "Allocated Students",
        routeName: "/supervisor/allocatedStudents",
        icon: "LogoIcon",
    },
    {
        Name: "Assessment Visit",
        routeName: "/supervisor/assessmentVisits",
        icon: "LogoIcon",
    },
    {
        Name: "Pending Tasks",
        routeName: "/supervisor/pendingTasks",
        icon: "LogoIcon",
    },
    {
        Name: "Logout",
        routeName: "/logout",
        icon: "LogoIcon",
    },
];
</script>

<style lang="scss" scoped></style>
