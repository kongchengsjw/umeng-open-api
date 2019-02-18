<?php

namespace kongchengsjw\umeng\uapp\param; 

use kongchengsjw\client\entity\SDKDomain;
use kongchengsjw\client\entity\ByteArray;

class UmengUappGetAllAppDataParam
{

    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
    	return $this->sdkStdResult;
    }

}
