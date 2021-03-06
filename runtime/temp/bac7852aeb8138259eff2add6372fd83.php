<?php /*a:2:{s:75:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\manager\index.html";i:1539764547;s:74:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\index_layout.html";i:1539764547;}*/ ?>
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
    <div class="layui-card-header">管理员管理</div>
    <div class="layui-card-body">
        <div class="layui-form">
            <div class="layui-btn-container">
                <a class="layui-btn layui-btn-sm" href="<?php echo url('admin/manager/add'); ?>">添加管理员</a>
            </div>
            <table class="layui-hide" id="table" lay-filter="table"></table>
            <script type="text/html" id="barTool">
                <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
            </script>
        </div>
    </div>
</div>

    
<script type="text/javascript">
layui.use('table', function() {
    var table = layui.table,
        $ = layui.$;
    table.render({
        elem: '#table',
        url: '<?php echo url("admin/manager/index"); ?>',
        cols: [
            [
                { field: 'userid', width: 80, title: 'ID'},
                { field: 'username', width: 80, title: '登录名'},
                { field: 'roleid', width: 120, title: '所属角色'},
                { field: 'last_login_ip', title: '最后登录IP' },
                { field: 'last_login_time', width: 200, title: '最后登录时间' },
                { field: 'email',width: 200, title: 'E-mail' },
                { field: 'nickname', title: '真实姓名' },
                { fixed: 'right', width: 160, title: '操作', toolbar: '#barTool' }
            ]
        ],
    });

    //监听行工具事件
    table.on('tool(table)', function(obj) {
        var data = obj.data;
        //console.log(obj);
        if (obj.event === 'del') {
            layer.confirm('确定删除这条数据？', { icon: 3, title: '提示' }, function(index) {
                layer.close(index);
                $.post('<?php echo url("admin/manager/del"); ?>', { 'id': data.userid }, function(data) {
                    if (data.code == 1) {
                        if (data.url) {
                            layer.msg(data.msg + ' 页面即将自动跳转~');
                        } else {
                            layer.msg(data.msg);
                        }
                        setTimeout(function() {
                            if (data.url) {
                                location.href = data.url;
                            } else {
                                location.reload();
                            }
                        }, 1500);
                    } else {
                        layer.msg(data.msg);
                        setTimeout(function() {
                            if (data.url) {
                                location.href = data.url;
                            }
                        }, 1500);
                    }

                });
            });
        }else if (obj.event === 'edit') {
            window.open('<?php echo url("admin/manager/edit"); ?>' + "?id=" + data.userid, '_self')
        }
    });
});
</script>

</body>

</html>