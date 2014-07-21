@extends('layout.index')

@section('content')
<!--<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
           Sadam Husen
        </div>
    </div>
    ini adalah (at)yield('content')
</div>-->
<div class="row">
    <div class="col-md-9 col-md-push-3">
      <div class="panel panel-default">
    <div class="panel-heading text-center">
        Dosen BumigoraNET
    </div>
    <div class="panel-body">

        <table class='table table-striped table-hover table-bordered text-center'>
            <thead>
             <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Server</th>
                            <th class="text-center">User</th>
                            <th class="text-center">Name serangan</th>
                            <th class="text-center">IP Address</th>
                            <th class="text-center">Hotspot</th>
                            <th class="text-center">Action</th>
                        </tr>
            </thead>
            <tbody>
                    
            </tbody>
        </table>
    </div>
</div>
    </div>

    <div class="col-md-3 col-md-pull-9">
        <div class="panel panel-default">
            <div class="panel-heading text-center">Hotspot</div>
            <div class="list-group">
                <a class="list-group-item">
                    <span class="badge pull-right">10</span>
                    Mahasiswa BumigoraNET
                </a>

            </div>
            <div class="list-group">
                <a class="list-group-item">
                    <span class="badge pull-right">10</span>
                    Lab BumigoraNET
                </a>

            </div>
            <div class="list-group">
                <a class="list-group-item">
                    <span class="badge pull-right">10</span>
                    Dosen BumigoraNET
                </a>

            </div>
        </div>

    </div>
</div>

@stop