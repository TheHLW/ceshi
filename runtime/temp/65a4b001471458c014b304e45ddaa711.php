<?php /*a:3:{s:76:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\config\setting.html";i:1539764547;s:74:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\index_layout.html";i:1539764547;s:71:"D:\phpstudy\PHPTutorial\WWW\tpcms\application\admin\view\inputItem.html";i:1539764547;}*/ ?>
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
    <div class="layui-card-body">
        <div class="layui-tab layui-tab-card">
            <ul class="layui-tab-title">
                <?php if(is_array($groupArray) || $groupArray instanceof \think\Collection || $groupArray instanceof \think\Paginator): $i = 0; $__LIST__ = $groupArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="<?php if($key==$group): ?>layui-this<?php endif; ?>"><a href="<?php echo url('admin/config/setting',['group'=>$key]); ?>"><?php echo htmlentities($vo); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="layui-tab-content">
                <blockquote class="layui-elem-quote news_search">
                    模板调用方法：{$Config['变量名']}
                </blockquote>
                <form class="layui-form form-horizontal" action="<?php echo url('admin/config/setting',['group'=>$group]); ?>" method="post">
                    <?php if(is_array($fieldList) || $fieldList instanceof \think\Collection || $fieldList instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;switch($vo['type']): case "text": ?>
<div class="layui-form-item">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <input type="text" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['value']); ?>">
    </div>
    <?php if($vo['remark']): ?>
    <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "number": ?>
<div class="layui-form-item">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <input type="number" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['value']); ?>">
    </div>
    <?php if($vo['remark']): ?>
    <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "switch": ?>
<div class="layui-form-item">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <input type="checkbox" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" lay-skin="switch" lay-text="ON|OFF" value="<?php echo htmlentities($vo['value']); ?>" <?php if(1==$vo[ 'value' ]): ?>checked='' <?php endif; ?>> </div> <?php if($vo['remark']): ?> <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "array": ?>
<div class="layui-form-item layui-form-text">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <textarea name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" class="layui-textarea"><?php echo htmlentities($vo['value']); ?></textarea>
    </div>
    <?php if($vo['remark']): ?>
    <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "checkbox": ?>
<div class="layui-form-item" pane="">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <input type="checkbox" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>][]" lay-skin="primary" title="<?php echo htmlentities($v); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array($key,$vo[ 'value' ])): ?>checked='' <?php endif; ?>> <?php endforeach; endif; else: echo "" ;endif; ?> </div> <?php if($vo['remark']): ?> <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "radio": ?>
<div class="layui-form-item">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <input type="radio" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($v); ?>" <?php if($key==$vo [ 'value' ]): ?>checked='' <?php endif; ?>> <?php endforeach; endif; else: echo "" ;endif; ?> </div> <?php if($vo['remark']): ?> <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "select": ?>
<div class="layui-form-item">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <select name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]">
            <option value=""></option>
            <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if($key==$vo[ 'value' ]): ?>selected="" <?php endif; ?>><?php echo htmlentities($v); ?> </option> <?php endforeach; endif; else: echo "" ;endif; ?> </select> </div> <?php if($vo['remark']): ?> <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "datetime": ?>
<div class="layui-form">
    <div class="layui-form-item">
        <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
        <div class="layui-input-block">
            <input type="text" class="layui-input test-item" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
        </div>
        <?php if($vo['remark']): ?>
        <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
    </div>
</div>
<script type="text/javascript">
layui.use(['laydate'], function() {
    var laydate = layui.laydate;
    lay('.test-item').each(function() {
        laydate.render({
            elem: this,
            trigger: 'click',
            type: 'datetime'
        });
    });

});
</script>
<?php break; case "textarea": ?>
<div class="layui-form-item layui-form-text">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <textarea placeholder="请输入<?php echo htmlentities($vo['title']); ?>" class="layui-textarea" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"><?php echo htmlentities($vo['value']); ?></textarea>
    </div>
    <?php if($vo['remark']): ?>
    <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; case "image": ?>
