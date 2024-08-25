<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <link rel="shortcut icon" href="/demo7/images/favicon.png" />
    <title>Dashboard - Pharmacy Manegment | DashLite Admin Template</title>
  
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        } n
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>

</head>

<body class="nk-body ui-rounder npc-default has-sidebar no-touch nk-nio-theme as-mobile">
    <br><br>
    <div class="nk-app-root">
        <div class="nk-sidebar nk-sidebar-mobile" data-content="sidebarMenu">
            <div class="nk-sidebar-bar">
                <div class="nk-apps-brand"><a href="/demo7/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="../images/logo-small.png"
                            srcset="/demo7/images/logo-small2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="/demo7/images/logo-dark-small.png"
                            srcset="/demo7/images/logo-dark-small2x.png 2x"
                            alt="logo-dark"></a>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body">
                        <div class="nk-sidebar-content" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: 100%; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <div class="nk-sidebar-menu">
                                                    <ul class="nk-menu apps-menu">
                                                        <li class="nk-menu-item active"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navPharmacy"><span class="nk-menu-icon"><em
                                                                        class="icon ni ni-capsule"></em></span></a></li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navHospital"><span class="nk-menu-icon"><em
                                                                        class="icon ni ni-plus-medi"></em></span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navDashboards"><span
                                                                    class="nk-menu-icon"><em
                                                                        class="icon ni ni-dashboard"></em></span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navApps"><span class="nk-menu-icon"><em
                                                                        class="icon ni ni-menu-circled"></em></span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navPages"><span class="nk-menu-icon"><em
                                                                        class="icon ni ni-files"></em></span></a></li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navMisc"><span class="nk-menu-icon"><em
                                                                        class="icon ni ni-server"></em></span></a></li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navError"><span class="nk-menu-icon"><em
                                                                        class="icon ni ni-alert-c"></em></span></a></li>
                                                        <li class="nk-menu-hr"></li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-switch"
                                                                data-target="navComponents"><span
                                                                    class="nk-menu-icon"><em
                                                                        class="icon ni ni-layers"></em></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="nk-sidebar-footer">
                                                    <ul class="nk-menu nk-menu-md apps-menu">
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link" aria-label="Settings"
                                                                data-bs-original-title="Settings"><span
                                                                    class="nk-menu-icon"><em
                                                                        class="icon ni ni-setting"></em></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 545px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 356px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                        <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown"><a href="#"
                                data-bs-toggle="dropdown" data-offset="50,-50">
                                <div class="user-avatar"><span>AB</span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md ml-4">
                                <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar"><span>AB</span></div>
                                        <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span><span
                                                class="sub-text text-soft">info@softnio.com</span></div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="/demo7/user-profile-regular.html"><em
                                                    class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="/demo7/user-profile-setting.html"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account
                                                    Setting</span></a></li>
                                        <li><a href="/demo7/user-profile-activity.html"><em
                                                    class="icon ni ni-activity-alt"></em><span>Login
                                                    Activity</span></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                    out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -24px -28px -32px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 24px 28px 32px;">
                                        <div class="nk-menu-content menu-active" data-content="navPharmacy">
                                            <h5 class="title">Pharmacy</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item current-page"><a
                                                        href="/demo7/pharmacy/index.html" class="nk-menu-link"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-dashboard-fill"></em></span><span
                                                            class="nk-menu-text">Dashboard</span></a></li>
                                                <li class="nk-menu-item has-sub active"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-users-fill"></em></span><span
                                                            class="nk-menu-text">Customer</span></a>
                                                    <ul class="nk-menu-sub" style="display: block;">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/add-customer.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Add
                                                                    Customer</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/customer.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Customer List</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/customer-ledger.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Customer Ledger</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-capsule-fill"></em></span><span
                                                            class="nk-menu-text">Medicine</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/add-medicine.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Add
                                                                    Medicine</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/medicine-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Medicine List</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/medicine-details.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Medicine Details</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-home-fill"></em></span><span
                                                            class="nk-menu-text">Manufacturer</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/manufacturer.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Manufacturer List</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/manufacturer-ledger.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Manufacturer Ledger</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-repeat"></em></span><span
                                                            class="nk-menu-text">Return</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/add-wastage-return.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Add
                                                                    Wastage Return</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/wastage-return.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Wastage Return List</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/add-manufacturer-return.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Add
                                                                    Manufacture Return</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/manufacturer-return.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Manufacturer Return
                                                                    List</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-user-circle-fill"></em></span><span
                                                            class="nk-menu-text">Human resource</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a href="/demo7/pharmacy/member.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Member</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/members-profile-regular.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Members Profile</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/attendence.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Attendence</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/pharmacy/salary.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Salary</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-coin-alt-fill"></em></span><span
                                                            class="nk-menu-text">Finance</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/income-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Income</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/expense-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Expence</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/invoice-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Invoice List</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/invoice-details.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Invoice Details</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-activity-round-fill"></em></span><span
                                                            class="nk-menu-text">Report</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/sales-report.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Sales
                                                                    Report</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/purchase-report.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Purchase Report</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pharmacy/stock-report.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Stock
                                                                    Report</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item"><a href="/demo7/pharmacy/support.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-msg-fill"></em></span><span
                                                            class="nk-menu-text">Support</span></a></li>
                                                <li class="nk-menu-item"><a
                                                        href="/demo7/pharmacy/general-settings.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-setting-fill"></em></span><span
                                                            class="nk-menu-text">Setting</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navHospital">
                                            <h5 class="title">Hospital Manegment</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item"><a href="/demo7/hospital/index.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-dashboard-fill"></em></span><span
                                                            class="nk-menu-text">Dashboard</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/hospital/appointment.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-note-add-fill"></em></span><span
                                                            class="nk-menu-text">Appointment List</span></a></li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-users-fill"></em></span><span
                                                            class="nk-menu-text">Patient</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/patient-add.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Add
                                                                    Patient</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/patient-list.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">IPD /
                                                                    OPD Patients</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/patient-profile.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Patient Profile</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-plus-medi-fill"></em></span><span
                                                            class="nk-menu-text">Doctors / Nurses</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/doctor-nurse-add.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Add
                                                                    Doctor / Nurses</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/doctor-nurse-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Doctors / Nurses</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-coin-alt-fill"></em></span><span
                                                            class="nk-menu-text">Finance</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/income-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Income</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/expense-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Expense</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/invoice-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Invoice List</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/invoice-details.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Invoice Details</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-activity-round-fill"></em></span><span
                                                            class="nk-menu-text">Monitor Hospital</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/birth-report.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Birth
                                                                    Report</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/blood-bank.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Blood
                                                                    Bank</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/inventory-items.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Inventory Items
                                                                    Reports</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-panel-fill"></em></span><span
                                                            class="nk-menu-text">Misc Pages</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/bed-group.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Bed
                                                                    Group</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/bed-allotment.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Bed
                                                                    Allotment</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/department.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Department</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/hospital/death-report.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Death
                                                                    Report</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item"><a href="/demo7/hospital/user-profile.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-user-fill"></em></span><span
                                                            class="nk-menu-text">User Profile</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/hospital/settings.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-setting-fill"></em></span><span
                                                            class="nk-menu-text">Setting</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navDashboards">
                                            <h5 class="title">Dashboards</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item"><a href="/demo7/index.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-dashboard-fill"></em></span><span
                                                            class="nk-menu-text">Default Dashboard</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/index-ecommerce.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-bag-fill"></em></span><span
                                                            class="nk-menu-text">Ecommerce Dashboard</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/index-sales.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-bag-fill"></em></span><span
                                                            class="nk-menu-text">Sales Dashboard</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/index-analytics.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-growth-fill"></em></span><span
                                                            class="nk-menu-text">Analytics Dashboard</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navApps">
                                            <h5 class="title">Apps</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item"><a href="/demo7/apps-inbox.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-inbox-fill"></em></span><span
                                                            class="nk-menu-text">Mailbox</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/apps-messages.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-chat-fill"></em></span><span
                                                            class="nk-menu-text">Messages</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/apps-file-manager.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-folder-fill"></em></span><span
                                                            class="nk-menu-text">File Manager</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/apps-chats.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-chat-circle-fill"></em></span><span
                                                            class="nk-menu-text">Chats</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/apps-calendar.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-calender-date-fill"></em></span><span
                                                            class="nk-menu-text">Calendar</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/apps-kanban.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-template-fill"></em></span><span
                                                            class="nk-menu-text">Kanban Board</span><span
                                                            class="nk-menu-badge badge-warning">New</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navPages">
                                            <h5 class="title">Pages</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-tile-thumb-fill"></em></span><span
                                                            class="nk-menu-text">Projects</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a href="/demo7/project-card.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Project Cards</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/project-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Project List</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-users-fill"></em></span><span
                                                            class="nk-menu-text">User Manage</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/user-list-regular.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">User
                                                                    List - Regular</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/user-list-compact.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">User
                                                                    List - Compact</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/user-details-regular.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">User
                                                                    Details - Regular</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/user-profile-regular.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">User
                                                                    Profile - Regular</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/user-card.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">User
                                                                    Contact - Card</span> <span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-cart-fill"></em></span><span
                                                            class="nk-menu-text">Ecommerce Pages</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a href="/demo7/products.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Product List</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/orders-regular.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Order
                                                                    List - Regular</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/orders-sales.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Order
                                                                    List - Sales</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/invoice-list.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Invoices List</span></a></li>
                                                        <li class="nk-menu-item"><a href="/demo7/invoice-details.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Invoice Details</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item"><a href="/demo7/_blank.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-file-fill"></em></span><span
                                                            class="nk-menu-text">Blank / Startup</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/faqs.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-file-fill"></em></span><span
                                                            class="nk-menu-text">Faqs / Help</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/terms-policy.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-file-fill"></em></span><span
                                                            class="nk-menu-text">Terms / Policy</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/regular-v1.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-file-fill"></em></span><span
                                                            class="nk-menu-text">Regular Page - v1</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/regular-v2.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-file-fill"></em></span><span
                                                            class="nk-menu-text">Regular Page - v2</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navMisc">
                                            <h5 class="title">Misc Pages</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-login.html"
                                                        class="nk-menu-link" target="_blank"><span
                                                            class="nk-menu-text">Login / Signin</span></a></li>
                                                <li class="nk-menu-item"><a
                                                        href="/demo7/pages/auths/auth-register.html"
                                                        class="nk-menu-link" target="_blank"><span
                                                            class="nk-menu-text">Register / Signup</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-reset.html"
                                                        class="nk-menu-link" target="_blank"><span
                                                            class="nk-menu-text">Forgot Password</span></a></li>
                                                <li class="nk-menu-item"><a
                                                        href="/demo7/pages/auths/auth-success.html"
                                                        class="nk-menu-link" target="_blank"><span
                                                            class="nk-menu-text">Success / Confirm</span></a></li>
                                                <li class="nk-menu-item no-icon"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-text">Classic Version - v2</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-login-v2.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Login / Signin</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-register-v2.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Register / Signup</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-reset-v2.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Forgot Password</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-success-v2.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Success / Confirm</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item no-icon"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-text">No Slider Version - v3</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-login-v3.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Login / Signin</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-register-v3.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Register / Signup</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-reset-v3.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Forgot Password</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/pages/auths/auth-success-v3.html"
                                                                class="nk-menu-link" target="_blank"><span
                                                                    class="nk-menu-text">Success / Confirm</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navError">
                                            <h5 class="title">Error Pages</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item"><a
                                                        href="/demo7/pages/errors/404-classic.html" target="_blank"
                                                        class="nk-menu-link"><span class="nk-menu-text">404
                                                            Classic</span></a></li>
                                                <li class="nk-menu-item"><a
                                                        href="/demo7/pages/errors/504-classic.html" target="_blank"
                                                        class="nk-menu-link"><span class="nk-menu-text">504
                                                            Classic</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/errors/404-s1.html"
                                                        target="_blank" class="nk-menu-link"><span
                                                            class="nk-menu-text">404 Modern</span></a></li>
                                                <li class="nk-menu-item"><a href="/demo7/pages/errors/504-s1.html"
                                                        target="_blank" class="nk-menu-link"><span
                                                            class="nk-menu-text">504 Modern</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="nk-menu-content" data-content="navComponents">
                                            <h5 class="title">Components</h5>
                                            <ul class="nk-menu">
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-layers-fill"></em></span><span
                                                            class="nk-menu-text">Ui Elements</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a href="/demo7/components.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Component List</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/alerts.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Alerts</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/accordions.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Accordions</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/avatar.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Avatar</span><span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/badges.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Badges</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/buttons.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Buttons</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/buttons-group.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Button
                                                                    Group</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/breadcrumb.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Breadcrumb</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/cards.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Cards</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/carousel.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Carousel</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/list-dropdown.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">List
                                                                    Dropdown</span><span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/modals.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Modals</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/pagination.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Pagination</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/popover.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Popovers</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/progress.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Progress</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/spinner.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Spinner</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/tabs.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Tabs</span> <span
                                                                    class="nk-menu-badge badge-warning">Updated</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/toast.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Toasts</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/tooltip.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Tooltip</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/elements/typography.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Typography</span></a></li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-toggle"><span
                                                                    class="nk-menu-text">Utilities</span></a>
                                                            <ul class="nk-menu-sub">
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-border.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Border</span></a></li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-colors.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Colors</span></a></li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-display.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Display</span></a>
                                                                </li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-embeded.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Embeded</span></a>
                                                                </li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-flex.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Flex</span></a></li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-text.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Text</span></a></li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-sizing.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Sizing</span></a></li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-spacing.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Spacing</span></a>
                                                                </li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/elements/util-others.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Others</span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-dot-box-fill"></em></span><span
                                                            class="nk-menu-text">Crafted Icons</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/misc/svg-icons.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">SVG
                                                                    Icon - Exclusive</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/misc/nioicon.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Nioicon -
                                                                    HandCrafted</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item"><a href="/demo7/components/misc/icons.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-menu-circled"></em></span><span
                                                            class="nk-menu-text">Icon Libraries</span><span
                                                            class="nk-menu-badge badge-warning">New</span></a></li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-table-view-fill"></em></span><span
                                                            class="nk-menu-text">Tables</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/tables/table-basic.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Basic
                                                                    Tables</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/tables/table-special.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Special Tables</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/tables/table-datatable.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">DataTables</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-todo-fill"></em></span><span
                                                            class="nk-menu-text">Forms</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/form-elements.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Form
                                                                    Elements</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/form-upload.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Form
                                                                    Upload</span> <span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/datetime-picker.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Date
                                                                    &amp; Time Picker</span> <span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/number-spinner.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Number
                                                                    Spinner</span> <span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/form-layouts.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Form
                                                                    Layouts</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/form-validation.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Form
                                                                    Validation</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/forms/form-wizard.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Wizard
                                                                    Basic</span></a></li>
                                                        <li class="nk-menu-item"><a href="#"
                                                                class="nk-menu-link nk-menu-toggle"><span
                                                                    class="nk-menu-text">Rich Editor</span></a>
                                                            <ul class="nk-menu-sub">
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/forms/form-summernote.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Summernote</span></a>
                                                                </li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/forms/form-quill.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Quill</span></a></li>
                                                                <li class="nk-menu-item"><a
                                                                        href="/demo7/components/forms/form-tinymce.html"
                                                                        class="nk-menu-link"><span
                                                                            class="nk-menu-text">Tinymce</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-pie-fill"></em></span><span
                                                            class="nk-menu-text">Charts</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/charts/chartjs.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Chart
                                                                    JS</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/charts/knob.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Knob
                                                                    JS</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item has-sub"><a href="#"
                                                        class="nk-menu-link nk-menu-toggle"><span
                                                            class="nk-menu-icon"><em
                                                                class="icon ni ni-block-over"></em></span><span
                                                            class="nk-menu-text">Miscellaneous</span></a>
                                                    <ul class="nk-menu-sub">
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/misc/toastr.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">Toastr</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/misc/sweet-alert.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Sweet
                                                                    Alert</span></a></li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/misc/js-tree.html"
                                                                class="nk-menu-link"><span
                                                                    class="nk-menu-text">jsTree</span><span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                        <li class="nk-menu-item"><a
                                                                href="/demo7/components/misc/dual-listbox.html"
                                                                class="nk-menu-link"><span class="nk-menu-text">Dual
                                                                    Listbox</span><span
                                                                    class="nk-menu-badge badge-warning">New</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nk-menu-item"><a href="/demo7/email-templates.html"
                                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                                class="icon ni ni-template-fill"></em></span><span
                                                            class="nk-menu-text">Email Template</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 571px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 439px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed nk-header-fluid">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="/demo7/index.html"
                                    class="logo-link"><img class="logo-light logo-img"
                                        src="/demo7/images/logo.png" srcset="/demo7/images/logo2x.png 2x"
                                        alt="logo"><img class="logo-dark logo-img"
                                        src="/demo7/images/logo-dark.png" srcset="/demo7/images/logo-dark2x.png 2x"
                                        alt="logo-dark"></a></div>
                            <div class="nk-header-search ml-3 ml-xl-0"><em class="icon ni ni-search"></em><input
                                    type="text" class="form-control border-transparent form-focus-none"
                                    placeholder="Search anything"></div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown chats-dropdown hide-mb-xs"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em
                                                    class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head"><span
                                                    class="sub-title nk-dropdown-title">Recent Chats</span><a
                                                    href="#">Setting</a></div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item"><a class="chat-link"
                                                            href="/demo7/pharmacy/support.html">
                                                            <div class="chat-media user-avatar"><span>IH</span><span
                                                                    class="status dot dot-lg dot-gray"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div><span
                                                                        class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got
                                                                        my last messages.</div>
                                                                    <div class="status delivered"><em
                                                                            class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item is-unread"><a class="chat-link"
                                                            href="/demo7/pharmacy/support.html">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span><span
                                                                    class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div><span
                                                                        class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you
                                                                        help me with this problem ?</div>
                                                                    <div class="status unread"><em
                                                                            class="icon ni ni-bullet-fill"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link"
                                                            href="/demo7/pharmacy/support.html">
                                                            <div class="chat-media user-avatar"><img
                                                                    src="/demo7/images/avatar/b-sm.jpg"
                                                                    alt=""></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div><span
                                                                        class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from
                                                                        Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link"
                                                            href="/demo7/pharmacy/support.html">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar"><img
                                                                        src="/demo7/images/avatar/c-sm.jpg"
                                                                        alt=""></div>
                                                                <div class="user-avatar"><span>AB</span></div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div><span
                                                                        class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new
                                                                        computer but i am having some problem</div>
                                                                    <div class="status sent"><em
                                                                            class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link"
                                                            href="/demo7/pharmacy/support.html">
                                                            <div class="chat-media user-avatar"><img
                                                                    src="/demo7/images/avatar/a-sm.jpg"
                                                                    alt=""><span
                                                                    class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div><span
                                                                        class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link"
                                                            href="/demo7/pharmacy/support.html">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div><span
                                                                        class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new
                                                                        computer but i am having some problem</div>
                                                                    <div class="status sent"><em
                                                                            class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-foot center"><a
                                                    href="/demo7/pharmacy/support.html">View All</a></div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em
                                                    class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head"><span
                                                    class="sub-title nk-dropdown-title">Notifications</span><a
                                                    href="#">Mark All as Read</a></div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center"><a href="#">View All</a></div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown"><a href="#"
                                            class="dropdown-toggle mr-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info"><span class="lead-text">Abu Bin
                                                            Ishtiyak</span><span
                                                            class="sub-text">info@softnio.com</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="/demo7/pharmacy/members-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="/demo7/pharmacy/general-settings.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="/demo7/pharmacy/account-log.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Dashboard</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to DashLite Pharmacy Dashboard Template.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                                    class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                            class="d-none d-md-inline">Last</span> 30
                                                                        Days</span><em
                                                                        class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30
                                                                                    Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6
                                                                                    Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1
                                                                                    Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#"
                                                                class="btn btn-primary"><em
                                                                    class="icon ni ni-reports"></em><span>Reports</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Today's Sales</h6>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount">$10,945</div>
                                                                <div class="nk-ecwg6-ck"><canvas
                                                                        class="ecommerce-line-chart-s3"
                                                                        id="ipdIncome" width="100"
                                                                        height="40"
                                                                        style="display: block; box-sizing: border-box; height: 40px; width: 100px;"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="info"><span
                                                                    class="change up text-danger"><em
                                                                        class="icon ni ni-arrow-long-up"></em>4.63%</span><span>
                                                                    vs. last week</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Today's Revenue</h6>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount">$12,338</div>
                                                                <div class="nk-ecwg6-ck"><canvas
                                                                        class="ecommerce-line-chart-s3"
                                                                        id="opdIncome" width="100"
                                                                        height="40"
                                                                        style="display: block; box-sizing: border-box; height: 40px; width: 100px;"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="info"><span
                                                                    class="change down text-danger"><em
                                                                        class="icon ni ni-arrow-long-down"></em>2.34%</span><span>
                                                                    vs. last week</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title ">
                                                                <h6 class="title">Today's Customer</h6>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount">$20,847</div>
                                                                <div class="nk-ecwg6-ck"><canvas
                                                                        class="ecommerce-line-chart-s3"
                                                                        id="labIncome" width="100"
                                                                        height="40"
                                                                        style="display: block; box-sizing: border-box; height: 40px; width: 100px;"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="info"><span
                                                                    class="change up text-danger"><em
                                                                        class="icon ni ni-arrow-long-up"></em>4.63%</span><span>
                                                                    vs. last week</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Today's Expense</h6>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div class="amount">$23,485</div>
                                                                <div class="nk-ecwg6-ck"><canvas
                                                                        class="ecommerce-line-chart-s3"
                                                                        id="todayExpense" width="100"
                                                                        height="40"
                                                                        style="display: block; box-sizing: border-box; height: 40px; width: 100px;"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="info"><span
                                                                    class="change up text-primary"><em
                                                                        class="icon ni ni-arrow-long-down"></em>1.34%</span><span>
                                                                    vs. last week</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card is-dark h-100">
                                                <div class="nk-ecwg nk-ecwg1">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Total Sales</h6>
                                                            </div>
                                                            <div class="card-tools"><a href="#"
                                                                    class="link">View Report</a></div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="amount">$74,958.49</div>
                                                            <div class="info"><strong>$7,395.37</strong> in last
                                                                month</div>
                                                        </div>
                                                        <div class="data">
                                                            <h6 class="sub-title">This week so far</h6>
                                                            <div class="data-group">
                                                                <div class="amount">$1,338.72</div>
                                                                <div class="info text-right"><span
                                                                        class="change up text-danger"><em
                                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                        last week</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ecwg1-ck"><canvas class="ecommerce-line-chart-s1"
                                                            id="totalSales" width="611" height="110"
                                                            style="display: block; box-sizing: border-box; height: 110px; width: 611px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-md-6">
                                            <div class="card card-full">
                                                <div class="nk-ecwg nk-ecwg8 h-100">
                                                    <div class="card-inner">
                                                        <div class="card-title-group mb-3">
                                                            <div class="card-title">
                                                                <h6 class="title">Store Visitors</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <div class="dropdown"><a href="#"
                                                                        class="dropdown-toggle link link-light link-sm dropdown-indicator"
                                                                        data-bs-toggle="dropdown">Weekly</a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a
                                                                                    href="#"><span>Daily</span></a>
                                                                            </li>
                                                                            <li><a href="#"
                                                                                    class="active"><span>Weekly</span></a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="#"><span>Monthly</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="nk-ecwg8-legends">
                                                            <li>
                                                                <div class="title"><span class="dot dot-lg sq"
                                                                        data-bg="#0fac81"
                                                                        style="background: rgb(15, 172, 129);"></span><span>Physically</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="title"><span class="dot dot-lg sq"
                                                                        data-bg="#eb6459"
                                                                        style="background: rgb(235, 100, 89);"></span><span>Online</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="nk-ecwg8-ck"><canvas
                                                                class="ecommerce-line-chart-s4" id="salesStatistics"
                                                                width="551" height="200"
                                                                style="display: block; box-sizing: border-box; height: 200px; width: 551px;"></canvas>
                                                        </div>
                                                        <div class="chart-label-group ps-5">
                                                            <div class="chart-label">01 Jul, 2020</div>
                                                            <div class="chart-label">30 Jul, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Store Statistics</h6>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Sales</div>
                                                                <div class="count">1,795</div>
                                                            </div><em class="icon bg-primary-dim ni ni-bag"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Customers</div>
                                                                <div class="count">2,327</div>
                                                            </div><em class="icon bg-info-dim ni ni-users"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Products</div>
                                                                <div class="count">674</div>
                                                            </div><em class="icon bg-pink-dim ni ni-box"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Categories</div>
                                                                <div class="count">68</div>
                                                            </div><em class="icon bg-purple-dim ni ni-server"></em>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner-group">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">New Customers</h6>
                                                            </div>
                                                            <div class="card-tools"><a
                                                                    href="/demo7/pharmacy/customer.html"
                                                                    class="link">View All</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary-dim"><span>AB</span>
                                                            </div>
                                                            <div class="user-info"><span class="lead-text">Abu Bin
                                                                    Ishtiyak</span><span
                                                                    class="sub-text">info@softnio.com</span></div>
                                                            <div class="user-action">
                                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a
                                                                                    href="/demo7/pharmacy/general-settings.html"><em
                                                                                        class="icon ni ni-setting"></em><span>Action
                                                                                        Settings</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-notify"></em><span>Push
                                                                                        Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-pink-dim"><span>SW</span></div>
                                                            <div class="user-info"><span class="lead-text">Sharon
                                                                    Walker</span><span
                                                                    class="sub-text">sharon-90@example.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a
                                                                                    href="/demo7/pharmacy/general-settings.html"><em
                                                                                        class="icon ni ni-setting"></em><span>Action
                                                                                        Settings</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-notify"></em><span>Push
                                                                                        Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-warning-dim"><span>GO</span>
                                                            </div>
                                                            <div class="user-info"><span class="lead-text">Gloria
                                                                    Oliver</span><span
                                                                    class="sub-text">gloria_72@example.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a
                                                                                    href="/demo7/pharmacy/general-settings.html"><em
                                                                                        class="icon ni ni-setting"></em><span>Action
                                                                                        Settings</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-notify"></em><span>Push
                                                                                        Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-success-dim"><span>PS</span>
                                                            </div>
                                                            <div class="user-info"><span class="lead-text">Phillip
                                                                    Sullivan</span><span
                                                                    class="sub-text">phillip-85@example.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown"><a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a
                                                                                    href="/demo7/pharmacy/general-settings.html"><em
                                                                                        class="icon ni ni-setting"></em><span>Action
                                                                                        Settings</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-notify"></em><span>Push
                                                                                        Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><span
                                                                    class="me-2">Transaction</span> <a
                                                                    href="#"
                                                                    class="link d-none d-sm-inline">See History</a>
                                                            </h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <ul class="card-tools-nav">
                                                                <li><a href="#"><span>Paid</span></a></li>
                                                                <li><a href="#"><span>Pending</span></a></li>
                                                                <li class="active"><a
                                                                        href="#"><span>All</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner p-0 border-top">
                                                    <div class="nk-tb-list nk-tb-orders">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span>Invoice No</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span>Ref</span></div>
                                                            <div class="nk-tb-col"><span>Amount</span></div>
                                                            <div class="nk-tb-col"><span
                                                                    class="d-none d-sm-inline">Status</span></div>
                                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"><span class="tb-lead"><a
                                                                        href="#">#95954</a></span></div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                                        <span>AB</span></div>
                                                                    <div class="user-name"><span class="tb-lead">Abu
                                                                            Bin Ishtiyak</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md"><span
                                                                    class="tb-sub">02/11/2020</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span
                                                                    class="tb-sub text-primary">SUB-2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col"><span
                                                                    class="tb-sub tb-amount">4,596.75
                                                                    <span>USD</span></span></div>
                                                            <div class="nk-tb-col"><span
                                                                    class="badge badge-dot badge-dot-xs text-success">Paid</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown"><a
                                                                        class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"><span class="tb-lead"><a
                                                                        href="#">#95812</a></span></div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div
                                                                        class="user-avatar user-avatar-sm bg-warning">
                                                                        <img src="/demo7/images/avatar/b-sm.jpg"
                                                                            alt=""></div>
                                                                    <div class="user-name"><span
                                                                            class="tb-lead">Blanca Schultz</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md"><span
                                                                    class="tb-sub">02/01/2020</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span
                                                                    class="tb-sub text-primary">SUB-2309143</span>
                                                            </div>
                                                            <div class="nk-tb-col"><span
                                                                    class="tb-sub tb-amount">199.99
                                                                    <span>USD</span></span></div>
                                                            <div class="nk-tb-col"><span
                                                                    class="badge badge-dot badge-dot-xs text-success">Paid</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown"><a
                                                                        class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"><span class="tb-lead"><a
                                                                        href="#">#95256</a></span></div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                                        <span>NL</span></div>
                                                                    <div class="user-name"><span
                                                                            class="tb-lead">Naomi Lawrence</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md"><span
                                                                    class="tb-sub">01/29/2020</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span
                                                                    class="tb-sub text-primary">SUB-2305684</span>
                                                            </div>
                                                            <div class="nk-tb-col"><span
                                                                    class="tb-sub tb-amount">1099.99
                                                                    <span>USD</span></span></div>
                                                            <div class="nk-tb-col"><span
                                                                    class="badge badge-dot badge-dot-xs text-success">Paid</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown"><a
                                                                        class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"><span class="tb-lead"><a
                                                                        href="#">#95135</a></span></div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div
                                                                        class="user-avatar user-avatar-sm bg-success">
                                                                        <span>CH</span></div>
                                                                    <div class="user-name"><span
                                                                            class="tb-lead">Cassandra Hogan</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md"><span
                                                                    class="tb-sub">01/29/2020</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span
                                                                    class="tb-sub text-primary">SUB-2305564</span>
                                                            </div>
                                                            <div class="nk-tb-col"><span
                                                                    class="tb-sub tb-amount">1099.99
                                                                    <span>USD</span></span></div>
                                                            <div class="nk-tb-col"><span
                                                                    class="badge badge-dot badge-dot-xs text-warning">Due</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown"><a
                                                                        class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Notify</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner-sm border-top text-center d-sm-none"><a
                                                        href="#" class="btn btn-link btn-block">See
                                                        History</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nk-sticky-toolbar">
        <li class="demo-layout"><a class="toggle tipinfo" data-target="demoML" href="#"
                aria-label="Main Demo Preview" data-bs-original-title="Main Demo Preview"><em
                    class="icon ni ni-dashlite"></em></a></li>
        <li class="demo-thumb"><a class="toggle tipinfo" data-target="demoUC" href="#"
                aria-label="Use Case Concept" data-bs-original-title="Use Case Concept"><em
                    class="icon ni ni-menu-squared"></em></a></li>
        <li class="demo-settings"><a class="toggle tipinfo" data-target="settingPanel" href="#"
                aria-label="Demo Settings" data-bs-original-title="Demo Settings"><em
                    class="icon ni ni-setting-alt"></em></a></li>
        <li class="demo-purchase"><a class="tipinfo" target="_blank" href="https://1.envato.market/e0y3g"
                aria-label="Purchase" data-bs-original-title="Purchase"><em class="icon ni ni-cart"></em></a></li>
    </ul>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right toggle-screen-any"
        data-content="demoML" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo1/index.html">
                                        <div class="nk-demo-image bg-blue"><img class="bg-purple"
                                                src="https://dashlite.net/images/landing/layout-1d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-1d2x.jpg 2x"
                                                alt="Demo Layout 1"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 1</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo2/index.html">
                                        <div class="nk-demo-image bg-purple"><img
                                                src="https://dashlite.net/images/landing/layout-2d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-2d2x.jpg 2x"
                                                alt="Demo Layout 2"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 2</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo3/index.html">
                                        <div class="nk-demo-image bg-success"><img
                                                src="https://dashlite.net/images/landing/layout-3d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-3d2x.jpg 2x"
                                                alt="Demo Layout 3"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 3</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo4/index.html">
                                        <div class="nk-demo-image bg-indigo"><img
                                                src="https://dashlite.net/images/landing/layout-4d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-4d2x.jpg 2x"
                                                alt="Demo Layout 4"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 4</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo5/index.html">
                                        <div class="nk-demo-image bg-orange"><img
                                                src="https://dashlite.net/images/landing/layout-5d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-5d2x.jpg 2x"
                                                alt="Demo Layout 5"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 5</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo6/index.html">
                                        <div class="nk-demo-image bg-purple"><img
                                                src="https://dashlite.net/images/landing/layout-6d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-6d2x.jpg 2x"
                                                alt="Demo Layout 6"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 6</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo7/index.html">
                                        <div class="nk-demo-image bg-teal"><img
                                                src="https://dashlite.net/images/landing/layout-7d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-7d2x.jpg 2x"
                                                alt="Demo Layout 7"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 7</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo8/index.html">
                                        <div class="nk-demo-image bg-azure"><img
                                                src="https://dashlite.net/images/landing/layout-8d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-8d2x.jpg 2x"
                                                alt="Demo Layout 8"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 8</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo9/index.html">
                                        <div class="nk-demo-image bg-pink"><img
                                                src="https://dashlite.net/images/landing/layout-9d.jpg"
                                                srcset="https://dashlite.net/images/landing/layout-9d2x.jpg 2x"
                                                alt="Demo Layout 9"></div><span class="nk-demo-title"><strong>Demo
                                                Layout 9</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/landing/index.html">
                                        <div class="nk-demo-image bg-red"><img
                                                src="https://dashlite.net/images/landing/main-landing.jpg"
                                                srcset="https://dashlite.net/images/landing/main-landing2x.jpg 2x"
                                                alt="Landing Page"></div><span class="nk-demo-title"><strong>Landing
                                                Page</strong> <span class="badge badge-danger ml-1">Free</span></span>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 2658px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 96px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right toggle-screen-any"
        data-content="demoUC" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Use Case Concept</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoUC"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="nk-demo-item"><a
                                        href="https://dashlite.net/demo9/copywriter/index.html">
                                        <div class="nk-demo-image bg-indigo"><img
                                                src="https://dashlite.net/images/landing/demo-ai-copywriter.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-ai-copywriter2x.jpg 2x"
                                                alt="ai-copywriter"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo9</em><br><strong>Ai Copywriter
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo7/pharmacy/index.html">
                                        <div class="nk-demo-image bg-warning"><img
                                                src="https://dashlite.net/images/landing/demo-pharmacy.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-pharmacy2x.jpg 2x"
                                                alt="pharmacy"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo7</em><br><strong>Pharmacy Management
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo5/loan/index.html">
                                        <div class="nk-demo-image bg-purple"><img
                                                src="https://dashlite.net/images/landing/demo-loan.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-loan2x.jpg 2x"
                                                alt="loan"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo5</em><br><strong>Loan Management
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo2/ecommerce/index.html">
                                        <div class="nk-demo-image bg-dark"><img
                                                src="https://dashlite.net/images/landing/demo-ecommerce.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x"
                                                alt="Ecommerce"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo2</em><br><strong>E-Commerce
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo2/lms/index.html">
                                        <div class="nk-demo-image bg-danger"><img
                                                src="https://dashlite.net/images/landing/demo-lms.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-lms2x.jpg 2x"
                                                alt="LMS"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo2</em><br><strong>LMS / Learning Management
                                                System</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo1/crm/index.html">
                                        <div class="nk-demo-image bg-info"><img
                                                src="https://dashlite.net/images/landing/demo-crm.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-crm2x.jpg 2x"
                                                alt="CRM / Customer Relationship"></div><span
                                            class="nk-demo-title"><em class="text-primary">Demo1</em><br><strong>CRM
                                                / Customer Relationship Management</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo7/hospital/index.html">
                                        <div class="nk-demo-image bg-indigo"><img
                                                src="https://dashlite.net/images/landing/demo-hospital.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-hospital2x.jpg 2x"
                                                alt="Hospital Managemen"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo7</em><br><strong>Hospital
                                                Management</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo1/hotel/index.html">
                                        <div class="nk-demo-image bg-pink"><img
                                                src="https://dashlite.net/images/landing/demo-hotel.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-hotel2x.jpg 2x"
                                                alt="Hotel Managemen"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo1</em><br><strong>Hotel
                                                Management</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo3/cms/index.html">
                                        <div class="nk-demo-image bg-dark"><img
                                                src="https://dashlite.net/images/landing/demo-cms.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-cms2x.jpg 2x"
                                                alt="cms"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo3</em><br><strong>CMS Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo5/crypto/index.html">
                                        <div class="nk-demo-image bg-warning"><img
                                                src="https://dashlite.net/images/landing/demo-buysell.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-buysell2x.jpg 2x"
                                                alt="Crypto BuySell / Wallet"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo5</em><br><strong>Crypto BuySell
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo6/invest/index.html">
                                        <div class="nk-demo-image bg-indigo"><img
                                                src="https://dashlite.net/images/landing/demo-invest.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-invest2x.jpg 2x"
                                                alt="HYIP / Investment"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo6</em><br><strong>HYIP / Investment
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a
                                        href="https://dashlite.net/demo3/apps/file-manager.html">
                                        <div class="nk-demo-image bg-purple"><img
                                                src="https://dashlite.net/images/landing/demo-file-manager.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x"
                                                alt="File Manager"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo3</em><br><strong>Apps - File
                                                Manager</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a
                                        href="https://dashlite.net/demo4/subscription/index.html">
                                        <div class="nk-demo-image bg-primary"><img
                                                src="https://dashlite.net/images/landing/demo-subscription.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-subscription2x.jpg 2x"
                                                alt="SAAS / Subscription"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo4</em><br><strong>SAAS / Subscription
                                                Panel</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/covid/index.html">
                                        <div class="nk-demo-image bg-danger"><img
                                                src="https://dashlite.net/images/landing/demo-covid19.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-covid192x.jpg 2x"
                                                alt="Covid Situation"></div><span class="nk-demo-title"><em
                                                class="text-primary">Covid</em><br><strong>Coronavirus
                                                Situation</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/messages.html">
                                        <div class="nk-demo-image bg-success"><img
                                                src="https://dashlite.net/images/landing/demo-messages.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-messages2x.jpg 2x"
                                                alt="Messages"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo3</em><br><strong>Apps -
                                                Messages</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/mailbox.html">
                                        <div class="nk-demo-image bg-purple"><img
                                                src="https://dashlite.net/images/landing/demo-inbox.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-inbox2x.jpg 2x"
                                                alt="Inbox"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo3</em><br><strong>Apps -
                                                Mailbox</strong></span>
                                    </a></div>
                                <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/chats.html">
                                        <div class="nk-demo-image bg-purple"><img
                                                src="https://dashlite.net/images/landing/demo-chats.jpg"
                                                srcset="https://dashlite.net/images/landing/demo-chats2x.jpg 2x"
                                                alt="Chats / Messenger"></div><span class="nk-demo-title"><em
                                                class="text-primary">Demo3</em><br><strong>Apps -
                                                Chats</strong></span>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 4830px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 53px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right toggle-screen-any" data-content="settingPanel"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Preview Settings</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="settingPanel"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-opt-panel" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="nk-opt-set">
                                    <div class="nk-opt-set-title">Direction Change</div>
                                    <div class="nk-opt-list col-2x">
                                        <div class="nk-opt-item only-text active" data-key="dir"
                                            data-update="ltr"><span class="nk-opt-item-bg"><span
                                                    class="nk-opt-item-name">LTR Mode</span></span></div>
                                        <div class="nk-opt-item only-text" data-key="dir" data-update="rtl"><span
                                                class="nk-opt-item-bg"><span class="nk-opt-item-name">RTL
                                                    Mode</span></span></div>
                                    </div>
                                </div>
                                <div class="nk-opt-set">
                                    <div class="nk-opt-set-title">Main UI Style</div>
                                    <div class="nk-opt-list col-2x">
                                        <div class="nk-opt-item only-text active" data-key="style"
                                            data-update="ui-default"><span class="nk-opt-item-bg"><span
                                                    class="nk-opt-item-name">Default</span></span></div>
                                        <div class="nk-opt-item only-text" data-key="style"
                                            data-update="ui-softy"><span class="nk-opt-item-bg"><span
                                                    class="nk-opt-item-name">Softy</span></span></div>
                                    </div>
                                </div>
                                <div class="nk-opt-set nk-opt-set-aside">
                                    <div class="nk-opt-set-title">Sidebar Style</div>
                                    <div class="nk-opt-list col-4x">
                                        <div class="nk-opt-item" data-key="aside" data-update="is-light"><span
                                                class="nk-opt-item-bg is-light"><span
                                                    class="bg-lighter"></span></span><span
                                                class="nk-opt-item-name">White</span></div>
                                        <div class="nk-opt-item active" data-key="aside" data-update="is-default">
                                            <span class="nk-opt-item-bg is-light"><span
                                                    class="bg-light"></span></span><span
                                                class="nk-opt-item-name">Light</span></div>
                                        <div class="nk-opt-item" data-key="aside" data-update="is-dark"><span
                                                class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                                                class="nk-opt-item-name">Dark</span></div>
                                        <div class="nk-opt-item" data-key="aside" data-update="is-theme"><span
                                                class="nk-opt-item-bg"><span class="bg-theme"></span></span><span
                                                class="nk-opt-item-name">Theme</span></div>
                                    </div>
                                </div>
                                <div class="nk-opt-set nk-opt-set-aside-nav">
                                    <div class="nk-opt-set-title">Nav Sidebar Style</div>
                                    <div class="nk-opt-list col-4x">
                                        <div class="nk-opt-item active" data-key="navside" data-update="is-light">
                                            <span class="nk-opt-item-bg is-light"><span
                                                    class="bg-lighter"></span></span><span
                                                class="nk-opt-item-name">White</span></div>
                                        <div class="nk-opt-item" data-key="navside" data-update="is-default"><span
                                                class="nk-opt-item-bg is-light"><span
                                                    class="bg-light"></span></span><span
                                                class="nk-opt-item-name">Light</span></div>
                                        <div class="nk-opt-item" data-key="navside" data-update="is-dark"><span
                                                class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                                                class="nk-opt-item-name">Dark</span></div>
                                        <div class="nk-opt-item" data-key="navside" data-update="is-theme"><span
                                                class="nk-opt-item-bg"><span class="bg-theme"></span></span><span
                                                class="nk-opt-item-name">Theme</span></div>
                                    </div>
                                </div>
                                <div class="nk-opt-set nk-opt-set-skin">
                                    <div class="nk-opt-set-title">Primary Skin</div>
                                    <div class="nk-opt-list">
                                        <div class="nk-opt-item active" data-key="skin" data-update="default">
                                            <span class="nk-opt-item-bg"><span
                                                    class="skin-default"></span></span><span
                                                class="nk-opt-item-name">Default</span></div>
                                        <div class="nk-opt-item" data-key="skin" data-update="bluelite"><span
                                                class="nk-opt-item-bg"><span
                                                    class="skin-bluelite"></span></span><span
                                                class="nk-opt-item-name">Blue Light</span></div>
                                        <div class="nk-opt-item" data-key="skin" data-update="egyptian"><span
                                                class="nk-opt-item-bg"><span
                                                    class="skin-egyptian"></span></span><span
                                                class="nk-opt-item-name">Egyptian</span></div>
                                        <div class="nk-opt-item" data-key="skin" data-update="purple"><span
                                                class="nk-opt-item-bg"><span class="skin-purple"></span></span><span
                                                class="nk-opt-item-name">Purple</span></div>
                                        <div class="nk-opt-item" data-key="skin" data-update="blue"><span
                                                class="nk-opt-item-bg"><span class="skin-blue"></span></span><span
                                                class="nk-opt-item-name">Blue</span></div>
                                        <div class="nk-opt-item" data-key="skin" data-update="red"><span
                                                class="nk-opt-item-bg"><span class="skin-red"></span></span><span
                                                class="nk-opt-item-name">Red</span></div>
                                    </div>
                                </div>
                                <div class="nk-opt-set">
                                    <div class="nk-opt-set-title">Skin Mode</div>
                                    <div class="nk-opt-list col-2x">
                                        <div class="nk-opt-item active" data-key="mode" data-update="light-mode">
                                            <span class="nk-opt-item-bg is-light"><span
                                                    class="theme-light"></span></span><span
                                                class="nk-opt-item-name">Light Skin</span></div>
                                        <div class="nk-opt-item" data-key="mode" data-update="dark-mode"><span
                                                class="nk-opt-item-bg"><span class="theme-dark"></span></span><span
                                                class="nk-opt-item-name">Dark Skin</span></div>
                                    </div>
                                </div>
                                <div class="nk-opt-reset"><a href="#" class="reset-opt-setting">Reset
                                        Setting</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 894px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 259px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
    <div class="pmo-lv pmo-dark active"><a class="pmo-close" href="#"><em class="ni ni-cross"></em></a><a
            class="pmo-wrap" target="_blank" href="https://softnio.com/get-early-access/">
            <div class="pmo-text text-white">Looking for functional script for Investment Platform? Check out <em
                    class="ni ni-arrow-long-right"></em></div>
        </a></div><a class="pmo-st pmo-dark" target="_blank" href="https://softnio.com/get-early-access/">
        <div class="pmo-st-img"><img src="https://dashlite.net/images/landing/promo-investorm.png"
                alt="Investorm"></div>
        <div class="pmo-st-text">Looking for Advanced <br> Investment Platform?</div>
    </a>
  
    <script src="{{ asset('js/bundle.js') }}"></script>
    <script src="{{ asset('js/demo-settings.js') }}"></script>
    <script src="{{ asset('js/gd-pharmacy.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/chart-ecommerce.js') }}"></script>
   
   
</body>

</html>
