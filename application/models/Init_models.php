<?php  
   class Init_models extends CI_Model  
   {  
      function __construct()  
      {  
          // Call the Model constructor  
          parent::__construct();  
          
          $this->load->database(); 
      }  
     
      //Select User tables data    
      public function get_user_credentials($username, $password)  
      {  
          $query = $this->db->query("SELECT * FROM tbl_users where BINARY username='".$username."'  and password = '" . md5($password) . "'");
         return $query->result_array();
      }

    


      //Insert course data
      public function insertcourse($data)  
      {  
            return $this->db->insert('tbl_course', $data);
      }
      //Insert course data
      public function insert_category($data)  
      {  
            return $this->db->insert('tbl_category', $data);
      }
        //dynamic added categories
      public function get_cat()  

      {  
           //$query = $this->db->query("SELECT * from tbl_category where category_type='course'");
            //$query = $this->db->query("SELECT tbl_category.*,tbl_course.course_category FROM tbl_category LEFT JOIN tbl_course ON tbl_category.category_id=tbl_course.course_category where category_type='course'");
           // $query = $this->db->query("SELECT tbl_category.*,tbl_course.course_category FROM tbl_category LEFT JOIN tbl_course ON tbl_category.category_id=tbl_course.course_category where category_type='course' GROUP BY tbl_course.course_category");

            //$query = $this->db->query("SELECT tbl_category.*,tbl_course.course_category FROM tbl_category LEFT JOIN tbl_course ON tbl_category.category_id=tbl_course.course_category where category_type='course' GROUP BY tbl_course.course_category");
$query = $this->db->query("SELECT * from tbl_course where course_approve = '1' GROUP BY course_category ");

            
            return $query->result_array();

      }
       public function get_categories()  
      {  
           $query = $this->db->query("SELECT * from tbl_category where category_type='course'");
            //$query = $this->db->query("SELECT tbl_category.*,tbl_course.course_category FROM tbl_category LEFT JOIN tbl_course ON tbl_category.category_id=tbl_course.course_category where category_type='course'");
           // $query = $this->db->query("SELECT tbl_category.*,tbl_course.course_category FROM tbl_category LEFT JOIN tbl_course ON tbl_category.category_id=tbl_course.course_category where category_type='course' GROUP BY tbl_course.course_category");

            //$query = $this->db->query("SELECT tbl_category.*,tbl_course.course_category FROM tbl_category LEFT JOIN tbl_course ON tbl_category.category_id=tbl_course.course_category where category_type='course' GROUP BY tbl_course.course_category");


            
            return $query->result_array();

      }


      public function get_category_details($cat_id)  
       {  
        $query = $this->db->query("select * from tbl_category where category_id = '".$cat_id."'"); 
       return $query->result_array();
      }

      public function update_category($data)  
       {  
        $id = $data['category_id'];
        $this->db->where('category_id', $id);
        return $this->db->update('tbl_category', $data);
      }
 

       
       public function get_school_categories()  
      {  
           $query = $this->db->query("SELECT * from tbl_category where category_type='school'");
            return $query->result_array();
      }
       public function get_ques_cat()  
     
      {  
          $query = $this->db->query("SELECT * from tbl_questions GROUP BY question_category ");
          return $query->result_array();
        }
      public function get_Que_categories()  
      {  
           $query = $this->db->query("SELECT * from tbl_category where category_type='question'");
         //$query = $this->db->query("SELECT tbl_category.*,tbl_questions.question_category FROM tbl_category LEFT JOIN tbl_questions ON tbl_category.category_id=tbl_questions.question_category where tbl_category.category_type='question' GROUP BY tbl_questions.question_category");

          // $query = $this->db->query("SELECT * from tbl_category where category_type='question'");
         //$query = $this->db->query("SELECT tbl_category.*,tbl_questions.question_category FROM tbl_category LEFT JOIN tbl_questions ON tbl_category.category_id=tbl_questions.question_category where category_type='question' GROUP BY tbl_questions.question_category");

            return $query->result_array();
      }
       public function get_project_cat()  
     
      {  
          $query = $this->db->query("SELECT * from tbl_projects GROUP BY project_category ");
          return $query->result_array();
        }
       public function get_project_categories()  
      {  
           $query = $this->db->query("SELECT * from tbl_category where category_type='project'");
            return $query->result_array();
      }
      //Insert School Information data
      public function addschooluser($data)  
      {  
            return $this->db->insert('tbl_users', $data);
      }
      //Select User tables data    
      public function getueserid($schooluseremailid)  
      {  
            $query = $this->db->query("SELECT user_id FROM tbl_users where user_email ='".$schooluseremailid."'");
            return $query->row_array();
      }
       //Insert School Information data
      public function addschooldata($data)  
      {  
            return $this->db->insert('tbl_school_meta', $data);
      }
       //Insert User registration data
      public function add_front_user($data)  
      {  
            return $this->db->insert('tbl_users', $data);
      }
       //Select User tables data    
      public function getfrontueserid($emailid)  
      {  
            $query = $this->db->query("SELECT user_id FROM tbl_users where user_email = '".$emailid."'");
            return $query->row_array();
      }
        //Insert School Information data
      public function adduserdetails($data)  
      {  
            return $this->db->insert('tbl_user_meta', $data);
      }
//Insert Post Project
      public function insert_project($data)
      {
        return $this->db->insert('tbl_projects', $data);
      }
      public function insert_question($data)
      {
        return $this->db->insert('tbl_questions', $data);
      }
      
       public function insert_contact($data)
      {
        return $this->db->insert('tbl_contact', $data);
      }
      public function insert_enquiry($data)
      {
        return $this->db->insert('tbl_enquiry', $data);
      }

      public function add_anews($data){
         $this->db->insert('tbl_posts', $data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
      }
          

      public function add_advertise($data){
         $this->db->insert('tbl_advertise', $data);
         $insert_id = $this->db->insert_id();
         return  $insert_id;
      }

function get_user_id_by_uname($uname){
        $query = $this->db->query("SELECT * FROM tbl_users where BINARY username='".$uname."'");
         return $query->result_array();
}


 public function sendpmessage($data)  
      {  
            return $this->db->insert('tbl_message', $data);
      }
       

       // Privacy Table Actions

      public function insertprivacy($data)  
      {  
            return $this->db->insert('tbl_vacancy', $data);
      }

      function getvacanydetails($vac_id){
        $query = $this->db->query("select * from tbl_vacancy where vacancy_id = '" .$vac_id. "'");
         return $query->result_array();

      }
      
      public function selectnews()  
      {  
       
        $query = $this->db->query("select tbl_posts.*,tbl_users.user_id,tbl_users.username,tbl_postresponse.pparent_id from tbl_posts LEFT JOIN tbl_users on tbl_users.user_id = tbl_posts.user_id LEFT JOIN tbl_postresponse on tbl_postresponse.post_id=tbl_posts.post_id where tbl_posts.post_type = 'news'&& tbl_posts.post_approve = 1 GROUP BY tbl_posts.post_id ORDER BY tbl_posts.post_date DESC,tbl_posts.post_time  DESC limit 10 "); 
       
        return $query->result_array();
      }
       public function selectallnews()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'news'"); 
        return $query->result_array();
      }
       public function selectalltips()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'tips' ORDER BY post_date DESC,post_time DESC"); 
        return $query->result_array();
      }
        public function selectabout()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'aboutus'"); 
        return $query->result_array();
      }
       public function selectgist()  
      {  
        //$query = $this->db->query("select tbl_user_meta.user_id ,tbl_user_meta.user_avatar, tbl_posts.post_id, tbl_posts.post_attachment, tbl_posts.post_desc, tbl_posts.post_title, tbl_posts.post_author, tbl_posts.post_category, tbl_posts.post_time, tbl_posts.post_date from tbl_user_meta join tbl_posts on tbl_user_meta.user_id = tbl_posts.user_id where tbl_posts.post_type = 'gist' && tbl_posts.post_approve = 1 limit 10");
        $query = $this->db->query("select tbl_posts.*,tbl_user_meta.user_id,tbl_user_meta.user_avatar,
          tbl_postresponse.pparent_id from tbl_posts LEFT JOIN tbl_user_meta on 
          tbl_user_meta.user_id = tbl_posts.user_id LEFT JOIN tbl_postresponse on 
          tbl_postresponse.post_id=tbl_posts.post_id where tbl_posts.post_type = 'gist' 
          and post_approve = 1 GROUP BY tbl_posts.post_id");

         
         
        return $query->result_array();
      }

      public function side_gist()  
      {  
       
          
          $query = $this->db->query("select tbl_posts.post_id, tbl_posts.post_title,tbl_posts.post_type,tbl_posts.post_date,tbl_posts.post_time,tbl_posts.post_author,tbl_posts.post_category,tbl_posts.user_id,tbl_postlikes.post_id,tbl_postlikes.plike_id,count(tbl_postlikes.plikes_count) as maxcount from tbl_posts join tbl_postlikes on tbl_posts.post_id = tbl_postlikes.post_id where tbl_posts.post_type = 'gist' and tbl_posts.post_approve=1 group by tbl_postlikes.post_id order by maxcount desc");
         
        return $query->result_array();
      }
       public function selecttips()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'tips'"); 
        return $query->result_array();
      }
       public function selectprivacy()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'privacy'"); 
        return $query->result_array();
      }
       public function selectallgist()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'gist'"); 
        return $query->result_array();
      }
       public function selectevent()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'event' && post_approve = 1"); 
        return $query->result_array();
      }
      public function selectallevent()  
      {  
        $query = $this->db->query("select * from tbl_posts where post_type = 'event'"); 
        return $query->result_array();
      }
     
       public function selectproject()  
      {  
        $query = $this->db->query("select * from  tbl_projects where project_approve = 1"); 
        return $query->result_array();
      }
       public function selectallproject()  
      {  
        $query = $this->db->query("select * from  tbl_projects"); 
        return $query->result_array();
      }
       public function selectallcategory()  
      {  
        $query = $this->db->query("select * from tbl_category"); 
        
        return $query->result_array();

      }
       public function selecttender()  
      {  
        $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1"); 
         return $query->result_array();
      }
      public function selectalltender()
      {  
        $query = $this->db->query("select * from tbl_vacancy ORDER BY vacancy_date DESC,vacancy_time DESC"); 
        return $query->result_array();
      }
      
      public function selectalluser()
      {  
        $query = $this->db->query("select * from tbl_users"); 
        return $query->result_array();
      }

      public function selectschool()  
      {  
        $query = $this->db->query("select tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id where school_approve = 1"); 
        return $query->result_array();
      }
      public function selectallschool()  
      {  
        $query = $this->db->query("select tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id ORDER BY tbl_school_meta.school_date DESC,tbl_school_meta.school_time DESC "); 
        return $query->result_array();

      }
       public function selectcourse($limit, $start)  
      {  
        $sql = "select * from tbl_course where course_approve = 1 limit " .$start. " , " .$limit; 
        $query = $this->db->query($sql);
        return $query->result_array();
      }
       public function selectallcourse()  
      {  
        $query = $this->db->query("select * from tbl_course left join tbl_category on tbl_course.course_category = tbl_category.category_id ORDER BY tbl_course.course_date DESC,tbl_course.course_time DESC"); 
        return $query->result_array();
      }
      public function selectquestion()  
      {  
        $query = $this->db->query("select * from tbl_questions where question_approve = 1"); 
        return $query->result_array();
      }
       public function selectallquestion()  
      {  
        $query = $this->db->query("select * from tbl_questions"); 
        return $query->result_array();
      }
       public function selectadvertise()  
      {  
        $query = $this->db->query("select * from tbl_advertise"); 
        return $query->result_array();
      }

      public function edit_news($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
      public function edit_tips($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
      
      public function edit_about($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
       public function edit_privacy($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }


      public function edit_event($data){
         $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
       public function edit_gist($data){
        echo $id = $data['post_id'];
        $this->db->where('post_id', $id);
        return $this->db->update('tbl_posts', $data);
      }
       public function edit_course($data){
        echo $id = $data['course_id'];
        $this->db->where('course_id', $id);
        return $this->db->update('tbl_course', $data);
      }

      public function edit_tender($data){
        echo $id = $data['vacancy_id'];
        $this->db->where('vacancy_id', $id);
        return $this->db->update(' tbl_vacancy', $data);
      }
        public function edit_advertise($data){
        echo $id = $data['advertise_id'];
        $this->db->where('advertise_id', $id);
        return $this->db->update('tbl_advertise', $data);
      }

       public function edit_project_topic($data){
        echo $id = $data['project_id'];
        $this->db->where('project_id', $id);
        return $this->db->update('tbl_projects', $data);
      }
     

       public function edit_school($data){
        echo $id = $data['school_id'];
        $this->db->where('school_id', $id);
        return $this->db->update('tbl_school_meta', $data);
      }
      public function edit_question($data){
        echo $id = $data['question_id'];
        $this->db->where('question_id', $id);
        return $this->db->update('tbl_questions', $data);
      }


      public function update_front_user($data){
        $id = $data['user_id'];
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_users', $data);
      }

public function edit_front_user($data){
        $id = $data['user_id'];
        $uname = $data['username'];
        $fname = $data['first_name'];
        $lname = $data['last_name'];
        $email = $data['user_email'];
        $this->db->set('username', $uname);
        $this->db->set('first_name', $fname);
        $this->db->set('last_name', $lname);
        $this->db->set('user_email', $email);
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_users', $data);

      }
      

      public function updateuserdetails($data){
        $id = $data['user_id'];
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_user_meta', $data);
      }

     function get_course($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_course where course_name like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
         return $query->result_array();
    }
      function get_course_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_course where course_name like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function getadvertisebanners()  
      {  
          $query = $this->db->query("SELECT * FROM tbl_advertise where isactive=true");
         return $query->result_array();
      }

      function get_currentuser_details($sessid){

        $query = $this->db->query("select tbl_users.username, tbl_users.first_name, tbl_users.last_name, tbl_users.user_email, tbl_users.user_role, tbl_user_meta.school_type, tbl_user_meta.user_school, tbl_user_meta.user_level, tbl_user_meta.user_dept, tbl_user_meta.user_gender, tbl_user_meta.mobile_no, tbl_user_meta.user_avatar, tbl_user_meta.user_birth, tbl_user_meta.marital_status, tbl_user_meta.interested_in, tbl_user_meta.about_user, tbl_user_meta.user_interest, tbl_user_meta.user_hobby from tbl_users INNER JOIN tbl_user_meta On tbl_users.user_id = tbl_user_meta.user_id where tbl_users.user_id = '" .$sessid. "'");
         return $query->result_array();

      }
function getcontactdetails($sessid){

        $query = $this->db->query("select tbl_users.first_name, tbl_users.last_name, tbl_users.user_email,  tbl_user_meta.mobile_no from tbl_users INNER JOIN  tbl_user_meta On tbl_users.user_id =  tbl_user_meta
          .user_id where tbl_users.user_id = '" .$sessid. "'");
         return $query->result_array();

      }
      function getadvertisingdetails($sessid){

        $query = $this->db->query("select tbl_users.first_name, tbl_users.user_email, tbl_user_meta.mobile_no from tbl_users INNER JOIN tbl_user_meta On tbl_users.user_id = tbl_user_meta.user_id where tbl_users.user_id = '" .$sessid. "'");
         return $query->result_array();

      }

      function geteventdetails($event_id){

        //$query = $this->db->query("select * from tbl_posts where post_type='event'  and post_id = '" .$event_id. "'");
        $query = $this->db->query("select tbl_posts.* , tbl_postresponse.pparent_id from tbl_posts LEFT JOIN tbl_postresponse on tbl_postresponse.post_id=tbl_posts.post_id where tbl_posts.post_type='event' and tbl_posts.post_id = '" .$event_id. "' GROUP BY tbl_posts.post_id");
         return $query->result_array();
      }

      function getcoursedetails($course_id){

        $query = $this->db->query("select * from tbl_course where substring(md5(course_id),1,6) = '" .$course_id. "'");
         return $query->result_array();
      }

      function getuserdetails($sessid){

        $query = $this->db->query("select * from tbl_users where user_id = '" .$sessid. "'");
         return $query->result_array();
      }


    /*  function getmessage($sessid){

        $query = $this->db->query("select * from tbl_message where user_id = '" .$sessid. "'");
         return $query->result_array();
      }

      function getsentmessage($sessid){

        $query = $this->db->query("select count(*) as row_count from tbl_message where user_id = '" .$sessid. "'");
         return $query->result()[0]->row_count;
      }
*/
      function getinboxmessage($sessid){

        $query = $this->db->query("select count(*) as row_count from tbl_message where pm_send_to = '" .$sessid. "'");
         return $query->result()[0]->row_count;
      }

      function gethomenews(){
        $query = $this->db->query("select * from tbl_posts where post_type = 'news' and post_approve = 1");
         return $query->result_array();

      }

       function gethomeschool(){
        $query = $this->db->query("select school_name,school_id, school_logo from tbl_school_meta where school_approve = 1");
         return $query->result_array();

      }

      function gethomeprojects(){
        $query = $this->db->query("select * from tbl_projects where project_approve = 1");
         return $query->result_array();

      }

  function gethomeevents(){
        $query = $this->db->query("select * from tbl_posts where post_type = 'event' and post_approve = 1");
         return $query->result_array();

      }

      function gethomevacancy(){
        $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1");
         return $query->result_array();

      }

      function gethomequestion(){
        $query = $this->db->query("select * from tbl_questions where question_approve=1");
         return $query->result_array();

      }


       function getinboxmsg($sessid){
        $query = $this->db->query("SELECT * FROM tbl_users LEFT JOIN tbl_message ON tbl_users.user_id=tbl_message.user_id where tbl_message.pm_send_to = '" .$sessid. "'");
         return $query->result_array();

      }

      function getsentitemcount($sessid){
        $query = $this->db->query("select count(*) as row_count from tbl_message where user_id = '" .$sessid. "'");
         return $query->result()[0]->row_count;

      }

       function getinboxitemcount($sessid){
        $query = $this->db->query("select count(*) as row_count from tbl_message where pm_send_to = '" .$sessid. "'");
         return $query->result()[0]->row_count;

      }

      function getsentmsg($sessid){
        $query = $this->db->query("SELECT * FROM tbl_users left JOIN tbl_message ON tbl_users.user_id=tbl_message.pm_send_to where tbl_message.user_id = '" .$sessid. "'");
         return $query->result_array();

      }

      function getmorecourse($course_id){

        $query = $this->db->query("select * from  tbl_course where substring(md5(course_id),1,6) != '" .$course_id. "'limit 4");
         return $query->result_array();
      }


      function getnewsdetails($news_id){

       //$query = $this->db->query("select * from tbl_posts where post_type='news'  and post_id = '" .$news_id. "'");
       $query = $this->db->query("select tbl_posts.*, COUNT(tbl_postresponse.pparent_id) AS rowcount from tbl_posts LEFT JOIN tbl_postresponse On tbl_posts.post_id = tbl_postresponse.post_id where tbl_posts.post_type='news' and tbl_posts.post_id = '" .$news_id. "' and tbl_postresponse.pparent_id = '0' ");
       
         return $query->result_array();
      }

      function getuserinfo($uid){

        $query = $this->db->query("select tbl_users.username, tbl_users.first_name, tbl_users.last_name, tbl_users.user_email, tbl_users.user_role, tbl_user_meta.school_type, tbl_user_meta.user_school, tbl_user_meta.user_level, tbl_user_meta.user_dept, tbl_user_meta.user_gender, tbl_user_meta.mobile_no, tbl_user_meta.user_avatar, tbl_user_meta.marital_status, tbl_user_meta.user_age, tbl_user_meta.interested_in, tbl_user_meta.about_user, tbl_user_meta.user_interest, tbl_user_meta.user_hobby from tbl_users INNER JOIN tbl_user_meta On tbl_users.user_id = tbl_user_meta.user_id where tbl_users.user_id = '" .$uid. "'");
         return $query->result_array();
      }


      function getuseractivity($uid){

        $query = $this->db->query("select tbl_users.username, tbl_user_meta.user_avatar, tbl_posts.post_id, tbl_posts.user_id, tbl_posts.post_date, post_time, tbl_posts.post_title, tbl_posts.post_type as type, tbl_posts.post_id as id from tbl_users JOIN tbl_posts On tbl_users.user_id = tbl_posts.user_id join tbl_user_meta on tbl_posts.user_id = tbl_user_meta.user_id where tbl_posts.post_approve = 1 and tbl_posts.user_id = '".$uid."'");
         return $query->result_array();
      }



      function getaddabout(){

        $query = $this->db->query("select * from tbl_posts where  post_type='aboutus'");
         return $query->result_array();
      }


function getaboutcount(){
        $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type ='aboutus'");
         return $query->result()[0]->row_count;

      }

function get_all_event_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event'");
         return $query->result()[0]->row_count;

      }


      function get_approved_event_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event' and post_approve = 1");
         return $query->result()[0]->row_count;

      }

function get_all_users_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_users");
         return $query->result()[0]->row_count;

      }

      function get_all_school_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_school_meta");
         return $query->result()[0]->row_count;

      }

      function get_approved_school_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_school_meta where school_approve = 1");
         return $query->result()[0]->row_count;

      }

      function get_all_advertise_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_advertise");
         return $query->result()[0]->row_count;

      }

      function get_approved_advertise_count(){
        $query = $this->db->query("select count(*) as row_count from tbl_advertise where isactive = 1");
         return $query->result()[0]->row_count;

      }


       function get_adevertise_details($add_id){
        $query = $this->db->query("select * from tbl_advertise where advertise_id = '" .$add_id. "'");
         return $query->result_array();

      }


      function get_course_details($course_id){
        $query = $this->db->query("select * from tbl_course where course_id = '" .$course_id. "'");
         return $query->result_array();

      }

       function get_event_details($event_id){
        $query = $this->db->query("select * from tbl_posts where post_type='event'  and post_id = '" .$event_id. "'");
         return $query->result_array();

      }


      function get_gist_details($gist_id){
        $query = $this->db->query("select * from tbl_posts where post_type='gist'  and post_id = '" .$gist_id. "'");
         return $query->result_array();

      }

      function get_news_details($news_id){
        $query = $this->db->query("select * from tbl_posts where post_type='news'  and post_id = '" .$news_id. "'");
         return $query->result_array();

      }

      function get_project_details($topic_id){
        $query = $this->db->query("select * from  tbl_projects where    project_id = '" .$topic_id. "'");
         return $query->result_array();

      }


      function get_question_details($ques_id){
        $query = $this->db->query("select * from tbl_questions where question_id = '" .$ques_id. "'");
         return $query->result_array();

      }


      function get_school_details($sch_id){
        $query = $this->db->query("select tbl_users.username, tbl_users.first_name, tbl_users.last_name, tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_facility,tbl_school_meta.Program_tokenfield,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id where school_id = '" .$sch_id. "'");
         return $query->result_array();

      }

      function get_tender_details($vac_id){

        $query = $this->db->query("select * from tbl_vacancy where  vacancy_id = '" .$vac_id. "'");
         return $query->result_array();
      }


