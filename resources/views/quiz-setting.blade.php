<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('QUIZ SETTING') }}
        </h2>
    </x-slot>

    <div class=" container mt-10 mx-auto py-8">
        @if (session('status'))
            <div class="alert alert-success  my-4">
                {{ session('status') }}
            </div>
        @endif


        <div class="card items-center text-center bg-base-200 p-5">
            <h2 class="card-title my-4 ">Add Quiz</h2>
            <form method="post" action="{{ url('/quiz/store-form') }}">
                @csrf
                <div class="form-group grid grid-cols-2 my-4">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="input  text-black" required="">
                </div>
                <div class="form-group grid grid-cols-2 my-4">
                    <label for="link">Link</label>
                    <input type="text" id="link" name="link" class="input  text-black" required="">
                </div>
                <div class="card-actions justify-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>

    </div>

</x-app-layout>
