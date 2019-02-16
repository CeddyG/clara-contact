<?php

namespace CeddyG\ClaraContact\Repositories;

use CeddyG\QueryBuilderRepository\QueryBuilderRepository;

class ContactRepository extends QueryBuilderRepository
{
    protected $sTable = 'contact';

    protected $sPrimaryKey = 'id_contact';
    
    protected $sDateFormatToGet = 'd/m/Y';
    
    protected $aRelations = [
		'contact_category'
    ];

    protected $aFillable = [
		'fk_contact_category',
        'mail_contact',
		'subject_contact',
		'text_contact'
    ];

    public function contact_category()
    {
        return $this->belongsTo('CeddyG\ClaraContact\Repositories\ContactCategoryRepository', 'fk_contact_category');
    }
}