function get_tips_details($tips_id){

        $query = $this->db->query("select * from tbl_posts where  post_type='tips' and post_id = '" .$tips_id. "'");
         return $query->result_array();
      }

      function get_posts_details($post_type){

        $query = $this->db->query("select * from tbl_posts where post_type = '" .$post_type. "' ORDER BY post_date DESC,post_time DESC");
         return $query->result_array();
      }


      function get_policy_details(){

        $query = $this->db->query("select * from tbl_posts where  post_type='privacy'");
         return $query->result_array();
      }


       function get_policy_count(){

        $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type ='privacy'");
         return $query->result()[0]->row_count;
      }


     function get_previous_vacancy(){

        $query = $this->db->query("select tbl_users.user_id, tbl_users.username, tbl_vacancy.vacancy_id, tbl_vacancy.vacancy_name, tbl_vacancy.vacancy_time, tbl_vacancy.vacancy_date from tbl_users join tbl_vacancy on tbl_users.user_id = tbl_vacancy.user_id where tbl_vacancy.vacancy_approve  = 1 ORDER BY tbl_vacancy.vacancy_date DESC,tbl_vacancy.vacancy_time DESC limit 10");


         return $query->result_array();
      }



      function get_all_course_count($course_id, $sessid){
        $query = $this->db->query("select count(*) as row_count from tbl_course_meta where course_id = '" .$course_id. "' and user_id='".$sessid."'");
         return $query->result()[0]->row_count;

      }


      function getsch_details($sch_id){

        $query = $this->db->query("select * from tbl_school_meta where school_id = '" .$sch_id. "'");
       // print_r($query->result_array());
         return $query->result_array();
      }




