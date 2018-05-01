
@include("layout.head")
<body>

<div class="container">

    <form class="form-signin" method="POST" action="/register">
       {{csrf_field()}}
        <h2 class="form-signin-heading">请注册</h2>
        <label for="name" class="sr-only">名字</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="名字" required autofocus>
        <label for="inputEmail" class="sr-only">邮箱</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="邮箱" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="输入密码" required>
        <label class="sr-only">重复密码</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="重复输入密码" required>
         @include('layout.error')
        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
    </form>

</div> <!-- /container -->

</body>
</html>