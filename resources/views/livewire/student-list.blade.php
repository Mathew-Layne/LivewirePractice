<div>
    <x-button wire:click="$set('addAStudent', true)" color="gray" class="mb-2">Add Student</x-button>
    <x-table.table>
        <x-table.thead>
            <x-table.table-head>
                Student Name
            </x-table.table-head>
            <x-table.table-head>
                Date of Birth
            </x-table.table-head>
            <x-table.table-head>
                Action
            </x-table.table-head>
        </x-table.thead>
        <x-table.tbody>
            @foreach ($students as $student)
            <x-table.table-row>
                <x-table.table-data responsiveName="Student Name">
                    {{ $student->name }}
                </x-table.table-data>
                <x-table.table-data responsiveName="Date of Birth">
                    {{ $student->dob }}
                </x-table.table-data>
                <x-table.table-data responsiveName="Action">
                    <x-button wire:click="editStudent({{ $student->id }})" color="green">Edit</x-button>
                </x-table.table-data>
            </x-table.table-row>
            @endforeach


        </x-table.tbody>
    </x-table.table>

    @if($addAStudent)

    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Add Students Here
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form Wire:submit="addstudent()">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Add Student
                        </h6>
                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Student Name
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        wire:model="name">
                                </div>
                            </div>

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Date of Birth
                                    </label>
                                    <input type="date"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        wire:model="dob">
                                </div>
                            </div>                            

                            <div class="ml-3 mt-3">
                                <x-button color="gray" class="mb-2">Add</x-button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

@elseif($editStudent)

<section class=" py-1 bg-blueGray-50">
    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Edit Student Here
                    </h6>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                <form Wire:submit="studentEdited()">

                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Edit Student
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlfor="grid-password">
                                    Student Name
                                </label>
                                <input type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    wire:model="name">
                            </div>
                        </div>

                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlfor="grid-password">
                                    Date of Birth
                                </label>
                                <input type="date"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    wire:model="dob">
                            </div>
                        </div>

                        <div class="ml-3 mt-3">
                            <x-button color="gray" class="mb-2">Update</x-button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endif

</div>