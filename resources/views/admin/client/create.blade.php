@extends('layouts.app')
@section('title')
إضافة عميل جديد
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">العملاء</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    إضافة عميل جديد</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">إضافة عميل جديد</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">اسم العميل <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="link" class="form-label">رابط الموقع</label>
                                <input type="url" class="form-control" id="link" name="link" 
                                       value="{{ old('link') }}" placeholder="https://example.com">
                                @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-label">شعار العميل</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                <small class="form-text text-muted">ارفع صورة الشعار بصيغة PNG, JPG, أو JPEG</small>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label d-block mb-2">الحالة</label>
                                <label class="custom-switch">
                                    <input type="checkbox" name="status" value="1" 
                                           {{ old('status', true) ? 'checked' : '' }} id="statusToggle">
                                    <input type="hidden" name="status" value="0">
                                    <span class="custom-slider"></span>
                                </label>
                                <small class="form-text text-muted" id="statusText">
                                    {{ old('status', true) ? 'نشط' : 'غير نشط' }}
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> حفظ العميل
                                </button>
                                <a href="{{ route('client.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> رجوع
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.custom-switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.custom-switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.custom-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 34px;
}

.custom-slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .custom-slider {
    background-color: #007bff;
}

input:focus + .custom-slider {
    box-shadow: 0 0 1px #007bff;
}

input:checked + .custom-slider:before {
    transform: translateX(26px);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Status toggle functionality
    const statusToggle = document.getElementById('statusToggle');
    const statusText = document.getElementById('statusText');
    
    if (statusToggle && statusText) {
        function updateStatusText() {
            if (statusToggle.checked) {
                statusText.textContent = 'نشط';
                statusText.style.color = '#28a745';
            } else {
                statusText.textContent = 'غير نشط';
                statusText.style.color = '#6c757d';
            }
        }
        
        // Set initial state
        updateStatusText();
        
        // Update on change
        statusToggle.addEventListener('change', updateStatusText);
    }
    
    // Image preview functionality
    const imageInput = document.getElementById('image');
    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                console.log('Image selected:', file.name);
            }
        });
    }
});
</script>
@endpush
