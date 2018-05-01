@extends("admin.layout.main")
@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">用户列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/users/create" >增加用户</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>用户名称</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>test1</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/users/2/role" >角色管理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>test2</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/users/3/role" >角色管理</a>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection