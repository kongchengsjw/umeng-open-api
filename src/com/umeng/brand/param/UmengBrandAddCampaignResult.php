<?php

namespace kongchengsjw\umengOpenApi\com\umeng\brand\param;

use kongchengsjw\umengOpenApi\com\alibaba\openapi\client\entity\SDKDomain;
use kongchengsjw\umengOpenApi\com\alibaba\openapi\client\entity\ByteArray;

class UmengBrandAddCampaignResult
{

        	
    private $campaignId;
    
    /**
     * @return 活动id
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }
    
    /**
     * 设置活动id     
     * @param Integer $campaignId       
     * 此参数必填    
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult)
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "campaignId", $this->stdResult )) {
    		$this->campaignId = $this->stdResult->{"campaignId"};
    	}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult) 
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "campaignId", $this->arrayResult )) {
    		$this->campaignId = $arrayResult['campaignId'];
    	}
    }

}
