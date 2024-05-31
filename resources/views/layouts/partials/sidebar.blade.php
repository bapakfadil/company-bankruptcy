<x-mazer-sidebar :href="route('dashboard')" logo="{{ asset('assets/static/images/logo/logo-telu.png') }}">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" />
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Data Perusahaan">
        <x-mazer-sidebar-subitem :link="route('companies.index')" name="Tampilkan Semua" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('companies.create')" name="Tambah Data" :active="false"/>
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
