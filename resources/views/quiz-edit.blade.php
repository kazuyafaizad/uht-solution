<x-app-layout>
    <div class="h-[calc(100vh-7.5rem)]">
        <x-slot name="header">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('QUIZ SETTING') }}
            </h2>
        </x-slot>

        <div class=" container mt-10">
            @if (session('status'))
                <div class="alert alert-success my-4">
                    {{ session('status') }}
                </div>
            @endif


            <div class="card items-center text-center bg-base-200 p-5">
                <h2 class="card-title my-4 ">Add Quiz</h2>
                <form method="post" action="{{ url('/quiz/store-form') }}">
                    @csrf
                    <input type="hidden" name="id" value={{ $quiz->id }}>
                    <div class="form-group grid grid-cols-2 my-4">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="input text-black" required=""
                            value="{{ $quiz->title }}">
                    </div>
                    <div class="form-group grid grid-cols-2 my-4">
                        <label for="link">Link</label>
                        <input type="text" id="link" name="link" class="input text-black" required=""
                            value="{{ $quiz->link }}">
                    </div>
                    <div class="form-group grid grid-cols-2 my-4">
                        <label for="description">Description</label>
                        <textarea name="category" class="textarea text-black" required="">{{ $quiz->category }}</textarea>
                    </div>
                    <div class="card-actions justify-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
            <div class="overflow-x-auto">
                <table class="table mt-8 w-full">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizes as $quizs)
                            <tr>
                                <td>{{ $quizs->title }}</td>
                                <td>{{ $quizs->link }}</td>
                                <td>{{ $quizs->category }}</td>
                                <td>
                                    <a href="/quiz/setting/edit/{{ $quizs->id }}"
                                        class="btn btn-warning  my-4">Edit</a>
                                    <form method="POST" action="{{ url('/quiz/delete', $quizs->id) }}">
                                        @csrf

                                        <a onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                            class="btn btn-error">Delete
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    </div>


</x-app-layout>
