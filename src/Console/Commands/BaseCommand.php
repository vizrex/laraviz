<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

namespace Vizrex\Laraviz\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Description of BaseCommand
 *
 * @author Zeshan
 */
abstract class BaseCommand  extends Command
{
    /**
     * Create a new command instance.
     *
     * @return void
     */
    
    /*
     * Define namespace for translations
     */
    protected $namespace = null;
    
    /*
     * Default prefix for translations, usually it will be <namespace><default-translation-file>
     * e.g. mypkg.messages
     */
    protected $defaultTranslationFile = null;
    
    public function __construct()
    {
        parent::__construct();
        $this->setNamespace();
        $this->setDefaultTranslationFile();
    }
    
    protected function debug($string)
    {
        $this->info($string, OutputInterface::VERBOSITY_DEBUG);
    }
    
    protected function str($str, $replacements = [], $translationFile = null)
    {
        if($translationFile == null)
            $translationFile = $this->defaultTranslationFile;
        
        return __("$this->namespace::$translationFile.$str", $replacements);
    }
    
    abstract protected function setNamespace();
    protected function setDefaultTranslationFile()
    {
        $this->defaultTranslationFile = "strings";
    }
}