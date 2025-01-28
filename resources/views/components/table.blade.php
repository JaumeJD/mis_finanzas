<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-800 dark:text-gray-300">
            <tr>
                @foreach ($heading as $title)
                    @if ($title != 'id')
                        <th scope="col" class="px-6 py-3">
                            {{$title}}
                        </th>  
                    @endif
                @endforeach                    
            </tr>
        </thead>
        <tbody>
        
        @foreach ($tableData as $row)
            
            <tr class="{{ $loop->even ? 'bg-gray-400 dark bg-gray600' : 'bg-gray-600 dark:bg-gray-700' }} border-b dark:border-gray-600">

            @foreach ($row as $key => $cell)
                @if ($key != 'id')
                    @if ($loop->first)
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                            {{$cell}}
                        </th>
                    @else
                        <td scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap text-white dark:text-white">
                            {{$cell}}
                        </td>
                    @endif
                @endif
            @endforeach
                
            </tr>
            
        @endforeach
        </tbody>
    </table>
</div>
