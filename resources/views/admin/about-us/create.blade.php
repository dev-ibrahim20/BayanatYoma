@extends('layouts.app')
@section('title')
إضافة صفحة من نحن
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">إضافة صفحة من نحن</h4>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">إضافة صفحة من نحن</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('about-us.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <!-- Image Upload -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">صورة الصفحة</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Status -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">الحالة</label>
                                <select name="status" class="form-control">
                                    <option value="1">نشط</option>
                                    <option value="0">غير نشط</option>
                                </select>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Arabic Story -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">قصتنا (عربي)</label>
                                <textarea name="our_story_ar" class="form-control" rows="4" 
                                    placeholder="اكتب قصة الشركة هنا...">{{ old('our_story_ar') }}</textarea>
                                @error('our_story_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- English Story -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">قصتنا (إنجليزي)</label>
                                <textarea name="our_story_en" class="form-control" rows="4" 
                                    placeholder="Write your story here...">{{ old('our_story_en') }}</textarea>
                                @error('our_story_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Arabic Vision -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">رؤيتنا (عربي)</label>
                                <textarea name="our_vision_ar" class="form-control" rows="4" 
                                    placeholder="اكتب رؤية الشركة هنا...">{{ old('our_vision_ar') }}</textarea>
                                @error('our_vision_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- English Vision -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">رؤيتنا (إنجليزي)</label>
                                <textarea name="our_vision_en" class="form-control" rows="4" 
                                    placeholder="Write your vision here...">{{ old('our_vision_en') }}</textarea>
                                @error('our_vision_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Arabic Mission -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">مهمتنا (عربي)</label>
                                <textarea name="our_mission_ar" class="form-control" rows="4" 
                                    placeholder="اكتب مهمة الشركة هنا...">{{ old('our_mission_ar') }}</textarea>
                                @error('our_mission_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- English Mission -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">مهمتنا (إنجليزي)</label>
                                <textarea name="our_mission_en" class="form-control" rows="4" 
                                    placeholder="Write your mission here...">{{ old('our_mission_en') }}</textarea>
                                @error('our_mission_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Arabic Message -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">رسالتنا (عربي)</label>
                                <textarea name="our_message_ar" class="form-control" rows="4" 
                                    placeholder="اكتب رسالة الشركة هنا...">{{ old('our_message_ar') }}</textarea>
                                @error('our_message_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- English Message -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">رسالتنا (إنجليزي)</label>
                                <textarea name="our_message_en" class="form-control" rows="4" 
                                    placeholder="Write your message here...">{{ old('our_message_en') }}</textarea>
                                @error('our_message_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Arabic Values -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">قيمنا (عربي)</label>
                                <div id="values_ar_container">
                                    <div class="values-input-group mb-2">
                                        <input type="text" name="our_values_ar[]" class="form-control mb-2" 
                                            placeholder="اكتب قيمة هنا..." value="{{ old('our_values_ar.0') ?? '' }}">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-primary" onclick="addValueAr()">
                                    <i class="fas fa-plus"></i> إضافة قيمة
                                </button>
                                @error('our_values_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- English Values -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">قيمنا (إنجليزي)</label>
                                <div id="values_en_container">
                                    <div class="values-input-group mb-2">
                                        <input type="text" name="our_values_en[]" class="form-control mb-2" 
                                            placeholder="Write a value here..." value="{{ old('our_values_en.0') ?? '' }}">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-primary" onclick="addValueEn()">
                                    <i class="fas fa-plus"></i> Add Value
                                </button>
                                @error('our_values_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> حفظ الصفحة
                        </button>
                        <a href="{{ route('about-us.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> رجوع
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
function addValueAr() {
    const container = document.getElementById('values_ar_container');
    const newInput = document.createElement('div');
    newInput.className = 'values-input-group mb-2';
    newInput.innerHTML = `
        <input type="text" name="our_values_ar[]" class="form-control mb-2" placeholder="اكتب قيمة هنا...">
        <button type="button" class="btn btn-sm btn-danger ml-2" onclick="this.parentElement.remove()">
            <i class="fas fa-trash"></i>
        </button>
    `;
    container.appendChild(newInput);
}

function addValueEn() {
    const container = document.getElementById('values_en_container');
    const newInput = document.createElement('div');
    newInput.className = 'values-input-group mb-2';
    newInput.innerHTML = `
        <input type="text" name="our_values_en[]" class="form-control mb-2" placeholder="Write a value here...">
        <button type="button" class="btn btn-sm btn-danger ml-2" onclick="this.parentElement.remove()">
            <i class="fas fa-trash"></i>
        </button>
    `;
    container.appendChild(newInput);
}
</script>
