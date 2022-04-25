@extends('admin.layout.layout')

@section('title')
    داشبورد مدیریت
@endsection

@section('main')

      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
              <div class="row">
                  <div class="col-md-12 col-12">
                      <div class="card" style="height: 401.734px;">
                          <div class="card-header">
                              <h4 class="card-title">افزودن شهر</h4>
                          </div>
                          <div class="card-content">
                              <div class="card-body">
                                  <form action="{{ route("admin.add_city_save") }}" method="post" class="form form-horizontal">
                                      <div class="form-body">
                                          <div class="row">
                                              <div class="col-md-1">
                                                  <label>عنوان شهر</label>
                                              </div>
                                              <div class="col-md-11 form-group">
                                                  <input type="text" class="form-control" name="title" placeholder="عنوان شهر">
                                              </div>
                                              <div class="col-md-1">
                                                  <label>استان</label>
                                              </div>
                                              <div class="col-md-11 form-group">
                                                  <select name="ostan_id"  class="form-control">
                                                      @foreach($ostan as $row)
                                                          <option value="{{ $row->id }}">{{ $row->title }}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                              <div class="col-sm-12 d-flex justify-content-end">
                                                  <button type="submit" class="btn btn-primary mr-1 mb-1">ثبت</button>
                                                  <a href="{{ route("admin.city") }}" class="btn btn-light-secondary mr-1 mb-1">بازنشانی</a>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </section>
        </div>
      </div>
    </div>
    <!-- END: Content-->

@endsection
