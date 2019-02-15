<?php

namespace ltuoaHg\umengOpenApi\com\umeng\brand\param; 

use ltuoaHg\umengOpenApi\com\alibaba\openapi\client\entity\SDKDomain;
use ltuoaHg\umengOpenApi\com\alibaba\openapi\client\entity\ByteArray;
use ltuoaHg\umengOpenApi\com\umeng\brand\param\UmengBrandMonitoringResult;

class UmengBrandAddMultiMonitoringResult
{

        	
    private $result;
    
    /**
     * @return 
     */
    public function getResult() 
    {
        return $this->result;
    }
    
    /**
     * 设置     
     * @param array include @see UmengBrandMonitoringResult[] $result     
     * 此参数必填     
     */
    public function setResult(UmengBrandMonitoringResult $result)
    {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) 
    {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
    		$resultResult=$this->stdResult->{"result"};
			$object = json_decode ( json_encode ( $resultResult ), true );
			$this->result = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new ArrayObject ( $object [$i] );
				$UmengBrandMonitoringResultResult=new UmengBrandMonitoringResult();
				$UmengBrandMonitoringResultResult->setArrayResult($arrayobject );
				$this->result [$i] = $UmengBrandMonitoringResultResult;
			}
		}
    }
	
	private $arrayResult;

	public function setArrayResult($arrayResult)
    {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    		$this->result = new UmengBrandMonitoringResult();
    		$this->result->setStdResult ( $resultResult);
    	}
    }

}
