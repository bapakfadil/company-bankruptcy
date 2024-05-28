<x-mazer-sidebar :href="route('dashboard')" logo="{{ asset('assets/static/images/logo/logo-telu.png') }}">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" />
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Companies Data">
        <x-mazer-sidebar-subitem :link="route('companies.index')" name="Show All" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('companies.create')" name="Add Data" :active="false"/>
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
