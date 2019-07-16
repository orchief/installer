<?php
// +----------------------------------------------------------------------
// | Description: 公开地址服务
// +----------------------------------------------------------------------
// | Author: orchief
// +----------------------------------------------------------------------
// | Date: 2019-02-22 13:49:55
// +----------------------------------------------------------------------

namespace app\base\validate;

use Utility\Validate;

class BaseAddress extends Validate
{
    protected $rule = array(
        'areaId' => 'require',
        'areaCode' => 'require|length:1,50',
        'areaName' => 'require|length:1,20',
        'level' => 'in:1,2,3,4',
        'cityCode' => 'length:1,50',
        'center' => 'length:1,50',
    );
    protected $field = array(
        'areaId' => '地区Id',
        'areaCode' => '地区编码',
        'areaName' => '地区名',
        'level' => '地区级别（1:省份province,2:市city,3:区县district,4:街道street）',
        'cityCode' => '城市编码',
        'center' => '城市中心点（即：经纬度坐标）',
        'parentId' => '地区父节点',
    );
    protected $scene = [
        "create" => ["areaId","areaCode","areaName","level","cityCode","center","parentId"],
        "update" => [
        'areaCode' => 'length:1,50',
        'areaName' => 'length:1,20',
        'level' => 'in:1,2,3,4',
        'cityCode' => 'length:1,50',
        'center' => 'length:1,50',
        ]
    ];
}

