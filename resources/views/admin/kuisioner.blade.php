<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <h1 class="text-3xl font-bold">Kuisioner</h1>
        <div class="text-sm breadcrumbs">
            <p><a href="{{ route('admin.dashboardAdmin') }}">Home</a> / <a
                    href="{{ route('admin.kuisioner') }}">Kuisioner</a></p>
        </div>
        <div class="flex flex-col gap-y-5">

            <div class="border-2 bg-white p-10 mt-5">
                <div class="flex gap-x-2 items-center mb-5">
                    <h1 class="text-2xl font-bold">{{ $kuisionerData['kuisioner1']->first()->questionType }}</h1>
                    <label for="edit_questionType1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </label>
                    <label for="add_{{ $kuisionerData['kuisioner1']->first()->questionType }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </label>

                    <!-- Add Question -->
                    <input type="checkbox" id="add_{{ $kuisionerData['kuisioner1']->first()->questionType }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Tambah Pertanyaan!</h3>
                            <form
                                action="{{ route('admin.kuisionerAdd', $kuisionerData['kuisioner1']->first()->questionType) }}"
                                method="post">
                                @csrf
                                <input type="text" placeholder="Type here" name="question"
                                    value="" required
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="add_{{ $kuisionerData['kuisioner1']->first()->questionType }}" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Edit Question Type -->
                    <input type="checkbox" id="edit_questionType1" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg mb-4">{{ $kuisionerData['kuisioner1']->first()->questionType }}
                            </h3>
                            <form
                                action="{{ route('admin.kuisionerTypeEdit', $kuisionerData['kuisioner1']->first()->questionType) }}"
                                method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="questionType"
                                    value="{{ $kuisionerData['kuisioner1']->first()->questionType }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_questionType1" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="pl-5">
                    @foreach($kuisionerData['kuisioner1'] as $key => $data)
                    <div class="flex justify-between items-center">
                        <p class="mb-4"><span class="font-bold">{{ $key+1 }}. </span> {{ $data->question }}?</p>
                        <div class="flex items-center gap-x-3">
                            <label for="edit_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </label>
                            <label for="delete_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </label>
                        </div>
                    </div>

                    <!-- Edit -->
                    <input type="checkbox" id="edit_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Edit Question</h3>
                            <form action="{{ route('admin.kuisionerEdit', $data->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="question" value="{{ $data->question }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button class="btn" type="submit">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete -->
                    <input type="checkbox" id="delete_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center">Delete Question</h3>
                            <form action="{{ route('admin.kuisionerDelete', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <p class="py-4">Are You Sure Want to Delete "{{ $data->question }}?"</p>
                                <div class="modal-action">
                                    <label for="delete_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button type="submit" class="btn btn-error text-white">Delete!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="border-2 bg-white p-10 mt-5">
                <div class="flex gap-x-2 items-center mb-5">
                    <h1 class="text-2xl font-bold">{{ $kuisionerData['kuisioner2']->first()->questionType }}</h1>
                    <label for="edit_questionType2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </label>
                    <label for="add_{{ $kuisionerData['kuisioner2']->first()->questionType }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </label>

                    <!-- Add Question -->
                    <input type="checkbox" id="add_{{ $kuisionerData['kuisioner2']->first()->questionType }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Tambah Pertanyaan!</h3>
                            <form
                                action="{{ route('admin.kuisionerAdd', $kuisionerData['kuisioner2']->first()->questionType) }}"
                                method="post">
                                @csrf
                                <input type="text" placeholder="Type here" name="question"
                                    value="" required
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="add_{{ $kuisionerData['kuisioner2']->first()->questionType }}" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Edit Question Type -->
                    <input type="checkbox" id="edit_questionType2" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg mb-4">{{ $kuisionerData['kuisioner2']->first()->questionType }}
                            </h3>
                            <form
                                action="{{ route('admin.kuisionerTypeEdit', $kuisionerData['kuisioner2']->first()->questionType) }}"
                                method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="questionType"
                                    value="{{ $kuisionerData['kuisioner2']->first()->questionType }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_questionType2" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pl-5">
                    @foreach($kuisionerData['kuisioner2'] as $key => $data)
                    <div class="flex justify-between items-center">
                        <p class="mb-4"><span class="font-bold">{{ $key+1 }}. </span> {{ $data->question }}?</p>
                        <div class="flex items-center gap-x-3">
                            <label for="edit_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </label>
                            <label for="delete_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </label>
                        </div>
                    </div>

                    <!-- Edit -->
                    <input type="checkbox" id="edit_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Edit Question</h3>
                            <form action="{{ route('admin.kuisionerEdit', $data->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="question" value="{{ $data->question }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button class="btn" type="submit">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete -->
                    <input type="checkbox" id="delete_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center">Delete Question</h3>
                            <form action="{{ route('admin.kuisionerDelete', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <p class="py-4">Are You Sure Want to Delete "{{ $data->question }}?"</p>
                                <div class="modal-action">
                                    <label for="delete_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button type="submit" class="btn btn-error text-white">Delete!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="border-2 bg-white p-10 mt-5">
                <div class="flex gap-x-2 items-center mb-5">
                    <h1 class="text-2xl font-bold">{{ $kuisionerData['kuisioner3']->first()->questionType }}</h1>
                    <label for="edit_questionType3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </label>
                    <label for="add_{{ $kuisionerData['kuisioner3']->first()->questionType }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </label>

                    <!-- Add Question -->
                    <input type="checkbox" id="add_{{ $kuisionerData['kuisioner3']->first()->questionType }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Tambah Pertanyaan!</h3>
                            <form
                                action="{{ route('admin.kuisionerAdd', $kuisionerData['kuisioner3']->first()->questionType) }}"
                                method="post">
                                @csrf
                                <input type="text" placeholder="Type here" name="question"
                                    value="" required
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="add_{{ $kuisionerData['kuisioner3']->first()->questionType }}" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Edit Question Type -->
                    <input type="checkbox" id="edit_questionType3" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white mb-4">
                            <h3 class="font-bold text-lg">{{ $kuisionerData['kuisioner3']->first()->questionType }}
                            </h3>
                            <form
                                action="{{ route('admin.kuisionerTypeEdit', $kuisionerData['kuisioner3']->first()->questionType) }}"
                                method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="questionType"
                                    value="{{ $kuisionerData['kuisioner3']->first()->questionType }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_questionType3" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pl-5">
                    @foreach($kuisionerData['kuisioner3'] as $key => $data)
                    <div class="flex justify-between items-center">
                        <p class="mb-4"><span class="font-bold">{{ $key+1 }}. </span> {{ $data->question }}?</p>
                        <div class="flex items-center gap-x-3">
                            <label for="edit_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </label>
                            <label for="delete_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </label>
                        </div>
                    </div>

                    <!-- Edit -->
                    <input type="checkbox" id="edit_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Edit Question</h3>
                            <form action="{{ route('admin.kuisionerEdit', $data->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="question" value="{{ $data->question }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button class="btn" type="submit">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete -->
                    <input type="checkbox" id="delete_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center">Delete Question</h3>
                            <form action="{{ route('admin.kuisionerDelete', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <p class="py-4">Are You Sure Want to Delete "{{ $data->question }}?"</p>
                                <div class="modal-action">
                                    <label for="delete_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button type="submit" class="btn btn-error text-white">Delete!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="border-2 bg-white p-10 mt-5">
                <div class="flex gap-x-2 items-center mb-5">
                    <h1 class="text-2xl font-bold">{{ $kuisionerData['kuisioner4']->first()->questionType }}</h1>
                    <label for="edit_questionType4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </label>
                    <label for="add_{{ $kuisionerData['kuisioner4']->first()->questionType }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </label>

                    <!-- Add Question -->
                    <input type="checkbox" id="add_{{ $kuisionerData['kuisioner4']->first()->questionType }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Tambah Pertanyaan!</h3>
                            <form
                                action="{{ route('admin.kuisionerAdd', $kuisionerData['kuisioner4']->first()->questionType) }}"
                                method="post">
                                @csrf
                                <input type="text" placeholder="Type here" name="question"
                                    value="" required
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="add_{{ $kuisionerData['kuisioner4']->first()->questionType }}" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Edit Question Type -->
                    <input type="checkbox" id="edit_questionType4" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white mb-4">
                            <h3 class="font-bold text-lg">{{ $kuisionerData['kuisioner4']->first()->questionType }}
                            </h3>
                            <form
                                action="{{ route('admin.kuisionerTypeEdit', $kuisionerData['kuisioner4']->first()->questionType) }}"
                                method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="questionType"
                                    value="{{ $kuisionerData['kuisioner4']->first()->questionType }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_questionType4" class="btn">Close!</label>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pl-5">
                    @foreach($kuisionerData['kuisioner4'] as $key => $data)
                    <div class="flex justify-between items-center">
                        <p class="mb-4"><span class="font-bold">{{ $key+1 }}. </span> {{ $data->question }}?</p>
                        <div class="flex items-center gap-x-3">
                            <label for="edit_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </label>
                            <label for="delete_modal{{ $data->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </label>
                        </div>
                    </div>

                    <!-- Edit -->
                    <input type="checkbox" id="edit_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center mb-4">Edit Question</h3>
                            <form action="{{ route('admin.kuisionerEdit', $data->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="text" placeholder="Type here" name="question" value="{{ $data->question }}"
                                    class="input input-bordered w-full bg-white" />
                                <div class="modal-action">
                                    <label for="edit_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button class="btn" type="submit">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete -->
                    <input type="checkbox" id="delete_modal{{ $data->id }}" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white">
                            <h3 class="font-bold text-lg text-center">Delete Question</h3>
                            <form action="{{ route('admin.kuisionerDelete', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <p class="py-4">Are You Sure Want to Delete "{{ $data->question }}?"</p>
                                <div class="modal-action">
                                    <label for="delete_modal{{ $data->id }}" class="btn">Close!</label>
                                    <button type="submit" class="btn btn-error text-white">Delete!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
