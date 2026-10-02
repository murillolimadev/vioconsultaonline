<ul class="nav nav-secondary">
    {{-- <li class="nav-item">
        <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="dashboard">
            <ul class="nav nav-collapse">
                <li>
                    <a href="">
                        <span class="sub-item">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </li> --}}

    <li class="nav-item">
        <a href="{{ route('home.pages.atpve.index') }}">
            <i class="fas fa-layer-group"></i>
            <p>Emitir ATPV-e</p>
            {{-- <span class="caret"></span> --}}
        </a>
        <a href="{{ route('home.pages.crlv.verde') }}">
            <i class="fas fa-layer-group"></i>
            <p>Emitir CRLV Verde</p>
            {{-- <span class="caret"></span> --}}
        </a>
        <a href="{{ route('home.pages.dut.index') }}">
            <i class="fas fa-layer-group"></i>
            <p>Emitir Recibo (DUT)</p>
            {{-- <span class="caret"></span> --}}
        </a>
        <a href="{{ route('home.pages.atpve.index') }}">
            <i class="fas fa-layer-group"></i>
            <p>Emitir ATPV-e</p>
            {{-- <span class="caret"></span> --}}
        </a>
        <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Emitir CNH-e</p>
            {{-- <span class="caret"></span> --}}
        </a>
        <a data-bs-toggle="collapsel" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Emitir CRV CDT-e</p>
            {{-- <span class="caret"></span> --}}
        </a>

    </li>

    <li class="nav-item" style="text-align: center">
        {{-- <form action="{{ route('logout']) }}" method="post">
            @csrf
            <button class="btn btn-dark form form-control" type="submit" style="border: 0px">
                {{ __('Sair') }}
            </button>
        </form> --}}
        <form action="{{ route('logout') }}" method="post">
            <button class="btn btn-dark form form-control" type="submit" style="border: 0px">
                {{ __('Sair') }}
            </button>
        </form>
    </li>

</ul>
