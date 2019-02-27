<?php

namespace CeddyG\ClaraContact\Http\Controllers\Admin;

use CeddyG\Clara\Http\Controllers\ContentManagerController;

use CeddyG\ClaraContact\Repositories\ContactRepository;

class ContactController extends ContentManagerController
{
    public function __construct(ContactRepository $oRepository)
    {
        $this->sPath            = 'clara-contact::admin.contact';
        $this->sPathRedirect    = 'admin/contact';
        $this->sName            = __('clara-contact::contact.contact');
        
        $this->oRepository  = $oRepository;
        $this->sRequest     = 'CeddyG\ClaraContact\Http\Requests\ContactRequest';
    }
    
    public function show($id)
    {
        $oItem = $this->oRepository
            ->getFillFromView($this->sPath.'/show')
            ->find($id);
        
        $sPageTitle = $this->sName;
        
        return view($this->sPath.'/show',  compact('oItem','sPageTitle'));
    }
}
