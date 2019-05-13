<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //以下模型必做操作

    //定义模型关联的数据表（一个模型只操作一张表）
    protected $table = 'think_member';
    //定义主键
    protected $primaryKey='id';
    //定义禁止操作时间
    public $timestamps =flase;
    //设置允许写入的字段
    protected $fillable=['name','email','phone','age'];

}
