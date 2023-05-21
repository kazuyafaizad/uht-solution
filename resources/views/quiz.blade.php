<x-app-layout>
    <div class="h-[calc(100vh-7.5rem)]">
        <x-slot name="header">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('QUIZ') }}
            </h2>
        </x-slot>


        @if (auth()->user()->id === 1)
            <a href="/quiz/setting" class="btn btn-warning my-4">SETTING</a>
        @endif



        <div class="overflow-x-auto">
            <table class="table mt-8 w-full">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizes as $quiz)
                        <tr>
                            <td>{{ $quiz->title }}</td>
                            <td>{{ $quiz->category }}</td>

                            <td><a href="{{ $quiz->link }}" class="btn btn-secondary">Take Quiz</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <iframe
        src="https://docs.google.com/forms/d/e/1FAIpQLSeV6Ez6AQ6FtE7vmvuv0iSbykpXM-yTKsZJRrQ3uVx0iYsDQg/viewform?embedded=true"
        width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> --}}


</x-app-layout>
