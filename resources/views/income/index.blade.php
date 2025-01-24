<x-layouts.index :title="$title">

    <x-table :tableData='$tableData'/>

    <x-button type="submit" name="add" value="Añadir registro" 
    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full 
    text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"/>

    <x-button href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"/>

</x-layouts.index>