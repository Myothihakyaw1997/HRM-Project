<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRM Dashboard</title>
    <link rel="stylesheet" href="{{URL::asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <aside class="shadow-sm bg-white rounded d-flex flex-column" >
            <div class="mb-5 mt-3 dash-header">Dashboard</div>
            <a href="/home" style="color: black; text-decoration: none;" class="w-100 mb-4 dash-link">
                <div>
                    <i class="fas fa-home dash-icon-home"></i>
                    <span>Home</span>
                </div>
            </a>
            <a href="/employees" style="color: black; text-decoration: none;" class="w-100 mb-4 dash-link">
                <div>
                    <i class="fas fa-users"></i>
                    <span>Employees</span>
                </div>
            </a>
            <a href="/salaries" style="color: black; text-decoration: none;" class="w-100 mb-4 dash-link">
                <div>
                    <i class="fas fa-money-check-alt"></i>
                    <span>Salaries</span>
                </div>
            </a>

            <button class="btn btn-dark dash-sign-out">Sign Out</button>
        </aside>
        <section class="w-100">
            <nav class="bg-dark w-100 nav-bar float-end">
                <div class="mb01 mt-3 me-5">
                    <form action="/search" method="POST" class="d-flex justify-content-end">
                        @csrf
                        <div class="d-flex flex-column">
                            <input type="text" class="form-control search-box @error('emp-name') border-red @enderror" name="emp-name" placeholder="Employee Name">
                            @error('emp-name')
                                <p class="text-danger">Employee name require</p>                            
                            @enderror
                        </div>
                        <div>
                            <input type="submit" class="form-control search-submit flex-shrink-0" value="search">
                        </div>
                    </form>
                </div>
            </nav>            
            @yield('employee')
            @yield('salaries')
            <div class="home-wrapper">
                @yield('home')
            </div>

            <div class="employee-create-wrapper">
                @yield('create-employee')
            </div>

            <div class="employee-create-wrapper">
                @yield('create-salary')
            </div>
            <div class="employee-create-wrapper">
                @yield('edit-employee')
            </div>

            <div class="mt-2 employee-show-wrapper">
                @yield('show-employee')
            </div>
            <div class="error-emp-wrapper">
                @yield('emp-not-found')
            </div>
        </section>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>