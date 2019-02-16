<?php

namespace CeddyG\ClaraContact\Http\Controllers\Admin;

use App\Http\Controllers\ContentManagerController;

use CeddyG\ClaraContact\Repositories\ContactCategoryRepository;

class ContactCategoryController extends ContentManagerController
{
    public function __construct(ContactCategoryRepository $oRepository)
    {
        $this->sPath            = 'clara-contact::admin.contact-category';
        $this->sPathRedirect    = 'admin/contact-category';
        $this->sName            = __('clara-contact::contact-category.contact_category');
        
        $this->oRepository  = $oRepository;
        $this->sRequest     = 'CeddyG\ClaraContact\Http\Requests\ContactCategoryRequest';
    }
}
