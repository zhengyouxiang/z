<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn 
//EMAIL:nxfte@qq.com QQ:234027573                              
//$Id: top.php 34 2011-10-28 16:56:54Z anythink $ 

class top extends spController
{
	
	 // 构造函数，进行全局操作的位置  
     function __construct(){  
         parent::__construct(); 
		 global $site_uri;
         $this->yb = $GLOBALS['YB'] + $GLOBALS['G_SP']['yb'];
		 $this->url = $site_uri;
     }  



	/*调用基本信息及通知信息*/
	protected function memberinfo()
	{
		if(islogin())
		{
			$this->user = spClass('db_user')->find(array('id'=>$_SESSION['uid'])); //用户信息
	

			$this->messagestate();
		}
	}
	
	public function messagestate($echo = 0)
	{
		if(islogin())
		{
			$newmsg = 0;
			//0 用户私信  1 评论通知  2 系统通知 3关注通知
			$where = "id ='{$_SESSION['uid']}'  and type in(1,2,3)";
			$this->notice = spClass('db_notice')->spLinker()->findAll( $where ,'id desc'); //未读通知
			$this->noticeCount =  $this->pmCount =  '';
			if($this->notice)
			{
				$newmsg = 1;
				$this->noticeCount = '<span>'.count($this->notice).'</span>';
			}
			
			$where = "id ='{$_SESSION['uid']}'  and type = 0";
			$this->pm = spClass('db_notice')->spLinker()->findAll( $where ,'id desc'); //未读通知
	
			if($this->pm)
			{
				$newpm = 1;
				$this->pmCount = '<cite>'.count($this->pm).'</cite>';
			}
			
	
			if($echo ==1)
			{
				$data['state'] = $newmsg;
				$data['pm'] = $newpm;
				$data['notice'] = $this->notice;
				$data['pm'] = $this->notice;
				echo json_encode($data);
			}
		}
		
		
	}
	
	/*处理信息tag user.c and  add.c used*/
	protected function __parse_mytag($mytag)
	{
		if($mytag != '')
		{
			$mytag = explode(',',$mytag);
			if(is_array($mytag)){ $this->myTag = $mytag; }
		}
	}
	
	


	

	/*无提示跳转*/
	public function jslocation($x)
	{
		exit('<script language="javascript" type="text/javascript"> parent.window.location.href="'.$x.'";</script>');
	}

	
	
	
}
?>