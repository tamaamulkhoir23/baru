@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Example</strong> Dashboard</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
                <a href="#" class="btn btn-primary">New Project</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Sales</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="truck"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">2.382</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            -3.65% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Visitors</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">14.212</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            5.25% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Earnings</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">$21.300</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            6.65% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Orders</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">64</h1>
                                    <div class="mb-0">
                                        <span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i>
                                            -2.25% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="float-end">
                            <form class="row g-2">
                                <div class="col-auto">
                                    <select class="form-select form-select-sm bg-light border-0">
                                        <option>Jan</option>
                                        <option value="1">Feb</option>
                                        <option value="2">Mar</option>
                                        <option value="3">Apr</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0"
                                        style="width: 100px;" placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <h5 class="card-title mb-0">Recent Movement</h5>
                    </div>
                    <div class="card-body pt-2 pb-3">
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Browser Usage</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="py-3">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                </div>
                            </div>

                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td><i class="fas fa-circle text-primary fa-fw"></i> Chrome <span
                                                class="badge badge-success-light">+12%</span></td>
                                        <td class="text-end">4306</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-circle text-warning fa-fw"></i> Firefox <span
                                                class="badge badge-danger-light">-3%</span></td>
                                        <td class="text-end">3801</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-circle text-danger fa-fw"></i> Edge</td>
                                        <td class="text-end">1689</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-circle text-dark fa-fw"></i> Other</td>
                                        <td class="text-end">3251</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Real-Time</h5>
                    </div>
                    <div class="card-body px-4">
                        <div id="world_map" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Latest Projects</h5>
                    </div>
                    <table class="table table-borderless my-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="d-none d-xxl-table-cell">Company</th>
                                <th class="d-none d-xl-table-cell">Author</th>
                                <th>Status</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-light rounded-2">
                                                <img class="p-2" src="{{ asset('assets') }}/img/icons/brand-1.svg">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <strong>Project Apollo</strong>
                                            <div class="text-muted">
                                                Web, UI/UX Design
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xxl-table-cell">
                                    <strong>Lechters</strong>
                                    <div class="text-muted">
                                        Real Estate
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <strong>Vanessa Tucker</strong>
                                    <div class="text-muted">
                                        HTML, JS, React
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100">
                                        <span class="me-2 mb-1 text-muted">65%</span>
                                        <div class="progress progress-sm bg-success-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="#" class="btn btn-light">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-light rounded-2">
                                                <img class="p-2" src="{{ asset('assets') }}/img/icons/brand-2.svg">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <strong>Project Bongo</strong>
                                            <div class="text-muted">
                                                Web
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xxl-table-cell">
                                    <strong>Cellophane Transportation</strong>
                                    <div class="text-muted">
                                        Transportation
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <strong>William Harris</strong>
                                    <div class="text-muted">
                                        HTML, JS, Vue
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100">
                                        <span class="me-2 mb-1 text-muted">33%</span>
                                        <div class="progress progress-sm bg-danger-light w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 33%;">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="#" class="btn btn-light">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-light rounded-2">
                                                <img class="p-2" src="{{ asset('assets') }}/img/icons/brand-3.svg">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <strong>Project Canary</strong>
                                            <div class="text-muted">
                                                Web, UI/UX Design
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xxl-table-cell">
                                    <strong>Clemens</strong>
                                    <div class="text-muted">
                                        Insurance
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <strong>Sharon Lessman</strong>
                                    <div class="text-muted">
                                        HTML, JS, Laravel
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100">
                                        <span class="me-2 mb-1 text-muted">50%</span>
                                        <div class="progress progress-sm bg-warning-light w-100">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="#" class="btn btn-light">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-light rounded-2">
                                                <img class="p-2" src="{{ asset('assets') }}/img/icons/brand-4.svg">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <strong>Project Edison</strong>
                                            <div class="text-muted">
                                                UI/UX Design
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xxl-table-cell">
                                    <strong>Affinity Investment Group</strong>
                                    <div class="text-muted">
                                        Finance
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <strong>Vanessa Tucker</strong>
                                    <div class="text-muted">
                                        HTML, JS, React
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100">
                                        <span class="me-2 mb-1 text-muted">80%</span>
                                        <div class="progress progress-sm bg-success-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="#" class="btn btn-light">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-light rounded-2">
                                                <img class="p-2" src="{{ asset('assets') }}/img/icons/brand-5.svg">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <strong>Project Indigo</strong>
                                            <div class="text-muted">
                                                Web, UI/UX Design
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xxl-table-cell">
                                    <strong>Konsili</strong>
                                    <div class="text-muted">
                                        Retail
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <strong>Christina Mason</strong>
                                    <div class="text-muted">
                                        HTML, JS, Vue
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100">
                                        <span class="me-2 mb-1 text-muted">78%</span>
                                        <div class="progress progress-sm bg-primary-light w-100">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="#" class="btn btn-light">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Monthly Sales</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-bar"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
