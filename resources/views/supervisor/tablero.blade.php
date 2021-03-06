@extends('layout.general')
@section('breadcumb')
<li class="active">Dashboard</li>
@endsection
@section('menu')
<li class="active"><a href="/tablero"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
<li><a href="/Categorias"><em class="fa fa-calendar">&nbsp;</em> CATEGORIAS</a></li>
<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
    <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
        </a></li>
    </ul>
</li>
<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div><!--/.row-->

<div class="panel panel-container">
    <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                    <div class="large">120</div>
                    <div class="text-muted">New Orders</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                    <div class="large">52</div>
                    <div class="text-muted">Comments</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                    <div class="large">24</div>
                    <div class="text-muted">New Users</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                    <div class="large">25.2k</div>
                    <div class="text-muted">Page Views</div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>

@endsection