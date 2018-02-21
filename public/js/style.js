$(function(){
	console.log(1);
	// bootstrap tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// 表單驗證
	$('form').submit(function(){
	    var isFormValid = true;
	      $(this).find('input,select,textarea').each(function(){
	        var $this = $(this);
	        // 使用 trim 把空白去除
	        if ($.trim($this.val()).length === 0){
	          $this.tooltip('show').closest('div').addClass('error');
	          isFormValid = false;
	        }else if($this.val() == "請選擇"){
	        	$this.tooltip('show').closest('div').addClass('error');
	          isFormValid = false;
	        }else{
	          $this.tooltip('destroy').closest('div').removeClass('error');
	        }
	    });
	    return isFormValid;
	});

	$('.j_form input,.j_form select,.j_form textarea').hover(
		function(){
			$(this).siblings('label').addClass('hover');
	},function(){
			$(this).siblings('label').removeClass('hover');
	})
})