@extends('admin.layout.masterLayout')
@section('css')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection
@section('js')
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
@endsection
@section('content')
<div class="main-content">
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            @include('admin.layout.profile-button')
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Table Default</h4>
                        <button type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> <span>Create</span></button>
                        <button type="button" class="btn btn-danger mb-3">Delete</button>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start Date</th>
                                        <th>salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>29</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>21</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>29</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>21</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table end -->
        </div>
    </div>
</div>
<!-- main content area end -->
<!-- footer area start-->
<footer>
    <div class="footer-area">
        <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
    </div>
</footer>
<!-- footer area end-->
</div>
<!-- page container area end -->
<!-- offset area start -->
<div class="offset-area">
<div class="offset-close"><i class="ti-close"></i></div>
<ul class="nav offset-menu-tab">
    <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
    <li><a data-toggle="tab" href="#settings">Settings</a></li>
</ul>
<div class="offset-content tab-content">
    <div id="activity" class="tab-pane fade in show active">
        <div class="recent-activity">
            <div class="timeline-task">
                <div class="icon bg1">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="tm-title">
                    <h4>Rashed sent you an email</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg2">
                    <i class="fa fa-check"></i>
                </div>
                <div class="tm-title">
                    <h4>Added</h4>
                    <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg2">
                    <i class="fa fa-exclamation-triangle"></i>
                </div>
                <div class="tm-title">
                    <h4>You missed you Password!</h4>
                    <span class="time"><i class="ti-time"></i>09:20 Am</span>
                </div>
            </div>
            <div class="timeline-task">
                <div class="icon bg3">
                    <i class="fa fa-bomb"></i>
                </div>
                <div class="tm-title">
                    <h4>Member waiting for you Attention</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg3">
                    <i class="ti-signal"></i>
                </div>
                <div class="tm-title">
                    <h4>You Added Kaji Patha few minutes ago</h4>
                    <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg1">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="tm-title">
                    <h4>Ratul Hamba sent you an email</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
                <p>Hello sir , where are you, i am egerly waiting for you.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg2">
                    <i class="fa fa-exclamation-triangle"></i>
                </div>
                <div class="tm-title">
                    <h4>Rashed sent you an email</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg2">
                    <i class="fa fa-exclamation-triangle"></i>
                </div>
                <div class="tm-title">
                    <h4>Rashed sent you an email</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
            </div>
            <div class="timeline-task">
                <div class="icon bg3">
                    <i class="fa fa-bomb"></i>
                </div>
                <div class="tm-title">
                    <h4>Rashed sent you an email</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                </p>
            </div>
            <div class="timeline-task">
                <div class="icon bg3">
                    <i class="ti-signal"></i>
                </div>
                <div class="tm-title">
                    <h4>Rashed sent you an email</h4>
                    <span class="time"><i class="ti-time"></i>09:35</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                </p>
            </div>
        </div>
    </div>
    <div id="settings" class="tab-pane fade">
        <div class="offset-settings">
            <h4>General Settings</h4>
            <div class="settings-list">
                <div class="s-settings">
                    <div class="s-sw-title">
                        <h5>Notifications</h5>
                        <div class="s-swtich">
                            <input type="checkbox" id="switch1" />
                            <label for="switch1">Toggle</label>
                        </div>
                    </div>
                    <p>Keep it 'On' When you want to get all the notification.</p>
                </div>
                <div class="s-settings">
                    <div class="s-sw-title">
                        <h5>Show recent activity</h5>
                        <div class="s-swtich">
                            <input type="checkbox" id="switch2" />
                            <label for="switch2">Toggle</label>
                        </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                </div>
                <div class="s-settings">
                    <div class="s-sw-title">
                        <h5>Show your emails</h5>
                        <div class="s-swtich">
                            <input type="checkbox" id="switch3" />
                            <label for="switch3">Toggle</label>
                        </div>
                    </div>
                    <p>Show email so that easily find you.</p>
                </div>
                <div class="s-settings">
                    <div class="s-sw-title">
                        <h5>Show Task statistics</h5>
                        <div class="s-swtich">
                            <input type="checkbox" id="switch4" />
                            <label for="switch4">Toggle</label>
                        </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                </div>
                <div class="s-settings">
                    <div class="s-sw-title">
                        <h5>Notifications</h5>
                        <div class="s-swtich">
                            <input type="checkbox" id="switch5" />
                            <label for="switch5">Toggle</label>
                        </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection