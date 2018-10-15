<?php

namespace Vizrex\Http\Resources;

use App\Enums\ResponseType;
use Illuminate\Http\Resources\Json\Resource;

class BaseResource extends Resource
{
    public static $defaultResponseType = ResponseType::FULL;
    private $responseType;
    
    
    public function __construct($resource, $responseType)
    {
        if(empty($responseType))
            $responseType = self::$defaultResponseType;
        
        $this->responseType = $responseType;
        parent::__construct($resource);
    }
    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if(empty($this->responseType))
            $this->responseType = self::$defaultResponseType;
        
        return $this->responseType == ResponseType::COMPACT ?
            $this->toCompactArray($request) :
            $this->toFullArray($request);
        
    }
    
    public function toCompactArray($request)
    {
        return parent::toArray($request);
    }
    
    public function toFullArray($request)
    {
        return parent::toArray($request);
    }
}
