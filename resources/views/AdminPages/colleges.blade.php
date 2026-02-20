<x-app-layout>
    @php
    
        $colleges = \App\Models\College::all();
        // $colleges = Illuminate\Support\Facades\DB::table('colleges')->get();

        dd($colleges);
    @endphp
</x-app-layout>
