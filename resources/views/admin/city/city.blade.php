@extends('admin.layout.layout')

@section('title')
    مدیریت مشتریان
@endsection

@section("css")

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendors/css/tables/datatable/datatables.min.css") }}">

    <style>
        div.dataTables_wrapper div.dataTables_filter{
            text-align: left;
        }
        table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc_disabled:before{
            right: 0.6rem;
        }
    </style>
@endsection

@section('main')

      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">لیست پیام ها</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>موقعیت</th>
                                            <th>دفتر</th>
                                            <th>سن</th>
                                            <th>تاریخ شروع</th>
                                            <th>حقوق</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>تونی استارک</td>
                                            <td>طراح سیستم</td>
                                            <td>تبریز</td>
                                            <td>61</td>
                                            <td>1391/04/25</td>
                                            <td>320,800</td>
                                        </tr>
                                        <tr>
                                            <td>استیو راجرز</td>
                                            <td>حسابدار</td>
                                            <td>تهران</td>
                                            <td>63</td>
                                            <td>1391/07/25</td>
                                            <td>170,750</td>
                                        </tr>
                                        <tr>
                                            <td>اولیور کویین</td>
                                            <td>تدوینگر تکنیکال</td>
                                            <td>اهواز</td>
                                            <td>66</td>
                                            <td>1389/01/12</td>
                                            <td>86,000</td>
                                        </tr>
                                        <tr>
                                            <td>بری آلن</td>
                                            <td>توسعه دهنده جاوا اسکریپت</td>
                                            <td>تبریز</td>
                                            <td>22</td>
                                            <td>1392/03/29</td>
                                            <td>433,060</td>
                                        </tr>
                                        <tr>
                                            <td>امیلیا کلارک</td>
                                            <td>حسابدار</td>
                                            <td>تهران</td>
                                            <td>33</td>
                                            <td>1398/11/28</td>
                                            <td>162,700</td>
                                        </tr>
                                        <tr>
                                            <td>کریستین رونالدو</td>
                                            <td>متخصص سیستم</td>
                                            <td>تبریز</td>
                                            <td>61</td>
                                            <td>1392/12/02</td>
                                            <td>372,000</td>
                                        </tr>
                                        <tr>
                                            <td>لیونل مسی</td>
                                            <td>دستیار فروش</td>
                                            <td>اهواز</td>
                                            <td>59</td>
                                            <td>1392/08/06</td>
                                            <td>137,500</td>
                                        </tr>
                                        <tr>
                                            <td>بروس وین</td>
                                            <td>متخصص سیستم</td>
                                            <td>تهران</td>
                                            <td>55</td>
                                            <td>1390/10/14</td>
                                            <td>327,900</td>
                                        </tr>
                                        <tr>
                                            <td>سیسکو رامون</td>
                                            <td>توسعه دهنده جاوا اسکریپت</td>
                                            <td>اهواز</td>
                                            <td>39</td>
                                            <td>1389/09/15</td>
                                            <td>205,500</td>
                                        </tr>
                                        <tr>
                                            <td>لورل لنس</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>تبریز</td>
                                            <td>23</td>
                                            <td>1398/12/13</td>
                                            <td>103,600</td>
                                        </tr>
                                        <tr>
                                            <td>روی هارپر</td>
                                            <td>مدیر شرکت</td>
                                            <td>همدان</td>
                                            <td>30</td>
                                            <td>1398/12/19</td>
                                            <td>90,560</td>
                                        </tr>
                                        <tr>
                                            <td>تونی استارک</td>
                                            <td>سرپرست پشتیبانی</td>
                                            <td>تبریز</td>
                                            <td>22</td>
                                            <td>1393/03/03</td>
                                            <td>342,000</td>
                                        </tr>
                                        <tr>
                                            <td>استیو راجرز</td>
                                            <td>طراح وب</td>
                                            <td>اهواز</td>
                                            <td>36</td>
                                            <td>1398/10/16</td>
                                            <td>470,600</td>
                                        </tr>
                                        <tr>
                                            <td>جسیکا آلبا</td>
                                            <td>طراح بازاریابی ارشد</td>
                                            <td>همدان</td>
                                            <td>43</td>
                                            <td>1392/12/18</td>
                                            <td>313,500</td>
                                        </tr>
                                        <tr>
                                            <td>امیلیا کلارک</td>
                                            <td>طراح وب</td>
                                            <td>همدان</td>
                                            <td>19</td>
                                            <td>1390/03/17</td>
                                            <td>385,750</td>
                                        </tr>
                                        <tr>
                                            <td>کریستوفر نولان</td>
                                            <td>طراح بازاریابی</td>
                                            <td>همدان</td>
                                            <td>66</td>
                                            <td>1392/11/27</td>
                                            <td>198,500</td>
                                        </tr>
                                        <tr>
                                            <td>فیل کولسن</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>تبریز</td>
                                            <td>64</td>
                                            <td>1390/06/09</td>
                                            <td>725,000</td>
                                        </tr>
                                        <tr>
                                            <td>گلوریا لیتل</td>
                                            <td>مدیر سیستم</td>
                                            <td>تبریز</td>
                                            <td>59</td>
                                            <td>1389/04/10</td>
                                            <td>237,500</td>
                                        </tr>
                                        <tr>
                                            <td>جیسون استاتهام</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>همدان</td>
                                            <td>41</td>
                                            <td>1392/10/13</td>
                                            <td>132,000</td>
                                        </tr>
                                        <tr>
                                            <td>برد پیت</td>
                                            <td>Personnel Lead</td>
                                            <td>تبریز</td>
                                            <td>35</td>
                                            <td>1392/09/26</td>
                                            <td>217,500</td>
                                        </tr>
                                        <tr>
                                            <td>لئوناردو دیکاپریو</td>
                                            <td>Development Lead</td>
                                            <td>تبریز</td>
                                            <td>30</td>
                                            <td>1391/09/03</td>
                                            <td>345,000</td>
                                        </tr>
                                        <tr>
                                            <td>سایمون کاول</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>تبریز</td>
                                            <td>40</td>
                                            <td>1389/06/25</td>
                                            <td>675,000</td>
                                        </tr>
                                        <tr>
                                            <td>کارا دنورز</td>
                                            <td>دستیار فروش</td>
                                            <td>تبریز</td>
                                            <td>46</td>
                                            <td>1391/12/06</td>
                                            <td>145,600</td>
                                        </tr>
                                        <tr>
                                            <td>بری الن</td>
                                            <td>طراح وب</td>
                                            <td>همدان</td>
                                            <td>47</td>
                                            <td>1391/03/21</td>
                                            <td>356,250</td>
                                        </tr>
                                        <tr>
                                            <td>لورل لنس</td>
                                            <td>مدیر سیستم</td>
                                            <td>همدان</td>
                                            <td>21</td>
                                            <td>1389/02/27</td>
                                            <td>103,500</td>
                                        </tr>
                                        <tr>
                                            <td>اولیور کوئین</td>
                                            <td>توسعه دهنده</td>
                                            <td>اهواز</td>
                                            <td>30</td>
                                            <td>1390/07/14</td>
                                            <td>86,500</td>
                                        </tr>
                                        <tr>
                                            <td>تامی مرلین</td>
                                            <td>طراح وب</td>
                                            <td>تبریز</td>
                                            <td>51</td>
                                            <td>1398/11/13</td>
                                            <td>183,000</td>
                                        </tr>
                                        <tr>
                                            <td>جان دیگل</td>
                                            <td>توسعه دهنده جاوا اسکریپت</td>
                                            <td>مشهد</td>
                                            <td>29</td>
                                            <td>1391/06/27</td>
                                            <td>183,000</td>
                                        </tr>
                                        <tr>
                                            <td>روی هارپر</td>
                                            <td>پشتیبان مشتری</td>
                                            <td>تبریز</td>
                                            <td>27</td>
                                            <td>1391/01/25</td>
                                            <td>112,000</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>نام</th>
                                            <th>موقعیت</th>
                                            <th>دفتر</th>
                                            <th>سن</th>
                                            <th>تاریخ شروع</th>
                                            <th>حقوق</th>
                                        </tr>
                                        </tfoot>
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

@section("script")

    <script src="{{ asset("assets/vendors/js/tables/datatable/datatables.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/buttons.print.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/buttons.bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/pdfmake.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/js/tables/datatable/vfs_fonts.js") }}"></script>

    <script src="{{ asset("assets/js/scripts/datatables/datatable.js") }}"></script>

@endsection
