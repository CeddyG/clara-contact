<?php

namespace CeddyG\ClaraContact\Repositories;

use CeddyG\QueryBuilderRepository\QueryBuilderRepository;

class ContactCategoryRepository extends QueryBuilderRepository
{
    protected $sTable = 'contact_category';

    protected $sPrimaryKey = 'id_contact_category';
    
    protected $sDateFormatToGet = 'd/m/Y';
    
    protected $aRelations = [
        'contact'
    ];

    protected $aFillable = [
        'name_contact_category'
    ];
    
   
    public function contact()
    {
        return $this->hasMany('CeddyG\ClaraContact\Repositories\ContactRepository', 'fk_contact_category');
    }


}
