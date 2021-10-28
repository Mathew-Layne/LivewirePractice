<div>
    <select wire:model="select" class="px-8 py-3 border-2 border-black">
        @foreach ($students as $student)

        <option value="{{ $student->id }}">{{ $student->name }}</option>

        @endforeach
    </select>


    <div class="mt-4">
        @if ($select)
        <x-table.table>
            <x-table.thead>
                <x-table.table-head>
                    Telephone 1
                </x-table.table-head>
                <x-table.table-head>
                    Telephone 2
                </x-table.table-head>

            </x-table.thead>
            <x-table.tbody>

                <x-table.table-row>
                    <x-table.table-data responsiveName="Telephone 1">
                        {{ $phoneno->tel1 }}
                    </x-table.table-data>
                    <x-table.table-data responsiveName="Telephone 2">
                        {{ $phoneno->tel2 }}
                    </x-table.table-data>
                </x-table.table-row>

            </x-table.tbody>
        </x-table.table>
        @endif
    </div>
</div>