<?php
///**
// * @author 张星 "775397252@qq.com"
// * Date: 2017/12/28
// * Time: 16:40
// */
//
//namespace App\Handler;
//
//
//use App\Models\Response;
//use Illuminate\Support\Facades\Validator;
//
//class ValidateHandler
//{
//    /***
//     * 响应成功返回的函数
//     *
//     * @param $message
//     * @param $content
//     * @param int $status
//     * @return \Illuminate\Http\JsonResponse
//     * @internal param $data
//     */
//    public function success($message, $content=[], $status=Response::SUCCESS)
//    {
//        $data['data'] = $content;
//        $data['status'] = $status;
//        $data['msg'] = $message;
//        return response()->json($data, 200);
//    }
//
//    /***
//     * 响应错误返回的函数
//     *
//     * @param $message
//     * @param array $content
//     * @param int $status
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function error($message, $content=[], $status=Response::PARAMETER_ERROR)
//    {
//        $data['status'] = $status;
//        $data['msg'] = $message;
//        $data['data'] = $content;
//        return response()->json($data, 200);
//    }
//
//    /***
//     * 验证字段属性
//     *
//     * @param $all
//     * @param $rules
//     * @param bool $message
//     * @return array|bool|string
//     */
//    public function validate($all,$rules,$message=false){
//        if(!$message){
//            $message=$this->getMessage();
//        }
//        $validator = Validator::make($all, $rules,$message);
//        if ($validator->fails()) {
//            $array = array_flatten($validator->errors()->toArray());
//            $message=implode(' ',$array);
//            return $message;
//        }
//        return false;
//    }
//
//    /***
//     * 返回验证message
//     * @return array
//     */
//    public function getMessage(){
//        return [
//            'required' => '字段 :attribute 是必须的.',
//            'unique' => '该数据已经存在.',
//            'between' => '字段 :attribute 必须在 :min - :max.之间',
//        ];
//    }
//
//
//}
