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

    <li class="nav-item" style="background-color: #000;">
        <a href="">
            <i class="fa fa-sign-in"></i>
            <p style="padding-left: 40px">SAIR</p>
            <i class="fa fa-sign-out" aria-hidden="true"></i>

        </a>
    </li>

</ul>
