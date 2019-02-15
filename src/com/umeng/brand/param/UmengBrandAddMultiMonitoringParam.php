<?php

namespace ltuoaHg\umengOpenApi\com\umeng\brand\param; 

use ltuoaHg\umengOpenApi\com\alibaba\openapi\client\entity\SDKDomain;
use ltuoaHg\umengOpenApi\com\alibaba\openapi\client\entity\ByteArray;
use ltuoaHg\umengOpenApi\com\umeng\brand\param\UmengBrandMonitoring;

class UmengBrandAddMultiMonitoringParam 
{

        
    /**
     * @return 多个监测单元信息
     */
    public function getMonitorings() 
    {
        $tempResult = $this->sdkStdResult["monitorings"];
        return $tempResult;
    }
    
    /**
     * 设置多个监测单元信息     
     * @param array include @see UmengBrandMonitoring[] $monitorings     
     * 参数示例：<pre></pre>     
     * 此参数必填     
     */
    public function setMonitorings(UmengBrandMonitoring $monitorings) 
    {
        $this->sdkStdResult["monitorings"] = $monitorings;
    }
    
        
    private $sdkStdResult = array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
