<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class FullTextSearch extends Model
{
    use Notifiable;
    use SearchableTrait;

    protected $fillable = [
        'CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country',
    ];

    protected $searchable = [
        'columns' => [
            'full_text_searches.CustomerName' => 10,
            'full_text_searches.Gender' => 10,
            'full_text_searches.Address' => 10,
            'full_text_searches.City' => 10,
            'full_text_searches.PostalCode' => 10,
            'full_text_searches.Country' => 10,
            'full_text_searches.id' => 10
        ]
    ];
}
