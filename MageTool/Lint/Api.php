<?php

class MageTool_Lint_Api
    extends MageTool_Lint_Abstract
{
    /**
     * Validate the XML config is correctly structured
     *
     * @return void
     * @author Alistair Stead
     **/
    public function validate($xml)
    {
        
    }
    
    /**
     * Can this lint class validate this file
     * 
     * Can only validate config.xml
     *
     * @return bool
     * @author Alistair Stead
     **/
    public function canValidate()
    {
        if (strstr($this->_filePath, 'api.xml')) {
            return true;
        }
        return false;
    }
}