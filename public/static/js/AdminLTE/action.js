function deleteConfirm (id,url,title) {
    bootbox.confirm({
        title: "删除一个"+title,
        message: "是否确定要删除此"+title+"？删除之后不能恢复。",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> 取消'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> 确定'
            }
        },
        callback: function (result) {
            if (result) {
                $.ajax({ url: url, data: {"id":id}, success: function(){
                    $("#node-"+id).remove();
                }});
            }
        }
    });
}