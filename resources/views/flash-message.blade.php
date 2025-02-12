@if ($message = Session::get('success'))
<div class="flex items-center justify-between p-4 mb-4 text-sm text-white bg-green-500 rounded-lg shadow-lg animate-fade-in">
    <strong>{{ $message }}</strong>
    <button type="button" class="text-white hover:text-gray-200 focus:outline-none" onclick="this.parentElement.style.display='none';">
        ✖
    </button>
</div>
@endif

@if ($message = Session::get('error'))
<div class="flex items-center justify-between p-4 mb-4 text-sm text-white bg-red-500 rounded-lg shadow-lg animate-fade-in">
    <strong>{{ $message }}</strong>
    <button type="button" class="text-white hover:text-gray-200 focus:outline-none" onclick="this.parentElement.style.display='none';">
        ✖
    </button>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="flex items-center justify-between p-4 mb-4 text-sm text-black bg-yellow-400 rounded-lg shadow-lg animate-fade-in">
    <strong>{{ $message }}</strong>
    <button type="button" class="text-black hover:text-gray-700 focus:outline-none" onclick="this.parentElement.style.display='none';">
        ✖
    </button>
</div>
@endif

@if ($message = Session::get('info'))
<div class="flex items-center justify-between p-4 mb-4 text-sm text-white bg-blue-500 rounded-lg shadow-lg animate-fade-in">
    <strong>{{ $message }}</strong>
    <button type="button" class="text-white hover:text-gray-200 focus:outline-none" onclick="this.parentElement.style.display='none';">
        ✖
    </button>
</div>
@endif

@if ($errors->any())
<div class="flex items-center justify-between p-4 mb-4 text-sm text-white bg-red-600 rounded-lg shadow-lg animate-fade-in">
    <span>Please check the form below for errors.</span>
    <button type="button" class="text-white hover:text-gray-200 focus:outline-none" onclick="this.parentElement.style.display='none';">
        ✖
    </button>
</div>
@endif

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
</style>