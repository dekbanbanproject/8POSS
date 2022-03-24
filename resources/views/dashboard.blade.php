@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header text-center">
                    <p>
                        <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                          MENU
                        </button>
                      </p>
                </div>

                <div class="card-body shadow-lg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="min-height: 360px;">
                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                          <div class="card-body" style="width: 200px;">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="{{ route('mange') }}" class="btn btn-outline-warning" style="width: 90px;">ผู้จัดการ</a>                                    
                                  <span class="badge bg-warning rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="" class="btn btn-outline-primary" style="width: 90px;">พนักงาน</a>                                  
                                  <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="" class="btn btn-outline-danger" style="width: 90px;">สมาชิก</a>                                  
                                  <span class="badge bg-danger rounded-pill">1</span>
                                </li>
                              </ul>                           
                          </div>
                        </div>
                      </div>                  
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">                                      
                    <p>
                        <button class="btn btn-light" type="button" >
                          ADD DATA
                        </button>
                      </p>
                </div>

                <div class="card-body shadow-lg">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="store_name" id="store_name" placeholder="ชื่อผู้จัดการ">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="store_tel" id="store_tel" placeholder="เบอร์โทร">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="store_tel" id="exampleFormControlInput3" placeholder="ชื่อร้าน/สาขา">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="store_username" id="store_username" placeholder="ชื่อเข้าใช้งาน">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="store_password" id="store_password" placeholder="รหัสผ่าน">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="store_email" id="store_email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="1">POS ระบบขายหน้าร้าน</option>
                        <option value="2">POS ระบบร้านกาแฟ</option>
                        <option value="3">POS ระบบอพาทเม้นท์</option>
                      </select>
                    </div>                    
                </div>
                <div class="card-footer">
                  <a href="" class="btn btn-outline-success col-md-5 offset-md-3">เพิ่มผู้จัดการ</a>    
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">                                      
                    <p>
                        <button class="btn btn-light" type="button" >
                          Details
                        </button>
                      </p>
                </div>

                <div class="card-body shadow-lg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
