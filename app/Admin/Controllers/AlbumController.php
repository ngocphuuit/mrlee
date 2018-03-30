<?php

namespace App\Admin\Controllers;

use App\Models\Album;
use App\Models\Category;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Request;

class AlbumController extends Controller
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
            $content->header('Album');
            $content->description('Album ...');
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
        return Admin::grid(Album::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('Title');
            $grid->description('Description');
            $grid->category()->name();
            $grid->status('Status');
            $grid->image()->image();
            $grid->top_flg('Top Flg');

            // if (Request::get('view') !== 'table') {
            //     $grid->setView('admin.grid.card');
            // }
            

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
        return Admin::form(Album::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title')->rules('required');
            $form->textarea('description')->rules('required');
            $form->select('category_id')->options(Category::all()->pluck('name', 'id'));
            $form->radio('status')->options([
                1 => 'Enalble',
                0 => 'Disable',
            ])->stacked();
            $form->radio('top_flg')->options([
                1 => 'Yes',
                0 => 'No',
            ])->stacked();
            $form->image('image', 'Hình đại diện')->move('albums')->removable();
            $form->multipleImage('images')->move('albums')->removable();
        });
    }
}
