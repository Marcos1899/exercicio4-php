<div>
    <h1 class="text-2xl text-green-700 font-medium text-center">Formulário de Gestores</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">
        <label>
            <span class="text-gray-700">Nome</span>
            <x-admin.input type="text" wire:model.lazy="gestor.name"/>

            @error('gestor.name')
                <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">CPF</span>
            <x-admin.input type="text" wire:model.lazy="gestor.CPF"/>

            @error('gestor.CPF')
             <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror

        </label>

        <label>
            <span class="text-gray-700">Telefone</span>
            <x-admin.input type="text" wire:model.lazy="gestor.telephone"/>

            @error('gestor.telephone')
             <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror

        </label>

        <label>
            <span class="text-gray-700">E-mail</span>
            <x-admin.input type="text" wire:model.lazy="gestor.email"/>

            @error('gestor.email')
             <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror

        </label>

        <label>
            <span class="text-gray-700">Senha</span>
            <x-admin.input type="text" wire:model.lazy="gestor.password"/>

            @error('gestor.password')
             <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror

        </label>


        <div class="self-end">
            <x-admin.button-submit/>
        </div>

    </form>
</div>
