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
                              <h4 class="card-title">فرم افقی</h4>
                          </div>
                          <div class="card-content">
                              <div class="card-body">
                                  <form class="form form-horizontal">
                                      <div class="form-body">
                                          <div class="row">
                                              <div class="col-md-4">
                                                  <label>نام</label>
                                              </div>
                                              <div class="col-md-8 form-group">
                                                  <input type="text" id="first-name" class="form-control" name="fname" placeholder="نام">
                                              </div>
                                              <div class="col-md-4">
                                                  <label>ایمیل</label>
                                              </div>
                                              <div class="col-md-8 form-group">
                                                  <input type="email" id="email-id" class="form-control" name="email-id" placeholder="ایمیل">
                                              </div>
                                              <div class="col-md-4">
                                                  <label>موبایل</label>
                                              </div>
                                              <div class="col-md-8 form-group">
                                                  <input type="number" id="contact-info" class="form-control" name="contact" placeholder="موبایل">
                                              </div>
                                              <div class="col-md-4">
                                                  <label>رمز عبور</label>
                                              </div>
                                              <div class="col-md-8 form-group">
                                                  <input type="password" id="password" class="form-control" name="password" placeholder="رمز عبور">
                                              </div>
                                              <div class="col-12 col-md-8 offset-md-4 form-group">
                                                  <fieldset>
                                                      <div class="checkbox">
                                                          <input type="checkbox" class="checkbox__input" id="checkbox1" checked="">
                                                          <label for="checkbox1">به خاطر سپاری</label>
                                                      </div>
                                                  </fieldset>
                                              </div>
                                              <div class="col-sm-12 d-flex justify-content-end">
                                                  <button type="submit" class="btn btn-primary mr-1 mb-1">ثبت</button>
                                                  <button type="reset" class="btn btn-light-secondary mr-1 mb-1">بازنشانی</button>
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