public function insert_response($data)
      {
        return $this->db->insert('tbl_userresponse', $data);
      }


      public function selectresponse()
      {  
        $query = $this->db->query("select * from tbl_userresponse"); 
        return $query->result_array();
      }

      function get_school($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_school_meta where school_name like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
         return $query->result_array();
    }
    function get_school_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_school_meta where school_name like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }


    function search($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('school_name','school_type1','school_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'school_name';


      $q = $this->db->select('*')
                     ->from('tbl_school_meta')
                     ->join('tbl_users','tbl_users.user_id = tbl_school_meta.user_id')
                     ->where('school_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['school_name'])){
$q->like('school_name',$query_array['school_name']);
$q->where('school_approve = 1');
    }
       if (strlen($query_array['school_type1'])){
$q->where('school_type',$query_array['school_type1'] );
$q->where('school_approve = 1');
    }
       if (strlen($query_array['school_category'])){
$q->where('school_category',$query_array['school_category'] );
$q->where('school_approve = 1');
    }

 



    $ret['rows']= $q->get()->result();

    //count result

    $q = $this->db->select('count(*) as count', FALSE)
                  ->from('tbl_school_meta')
                  -> where('school_approve = 1') ;
                 

    if (strlen($query_array['school_name'])){
$q->like('school_name',$query_array['school_name']);

    }
       if (strlen($query_array['school_type1'])){
$q->where('school_type',$query_array['school_type1']);

    }
       if (strlen($query_array['school_category'])){
$q->where('school_category',$query_array['school_category']);

    }
  

    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;

   }




//Connect Me Result

function search_result($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('username','user_gender','user_age','user_school','user_level','user_interest');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'first_name';


      $q = $this->db->select('*')
                     ->from('tbl_user_meta')
                     ->join('tbl_users','tbl_users.user_id = tbl_user_meta.user_id')
                     //->where('school_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['username'])){

      //echo"In top username";
$q->like('username',$query_array['username']);
    }
       if (strlen($query_array['user_gender'])){
$q->where('user_gender',$query_array['user_gender'] );
    }

    if (strlen($query_array['user_age'])){

      if($query_array['user_age'] == '16-19'){
        $q->where('user_age>=','16');
        $q->where('user_age<=', '19');
      }
      if($query_array['user_age'] == '20-25'){
        $q->where('user_age>=','20' );
        $q->where('user_age<=','25' );
      }
      if($query_array['user_age'] == '26-29'){
        $q->where('user_age>=','26' );
        $q->where('user_age<=','29' );
      }
      if($query_array['user_age'] == '30+'){
        $q->where('user_age>=', '30' );
      }

    }


       if (strlen($query_array['user_school'])){
$q->where('user_school',$query_array['user_school'] );
    }

     if (strlen($query_array['user_level'])){
$q->where('user_level',$query_array['user_level'] );
    }

     if (strlen($query_array['user_interest'])){
$q->where('user_interest',$query_array['user_interest'] );
    }

 



    $ret['rows']= $q->get()->result();

    //count result
    if (strlen($query_array['username'])){

     // echo"In username count";
$q = $this->db->select('count(*) as count', FALSE)
                  ->from('tbl_users');
$q->like('username',$query_array['username']);

  

}else{

      //echo"in else count";
    $q = $this->db->select('count(*) as count', FALSE)
                  ->from('tbl_user_meta');
                 

   
       if (strlen($query_array['user_gender'])){
$q->where('user_gender',$query_array['user_gender']);

    }

     if (strlen($query_array['user_age'])){
if($query_array['user_age'] == '16-19'){
        $q->where('user_age>=','16');
        $q->where('user_age<=', '19');
      }
      if($query_array['user_age'] == '20-25'){
        $q->where('user_age>=','20' );
        $q->where('user_age<=','25' );
      }
      if($query_array['user_age'] == '26-29'){
        $q->where('user_age>=','26' );
        $q->where('user_age<=','29' );
      }
      if($query_array['user_age'] == '30+'){
        $q->where('user_age>=', '30' );
      }

    }


       if (strlen($query_array['user_school'])){
$q->where('user_school',$query_array['user_school']);

    }

    if (strlen($query_array['user_level'])){
$q->where('user_level',$query_array['user_level']);

    }

    if (strlen($query_array['user_interest'])){
$q->where('user_interest',$query_array['user_interest']);

    }
  }

    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;
 

   }




