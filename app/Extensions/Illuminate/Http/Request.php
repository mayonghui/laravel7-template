<?php


namespace App\Extensions\Illuminate\Http;

use Illuminate\Http\Request as parentRequest;

/**
 * 扩展request
 * Class Request
 * @package App\Extension\Illuminate\Http
 */
class Request extends parentRequest
{
    public function expectsJson()
    {
        return $this->mustJson() || parent::expectsJson();
    }

    /**
     * 返回json
     *
     * @param Request $request
     * @return bool
     */
    public function mustJson()
    {
        if(
            $this->is("admin/*")    //admin的接口统一返回json
        ){
            return true;
        }else{
            return false;
        }
    }

}
