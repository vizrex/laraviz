<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

namespace Vizrex\Laraviz\Models;

use Vizrex\Laraviz\Traits\LaravizModel;
use Vizrex\Exceptions\FileNotFoundException;
use Maatwebsite\Excel\Files\ExcelFile;

/**
 * Description of RolesAndPermissionsCSV
 *
 * @author Zeshan
 */
class CSV extends ExcelFile
{    
    protected $csvFilePath;
    
    /*
     Uncomment and update following properties, if required
     
     protected $delimiter  = ',';
     protected $enclosure  = '"';
     protected $lineEnding = '\r\n';
     
     */
    
    public function __construct(string $strCsvFilePath)
    {
        if(empty($strCsvFilePath) || !file_exists($strCsvFilePath))
        {
            throw new FileNotFoundException($strCsvFilePath." not found");
        }
        
        $this->csvFilePath = $strCsvFilePath;
    }
    
    // @override ExcelFile
    public function getFile(): string
    {
        return $this->csvFilePath;
    }
       

    public static function getInstance(string $strCsvFilePath)
    {
        return new CSV($strCsvFilePath);
    }   

}
