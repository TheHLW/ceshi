<?php /*a:2:{s:85:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\auth_manager\edit_group.html";i:1539764547;s:74:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\index_layout.html";i:1539764547;}*/ ?>
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
    <div class="layui-card-header"><?php echo !empty($auth_group['id']) ? '编辑' : '新增'; ?>权限组</div>
    <div class="layui-card-body">
        <form class="layui-form form-horizontal" action="<?php echo url('admin/AuthManager/writeGroup'); ?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">权限组</label>
                <div class="layui-input-block w300">
                    <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="权限组" class="layui-input" value="<?php echo htmlentities($auth_group['title']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">描述</label>
                <div class="layui-input-block w300">
                    <textarea name="description" required lay-verify="required" placeholder="权限的相关描述" class="layui-textarea"><?php echo htmlentities($auth_group['description']); ?></textarea>
                </div>
            </div>
            <?php if(isset($auth_group['id'])): ?><input type="hidden" name="id" value="<?php echo htmlentities($auth_group['id']); ?>" /><?php endif; ?>
            <div class="layui-form-item">
                <div class="layui-input-block w300">
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