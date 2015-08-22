<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuoteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(\Auth::check()) return true;
        
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => 'required|min:20',
            'source' => 'required|min:4',
            'source_link' => 'url'
        ];
    }
    
    public function all()
    {
        $lastQuote = \App\Model\Quote::orderBy('show_at', 'desc')->first(['show_at']);
        $data = parent::all();
        $data['show_at'] = $lastQuote->show_at->addDay();
        return $data;
    }
    
    public function updateAllExceptShowAt()
    {
        return parent::all();
    }
}
