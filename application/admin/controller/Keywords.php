<?php  
namespace app\admin\controller;
/**
* 
*/
class Keywords extends Common
{
	
	public function keywordslist(){
		//关键字列表显示
		$keywords_select = db('keywords')->paginate(20);
		if ($keywords_select) {
			$this->assign('keywords_select',$keywords_select);
			return view();
		}
		else{
			$this->redirect('index/index');
		}
	}

	public function add(){
		//添加关键字显示界面
		return view();
	}

	public function addhanddle(){
		$post = request()->post();
		$validate = validate('keywords');
		if (!$validate->check($post)) {
			$this->error($validate->getError(),'keywords/add');
		}
		$keywords_add_result = db('keywords')->insert($post);
		if($keywords_add_result){
			$this->success('关键字添加成功','keywords/keywordslist');
		}
		else{
			$this->error('关键字添加失败','keywords/keywordslist');
		}
	}
	public function validform(){
		return view();
	}
	public function validform1(){
		if(request()->isAjax()){
			$post = request()->post();
			$keywords_find = db('keywords')->where('keywords_name','eq',$post['param'])->find();
			if ($keywords_find) {
				return array(
					'status'	=>	'n',
					'info'	=>	'关键字'.$post['param'].'已经存在'
				);
			}
			else{
				return array(
					'status'	=>	'true',
					'info'	=>	'关键字'.$post['param'].'可以使用'
				);
			}
		}
	}


    public function upd($keywords_id=""){
        //属性修改界面的显示
        $keywords_find = db('keywords')->find($keywords_id);
        if ($keywords_find==null) {
            $this->redirect('keywords/keywordslist');
        }
        $this->assign('keywords_find',$keywords_find);

        $cate_select = db('cate')->select();
        //获取全部分类
        $cate_model = model('Cate');
        $cate_list1 = $cate_model->getChildren($cate_select);
        //获取无限级分类列表，多维数组
        $this->assign('cate_list1',$cate_list1);
        $cate_in = $cate_model->getFatherId($cate_select,$keywords_find['keywords_pid']);
        $cate_in_new['one'] = $cate_in[0];
        $cate_in_new['two'] = $cate_in[1];
        $cate_in_new['three'] = $cate_in[2];
        $this->assign('cate_in',$cate_in_new);
        return view();

    }

    public function updhanddle(){
        //属性修改提交的方法
        $post = request()->post();
        $keywords_upd_result = db('keywords')->update($post);
        if ($keywords_upd_result!==false) {
            $this->success('商品修改成功','keywords/keywordslist');
        }
        else{
            $this->error('商品修改失败','keywords/keywordslist');
        }
    }

    public function del($keywords_id=''){
        //删除管理员的方法
        $keywords_find = db('keywords')->find($keywords_id);
        if (empty($keywords_find)) {
            $this->redirect('keywords/keywordslist');
        }
        $keywords_del_result = db('keywords')->delete($keywords_id);
        if ($keywords_del_result) {
            $this->success('删除成功','keywords/keywordslist');
        }
        else{
            $this->error('删除失败','keywords/keywordslist');
        }
    }

}
?>