@if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"
            style="position: absolute; top: 0; right: 0; z-index: 2; padding: 1.25rem 1rem;">
            <span class="fa fa-window-close fa-2x" style="color: rgb(48, 9, 56);"></span>
        </button>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible archware-alert fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"
            style="position: absolute; top: 0; right: 0; z-index: 2; padding: 1.25rem 1rem;">
            <span class="fa fa-window-close fa-2x" style="color: rgb(48, 9, 56);"></span>
        </button>
    </div>
@endif
