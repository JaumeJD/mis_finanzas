<x-layouts.index :title="$title">
    
    <x-navigation-menu/>

    <x-table :heading='$heading' :tableData='$tableData'/>

    <div class="mt-4">
        <x-button href="#">Add {{$title}}</x-button>
    </div>

</x-layouts.index>