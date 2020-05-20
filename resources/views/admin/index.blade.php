<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project</title>
  <link href={{asset('design/css/bootstrap.min.css')}} rel="stylesheet" />
  <link rel = "stylesheet" href={{asset('design/css/EditAdminInfo.css')}}>
  <link href= {{asset('design/css/animate.min.css')}}rel="stylesheet"/> 
  <link href={{asset('design/css/light-bootstrap-dashboard.css')}} rel="stylesheet"/>
  <link href={{asset('font-awesome.css')}} rel="stylesheet">
  <link href={{asset('design/font-family.css')}} rel='stylesheet'>
  <link href={{asset('design/css/pe-icon-7-stroke.css')}} rel="stylesheet" />
  <script src={{asset('design/jquery-2.2.3.min.js')}}></script>
  <script src={{asset('design/js/jquery-1.10.2.js')}} type="text/javascript"></script>
  <script src={{asset('design/js/bootstrap.min.js')}} type="text/javascript"></script>
  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src={{asset('design/js/light-bootstrap-dashboard.js')}}></script>
  <script src={{asset('design/js/chartist.min.js')}}></script>
  <link rel = "stylesheet" href={{asset('design/css/ShowCustomerInfo.css')}}>

 
        

</head>

<body>

  <div class="sidebar" data-color="blue" data-image={{asset('design/img/bank.jpg')}}>

    <div class="sidebar-wrapper">
      <div class="logo">
        <p>Admin Dashboard</p>
        <br/>
        <br/>
      </div>

      <ul class="nav">
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i>
                  <span class="notification"></span>Admin Profile 
              </a>
              <ul class="dropdown-menu">
                <li><a href={{route('getEditProfile')}}>Edit Profile</a></li>
                <li><a href={{route('view.adminInfo')}}>Show Profile</a></li>
                <li><a href={{route('getChangePassword')}}>Change password</a></li>
                <li><a href="/logout">Sign Out</a></li>
              </ul>
        </li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i>
                  <span class="notification"></span>Employee Section
              </a>
              <ul class="dropdown-menu">
                <li><a href={{route('add.employee')}}>Add Employee</a></li>
                <li><a href={{route('employee.list')}}>Employee List</a></li>
              </ul>
        </li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i>
                  <span class="notification"></span>Agent Section
              </a>
              <ul class="dropdown-menu">
                <li><a href={{route('add.agent')}}>Add Agent</a></li>
                <li><a href={{route('agent.list')}}>Agent list</a></li>
              </ul>
        </li>

        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i>
                  <span class="notification"></span>Transaction
              </a>
              <ul class="dropdown-menu">
                <li><a href={{route('all.transaction.list')}}>All transaction</a></li>
                <li><a href={{route('customer.transaction.list')}}>Customer transaction</a></li>
                <li><a href={{route('all.transaction.list')}}>Employee transaction</a></li>
                  <li><a href={{route('bank.transaction.list')}}>Banking Transaction</a></li>
                <li><a href={{route('agent.transaction.list')}}>Agent Transaction</a></li>
                <li><a href={{route('tax.transaction.list')}}>Tax Transaction</a></li>
                <li><a href={{route('topUp.transaction')}}>Mobile TopUp </a></li>
              </ul>
        </li>

        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i>
                  <span class="notification"></span>Others
              </a>
              <ul class="dropdown-menu">
                <li><a href={{route('get.notice')}}>Upload Notice</a></li>
                 <li><a href={{route('list.notice')}}>Notice list</a></li>
                <li><a href={{route('get.offer')}}>Add offer</a></li>
                <li><a href={{route('get.reports')}}>Reports</a></li>

              </ul>
        </li>

      </ul>

    </div>

  </div>
  <div>
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href={{route('admin.adminIndex')}}> Home</a>
            </li>
            <li>
              <a href={{route('logout.session')}}>
                Log out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
          <script>
            @if(Session::has('messege'))
              var type="{{Session::get('alert-type','info')}}"
              switch(type){
                  case 'info':
                       toastr.info("{{ Session::get('messege') }}");
                       break;
                  case 'success':
                      toastr.success("{{ Session::get('messege') }}");
                      break;
                  case 'warning':
                     toastr.warning("{{ Session::get('messege') }}");
                      break;
                  case 'error':
                      toastr.error("{{ Session::get('messege') }}");
                      break;
              }
            @endif
         </script>  

  </div>

@yield('allReport')
@yield('viewAdminProfile')
@yield('editAdminProfile')
@yield('addEmployee')
@yield('employeeList')
@yield('updateEmployee')
@yield('viewEmployee')
@yield('addAgent')
@yield('agentList')
@yield('updateAgent')
@yield('viewAgent')
@yield('allTransactionList')
@yield('bankTransactionList')
@yield('taxTransactionList')
@yield('agentTransactionList')
@yield('customerTransactionList')
@yield('topUp')
@yield('notice')
@yield('noticelist')  
@yield('offer')
@yield('report')
@yield('changePassword')









  </div>
</div>
</body>
</html>
