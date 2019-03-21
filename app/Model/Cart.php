<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * 与模型关联的数据表。
     * @var string
     */
    protected $table = 'cart';
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
    protected $primaryKey='cart_id';
}
