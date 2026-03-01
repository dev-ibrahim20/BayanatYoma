@extends('layouts.app')
@section('title')
من نحن
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">من نحن</h4>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">صفحة من نحن</h4>
                @if(!$aboutUs)
                    <a href="{{ route('about-us.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> إضافة صفحة من نحن
                    </a>
                @endif
            </div>
            <div class="card-body">
                @if($aboutUs)
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">الصورة</th>
                                    <th class="border-bottom-0">قصتنا</th>
                                    <th class="border-bottom-0">رؤيتنا</th>
                                    <th class="border-bottom-0">مهمتنا</th>
                                    <th class="border-bottom-0">رسالتنا</th>
                                    <th class="border-bottom-0">قيمنا</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        @if($aboutUs->image)
                                            <img src="{{ asset($aboutUs->image) }}" alt="من نحن" 
                                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                                        @else
                                            <div class="bg-gray-200 d-flex align-items-center justify-content-center" 
                                                 style="width: 80px; height: 80px; border-radius: 8px;">
                                                <i class="fas fa-image text-gray-400"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="d-block text-truncate" style="max-width: 200px;" title="{{ $aboutUs->our_story_ar }}">
                                            {{ \Illuminate\Support\Str::limit($aboutUs->our_story_ar, 50) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-block text-truncate" style="max-width: 200px;" title="{{ $aboutUs->our_vision_ar }}">
                                            {{ \Illuminate\Support\Str::limit($aboutUs->our_vision_ar, 50) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-block text-truncate" style="max-width: 200px;" title="{{ $aboutUs->our_mission_ar }}">
                                            {{ \Illuminate\Support\Str::limit($aboutUs->our_mission_ar, 50) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-block text-truncate" style="max-width: 200px;" title="{{ $aboutUs->our_message_ar }}">
                                            {{ \Illuminate\Support\Str::limit($aboutUs->our_message_ar, 50) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($aboutUs->our_values_ar)
                                            @php
                                                $values = $aboutUs->our_values_ar;
                                                if(is_array($values)) {
                                                    echo implode(', ', array_slice($values, 0, 2));
                                                    if(count($values) > 2) echo '...';
                                                }
                                            @endphp
                                        @endif
                                    </td>
                                    <td>
                                        @if($aboutUs->status)
                                            <span class="badge badge-primary">نشط</span>
                                        @else
                                            <span class="badge badge-danger">غير نشط</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true"
                                                class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{ route('about-us.edit', $aboutUs->id) }}">
                                                    <i class="fas fa-edit text-primary"></i> تعديل الصفحة
                                                </a>

                                                <a class="dropdown-item" href="#" data-about_us_id="{{ $aboutUs->id }}"
                                                    data-toggle="modal" data-target="#deleteAboutUsModal">
                                                    <i class="fas fa-trash-alt text-danger"></i>&nbsp;&nbsp;حذف الصفحة
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle"></i>
                        لا توجد صفحة "من نحن" حالياً
                        <a href="{{ route('about-us.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> إضافة صفحة من نحن
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="deleteAboutUsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAboutUsModalLabel">تأكيد الحذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>هل أنت متأكد من حذف صفحة "من نحن"؟</p>
                <p class="text-muted">هذا الإجراء لا يمكن التراجع عنه.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <form action="{{ $aboutUs ? route('about-us.destroy', $aboutUs->id) : '#' }}" method="post" id="deleteAboutUsForm">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="about_us_id" id="about_us_id" value="">
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
let currentAboutUsId = null;

// Handle delete about us modal
$('#deleteAboutUsModal').on('show.bs.modal', function (e) {
    const aboutUsId = $(e.relatedTarget).data('about_us_id');
    currentAboutUsId = aboutUsId;
    $('#about_us_id').val(aboutUsId);
});

// Handle delete button click
$('[data-about_us_id]').click(function() {
    const aboutUsId = $(this).data('about_us_id');
    currentAboutUsId = aboutUsId;
    $('#about_us_id').val(aboutUsId);
});

function deleteAboutUs(aboutUsId) {
    currentAboutUsId = aboutUsId;
    $('#deleteAboutUsModal').modal('show');
}

function confirmDelete() {
    if (!currentAboutUsId) return;
    
    $.ajax({
        url: `/about-us/${currentAboutUsId}`,
        method: 'POST',
        data: {
            '_token': '{{ csrf_token() }}',
            '_method': 'DELETE'
        },
        success: function(response) {
            console.log('Delete successful:', response);
            
            // Close modal
            $('#deleteAboutUsModal').modal('hide');
            
            // Show success notification
            notif({
                msg: "تم حذف صفحة من نحن بنجاح",
                type: "success"
            });
            
            // Remove the deleted row from table
            const row = $(`tr:has([data-about_us_id="${currentAboutUsId}"])`);
            row.fadeOut(500, function() {
                $(this).remove();
                
                // Check if table is empty and show message
                const remainingRows = $('tbody tr').length;
                if (remainingRows === 0) {
                    $('.table-responsive').html(`
                        <div class="alert alert-info text-center">
                            <i class="fas fa-info-circle"></i>
                            لا توجد صفحة "من نحن" حالياً
                            <a href="{{ route('about-us.create') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> إضافة صفحة من نحن
                            </a>
                        </div>
                    `);
                }
            });
            
            // Reset currentAboutUsId
            currentAboutUsId = null;
            
            // Refresh page after successful deletion
            setTimeout(function() {
                location.reload();
            }, 1000);
        },
        error: function(xhr) {
            console.log('Delete error:', xhr);
            // Show error notification
            notif({
                msg: "حدث خطأ أثناء الحذف",
                type: "error"
            });
        }
    });
}

$(document).ready(function() {
    // Initialize tooltips and other components
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
