<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    /**
     * 与模型关联的数据表。
     * @var string
     */
    protected $table = 'category';
    /**
     * 执行模型是否自动维护时间戳.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     *
     * @var string  主键
     */
    protected $primaryKey='cate_id';
}
