<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('QUIZ') }}
        </h2>
    </x-slot>
    @if (session('status'))
        <div class="alert alert-success  my-4">
            {{ session('status') }}
        </div>
    @endif
    <div class="flex flex-grow items-center justify-center h-full text-gray-600 bg-gray-100">

        <!-- Component Start -->
        <div class="max-w-full my-8 p-8 bg-white rounded-lg shadow-lg w-96">
            <div class="flex items-center mb-6 flex-col">
                <svg class="h-8 w-8 text-indigo-500 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <h4 class="font-semibold ml-3 text-lg">Educational Quiz & Assessment</h4>
                <p class="mb-6 text-center">Test your knowledge about ultrasound healthcare training solution with our
                    educational
                    quiz!</p>
            </div>
            @foreach ($quizes as $quiz)
                <div>
                    <p class="ml-4 text-sm truncate ">{{ $quiz->title }}</p>
                    <div class="flex mb-4">
                        <a href="{{ $quiz->link }}" class="btn btn-accent text-primary-content btn-block btn-sm "
                            target="_blank">Take
                            Quiz</a>
                        @if (auth()->user()->id === 1)
                            <form method="POST" action="{{ url('/quiz/delete', $quiz->id) }}">
                                @csrf

                                <a onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                    class="btn btn-error btn-xs ml-1">X
                                </a>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
            {{ $quizes->links() }}
            @if (auth()->user()->id === 1)
                <form method="post" action="{{ url('/quiz/store-form') }}">
                    @csrf
                    <div class="form-group grid grid-cols-1 my-4">

                        <input type="text" id="title" name="title" placeholder="title"
                            class="input input-accent text-black w-full input-sm" required="">
                    </div>
                    <div class="form-group grid grid-cols-1 my-4">

                        <input type="text" id="link" name="link"
                            placeholder="link (https://quizizz.com/embed/quiz/6455048ec3)"
                            class="input input-accent text-black w-full input-sm" required="">
                    </div>

                    <div class="card-actions justify-end">
                        <button type="submit" class="btn btn-primary btn-sm"><svg class="w-5 h-5 fill-current"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>Add Quiz link</button>
                    </div>
                </form>
            @endif

        </div>
        <!-- Component End  -->
    </div>
    <!-- Component End  -->


</x-app-layout>
