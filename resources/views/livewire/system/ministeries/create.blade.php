<x-content-page>
    <x-slot name="session_title">Cadastrar</x-slot>

    <x-jet-form-section submit="create">
        <x-slot name="title">Ministérios</x-slot>
        <x-slot name="description">...</x-slot>
        <x-slot name="form">
            <x-input-text name='Iniciais'                id='initials'      col='2' />
            <x-input-text name='Nome do ministério'      id='ministery'     col='4' />
            <x-input-text name='Nome do responsável'     id='leader'                />
            <x-textarea   name='Descrição do ministério' id='description'           />
            <x-input-file name=''                        id='image'                 />
        </x-slot>
    </x-jet-form-section>
</x-content-page>
