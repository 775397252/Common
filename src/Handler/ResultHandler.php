<?php
/**
 * Created by 张星.
 * User: 张星
 * Date: 2017/12/1 0001
 * Time: 10:35
 */

namespace Common\Handler;


class ResultHandler
{
    private  $message;
    private  $status;
    private  $data;

    /**
     * Result constructor.
     * @param $status
     * @param $message
     * @param array $data
     */
    public function __construct($status,$message,$data)
    {
        $this->message=$message;
        $this->status=$status;
        $this->data=$data;
    }

    /***
     * 操作成功
     *
     * @param $message
     * @param array $data
     * @return ResultHandler
     * 时间：2018/7/31
     * Author：@Rufo 775397252@qq.com
     */
    public static function ok($message='',$data=[]) {
        return new ResultHandler(true,$message,$data);
    }

    /***
     * 操作失败
     * @param string $message
     * @param array $data
     * @return ResultHandler
     * 时间：2018/7/31
     * Author：@Rufo 775397252@qq.com
     */
    public static function error($message='',$data=[]) {
        return new ResultHandler(false,$message,$data);
    }
    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

}
