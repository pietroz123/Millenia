<div class="dashboard-logo">
    <a class="navbar-brand" href="{{ route('dashboard.index') }}">
        <img src="{{ asset('img/icons/logo.svg') }}" class="navbar-brand-logo" alt="Ícone Millenia">
        <span class="brand">Millenia</span>
    </a>
</div>

<hr>

<div class="user-info">
    <img src="https://image.flaticon.com/icons/svg/74/74472.svg" class="rounded-circle user-image" alt="">
    <div class="d-flex flex-column justify-content-center ml-3">
        <span class="user-name">{{ Auth::user()->name }}</span>
    </div>
</div>

<hr>

<div>

    <span class="dashboard-sidebar-divider mt-2">Navegação</span>
    <ul class="dashboard-sidebar-items">
        <li class="dashboard-sidebar-item">
            <a href="{{ route('agenda.index') }}" class="{{ setActive('agenda.index') }}">
                <i class="far fa-calendar-alt"></i>
                Agenda
            </a>
        </li>
        <li class="dashboard-sidebar-item">
            <a href="{{ route('clientes.index') }}" class="{{ setActive('clientes.index') }}">
                <i class="fas fa-user"></i>
                Clientes
            </a>
        </li>
        <li class="dashboard-sidebar-item">
            <a href="{{ route('profissionais.index') }}" class="{{ setActive('profissionais.index') }}">
                <i class="fas fa-users"></i>
                Profissionais
            </a>
        </li>
        <li class="dashboard-sidebar-item">
            <a href="{{ route('produtos.index') }}" class="{{ setActive('produtos.index') }}">
                <i class="fas fa-box-open"></i>
                Produtos
            </a>
        </li>
        <li class="dashboard-sidebar-item">
            <a href="{{ route('servicos.index') }}" class="{{ setActive('servicos.index') }}">
                <i class="fas fa-cut"></i>
                Serviços
            </a>
        </li>
        <li class="dashboard-sidebar-item">
            <a href="{{ route('pacotes.index') }}" class="{{ setActive('pacotes.index') }}">
                <i class="fas fa-tag"></i>
                Pacotes
            </a>
        </li>
        <li class="dashboard-sidebar-item">
            <a href="{{ route('comandas.index') }}" class="{{ setActive('comandas.index') }}">
                <i class="far fa-file-alt"></i>
                Comandas
            </a>
        </li>
        {{-- <li class="dashboard-sidebar-item">
            <a href="#!" class="{{ setActive('') }}">
                <i class="fas fa-chart-pie"></i>
                Relatórios
            </a>
        </li> --}}
        <li class="dashboard-sidebar-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>

</div>