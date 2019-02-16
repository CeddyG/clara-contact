<?php

namespace CeddyG\ClaraContact\Http\Controllers;

use App\Http\Controllers\Controller;

use CeddyG\ClaraContact\Http\Requests\ContactRequest;
use CeddyG\ClaraContact\Repositories\ContactRepository;
use CeddyG\ClaraContact\Repositories\ContactCategoryRepository;

class ContactController extends Controller
{
    protected $sEventBeforeStore    = '';
    protected $sEventAfterStore     = 'CeddyG\ClaraContact\Events\Contact\AfterStoreEvent';

    public function index(ContactCategoryRepository $oContactCategoryRepository)
    {
        $oCategories = $oContactCategoryRepository
            ->getFillFromView('clara-contact::index')
            ->all();
        
        return view('clara-contact::index', compact('oCategories'));
    }
    
    public function store(ContactRequest $oContactRequest, ContactRepository $oContactRepository)
    {
        $aInputs = $oContactRequest->all();
        
        if ($this->sEventBeforeStore != '')
        {
            event(new $this->sEventBeforeStore($aInputs));
        }
        
        $id = $oContactRepository->create($aInputs);
        
        if ($this->sEventAfterStore != '')
        {
            event(new $this->sEventAfterStore($id, $aInputs));
        }
        
        return redirect('/');
    }
}
