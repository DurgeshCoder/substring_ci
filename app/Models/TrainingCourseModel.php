<?php

namespace App\Models;

use App\Entities\TrainingCourse;
use CodeIgniter\Model;

class TrainingCourseModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'training_courses';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = TrainingCourse::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        "id",
        "title",
        "short_description",
        "long_description",
        "fee",
        "discounted_fee",
        "mode",
        "coverImage",
        "certificate_url",
        "duration",
        "admission_open",
        "start_date"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
