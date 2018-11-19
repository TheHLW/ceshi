<?php /*a:2:{s:73:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\manager\add.html";i:1539764547;s:74:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\index_layout.html";i:1539764547;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>YZNCMS后台管理系统</title>
    <meta name="author" content="YZNCMS">
    <link rel="stylesheet" href="/tpcms/public/static/layui/css/layui.css">
    <link rel="stylesheet" href="/tpcms/public/static/admin/css/admin.css">
    <link rel="stylesheet" href="/tpcms/public/static/admin/font/iconfont.css">
    <script src="/tpcms/public/static/layui/layui.js"></script>
    <script src="/tpcms/public/static/jquery/jquery.min.js"></script>
<script type="text/javascript">
//全局变量
var GV = {
    'image_upload_url': '<?php echo !empty($image_upload_url) ? htmlentities($image_upload_url) :  url("attachment/attachments/upload", ["dir" => "images", "module" => request()->module()]); ?>',
    'WebUploader_swf': '/tpcms/public/static/webuploader/Uploader.swf',
};
</script>
</head>
<body class="childrenBody">

    
<div class="layui-card">
	<div class="layui-card-header">添加管理员</div>
    <div class="layui-card-body">
        <form class="layui-form form-horizontal" action="<?php echo url('admin/manager/add'); ?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">用户名</label>
                <div class="layui-input-inline">
                    <input type="text" name="username" lay-verify="username" autocomplete="off" placeholder="用户名" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">3-15位字符，可由字母和数字，下划线"_"及破折号"-"组成。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">密码</label>
                <div class="layui-input-inline">
                    <input type="password" name="password" lay-verify="password" autocomplete="off" placeholder="密码" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">6-20位字符，可由英文、数字及标点符号组成</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">确认密码</label>
                <div class="layui-input-inline">
                    <input type="password" name="password_confirm" lay-verify="password_confirm" autocomplete="off" placeholder="确认密码" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">请再次输入您的密码</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">E-mail</label>
                <div class="layui-input-inline">
                    <input type="text" name="email" lay-verify="email" autocomplete="off" placeholder="E-mail" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">填写完整邮箱，如 yzncms@163.com</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">真实姓名</label>
                <div class="layui-input-inline">
                    <input type="text" name="nickname" lay-verify="nickname" autocomplete="off" placeholder="真实姓名" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">权限组</label>
                <div class="layui-input-inline">
                    <select name="roleid" lay-filter="roleid">
                        <?php if(is_array($roles) || $roles instanceof \think\Collection || $roles instanceof \think\Paginator): $i = 0; $__LIST__ = $roles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['title']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn ajax-post" lay-submit="" lay-filter="*" target-form="form-horizontal">立即提交</button>
                    <button class="layui-btn layui-btn-normal" onClick="javascript :history.back(-1);">返回</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
<script type="text/javascript" src="/tpcms/public/static/admin/js/common.js"></script>

</body>

</html>