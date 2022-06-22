<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avantirium Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style-1.css">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span> Avantirium</h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href=""><span class="las la-igloo"></span> <span>Dashboard</span></a></li>
                <li><a href=""><span class="las la-users"></span> <span>Customers</span></a></li>
                <li><a href=""><span class="las la-clipboard-list"></span> <span>Projects</span></a></li>
                <li><a href=""><span class="las la-shipping-bag"></span> <span>Orders</span></a></li>
                <li><a href=""><span class="las la-receipt"></span> <span>Inventory</span></a></li>
                <li><a href=""><span class="las la-user-circle"></span> <span>Accounts</span></a></li>
                <li><a href=""><span class="las la-clipboard-list"></span> <span>Tasks</span></a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="" id="" placeholder="Search" />
            </div>
            <div class="user-wrapper">
                <img src="images/admin.jpg" width=40px height=40px alt="" />
                <div>
                    <h4>John Doe</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div><span class="la la-users"></span></div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div><span class="la la-clipboard"></span></div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div><span class="la la-shopping-bag"></span></div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$6K</h1>
                        <span>Income</span>
                    </div>
                    <div><span class="la la-google-wallet"></span></div>
                </div>
            </div>

        </main>
    </div>

</body>

</html>