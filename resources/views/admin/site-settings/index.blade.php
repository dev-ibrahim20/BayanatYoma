@extends('layouts.app')
@section('title')
إعدادات الموقع
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">إعدادات الموقع</h4>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">إعدادات الموقع</h4>
                <a href="{{ route('site-settings.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> إضافة إعدادات جديدة
                </a>
            </div>
            <div class="card-body">
                @if($settings)
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">اسم الموقع</th>
                                    <th class="border-bottom-0">رقم الهاتف</th>
                                    <th class="border-bottom-0">البريد الإلكتروني</th>
                                    <th class="border-bottom-0">العنوان</th>
                                    <th class="border-bottom-0">الوصف</th>
                                    <th class="border-bottom-0">رابط الموقع</th>
                                    <th class="border-bottom-0">عدد العملاء</th>
                                    <th class="border-bottom-0">عدد المشاريع</th>
                                    <th class="border-bottom-0">سنوات الخبرة</th>
                                    <th class="border-bottom-0">نسبة الرضا</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $settings->site_name_ar ?? '-' }}</td>
                                    <td>{{ $settings->phone ?? '-' }}</td>
                                    <td>{{ $settings->email ?? '-' }}</td>
                                    <td>{{ $settings->address_ar ?? '-' }}</td>
                                    <td>{{ $settings->description_ar ?? '-' }}</td>
                                    <td>{{ $settings->website_url ?? '-' }}</td>
                                    <td>{{ $settings->clients_count ?? '0' }}</td>
                                    <td>{{ $settings->projects_count ?? '0' }}</td>
                                    <td>{{ $settings->experience_years ?? '0' }}</td>
                                    <td>{{ $settings->satisfaction_rate ?? '0' }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true"
                                                class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{ route('site-settings.edit', $settings->id) }}">
                                                    <i class="fas fa-edit text-primary"></i> تعديل الإعدادات
                                                </a>

                                                <a class="dropdown-item" href="#" data-settings_id="{{ $settings->id }}"
                                                    data-toggle="modal" data-target="#deleteSettingModal">
                                                    <i class="fas fa-trash-alt text-danger"></i>&nbsp;&nbsp;حذف الإعدادات
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
                        لا توجد إعدادات حالياً
                        <a href="{{ route('site-settings.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> إضافة إعدادات جديدة
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteSettingModal" tabindex="-1" role="dialog" aria-labelledby="deleteSettingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSettingModalLabel">تأكيد الحذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>هل أنت متأكد من حذف هذه الإعدادات؟</p>
                <p class="text-muted">هذا الإجراء لا يمكن التراجع عنه.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <form action="{{ $settings ? route('site-settings.destroy', $settings->id) : '#' }}" method="post" id="deleteSettingForm">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="setting_id" id="setting_id" value="">
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
let currentSettingId = null;

// Handle delete setting modal
$('#deleteSettingModal').on('show.bs.modal', function (e) {
    const settingId = $(e.relatedTarget).data('settings_id');
    currentSettingId = settingId;
    $('#setting_id').val(settingId);
});

// Handle delete button click
$('[data-settings_id]').click(function() {
    const settingId = $(this).data('settings_id');
    currentSettingId = settingId;
    $('#setting_id').val(settingId);
});

function deleteSetting(settingId) {
    currentSettingId = settingId;
    $('#deleteSettingModal').modal('show');
}

function confirmDelete() {
    if (!currentSettingId) return;
    
    $.ajax({
        url: `/site-settings/${currentSettingId}`,
        method: 'POST',
        data: {
            '_token': '{{ csrf_token() }}',
            '_method': 'DELETE'
        },
        success: function(response) {
            console.log('Delete successful:', response);
            
            // Close modal
            $('#deleteSettingModal').modal('hide');
            
            // Show success notification
            notif({
                msg: "تم حذف الإعدادات بنجاح",
                type: "success"
            });
            
            // Remove the deleted row from table
            const row = $(`tr:has([data-settings_id="${currentSettingId}"])`);
            row.fadeOut(500, function() {
                $(this).remove();
                
                // Check if table is empty and show message
                const remainingRows = $('tbody tr').length;
                if (remainingRows === 0) {
                    $('.table-responsive').html(`
                        <div class="alert alert-info text-center">
                            <i class="fas fa-info-circle"></i>
                            لا توجد إعدادات حالياً
                            <a href="{{ route('site-settings.create') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> إضافة إعدادات جديدة
                            </a>
                        </div>
                    `);
                }
            });
            
            // Reset currentSettingId
            currentSettingId = null;
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
