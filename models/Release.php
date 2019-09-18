<?php namespace Papa\Musicreleases\Models;

use Model;
use Papa\Musicreleases\Models\Artist;
use Papa\Musicreleases\Models\Releasetype;

/**
 * Model
 */
class Release extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    
    public $belongsTo = [
        'artist' => 'Papa\Musicreleases\Models\Artist',
        'type' => 'Papa\Musicreleases\Models\Releasetype'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'papa_musicreleases_releases';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getTitle()
    {
        return $this->title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getArtist()
    {
        $artist = Artist::where('id', $this->artist_id)->get()->first();   
        return $artist->name;
    }

    public function getType()
    {
        $type = Releasetype::where('id', $this->type_id)->get()->first();   
        return $type->name;
    }
}
