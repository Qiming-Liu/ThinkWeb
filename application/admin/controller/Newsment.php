<?php

namespace app\admin\controller;

use app\admin\model\News;

class Newsment extends Index
{
    public function edit()
    {
        if (!$this->accountok()) {
            $this->redirect(url('__PUBLIC__/index.php/admin/index/index'));
        }

        $title = input('param.title');
        $publisher = input('param.publisher');
        $content = input('param.content');
        if ($title <> '') {
            News::create([
                'title' => $title,
                'publisher' => $publisher,
                'content' => $content,
            ]);
            return $this->success('恭喜您公告添加成功^_^', 'edit');
        }
        return $this->fetch();
    }

    public function show()
    {
        if (!$this->accountok()) {
            $this->redirect(url('__PUBLIC__/index.php/admin/index/index'));
        }

        $show = new News();
        $show = News::where('id', '>', 0)->order('id', 'desc')->paginate(5);
        $this->assign('show', $show);
        return $this->fetch();
    }

    public function update()
    {

        if (!$this->accountok()) {
            $this->redirect(url('__PUBLIC__/index.php/admin/index/index'));
        }

        $id = input('id');
        $title = input('param.title');
        $publisher = input('param.publisher');
        $content = input('param.content');


        if (!$id) {
            return "id不能为空！";
        }

        // $show = Notice::get($id);
        // echo $id;
        // echo $show->title;
        $show = new News();

        $show = News::where('id', '=', $id)
            ->find();

        if ($title) {

            News::update([
                'id' => $id,
                'title' => $title,
                'publisher' => $publisher,
                'content' => $content,
            ]);

            return $this->success('信息修改成功^_^', 'show');
        }

        $this->assign('show', $show);
        return $this->fetch();
    }

    public function delete()
    {
        if (!$this->accountok()) {
            $this->redirect(url('__PUBLIC__/index.php/admin/index/index'));
        }

        $id = input('id');
        echo $id;
        if ($id <> '') {

            $user = News::where('id', '=', $id)->delete();


        }
        return $this->success('删除成功^_^', 'show');
    }
}