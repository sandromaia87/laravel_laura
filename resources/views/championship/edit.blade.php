<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Campeonatos') }}
        </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <form class="card" action="{{ route('championship.update',$championship) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h3 class="card-title">{{ $championship->name }}
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label required">Nome</label>
                <div>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $championship->name }}">
                  <small class="form-hint">Este nome estará visível para os participantes</small>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <div>
                  <input type="text" class="form-control" id="email" name="email" value="{{ $championship->email }}">
                  <small class="form-hint">Será usado como contato extra no seu campeonato</small>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="pointer-events-auto rounded-md bg-indigo-600 py-2 px-3 text-[0.8125rem] font-semibold leading-5 text-white hover:bg-indigo-500">Editar</button>
            </div>
          </form>

        </div>
      </div>
    </div>
</x-app-layout>