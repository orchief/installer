<?php
// +----------------------------------------------------------------------
// | Description: 公开地址服务
// +----------------------------------------------------------------------
// | Author: orchief
// +----------------------------------------------------------------------
// | Date: 2019-02-22 13:49:55
// +----------------------------------------------------------------------

namespace app\base\controller;

use Utility\Controller;

/**
 * @route('base/address')
 */
class Address extends Controller
{
    public $modelName = 'Address';
    /**
    * @OA\Get(
    *     path="/base/address",
    *     tags={"公开地址服务"},
    *     summary="获取全部公开地址服务",
    *     @OA\Parameter(
    *         name="areaId",
    *         in="query",
    *         description="地区Id",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *             format="string",
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="areaCode",
    *         in="query",
    *         description="地区编码",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *             format="string",
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="areaName",
    *         in="query",
    *         description="地区名",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *             format="string",
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="level",
    *         in="query",
    *         description="地区级别（1:省份province,2:市city,3:区县district,4:街道street）",
    *         required=false,
    *         @OA\Schema(
    *             type="integer",
    *             format="string",
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="cityCode",
    *         in="query",
    *         description="城市编码",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *             format="string",
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="center",
    *         in="query",
    *         description="城市中心点（即：经纬度坐标）",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *             format="string",
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="parentId",
    *         in="query",
    *         description="地区父节点",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *             format="string",
    *         )
    *     ),
    *     @OA\Response(
    *     response=200,
    *     description="公开地址服务列表",
    *     @OA\JsonContent(
    *     type="array",
    *     @OA\Items(
    *                   @OA\Property(
    *                       property="areaId",
    *                       description="地区Id",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="areaCode",
    *                       description="地区编码",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="areaName",
    *                       description="地区名",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="level",
    *                       description="地区级别（1:省份province,2:市city,3:区县district,4:街道street）",
    *                       type="integer"
    *               ),
    *                   @OA\Property(
    *                       property="cityCode",
    *                       description="城市编码",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="center",
    *                       description="城市中心点（即：经纬度坐标）",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="parentId",
    *                       description="地区父节点",
    *                       type="string"
    *               ),
    *
    *     )
    *     )
    *     )
    * )
    */
    use \Rest\Index;

    /**
    * @OA\Get(
    *     path="/base/address/{id}",
    *     tags={"公开地址服务"},
    *     summary="获取公开地址服务",
    *     @OA\Parameter(
    *         name="id",
    *         in="path",
    *         description="主键",
    *         required=false,
    *         @OA\Schema(
    *             type="integer",
    *             format="int64",
    *         )
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="公开地址服务",
    *         @OA\JsonContent(
*                   @OA\Property(
    *                       property="areaId",
    *                       description="地区Id",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="areaCode",
    *                       description="地区编码",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="areaName",
    *                       description="地区名",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="level",
    *                       description="地区级别（1:省份province,2:市city,3:区县district,4:街道street）",
    *                       type="integer"
    *               ),
    *                   @OA\Property(
    *                       property="cityCode",
    *                       description="城市编码",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="center",
    *                       description="城市中心点（即：经纬度坐标）",
    *                       type="string"
    *               ),
    *                   @OA\Property(
    *                       property="parentId",
    *                       description="地区父节点",
    *                       type="string"
    *               ),
    *     ),
    *     ),
    * )
    */
    use \Rest\Read;


}