<div class="layui-form-item layui-form-text">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <div class="js-upload-image">
            <div id="file_list_<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="uploader-list"></div>
            <input type="hidden" name="<?php echo htmlentities($vo['name']); ?>" data-multiple="false" data-watermark='' data-thumb='' data-size="0" data-ext='' id="<?php echo htmlentities($vo['name']); ?>" value="">
            <div id="picker_web_site_logo">上传单张图片</div>
        </div>
    </div>
    <?php if($vo['remark']): ?>
    <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
    <!--<script type="text/javascript">
    layui.use('upload', function(){
        var $ = layui.jquery,upload = layui.upload;
        var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
        var inputdom = thisdom.next('input');
        var nowPicid=inputdom.val();
        var files={};
        if(''!=inputdom.val()){
            $.ajax({
                url : "<?php echo url('attachment/attachments/ajaxgetfileinfo'); ?>",
                type : 'post',
                dataType: "json",
                async: false,
                data : {ids: nowPicid},
                success : function(data){
                   if (''!=data) {
                      files=data;
                   }
                }
            });
        }
        if (!$.isEmptyObject(files)) {
            $('#demo1').attr('src', '/tpcms/public/uploads/'+files.path); //图片链接（base64）
        }
        var uploadInst = upload.render({
            elem: '#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>',
            url: "<?php echo url('attachment/attachments/upload',$vo['param']); ?>",
            //上传回调
            choose: function(obj){
                var files = this.files = obj.pushFile(); //将每次选择的文件追加到文件队列
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）
                })
            },
            //上传成功
            done: function(res){
                if(res.code < 0){
                    return layer.msg('上传失败');
                }
                console.log(res);
                inputdom.attr('value', res.id);
                return layer.msg('上传成功');
            }
        })
    })
    </script>-->
</div>
<?php break; case "Ueditor": ?>
<div class="layui-form-item layui-form-text">
    <label class="layui-form-label"><?php echo htmlentities($vo['title']); ?></label>
    <div class="layui-input-block">
        <script type="text/javascript" src="/tpcms/public/static/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" src="/tpcms/public/static/ueditor/ueditor.all.js"></script>
        <script type="text/javascript">
        layui.use([], function() {
            var <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?> = UE.getEditor('<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>', {
                initialFrameWidth: null,
                initialFrameHeight: 250,
                serverUrl: "<?php echo url('attachment/Ueditor/run'); ?>"
            });
        })
        </script>
        <script type="text/plain" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"><?php echo $vo['value']; ?></script>
    </div>
    <?php if($vo['remark']): ?>
    <div class="layui-form-mid layui-word-aux"><?php echo $vo['remark']; ?></div><?php endif; ?>
</div>
<?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
<script type="text/javascript" src="/tpcms/public/static/webuploader/webuploader.min.js"></script>
<link rel="stylesheet" href="/tpcms/public/static/webuploader/webuploader.css">
<script type="text/javascript">
jQuery(document).ready(function() {
    // 文件上传集合
    var webuploader = [];
    // 当前上传对象
    var curr_uploader = {};
    // 注册WebUploader事件，实现秒传
    if (window.WebUploader) {
        WebUploader.Uploader.register({

        })
    }
    $('.js-upload-image,.js-upload-images').each(function() {
        var $input_file = $(this).find('input');
        var $input_file_name = $input_file.attr('name');
        var $file_list = $('#file_list_' + $input_file_name);
        // 缩略图参数
        var $thumb = $input_file.data('thumb');
        // 水印参数
        var $watermark = $input_file.data('watermark');
        // 是否多图片上传
        var $multiple = $input_file.data('multiple');
        // 允许上传的后缀
        var $ext = $input_file.data('ext');
        // 图片限制大小
        var $size = $input_file.data('size');

        var uploader = WebUploader.create({
            // 选完图片后，是否自动上传。
            auto: true,
            // 去重
            duplicate: true,
            // 不压缩图片
            resize: false,
            compress: false,
            // swf文件路径
            swf: GV.WebUploader_swf,
            pick: {
                id: '#picker_' + $input_file_name,
                multiple: $multiple
            },
            server: GV.image_upload_url,
            // 图片限制大小
            fileSingleSizeLimit: $size,
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: $ext,
                mimeTypes: 'image/jpg,image/jpeg,image/bmp,image/png,image/gif'
            },
            // 自定义参数
            formData: {
                thumb: $thumb,
                watermark: $watermark
            }

        })
        console.log(uploader);
    });
});
</script>
                    <?php if(count($fieldList)): ?>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn ajax-post" lay-submit="" lay-filter="*" target-form="form-horizontal">立即提交</button>
                        </div>
                    </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

    
<script type="text/javascript" src="/tpcms/public/static/admin/js/common.js"></script>
<script>
layui.use(['element', 'form'], function() {
    var form = layui.form,
        element = layui.element,
        $ = layui.jquery;
});
</script>

</body>

</html>