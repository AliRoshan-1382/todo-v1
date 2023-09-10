@if (!empty(session('success')))
    <div class="container mt-3">        
        <div class="toast show">
        <div class="toast-header">
        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}          
        </div>
        </div>
      </div>
@endif

@if (!empty(session('error')))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

@if (!empty(session('payment-error')))
    <div class="alert alert-error" role="alert">
        {{ session('payment-error') }}
    </div>
@endif

@if (!empty(session('warning')))
    <div class="alert alert-warning" role="alert">
        {{ session('warning') }}
    </div>
@endif

@if (!empty(session('info')))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
@endif

@if (!empty(session('secondary')))
    <div class="alert alert-secondary" role="alert">
        {{ session('secondary') }}
    </div>
@endif

@if (!empty(session('primary')))
    <div class="alert alert-primary" role="alert">
        {{ session('primary') }}
    </div>
@endif

@if (!empty(session('light')))
    <div class="alert alert-light" role="alert">
        {{ session('light') }}
    </div>
@endif