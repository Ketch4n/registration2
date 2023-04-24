<?php 
namespace App\Models;  
use CodeIgniter\Model;

use Codeigniter\Database\ConnectionInterface;


  
class DataModel extends Model{
    protected $db;

    public function __construct(ConnectionInterface &$db){
        parent::__construct();
        $this->db =& $db;

    }

    protected $table = 'establishment';
    protected $allowedFields = ['id','code', 'es_name','contact_number','address','email_address','auth_person','position'];
    
    public function addData($data)
    {  
        $this->insert($data);
    }
     public function getData()
    {
        return $this->findAll();
    }
    public function deleteData($id)
{
    $builder = $this->db->table("establishment");
    $builder->where('id', $id);
    $builder->delete();
}
 public function updateData($data,$where)
    {  
        $builder = $this->db->table("establishment");
        $builder->where($where);
        return $builder->update($data);
    }

    
}