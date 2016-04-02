<?php

namespace App\Models\Access\Permission;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Permission\Traits\Relationship\PermissionDependencyRelationship;

/**
 * Class PermissionDependency
 * @package App\Models\Access\Permission
 */
class PermissionDependency extends Model
{
    use PermissionDependencyRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     *
     */
    public function __construct()
    {
        $this->table = config('access.permission_dependencies_table');
    }
}