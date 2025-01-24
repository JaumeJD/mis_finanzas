<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-800 dark:text-gray-300">
            <tr>
                @foreach ($tableData['heading'] as $heading)
                <th scope="col" class="px-6 py-3">
                    {{$heading}}
                </th>  
                @endforeach
            </tr>
        </thead>
        <tbody>
        
        @foreach ($tableData['data'] as $row)
            <!-- @if ($loop->even)
                <tr class="bg-gray-400 border-b dark:bg-gray-600 dark:border-gray-600">
            @else
                <tr class="bg-gray-600 border-b dark:bg-gray-700 dark:border-gray-600">
            @endif -->
            
            <!--Arriba utiliza un condicional normal, abajo un condicional ternario-->
            
            <tr class="{{ $loop->even ? 'bg-gray-400 dark bg-gray600' : 'bg-gray-600 dark:bg-gray-700' }} border-b dark:border-gray-600">

            @foreach ($row as $cell)
                @if ($loop->first)
            
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                        {{$cell}}
                    </th>
            
                @else

                    <td scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap text-white dark:text-white">
                        {{$cell}}
                    </td>

                @endif
                @endforeach
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
