@extends('layouts.app')
@section('title')
تعديل صفحة من نحن
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تعديل صفحة من نحن</h4>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">تعديل صفحة من نحن</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('about-us.update', $aboutUs->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <!-- Image Upload -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">صورة الصفحة</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @if($aboutUs->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($aboutUs->image) }}" alt="Current image" 
                                             style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                                        <br>
                                        <small class="text-muted">الصورة الحالية</small>
                                    </div>
                                @endif
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
                                    <option value="1" {{ $aboutUs->status ? 'selected' : '' }}>نشط</option>
                                    <option value="0" {{ !$aboutUs->status ? 'selected' : '' }}>غير نشط</option>
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
                                    placeholder="اكتب قصة الشركة هنا...">{{ $aboutUs->our_story_ar }}</textarea>
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
                                    placeholder="Write your story here...">{{ $aboutUs->our_story_en }}</textarea>
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
                                    placeholder="اكتب رؤية الشركة هنا...">{{ $aboutUs->our_vision_ar }}</textarea>
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
                                    placeholder="Write your vision here...">{{ $aboutUs->our_vision_en }}</textarea>
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
                                    placeholder="اكتب مهمة الشركة هنا...">{{ $aboutUs->our_mission_ar }}</textarea>
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
                                    placeholder="Write your mission here...">{{ $aboutUs->our_mission_en }}</textarea>
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
                                    placeholder="اكتب رسالة الشركة هنا...">{{ $aboutUs->our_message_ar }}</textarea>
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
                                    placeholder="Write your message here...">{{ $aboutUs->our_message_en }}</textarea>
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
                                    @if($aboutUs->our_values_ar && is_array($aboutUs->our_values_ar))
                                        @foreach($aboutUs->our_values_ar as $index => $value)
                                            <div class="values-input-group mb-2">
                                                <input type="text" name="our_values_ar[]" class="form-control mb-2" 
                                                    placeholder="اكتب قيمة هنا..." value="{{ $value }}">
                                                <button type="button" class="btn btn-sm btn-danger ml-2" onclick="this.parentElement.remove()">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="values-input-group mb-2">
                                            <input type="text" name="our_values_ar[]" class="form-control mb-2" 
                                                placeholder="اكتب قيمة هنا...">
                                        </div>
                                    @endif
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
                                    @if($aboutUs->our_values_en && is_array($aboutUs->our_values_en))
                                        @foreach($aboutUs->our_values_en as $index => $value)
                                            <div class="values-input-group mb-2">
                                                <input type="text" name="our_values_en[]" class="form-control mb-2" 
                                                    placeholder="Write a value here..." value="{{ $value }}">
                                                <button type="button" class="btn btn-sm btn-danger ml-2" onclick="this.parentElement.remove()">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="values-input-group mb-2">
                                            <input type="text" name="our_values_en[]" class="form-control mb-2" 
                                                placeholder="Write a value here...">
                                        </div>
                                    @endif
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
                            <i class="fas fa-save"></i> تحديث الصفحة
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
