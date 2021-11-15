<?php
namespace app\Exceptions;
use Throwable;
use App\Models\Entry;
class InvalidEntrySlugException extends \Exception{
    public function __construct(Entry $entry,$message = "",$code = 0, Throwable $previus = null)
    {
        $this->entry =$entry;
        parent::__construct($message,$code,$previus);
    }
        public function render(){
            return redirect($this->entry->getUrl());
        }

}


