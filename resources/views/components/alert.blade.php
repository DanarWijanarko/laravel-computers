<div>
    <div id="my-alert" class="alert alert-{{ $type }}">
        <div class="ml-3 text-sm font-medium">
            {{ $message }}
        </div>
        <button type="button" class="alert-btn alert-btn-{{ $type }}" data-dismiss-target="#my-alert">
            <i class="fa-solid fa-xmark text-2xl"></i>
        </button>
    </div>
</div>
