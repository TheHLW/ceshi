<?php /*a:2:{s:84:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\attachment\view\attachments\index.html";i:1539764547;s:74:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\index_layout.html";i:1539764547;}*/ ?>
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
    <div class="layui-card-header">附件管理</div>
    <div class="layui-card-body">
        <table class="layui-hide" id="table"></table>
    </div>
</div>

    
<script>
layui.use('table', function() {
    var table = layui.table,
        $ = layui.$;
    table.render({
        elem: '#table',
        url: '<?php echo url("attachment/attachments/index"); ?>',
        cols: [
            [
                { field: 'id', width: 80, title: 'ID', sort: true },
                { field: 'uid', width: 80, title: '用户ID' },
                { field: 'name', title: '名称' },
                { field: 'size', title: '大小',sort: true },
                { field: 'create_time', width: 180, title: '上传时间' },
            ]
        ],
        page: {}
    });
});
</script>

</body>

</html>