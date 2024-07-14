<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Advanced Search Filter</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            {!! Form::open(['url' => Request::url(), 'method' => 'get']) !!}

            <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                {!! Form::label('filter_parent_menu', 'Parent Menus') !!}
                {!! Form::select(
                    'filter_parent_menu',
                    ['0' => '--Select--'] + ExtensionsValley\Menumanager\Models\Menuitems::getParentMenus(0)->toArray(),
                    request()->has('filter_parent_menu') ? request()->get('filter_parent_menu') : '',
                    [
                        'class' => 'form-control select2',
                    ],
                ) !!}
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                {!! Form::label('filter_menu_type', 'Menu Type') !!}
                {!! Form::select(
                    'filter_menu_type',
                    ['0' => '--Select--'] + ExtensionsValley\Menumanager\Models\Menutypes::getMenuTypes()->toArray(),
                    request()->has('filter_menu_type') ? request()->get('filter_menu_type') : '',
                    [
                        'class' => 'form-control select2',
                    ],
                ) !!}
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                {!! Form::label('filter_status', 'Menu Item Status') !!}
                {!! Form::select(
                    'filter_status',
                    ['-1' => '--Select--', '0' => 'Unpublished', '1' => 'Published'],
                    request()->has('filter_status') ? request()->get('filter_status') : '',
                    [
                        'class' => 'form-control js-example-responsive filter_status select2',
                    ],
                ) !!}
            </div>

            <div class="form-group pull-right">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <a href="{{ Request::url() }}" class="btn btn-primary">Clear</a>
                    <button type="submit" class="btn btn-success">Filter</button>
                </div>
            </div>

            {!! Form::token() !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
