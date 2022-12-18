<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informações do campeonato') }}
        </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $championship->name }}
            </h3>
            </div>
            <div class="card-body">
                {{ __('informações do campeonato'); }}
            </div>
            <div class="card-footer text-end">
                <button form="delete-camp" onclick="return confirm('Você tem certeza disso?');" type="submit" class="btn btn-danger">Deletar</button>
                  <form method="POST" class="form" id="delete-camp" action="{{ route('championship.destroy', $championship->id) }}">
                    @csrf
                    @method('DELETE')
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
