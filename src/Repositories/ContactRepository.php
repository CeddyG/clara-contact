<?php

namespace CeddyG\ClaraContact\Repositories;

use CeddyG\QueryBuilderRepository\QueryBuilderRepository;

class ContactRepository extends QueryBuilderRepository
{
    protected $sTable = 'contact';

    protected $sPrimaryKey = 'id_contact';
    
    protected $sDateFormatToGet = 'd/m/Y';
    
    protected $aRelations = [
        'users',
		'contact_category'
    ];

    protected $aFillable = [
        'fk_users',
		'fk_contact_category',
		'subject_contact',
		'text_contact'
    ];
    
   
    public function users()
    {
        return $this->belongsTo('App\Repositories\UserRepository', 'fk_users');
    }

    public function contact_category()
    {
        return $this->belongsTo('CeddyG\ClaraContact\Repositories\ContactCategoryRepository', 'fk_contact_category');
    }
}
