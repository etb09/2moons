{if !$getajax}{include file="public/index_header.tpl"}{/if}
<table id='registration' class='box-complex box box-full box1'><tr><td><table class='box1_box-header box-header'><tr><td class='box1_box-header-left box-header-left'>&nbsp;</td><td class='box1_box-header-center box-header-center'>&nbsp;</td><td class='box1_box-header-right box-header-right'>&nbsp;</td></tr></table></td></tr><tr><td><table class='box1_box-content box-content'><tr><td class='box1_box-content-left box-content-left'>&nbsp;</td><td class='box1_box-content-center box-content-center'><div class='box1_content'><center>
                          <div id='logo_v2'></div>
                          <br />
                          <br /></center><table id='registration-inside' class='box-complex box box-compact box5' style="width:80%"><tr><td><table class='box5_box-header box-header'><tr><td class='box5_box-header-left box-header-left'>&nbsp;</td><td class='box5_box-header-center box-header-center'><div class='box5_box-title-wrapper box-title-wrapper'><div class='box5_box-title-container box-title-container'><table class='box5_box-title box-title'><tr><td class='box5_box-title-left box-title-left'>&nbsp;</td>
<td class='box5_box-title-center box-title-center'>{$lost_pass_title}</td><td class='box5_box-title-right box-title-right'>&nbsp;</td></tr></table></div></div></td><td class='box5_box-header-right box-header-right'>&nbsp;</td></tr></table></td></tr><tr><td><table class='box5_box-content box-content'><tr><td class='box5_box-content-left box-content-left'>&nbsp;</td><td class='box5_box-content-center box-content-center'><div class='box5_content'><div class='box5_box-title-pad box-title-pad'>&nbsp;</div><table class='layout' cellpadding='5' width='80%'><tr><th colspan='2' width='80%'>
<form name="lostpassword" action="index.php?page=lostpassword&mode=send&lang={$lang}" method="post">
<table style="width:100%;text-align:center;padding-top:3px;" align="center">
<tr>
<td>{$uni_reg}</td>
<td><select name="Uni" id="Uni" style="width: 188px;">
            {html_options options=$AvailableUnis selected=$UNI}
			</select>
</td></tr><tr><td>
{$email}:</td><td>
<input name="email" style="width: 183px;" class="input-text" type="text">
</td></tr>
<tr><td colspan="2"><input value="{$send}" class="input-button" type="submit"></td></tr>
</table>
  </form></th></tr>
</table></div></td><td class='box5_box-content-right box-content-right'>&nbsp;</td></tr></table></td></tr><tr><td><table class='box5_box-footer box-footer'><tr><td class='box5_box-footer-left box-footer-left'>&nbsp;</td><td class='box5_box-footer-center box-footer-center'>&nbsp;</td><td class='box5_box-footer-right box-footer-right'>&nbsp;</td></tr></table></td></tr></table><div class='box1_box-status-pad box-status-pad'>&nbsp;</div></div></td><td class='box1_box-content-right box-content-right'>&nbsp;</td></tr></table></td></tr><tr><td><table class='box1_box-footer box-footer'><tr><td class='box1_box-footer-left box-footer-left'>&nbsp;</td><td class='box1_box-footer-center box-footer-center'><div class='box1_box-status-wrapper box-status-wrapper'><div class='box1_box-status-container box-status-container'><table class='box1_box-status box-status'><tr><td class='box1_box-status-left box-status-left'>&nbsp;</td><td class='box1_box-status-center box-status-center'></td>
<td class='box1_box-status-right box-status-right'>&nbsp;</td></tr></table></div></div></td><td class='box1_box-footer-right box-footer-right'>&nbsp;</td></tr></table>
<table class='box1_box-footer box-footer'><tr><td class='box1_box-footer-left box-footer-left'>&nbsp;</td><td class='box1_box-footer-center box-footer-center'><div class='box1_box-status-wrapper box-status-wrapper'><div class='box1_box-status-container box-status-container'><table class='box1_box-status box-status'><tr><td class='box1_box-status-left box-status-left'>&nbsp;</td>
<td class='box1_box-status-center box-status-center'>&nbsp;</td>
<td class='box1_box-status-right box-status-right'>&nbsp;</td></tr></table></div></div></td><td class='box1_box-footer-right box-footer-right'>&nbsp;</td></tr></table></td></tr></table>
{if !$getajax}{include file="public/index_footer.tpl"}{/if}