//Related Users


   function related_users($sessid){

    if(isset($sessid)){
        $query = $this->db->query("select * from tbl_user_meta join tbl_users where tbl_users.user_id = tbl_user_meta.user_id and tbl_user_meta.user_id not in('".$sessid."') ORDER BY RAND() limit 5");

    }else{
      
     $query = $this->db->query('select * from tbl_user_meta join tbl_users where tbl_users.user_id = tbl_user_meta.user_id ORDER BY RAND() limit 5');
          
         
    }

    return $query->result_array();
    



   }


// Enquiry Users
   function enquiry_users($data){
              $id =$data['user_id'];
      
       $query = $this->db->query('select * from tbl_user_meta join tbl_users where tbl_users.user_id = tbl_user_meta.user_id and tbl_users.user_id = "'.$id.'"');
          
         return $query->result_array();



   }


//Project Search

      function get_project($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_projects where project_title like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
         return $query->result_array();
    }
    function get_porject_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from tbl_projects where project_title like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }


//Search Course

function search_course($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('course_name','course_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'course_name';


 /*    $q = $this->db->select('*')
                     ->from('tbl_course')
                     ->where('course_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
*/

                   $q = $this->db->select('*, AVG(`course_rating`) As avg_r',FALSE)
                     ->from('tbl_course_meta')
                     ->join('tbl_course','tbl_course_meta.course_id = tbl_course.course_id', 'right')
                     ->where('course_approve = 1')
                     ->group_by('tbl_course_meta.course_id')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order); 


    

    if(strlen($query_array['course_name'])){
$q->like('course_name',$query_array['course_name']);
$q->where('course_approve = 1');
    }
       if (strlen($query_array['course_category'])){
$q->where('course_category',$query_array['course_category'] );
$q->where('course_approve = 1');
    }

    $ret['rows']= $q->get()->result();

    //count result

   $q = $this->db->select('count(*) as count', FALSE)
                       ->from('tbl_course')
                   -> where('course_approve = 1') ;
                 

    if (strlen($query_array['course_name'])){
 $q->like('course_name',$query_array['course_name']);

     }
      if (strlen($query_array['course_category'])){
 $q->where('course_category',$query_array['course_category']);
     }

    
    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;

   }






    function search_project($query_array, $limit,$offset, $sort_by,$sort_order){

      $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('project_title','project_course','project_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'project_title';


      $q = $this->db->select('*')
                     ->from('tbl_projects')
                     ->where('project_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['project_title'])){
$q->like('project_title',$query_array['project_title']);
$q->where('project_approve = 1');
    }
       if (strlen($query_array['project_course'])){
$q->like('project_course',$query_array['project_course'] );
$q->where('project_approve = 1');
    }


    if (strlen($query_array['project_category'])){
$q->where('project_category',$query_array['project_category'] );
$q->where('project_approve = 1');
    }
 



    $ret['rows']= $q->get()->result();

    //count result

   $q = $this->db->select('count(*) as count', FALSE)
                       ->from('tbl_projects')
                   -> where('project_approve = 1') ;
                 

    if (strlen($query_array['project_title'])){
 $q->like('project_title',$query_array['project_title']);

     }
      if (strlen($query_array['project_course'])){
 $q->where('project_course',$query_array['project_course']);
     }

     if (strlen($query_array['project_category'])){
 $q->where('project_category',$query_array['project_category']);
     }
       
  

    $tem = $q->get()->result();
    $ret['num_rows'] = $tem[0]->count;
   return $ret;

   }



       //News Search Result Query

   function search_news($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'post_date';


      /*$q = $this->db->select('*')
                     ->from('tbl_posts')
                     ->where('post_type="news" and post_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);*/

                    //$q=$this->db->query("select tbl_posts.*,tbl_postresponse.pparent_id from tbl_posts LEFT JOIN tbl_postresponse ON tbl_postresponse.post_id = tbl_posts.post_id where post_type='news' and post_approve = 1 GROUP BY tbl_posts.post_id");
    /*$q = $this->db->select('*,tbl_postresponse.pparent_id')
                     ->from('tbl_posts')

                    $q=$this->db->query("select tbl_posts.*,tbl_postresponse.pparent_id from tbl_posts LEFT JOIN tbl_postresponse ON tbl_postresponse.post_id = tbl_posts.post_id where post_type='news' and post_approve = 1 GROUP BY tbl_posts.post_id");*/
     $q = $this->db->select('tbl_posts.*,tbl_postresponse.pparent_id')
                     ->from('tbl_posts')

                     ->join('tbl_postresponse','tbl_posts.post_id = tbl_postresponse.post_id', 'left')
                     ->where('post_type="news" and post_approve = 1')
                     ->limit($limit , $offset)
                    ->group_by('tbl_posts.post_id')
                    ->order_by($sort_by , $sort_order);




    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }
//$ret['rows']=$q->result_array();
   $ret['rows']= $q->get()->result();

//$ret['rows']=$q->result_array();
   //$ret['rows']= $q->get()->result();
   // print_r($ret['rows']);

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_posts')
                   -> where('post_type="news" and post_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }


      //Event Search Result Query

   function search_event($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'post_date';


      $q = $this->db->select('*')
                     ->from('tbl_posts')
                     ->where('post_type="event" and post_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
   

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }

 



    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_posts')
                   -> where('post_type="event" and post_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('post_date >=', $query_array['start_date']);
$q->where('post_date <=', $query_array['end_date']);
    }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }





     //Vacancy Search Result Query

   function search_vacancy($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'vacancy_date';


      $q = $this->db->select('*')
                     ->from('tbl_vacancy')
                     ->where('vacancy_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);
    

    if(strlen($query_array['start_date'])){

$q->where('vacancy_date >=', $query_array['start_date']);
$q->where('vacancy_date <=', $query_array['end_date']);
    }


    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_vacancy')
                   -> where('vacancy_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('vacancy_date >=', $query_array['start_date']);
$q->where('vacancy_date <=', $query_array['end_date']);
    }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }




   //Event Search Result Query

   function search_question($query_array, $limit,$offset, $sort_by,$sort_order){

   $sort_order = ($sort_order == 'desc') ? 'desc': 'asc';
      $sort_columns =  array('start_date','end_date','question_category');
      $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'question_date';


      $q = $this->db->select('*')
                     ->from('tbl_questions')
                     ->where('question_approve = 1')
                     ->limit($limit , $offset)
                    ->order_by($sort_by , $sort_order);

   
$sdate = $query_array['start_date'];
if(!$sdate == ""){
    if(strlen($query_array['start_date'])){

$q->where('question_date >=', $query_array['start_date']);
$q->where('question_date <=', $query_array['end_date']);
    }
  }

     if (strlen($query_array['question_category'])){
$q->where('question_category',$query_array['question_category'] );
$q->where('question_approve = 1');
    }


 



    $ret['rows']= $q->get()->result();

    //count result

     $q = $this->db->select('count(*) as count', FALSE)
                   ->from('tbl_questions')
                   -> where('question_approve = 1') ;
                 

    if(strlen($query_array['start_date'])){

$q->where('question_date >=', $query_array['start_date']);
$q->where('question_date <=', $query_array['end_date']);
    }

    if (strlen($query_array['question_category'])){
 $q->where('question_category',$query_array['question_category']);
     }
  

     $tem = $q->get()->result();
      $ret['num_rows'] = $tem[0]->count;
    return $ret;

   }






   
    function get_userby_email($email)
    {
        $sql = "select * from tbl_users where user_email='".$email."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    } 

     function setverificationkeyby_email($email, $key)
    {
        $data=array();
        $data['verificationcode']=$key;
        $this->db->where('user_email', $email);
        return $this->db->update('tbl_users', $data);
    } 


     function resetpassbykey($email, $password)
    {
        $data=array();
        $data['password']=$password;
        $data['verificationcode']='';
        $this->db->where('user_email', $email);
        return $this->db->update('tbl_users', $data);
    } 


    



 public function insertreview($data)
      {
        $sql = "select * from tbl_course_meta where course_id='".$data['course_id']."' and user_id='".$data['user_id']."'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          $uparr = array('course_id' => $data['course_id'], 'user_id' =>$data['user_id']);
          $this->db->where($uparr);
          return $this->db->update('tbl_course_meta', $data);
        }else{
          return $this->db->insert('tbl_course_meta', $data);
        }
        
      }

//FOR COMMENT
    // get all news 
    function get_all() 
    { 
    $query = $this->db->get('tbl_questions'); 
   return $query->result_array();
     } 

     function get_all_sch() 
    { 
    $query = $this->db->get('tbl_school_meta'); 
    return $query->result_array();
     } 
//get all post gist,news,event
      function get_all_news() 
    { 
    $query = $this->db->get('tbl_posts'); 
    return $query->result_array();
     } 
     // get one news article by its id 
     function get_one($question_id) 
     { 
      $query = $this->db->query("SELECT * FROM tbl_questions where question_id = '".$question_id."'");
    // $this->db->get_where('tbl_questions', array('question_id' => $question_id)); 
    // $query = $this->db->get('tbl_questions'); 
    // print_r($query);
     return $query->row(); 
   } 
   function get_one_sch($school_id) 
     { 
      $query = $this->db->query("SELECT * FROM tbl_school_meta where school_id = '".$school_id."'");
   
     return $query->row(); 
   } 
   function get_one_news($post_id) 
     { 
      $query = $this->db->query("SELECT * FROM tbl_posts where post_id = '".$post_id."' and post_type = 'news'");

     return $query->row(); 

   } 
   function get_one_event($post_id) 
     { 
      $query = $this->db->query("SELECT * FROM tbl_posts where post_id = '".$post_id."' and post_type = 'event'");
    
     return $query->row(); 
   } 
   function get_one_gist($post_id) 
     { 
      $query = $this->db->query("SELECT * FROM tbl_posts where post_id = '".$post_id."' and post_type = 'gist'");
  
     return $query->row(); 
   }
  // get full tree comments based on news id 
  function tree_all($question_id)
  { 
  $result = $this->db->query("SELECT * FROM tbl_userresponse where question_id = $question_id")->result_array(); 

 if($result)
 {
  foreach ($result as $row) 
  { 
  $data[] = $row; 
  } 
  return $data;
}
  } 
  function tree_all_sch($school_id)
  { 
  $result = $this->db->query("SELECT * FROM tbl_schoolresponse where school_id = $school_id")->result_array(); 
  if($result)
 {
  foreach ($result as $row) 
  { 
  $data[] = $row; 
  } 
  return $data;
}

  } 
   function tree_all_news($post_id)
  { 
  $result = $this->db->query("SELECT * FROM tbl_postresponse where post_id = $post_id and presponse_type = 'news'")->result_array(); 
  if($result)
 {
  foreach ($result as $row) 
  { 
  $data[] = $row; 
  } 
  return $data;
}

  } 
   function tree_all_event($post_id)
  { 
  $result = $this->db->query("SELECT * FROM tbl_postresponse where post_id = $post_id and presponse_type = 'event'")->result_array(); 
  if($result)
 {
  foreach ($result as $row) 
  { 
  $data[] = $row; 
  } 
  return $data;
}

  }
  function tree_all_gist($post_id)
  { 
  $result = $this->db->query("SELECT * FROM tbl_postresponse where post_id = $post_id and presponse_type = 'gist'")->result_array(); 
  if($result)
 {
  foreach ($result as $row) 
  { 
  $data[] = $row; 
  } 
  return $data;
}

  }
  // to get child comments by entry id and parent id and news id 
  function tree_by_parent($question_id,$in_parent) 
  { 
    $result = $this->db->query("SELECT tbl_userresponse.response_id , tbl_userresponse.response_title , tbl_userresponse.response_desc ,tbl_userresponse.response_like , tbl_userresponse.response_date , tbl_userresponse.response_time ,tbl_userresponse.parent_id , tbl_userresponse.user_id , tbl_userresponse.question_id , tbl_user_meta.user_avatar  FROM tbl_userresponse LEFT JOIN tbl_user_meta ON tbl_user_meta.user_id = tbl_userresponse.user_id  where tbl_userresponse.parent_id = $in_parent AND tbl_userresponse.question_id = $question_id")->result_array(); 
foreach ($result as $row) {
    $data[] = $row; 
    } 
    return $data; 
  }
  function tree_by_parent_sch($school_id,$in_parent) 
  { 
    $result = $this->db->query("SELECT tbl_schoolresponse.sresponse_id , tbl_schoolresponse.sresponse_title , tbl_schoolresponse.sresponse_desc ,tbl_schoolresponse.sresponse_like , tbl_schoolresponse.sresponse_date , tbl_schoolresponse.sresponse_time ,tbl_schoolresponse.sparent_id , tbl_schoolresponse.user_id , tbl_schoolresponse.school_id , tbl_user_meta.user_avatar  FROM tbl_schoolresponse LEFT JOIN tbl_user_meta ON tbl_user_meta.user_id = tbl_schoolresponse.user_id  where tbl_schoolresponse.sparent_id = $in_parent AND tbl_schoolresponse.school_id = $school_id")->result_array(); 
foreach ($result as $row) {
    $data[] = $row; 
    } 
    return $data; 
  }
  function tree_by_parent_news($post_id,$in_parent) 
  { 
    $result = $this->db->query("SELECT tbl_postresponse.presponse_id , tbl_postresponse.presponse_title , tbl_postresponse.presponse_desc ,tbl_postresponse.presponse_like , tbl_postresponse.presponse_date , tbl_postresponse.presponse_time ,tbl_postresponse.pparent_id , tbl_postresponse.user_id , tbl_postresponse.post_id , tbl_user_meta.user_avatar  FROM tbl_postresponse LEFT JOIN tbl_user_meta ON tbl_user_meta.user_id = tbl_postresponse.user_id  where tbl_postresponse.pparent_id = $in_parent AND tbl_postresponse.post_id = $post_id AND tbl_postresponse.presponse_type = 'news'")->result_array(); 
 foreach ($result as $row) {
    $data[] = $row; 
    } 
    return $data; 
  }
 function tree_by_parent_event($post_id,$in_parent) 
  { 
    $result = $this->db->query("SELECT tbl_postresponse.presponse_id , tbl_postresponse.presponse_title , tbl_postresponse.presponse_desc ,tbl_postresponse.presponse_like , tbl_postresponse.presponse_date , tbl_postresponse.presponse_time ,tbl_postresponse.pparent_id , tbl_postresponse.user_id , tbl_postresponse.post_id , tbl_user_meta.user_avatar  FROM tbl_postresponse LEFT JOIN tbl_user_meta ON tbl_user_meta.user_id = tbl_postresponse.user_id  where tbl_postresponse.pparent_id = $in_parent AND tbl_postresponse.post_id = $post_id AND tbl_postresponse.presponse_type = 'event'")->result_array(); 
   foreach ($result as $row) {
    $data[] = $row; 
    } 
    return $data; 
  }
  function tree_by_parent_gist($post_id,$in_parent) 
  { 
    $result = $this->db->query("SELECT tbl_postresponse.presponse_id , tbl_postresponse.presponse_title , tbl_postresponse.presponse_desc ,tbl_postresponse.presponse_like , tbl_postresponse.presponse_date , tbl_postresponse.presponse_time ,tbl_postresponse.pparent_id , tbl_postresponse.user_id , tbl_postresponse.post_id , tbl_user_meta.user_avatar  FROM tbl_postresponse LEFT JOIN tbl_user_meta ON tbl_user_meta.user_id = tbl_postresponse.user_id  where tbl_postresponse.pparent_id = $in_parent AND tbl_postresponse.post_id = $post_id AND tbl_postresponse.presponse_type = 'gist'")->result_array(); 
 foreach ($result as $row) {
    $data[] = $row; 
    } 
    return $data; 
  }

  function add_new_comment()
    {
      $date = date('Y-m-d');
    date_default_timezone_set('Asia/Kolkata');
    $time = date('h:i:s A', time());
    $uid= $this->session->userdata('suserid');
        
        $this->db->set("question_id", $this->input->post('question_id'));
        $this->db->set("parent_id", $this->input->post('parent_id'));
        $this->db->set("response_title", $this->input->post('comment_name'));
        $this->db->set("response_desc", $this->input->post('comment_body'));
        $this->db->set("response_type", $this->input->post('response_type'));
        $this->db->set("response_like", $this->input->post('response_like'));
        $this->db->set("response_date",$date);
        $this->db->set("response_time",$time);
        $this->db->set("user_id", $uid);
        $this->db->insert('tbl_userresponse');
        return $this->input->post('parent_id');
    }

     function add_new_sch_comment()
    {
      $date = date('Y-m-d');
    date_default_timezone_set('Asia/Kolkata');
    $time = date('h:i:s A', time());
    $uid= $this->session->userdata('suserid');
        
        $this->db->set("school_id", $this->input->post('school_id'));
        $this->db->set("sparent_id", $this->input->post('sparent_id'));
        $this->db->set("sresponse_title", $this->input->post('comment_name'));
        $this->db->set("sresponse_desc", $this->input->post('comment_body'));
        $this->db->set("sresponse_like", $this->input->post('sresponse_like'));
        $this->db->set("sresponse_date",$date);
        $this->db->set("sresponse_time",$time);
        $this->db->set("user_id", $uid);
        $this->db->insert('tbl_schoolresponse');
        return $this->input->post('sparent_id');
    }
      function add_new_news_comment()
    {
      $date = date('Y-m-d');
    date_default_timezone_set('Asia/Kolkata');
    $time = date('h:i:s A', time());
    $uid= $this->session->userdata('suserid');
        
        $this->db->set("post_id", $this->input->post('post_id'));
        $this->db->set("pparent_id", $this->input->post('pparent_id'));
        $this->db->set("presponse_title", $this->input->post('comment_name'));
        $this->db->set("presponse_desc", $this->input->post('comment_body'));
        $this->db->set("presponse_type", $this->input->post('presponse_type'));
        $this->db->set("presponse_like", $this->input->post('presponse_like'));
        $this->db->set("presponse_date",$date);
        $this->db->set("presponse_time",$time);
        $this->db->set("user_id", $uid);
        $this->db->insert('tbl_postresponse');
        return $this->input->post('pparent_id');
    }

function add_new_event_comment()
    {
      $date = date('Y-m-d');
    date_default_timezone_set('Asia/Kolkata');
    $time = date('h:i:s A', time());
    $uid= $this->session->userdata('suserid');
        
        $this->db->set("post_id", $this->input->post('post_id'));
        $this->db->set("pparent_id", $this->input->post('pparent_id'));
        $this->db->set("presponse_title", $this->input->post('comment_name'));
        $this->db->set("presponse_desc", $this->input->post('comment_body'));
        $this->db->set("presponse_type", $this->input->post('presponse_type'));
        $this->db->set("presponse_like", $this->input->post('presponse_like'));
        $this->db->set("presponse_date",$date);
        $this->db->set("presponse_time",$time);
        $this->db->set("user_id", $uid);
        $this->db->insert('tbl_postresponse');
        return $this->input->post('pparent_id');
    }

    function add_new_gist_comment()
    {
      $date = date('Y-m-d');
    date_default_timezone_set('Asia/Kolkata');
    $time = date('h:i:s A', time());
    $uid= $this->session->userdata('suserid');
        
        $this->db->set("post_id", $this->input->post('post_id'));
        $this->db->set("pparent_id", $this->input->post('pparent_id'));
        $this->db->set("presponse_title", $this->input->post('comment_name'));
        $this->db->set("presponse_desc", $this->input->post('comment_body'));
        $this->db->set("presponse_type", $this->input->post('presponse_type'));
        $this->db->set("presponse_like", $this->input->post('presponse_like'));
        $this->db->set("presponse_date",$date);
        $this->db->set("presponse_time",$time);
        $this->db->set("user_id", $uid);
        $this->db->insert('tbl_postresponse');
        return $this->input->post('pparent_id');
    }

//serverside validation for username ,email
    function validateusername($username)
    {
      $result = $this->db->query("SELECT * FROM tbl_users where username = '$username'");

      if ( $result->num_rows() > 0 )
      {
          return false;

      }else{

        return true;

      }
  
    }

    function validateemail($email)
    {
      $result = $this->db->query("SELECT * FROM tbl_users where   user_email = '$email'");

      if ( $result->num_rows() > 0 )
      {
          return false;

      }else{

        return true;

      }
  
    }
    


    function validate_school_username($username)
    {
      $result = $this->db->query("SELECT * FROM tbl_users where username = '$username'");

      if ( $result->num_rows() > 0 )
      {
          return false;

      }else{

        return true;

      }
  
    }

function validate_school_email($email)
{
  $result=$this->db->query("SELECT * FROM tbl_users where   user_email = '$email'");
  if( $result->num_rows() > 0)
  {
    return false;
  }

  else{
    return true;
  }
}









   }  
?>  