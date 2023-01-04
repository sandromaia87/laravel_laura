<x-app-layout>
    <x-slot name="header">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
              {{ __('Campeonato') }}
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $championship->name }}</h2>
          </div>
          <!-- Page title actions -->
          <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
              <form method="POST" class="form" action="{{ route('championship.edit', $championship->id) }}">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-outline-info btn-icon" id="{{ $championship->name.$championship->id }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                    <path d="M16 5l3 3"></path>
                  </svg>
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
              @include('championship.showpartials.info-championship')
            </div>
          </div>

          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
              @include('championship.showpartials.info-date-championship')
            </div>
          </div>
      </div>
</x-app-layout>