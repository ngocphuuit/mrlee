<?php

namespace App\Admin\Controllers;

use App\Models\Blog;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Request;

class BlogController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Blog');
            $content->description('Blog ...');
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('header');
            $content->description('description');
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('header');
            $content->description('description');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Blog::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title();
            $grid->description();
            // $grid->content();
            $grid->image()->image();
            $grid->top_flg();
            $grid->status();

            $grid->filter(function ($filter) {
                $filter->like('title');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Blog::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title');
            $form->text('description');
            $form->image('image')->move('blogs')->removable();
            $form->editor('content');
            $form->radio('status')->options([
                1 => 'Enable',
                0 => 'Disable',
            ])->stacked();
            $form->radio('top_flg')->options([
                1 => 'Yes',
                0 => 'No',
            ])->stacked();
        });
    }
}
