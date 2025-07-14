<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container ">
        
        <a class="navbar-brand" href="#">CRM</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav text-center">
            
           


            @Auth
                <li class="nav-item">
                    <a class="nav-link" href="">Report</a>   
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Transactions</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="">Add transaction </a>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="">Budgets</a>   
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Add Budget</a>   
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Categories</a>   
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Add Category</a> 
                </li>
      
            @endauth

            </ul>

            
              

            
        </div>

    </div>

        @auth
        
            <span class="badge badge-secondary m-1 fs-5">
                Hi there, {{Auth::user()->name}}
            </span>


        <form action="" method="POST" class="m-0">
            {{-- action="{{route('logout')}}" --}}
            @csrf
            <button class="btn btn-outline-success my-2 my-sm-0 m-1" type="submit">Log out</button>
        </form>
        @endauth
</nav>