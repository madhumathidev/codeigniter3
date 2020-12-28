<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminUsersModel extends Model
    {
        protected $table      = 'adminuser';
        protected $primaryKey = 'id';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
    
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['id','username','password'];
    
        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';
    
        protected $skipValidation     = false;
    
        protected $validationRules    = [
            'username'     => 'required|alpha_numeric_space|min_length[3]',
            'password'  => 'required|alpha_numeric_space|min_length[10]',
            // 'status'     => 'required',
            // 'is_customer_role' => 'required'
        ];
    
        protected $validationMessages =[
            'username' => ' User Name is required ',
            'password' => ' Password is required ',
            // 'status' => ' Role status is required ',
            // 'is_customer_role' => ' Role Name is required '
        ];
    
    
        // public function get_role_details($role_id){
        //     $arr_role = $this->find($role_id);
        //     return $arr_role;
        // }
        
        // public function get_role_editdetails($role_id){
        // if($role_id) {
        //     $sql = "SELECT * FROM system_roles WHERE id = ?";
        //     $this->query($sql,$role_id);
        //     $query = $this->query($sql,$role_id);
        //     return $query->row_array();
        // }
        // }
    
        public function save_role(){
            $data = $this->request->getPost();
            $this->insert($data);
        }
       
    //  public function delete_data($role_id){
    //   //$arr_role = $table->delete($role_id);
    //   echo "test id".$role_id;
    //   exit();
    //  $data = $db->query('DELETE FROM system_roles WHERE id="'.$role_id.'"');
    //  return $data;
    //  }
    }
    ?>