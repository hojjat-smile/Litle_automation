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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">آمار کل مشتریان</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>جنسیت</th>
                                            <th>تعداد</th>
                                            <th>درصد</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-bold-500">مرد</td>
                                            <td>1780 نفر</td>
                                            <td class="text-bold-500">73 درصد</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">زن</td>
                                            <td>630 نفر</td>
                                            <td class="text-bold-500">27 درصد</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">آمار نحوه آشنایی</h4>
                          </div>
                          <div class="card-content">
                              <div class="card-body">
                                  <!-- Table with outer spacing -->
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                          <tr>
                                              <th>نخوه آشنایی</th>
                                              <th>تعداد</th>
                                              <th>درصد</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                              <td class="text-bold-500">گوگل</td>
                                              <td>1780 نفر</td>
                                              <td class="text-bold-500">73 درصد</td>
                                          </tr>
                                          <tr>
                                              <td class="text-bold-500">تبلیغات</td>
                                              <td>630 نفر</td>
                                              <td class="text-bold-500">27 درصد</td>
                                          </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">آمار مشاغل</h4>
                          </div>
                          <div class="card-content">
                              <div class="card-body">
                                  <!-- Table with outer spacing -->
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                          <tr>
                                              <th>نمشاغل</th>
                                              <th>تعداد</th>
                                              <th>درصد</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                              <td class="text-bold-500">طراح وب</td>
                                              <td>1780 نفر</td>
                                              <td class="text-bold-500">73 درصد</td>
                                          </tr>
                                          <tr>
                                              <td class="text-bold-500">کارمند بانک</td>
                                              <td>630 نفر</td>
                                              <td class="text-bold-500">27 درصد</td>
                                          </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">آمار استان , شهر و موقعیت</h4>
                          </div>
                          <div class="card-content">
                              <div class="card-body">
                                  <!-- Table with outer spacing -->
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                          <tr>
                                              <th>موقعیت</th>
                                              <th>تعداد</th>
                                              <th>درصد</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                              <td class="text-bold-500">مشهد</td>
                                              <td>1780 نفر</td>
                                              <td class="text-bold-500">73 درصد</td>
                                          </tr>
                                          <tr>
                                              <td class="text-bold-500">رشت</td>
                                              <td>630 نفر</td>
                                              <td class="text-bold-500">27 درصد</td>
                                          </tr>
                                          </tbody>
                                      </table>
                                  </div>
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
