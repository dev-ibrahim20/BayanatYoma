@extends('layouts.app')
@section('title')
تعديل العمل
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الأعمال</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل العمل</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">تعديل العمل</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('our-work.update', $ourWork->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-label">العنوان باللغة العربية <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title_ar" 
                                       value="{{ old('title_ar', $ourWork->title_ar) }}" required>
                                @error('title_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-label">Title English <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title_en" 
                                       value="{{ old('title_en', $ourWork->title_en) }}" required>
                                @error('title_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="service_id" class="form-label">الخدمة <span class="text-danger">*</span></label>
                                <select class="form-control" id="service_id" name="service_id" required>
                                    <option value="">اختر الخدمة</option>
                                    @foreach(\App\Models\Service::where('status', 1)->get() as $service)
                                        <option value="{{ $service->id }}" {{ old('service_id', $ourWork->service_id) == $service->id ? 'selected' : '' }}>
                                            {{ $service->title_ar }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="client_name" class="form-label">اسم العميل</label>
                                <input type="text" class="form-control" id="client_name" name="client_name" 
                                       value="{{ old('client_name', $ourWork->client_name) }}">
                                @error('client_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="project_date" class="form-label">تاريخ المشروع</label>
                                <input type="date" class="form-control" id="project_date" name="project_date" 
                                       value="{{ old('project_date', $ourWork->project_date) }}">
                                @error('project_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label d-block mb-2">الحالة</label>
                                <label class="custom-switch">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="checkbox" name="is_active" value="1" 
                                           {{ old('is_active', $ourWork->is_active) ? 'checked' : '' }} id="statusToggle">
                                    <span class="custom-slider"></span>
                                </label>
                                <small class="form-text text-muted" id="statusText">
                                    {{ old('is_active', $ourWork->is_active) ? 'نشط' : 'غير نشط' }}
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-label">الصورة الحالية</label>
                                @if($ourWork->image)
                                    <div class="current-image mb-2">
                                        <img src="{{ asset( $ourWork->image) }}" 
                                             alt="Current Image" 
                                             style="max-width: 200px; max-height: 150px; border-radius: 8px; border: 1px solid #ddd;">
                                    </div>
                                @else
                                    <p class="text-muted">لا توجد صورة حالية</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-label">تغيير الصورة</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                <small class="form-text text-muted">اترك فارغاً للحفاظ على الصورة الحالية</small>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> حفظ التعديلات
                                </button>
                                <a href="{{ route('our-work.index') }}" class="btn btn-secondary">
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

.current-image img {
    transition: all 0.3s ease;
}

.current-image img:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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
                const reader = new FileReader();
                reader.onload = function(e) {
                    // You could add a preview here if needed
                    console.log('Image selected:', file.name);
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>
@endpush
