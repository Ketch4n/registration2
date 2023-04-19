<?php 
namespace App\Models;  
use CodeIgniter\Model;

use Codeigniter\Database\ConnectionInterface;


  
class UserModel extends Model{
    protected $db;

    public function __construct(ConnectionInterface &$db){
        parent::__construct();
        $this->db =& $db;
                    
    }

    public function check_username($table,$where){

        $builder = $this->db->table($table);
        $builder->where($where);
        $query = $builder->countAllResults();
        return $query; 

    }

    public function get_user_data($table,$where){

        $builder = $this->db->table($table);
        $builder->where($where);
        $query = $builder->get()->getResult();
        return $query;

    }
    
}