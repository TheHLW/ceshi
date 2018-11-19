<?php /*a:2:{s:76:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\adminlog\index.html";i:1539764547;s:74:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\index_layout.html";i:1539764547;}*/ ?>
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
    <div class="layui-card-header">管理日志</div>
    <div class="layui-card-body">
        <div class="layui-btn-container">
            <button class="layui-btn layui-btn-sm" id="Table-Refresh">刷新</button>
            <button class="layui-btn layui-btn-sm  layui-btn-danger ajax-get confirm" url="<?php echo url('admin/adminlog/deletelog'); ?>">删除一个月前日志</button>
        </div>
        <table class="layui-hide" id="table"></table>
    </div>
</div>

    
<script type="text/javascript" src="/tpcms/public/static/admin/js/common.js"></script>
<script>
layui.use('table', function() {
    var table = layui.table,
        $ = layui.$;
    table.render({
        elem: '#table',
        url: '<?php echo url("admin/adminlog/index"); ?>',
        cols: [
            [
                { field: 'id', width: 80, title: 'ID', sort: true },
                { field: 'uid', width: 80, title: '用户ID' },
                { field: 'info', title: '提示' },
                { field: 'get', title: '操作URL' },
                { field: 'create_time', width: 180, title: '时间' },
                { field: 'ip', width: 100, title: 'IP' },
                { field: 'status', width: 100, title: '状态', templet: '<div>{{#  if(d.status){ }} success {{#  } else { }} <font color="#FF0000">error</font> {{#  } }} </div>' },
            ]
        ],
        page: {}
    });
    $('#Table-Refresh').on('click', function() {
        table.reload("table");
    });
});
</script>

</body>

</html>