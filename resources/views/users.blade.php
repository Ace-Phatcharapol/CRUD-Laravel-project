@extends('layouts.app')

@section('title', 'จัดการข้อมูลผู้ใช้')

@section('content')
<h2>จัดการข้อมูลผู้ใช้ : จำนวนสมาชิกทั้งหมดในระบบ {{$users->total()}}</h2><hr>
<table class="table table-bordered text-center align-middle">
    <thead>
      <tr>
        <th scope="col" class="col-1">ลำดับ</th>
        <th scope="col" class="col-4">ชื่อผู้ใช้</th>
        <th scope="col" class="col-4">อีเมล</th>
        <th scope="col" class="col-2">จัดการข้อมูลผู้ใช้</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $index => $user)
        @php
            $sequenceNumber = ($users->currentPage() - 1) * $users->perPage() + $index + 1;
        @endphp
        <tr>
            <th scope="row">{{ $sequenceNumber }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="#" class="btn btn-warning">แก้ไข</a>
                <a href="#" onclick="return confirm('คุณต้องการลบผู้ใช้นี้หรือไม่?')" class="btn btn-danger">ลบ</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $users->links() }}
@endsection
