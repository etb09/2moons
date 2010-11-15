function ajax(url){
	$('#background-content').load(url);
}

function showRecaptcha(element) 
{
	if(IsCaptchaActive == 0)
		return;
		
	Recaptcha.create(cappublic, 'display_captcha', {
		theme: 'custom',
		lang: 'de',
		tabindex: '6',
		custom_theme_widget: 'display_captcha'
	});
}

function fbLogincheck() {
	FB.Connect.requireSession(function() {
		FB.Facebook.apiClient.users_hasAppPermission('email', function (permsare) { 
			if(!permsare){
				FB.Connect.showPermissionDialog('email', function(perms) {
					if (perms) {
						document.location = "index.php?page=facebook";
					} else {
						alert(fb_permissions);
					}
				});
			} else {
				document.location = "index.php?page=facebook";
			}
		});
	});
}

function buttonOver(obj)
{
	if($(obj).hasClass('button-important'))
		$(obj).toggleClass('button-important-over');
	else if($(obj).hasClass('button-normal'))
		$(obj).toggleClass('button-normal-over');
}

function buttonOut(obj){
	if($(obj).hasClass('button-important'))
		$(obj).toggleClass('button-important-over');
	else if($(obj).hasClass('button-normal'))
		$(obj).toggleClass('button-normal-over');
}
