<?php /* Smarty version Smarty-3.0.6, created on 2012-10-11 13:34:39
         compiled from "C:\wamp\www\m/tpl\add_music.html" */ ?>
<?php /*%%SmartyHeaderCode:2322150765a6f7233c0-66327685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae8e08db9443383783258274e5d368a5ab34ecbc' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\add_music.html',
      1 => 1320733684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2322150765a6f7233c0-66327685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\m\init\Drivers\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('addcss','yes');$_template->assign('editor','yes');$_template->assign('titlepre',"发布音乐"); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="contentTop"></div>
<div class="content">
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'add','a'=>'post'),$_smarty_tpl);?>
" id="form1" method="post">
  <div id="content">

    <div id="main">
  
      <h2 id="title">发布音乐</h2>
      <div id="pb-post-area">
      
      <div id="mountchange">
          <ul class="tabs">
           <li id="url_link" class="curr"><a href="javascript:void(0)" onclick="SelectLink(this)">引用地址</a></li>
         <!-- <li><a href="">搜索音乐</a></li> -->
          <?php if ($_smarty_tpl->getVariable('yb')->value['addmusic_up_switch']==1){?> <li id="url_upload"><a href="javascript:void(0)" onclick="SelectUpload(this)">本地上传</a></li><?php }?>
          </ul>
      </div>
      
    <div id="musicFrom">
        <input type="text"  id="musicurl" class="musicurl"  value="http://"  onfocus="musicMouse(this)" onblur="musicMosout(this,'u')" >
        <input type="button" id="urlParseLoading" value="添加地址" onclick="saveMusicList($('#musicurl').val())" style="padding:5px">
        <ul class="notice">
       	    <li>请输入来自虾米/优酷/土豆等网站的播放页面地址,注意不是FLASH地址</li>
            <li>您也可以直接输入后缀为MP3的网络音频链接地址</li>
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'help'),$_smarty_tpl);?>
" target="_blank">需要获取帮助?</a></li>
        </ul>
    </div> 

    <div id="musicUpload" style="display:none">
        <div class="upload" id="upload_mp3"> <input type="file" size="40" name="filedata" ext="mp3|wma|mid" style="margin:0px 0px 15px 0px; background-color:#FFF"/></div>
        您可以上传小于 <strong><?php echo formatBytes(array('size'=>$_smarty_tpl->getVariable('yb')->value['addmusic_upsize']),$_smarty_tpl);?>
</strong> 的 mp3 / wma / mid文件<div class="clear"></div>
        <ul class="notice">
       	    <li>如果您上传上传,则默认表明已经阅读<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'help'),$_smarty_tpl);?>
" target="_blank">使用帮助</a>和<a href="spUrl c=site a=service" target="_blank">服务条款</a>并遵守</li>

        </ul>
    </div>
    
  
    

    
     <div id="localMusic"></div>
         <div id="musicList">
         <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('body')->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
          <div class="list" img="<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['d']->value['pid'];?>
" type="<?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
">
          <div class="uri">已添加：<?php if ($_smarty_tpl->tpl_vars['d']->value['type']=='local'){?>来自本地音乐<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['d']->value['url'];?>
<?php }?></div>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['desc'];?>
" name="musicList[<?php echo $_smarty_tpl->tpl_vars['d']->value['pid'];?>
]"><a onclick="musicDItem(this)" href="javascript:void(0)">移除</a>
 
          </div>
         <?php }} ?>

            <div class="clear"></div>
         </div>
     
     
     
     
     
     
     
     
     
          <?php if (is_array($_smarty_tpl->getVariable('attach')->value)){?>
            <div id="media_lib">
          <h3 class="title">我的媒体库 <span>(您可以选用的媒体)</span> </h3>
          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="globox">
              <tr>
                <th width="30">ID</th>
                <th>名称</th>
                <th width="60">大小</th>
                <th width="40">类型</th>
                <th width="140">上传时间</th>
                <th width="100">操作</th>
              </tr>
                <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('attach')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
              <tr class="trg" id="attach_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value['blogdesc'];?>
 </td>
                <td align="center"><?php echo formatBytes(array('size'=>$_smarty_tpl->tpl_vars['d']->value['filesize']),$_smarty_tpl);?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['d']->value['mime'];?>
</td>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['d']->value['time'],"%Y/%m/%d %H:%M");?>
</td>
                <td align="center"><a href="javascript:void(0)" onclick="<?php echo attach_insert(array('file'=>$_smarty_tpl->tpl_vars['d']->value['path'],'name'=>$_smarty_tpl->tpl_vars['d']->value['blogdesc'],'id'=>$_smarty_tpl->tpl_vars['d']->value['id']),$_smarty_tpl);?>
">选用</a> /
                 <a href="javascript:void(0)" onclick="delAttach('<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
')" class="mdiea_del">删除</a></td>
              </tr>
                <?php }} ?>
            </table>
           </div>
           <?php }?>

        
        
        <div>
          <h3 class="title"> 标题 <span>(选填)</span> </h3>
          <input type="text" name="pb-text-title" id="pb-text-title" class="input" tabindex="1" value="<?php echo $_smarty_tpl->getVariable('blog')->value['title'];?>
">
        </div>
        
        <div>
          <h3 class="title">内容 <span>(选填)</span></h3>
          <span id="uploadpic"> 
          <span id="upload_bar"> 
           <div class="uploadBtn" id="upload_img"><span>上传图片</span><input type="file" size="1" name="filedata" ext="jpg,jpeg,gif,png" /></div> 
          </span>
        	  <span id="uploading" style="display:none">正在上传...</span> </span>
          <textarea name="textarea" id="textarea" style="width:100%; height:200px"><?php echo $_smarty_tpl->getVariable('body')->value['content'];?>
</textarea>
          <input type="hidden" name="urlmusic" id="urlmusic"  />
          <input type="hidden" name="useedit" id="useedit" value="0" />
           </div>


     
      
 
      </div>
      <div id="pb-action-holder"> 
          <a id="submit_music" class="blue-button">发布</a> 
          <a id="preview" class="gray-button">预览</a> 
          <a id="cancel" class="gray-button">取消</a> 
       <span style="display:none;" id="pb-submiting-tip">正在保存...</span>
      </div>
    </div>
    
 
    <div id="aside">
      <div class="aside-item" id="post-privacy-holder">
        <select id="post-privacy-select" name="post-privacy-select">
        <option value="1">所有人可见</option>
         <option value="0">保存为草稿</option>
        </select>
      </div>
      
      <hr class="separator">

      <div class="aside-item" id="post-tag-holder">
        <div id="post-tag">
          <ul class="clearfix" id="post-tag-list"><!--动态插入标签-->
          <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('myTag')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
          <li tag="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
<a href="javascript:void(0)" onclick="remTags(this)">x</a></li>
        <?php }} ?>
          </ul>
          <div id="post-tag-input-holder">
            <input type="text" id="post-tag-input" class="pb-tag-tip" value="">
          </div>
        </div>
      </div>
      
      <hr class="separator">
      
      <div class="aside-item" id="recommand-tag-holder">
        <h4>常用标签</h4>
        <ul class="clearfix" id="recommand-tag-list">
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('myTagUsually')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
          <li tag="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><a href="javascript:void(0)" onclick="tuiTag('<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
',this)"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></li>
        <?php }} ?>
        </ul>
        <div class="clear"></div>
      </div>
      <hr class="separator">
      
      <div class="aside-item pb-side-opt" id="top-post-holder">
        <label> 
        
         <?php if ($_smarty_tpl->getVariable('blog')->value['top']==1){?>
        <input type="checkbox" id="pb-top-post" name="pb-top-post" value="1" checked="checked">
        <?php }else{ ?>
           <input type="checkbox" id="pb-top-post" name="pb-top-post" value="1">
        <?php }?>
        文章置顶
        </label>
        <p class="top-post-tip">多个置顶将按照时间排序</p>
      </div>
      
      <div class="aside-item pb-side-opt" id="top-post-holder">
        <label>
        <?php if ($_smarty_tpl->getVariable('blog')->value['noreply']==1){?>
        <input type="checkbox" id="pb-nowrite-post" name="pb-nowrite-post" value="1" checked="checked">禁止评论
        <?php }else{ ?>
           <input type="checkbox" id="pb-nowrite-post" name="pb-nowrite-post" value="1">禁止评论
        <?php }?>
        </label>
        <p class="top-post-tip">本条内容不允许评论</p>
      </div>
       <hr class="separator">
      <!--
        <div class="aside-item pb-side-opt" id="top-post-holder">
         <label> <input name="pb-sync-to-qqweibo" type="checkbox" id="pb-sync-to-qqweibo" value="1">转发腾讯微薄</label>
      </div>
      
        <div class="aside-item pb-side-opt" id="top-post-holder">
         <label><input name="pb-sync-to-weibo" type="checkbox" id="pb-sync-to-weibo" value="1">转发新浪微薄</label>
      </div>
      -->
      <input type="hidden" name="blog-types" id="blog-types" value="2" />
      <input type="hidden" name="blog-open" id="blog-open" value="1" />
      <input type="hidden" name="blog-tags" id="blog-tags" value="" />
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('blog')->value['bid'];?>
" />
   
      
    </div>
    <div class="clear"></div>
  </div>
</form>
</div>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
