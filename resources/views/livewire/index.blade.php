<div class="w-">
    <x-table.table>
        <x-table.thead>
            <x-table.table-head>
                Student Name
            </x-table.table-head>
            <x-table.table-head>
                Date of Birth
            </x-table.table-head>
            <x-table.table-head>
                Telephone 1
            </x-table.table-head>
            <x-table.table-head>
                Telephone 2
            </x-table.table-head>

        </x-table.thead>
        <x-table.tbody>
            @foreach ($students as $student)
            <x-table.table-row>
                <x-table.table-data responsiveName="Student Name">
                    {{ $student->student->name }}
                </x-table.table-data>
                <x-table.table-data responsiveName="Date of Birth">
                    {{ $student->student->dob }}
                </x-table.table-data>
                <x-table.table-data responsiveName="Telephone 1">
                    {{ $student->tel1 }}
                </x-table.table-data>
                <x-table.table-data responsiveName="Telephone 2">
                    {{ $student->tel2 }}
                </x-table.table-data>
            </x-table.table-row>
            @endforeach
        </x-table.tbody>
    </x-table.table>
</div>