<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kuisioner</title>
</head>

<body class="min-h-screen bg-gray-400">
    <!-- navbar -->
    <div class="navbar justify-between bg-white relative">
        <div>
            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-20">
        </div>
        <div class="navbar-center hidden lg:flex">
            <h1 class="text-[#133256] font-bold text-xl">Kuisioner UMKM</h1>
        </div>
        <div>
            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-20 invisible">
        </div>
    </div>
    <!-- navbar end -->
    <div class="flex flex-col gap-y-5 items-center p-5">
        <div class="w-fit bg-[#A0B9FF] p-3 rounded-xl">
            <ul class="steps">
                <li class="step step-primary text-gray-700 font-semibold">{{ $kuisioner[0] }}</li>
                <li class="step step-primary text-gray-700 font-semibold">{{ $kuisioner[1] }}</li>
                <li class="step step-primary text-gray-700 font-semibold">{{ $kuisioner[2] }}</li>
                <li class="step text-gray-700 font-semibold">{{ $kuisioner[3] }}</li>
            </ul>
        </div>
        <form action="{{ route('user.kuisionerSessionThreeStore') }}" method="post" class="bg-white rounded-xl p-5 w-1/2 mx-auto flex flex-col gap-y-5">
            @csrf
            @foreach($question as $key => $data)
            <div>
                <h1 class="text-gray-700 font-semibold">{{ $key+1 }}. {{ $data->question }}</h1>
                <div class="flex justify-between items-center mt-5 px-5">
                    <input type="radio" name="question-{{ $data->id }}"  value="1" {{ isset($answer["question-$data->id"]) && $answer["question-$data->id"] == 1 ? 'checked' : ''}} class="radio radio-primary" required />
                    <input type="radio" name="question-{{ $data->id }}"  value="2" {{ isset($answer["question-$data->id"]) && $answer["question-$data->id"] == 2 ? 'checked' : ''}} class="radio radio-primary" required />
                    <input type="radio" name="question-{{ $data->id }}"  value="3" {{ isset($answer["question-$data->id"]) && $answer["question-$data->id"] == 3 ? 'checked' : ''}} class="radio radio-primary" required />
                    <input type="radio" name="question-{{ $data->id }}"  value="4" {{ isset($answer["question-$data->id"]) && $answer["question-$data->id"] == 4 ? 'checked' : ''}} class="radio radio-primary" required />
                    <input type="radio" name="question-{{ $data->id }}"  value="5" {{ isset($answer["question-$data->id"]) && $answer["question-$data->id"] == 5 ? 'checked' : ''}} class="radio radio-primary" required />
                </div>
            </div>
            @endforeach
            <div class="flex justify-center gap-x-5">
                <a href="{{ route('user.kuisionerSessionTwo') }}" class="btn w-1/2 bg-white border-[#0F4B93] text-[#0F4B93]">Sebelumnya</a>
                <button type="submit" class="btn w-1/2 bg-[#0F4B93] text-white">Selanjutnya</button>
            </div>
        </form>
    </div>
</body>

</html>
