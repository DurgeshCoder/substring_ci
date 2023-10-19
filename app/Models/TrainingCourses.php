<?php

namespace App\Models;

use CodeIgniter\Model;


class TrainingCourses extends Model

{




    protected $DBGroup          = 'default';
    protected $table            = 'training_courses';
    protected $primaryKey       = 'course_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "course_id",
        "name",
        "short_description",
        "long_description",
        "admission",
        "fee",
        "discounted_fee",
        "mode",
        "cover_image",
        "certificate_url",
        "duration",
        "admission_open",
        "start_date",
        "rating",
        "slug",
        "instructor",
        "course_resourses",

    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
