@extends('layout.admin')

@section('content')
<div style="display: flex; justify-content: space-between">
    <h2>Bài viết</h2>
   <a class="btn btn-violet" href="/admin/port/create">Thêm bài viết</a>
</div>

    <hr>
    <table id="datatable" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Hình ảnh đại diện</th>
                <th>Tiêu đề</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1?>
            @foreach ($list as $item)

                <tr>
                    <td>{{ $i++; }}</td>
                    <td><a ><img style="max-width: 100px;"
                        src="/storage/{{ $item->image }}" /></a></td>
                    <td>{{ $item->title }}</td>
                    <td>
                        @if ($item->status==1)
                        <span class="badge badge-success">Hiển thị</span>
                        @elseif($item->status==0)
                        <span class="badge badge-danger">Ẩn</span>
                        @else
                        <span class="badge badge-warning">Ưu tiên</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tùy chọn
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" onclick="location.href='/admin/port/{{$item->id}}'" type="button">Chỉnh sửa</button>
                              <button class="dropdown-item" onclick="location.href='/admin/port/hightlight/{{$item->id}}'" type="button">@if ($item->status==1)
                                  Ưu tiên
                                  @elseif($item->status==2)
                                  Bỏ ưu tiên
                              @endif</button>
                              @if (session('adminSession')[0]['role']===1)
                              <a class="dropdown-item" onclick="return confirm('Bạn chắc chắn muốn xóa bài viết này?')" href="/admin/port/{{$item->id}}/edit">Xóa</a>
                              @endif
                            </div>
                          </div>
                    </td>
                </tr>
            @endforeach


        </tbody>

    </table>
@endsection
