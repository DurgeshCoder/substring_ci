<?php
class Dynamic_Dependent_model extends Model
{

    public function fetch_course() {
        return $this->db->get('training_courses')->result_array();
    }

    public function fetch_topic($course_id) {
        $this->db->where('subject_id', $category_id);
        return $this->db->get('course_topics')->result_array();
    }
// function fetch_course()
// {
//         $this->db->order_by("name","ASC");
//         $query = $this->db->get("training_courses");
//         return $query->result();
// }
// function fetch_topic($course_id){
//     $this->db->where('subject_id',$course_id);
//     $this->db->order_by('topic_name','ASC');
//     $query=$this->db->get('course_topics');
//     $output='<option value="">Select Topic</option>';
//     foreach($query->result() as $topic){
//         $output .='<option value="'.$topic->topic_id.'">'.$topic->topic_name.'</option>';
//     }
//     return $output; 
// }
}