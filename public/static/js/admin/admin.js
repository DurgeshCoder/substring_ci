

// api calls
const base_url='http://localhost:8080'

const  get_all_courses=async ()=>{
   const result=await  fetch(`${base_url}/api/get-all-courses`).then((data)=>{
    return data.json()
  })
 return result
}




// get  topics of courses
const get_topics_of_course=(course_id)=>{
// http://localhost:8080/api/get-topics-of-course/3
    return fetch(`${base_url}/api/get-topics-of-course/${course_id}`).then((data)=>data.json())
}


// get subtopic of topic
const get_subtopic_of_topic=(topic_id)=>{
  return fetch(`${base_url}/api/get-subtopic-of-topic/${topic_id}`).then((data)=>data.json())
}
